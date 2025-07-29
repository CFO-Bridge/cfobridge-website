<?php

require_once APPPATH . 'libraries/googleoauth/autoload.php'; // Include the Google API PHP Client library

function send_gmail_email() {
    // Create a new Google Client
    $client = new Google_Client();

    // Set your OAuth 2.0 Client ID and Client Secret
    $client->setClientId(oauth_clientid);
    $client->setClientSecret(oauth_secret);

    // Set the OAuth 2.0 Redirect URI
    $client->setRedirectUri('https://cfobridge.com/googleoauth');

    // Set the Gmail API scope
    $client->addScope(Google_Service_Gmail::GMAIL_SEND);

    // Create a new Gmail service
    $service = new Google_Service_Gmail($client);

    // Check if the access token is already available in the database
    $CI =& get_instance();
    $CI->load->database();
    $token = $CI->db->get('access_tokens')->row();

    if ($token) {
        // Set the stored access token in the client
        $client->setAccessToken($token->token);

        // Check if the access token has expired
        if ($client->isAccessTokenExpired()) {
            // Refresh the access token
            $newToken = $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());

            // Update the access token in the database
            $CI->db->where('id', $token->id)->update('access_tokens', [
                'token' => json_encode($newToken),
                'expires_at' => $newToken['expires_at']
            ]);
        }
    } else {
        // Redirect the user to the authorization URL
        $authUrl = $client->createAuthUrl();
        redirect($authUrl);
    }

    // If the authorization code is available, exchange it for an access token
    if (isset($_GET['code'])) {
        $accessToken = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $client->setAccessToken($accessToken);

        // Store the access token in the database
        $CI->db->insert('access_tokens', [
            'token' => json_encode($accessToken),
            'expires_at' => $accessToken['expires_at']
        ]);
    }

    // Create the email message
    $message = new Google_Service_Gmail_Message();
    $email = 'aamir.s.khan.as@gmail.com';
    $content = "From: cfobridge12@gmail.com\r\n";
    $content .= "To: $email\r\n";
    $content .= "Subject: Hello from Gmail API\r\n\r\n";
    $content .= "This is the content of the email.";
    $rawMessage = base64url_encode($content);
    $message->setRaw($rawMessage);

    // Send the email
    $service->users_messages->send('me', $message);

   return true;
}

// Helper function to encode the message content
function base64url_encode($data) {
    $data = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($data));
    return rtrim($data, '-_');
}
