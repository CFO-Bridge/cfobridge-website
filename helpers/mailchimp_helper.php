<?php

require_once APPPATH . 'libraries/mailchimp/autoload.php';


function createmailchimpcontact($email,$name)
{
    $mailchimp = new \MailchimpMarketing\ApiClient();

$mailchimp->setConfig([
    'apiKey' => '9f1d088b1e891bc761373e4f05d8b17b-us6',
	'server' => 'us6'
]);

$list_id = "0dd4b769d1";

try {
    $response = $mailchimp->lists->addListMember($list_id, [
        "email_address" => $email,
        "status" => "subscribed",
        "merge_fields" => [
          "FNAME" => $name
        ]
    ]);
    triggermailchimp($email);
    return true;
} catch (Exception $e) {
  triggermailchimp($email);
    return false;
}

}
function triggermailchimp($email)
{
  
    $mailchimp = new \MailchimpMarketing\ApiClient();

$mailchimp->setConfig([
    'apiKey' => '9f1d088b1e891bc761373e4f05d8b17b-us6',
	'server' => 'us6'
]);

try {
  $response = $mailchimp->customerJourneys->trigger(7368, 49968, [
    "email_address" => $email,
]);
   return true;
} catch (Exception $e) {
    return true;
}

}


function createlist()
{
    $mailchimp = new \MailchimpMarketing\ApiClient();

$mailchimp->setConfig([
    'apiKey' => '9f1d088b1e891bc761373e4f05d8b17b-us6',
	'server' => 'us6'
]);

try {
  $response = $mailchimp->lists->createList([
    "name" => "CFO Bridge Contact Form",
    "permission_reminder" => "permission_reminder",
    "email_type_option" => false,
    "contact" => [
      "company" => "CFO Bridge",
      "address1" => "AWFIS, 10th Floor, R-city Mall, LBS Marg, Ghatkopar West",
      "city" => "Mumbai",
      "state" => "Maharashtra",
      "zip" => "400086",
      "country" => "IN",
    ],
    "campaign_defaults" => [
      "from_name" => "CFO Bridge",
      "from_email" => "gettingtogether@example.com",
      "subject" => "CFO Bridge",
      "language" => "EN_US",
    ],

    
  ]);
  print_r($response);
} catch (MailchimpMarketing\ApiException $e) {
  echo $e->getMessage();

}
}