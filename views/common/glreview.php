<?php
// JSON content
$jsonData = '[
    {"name": "5 - Curves", "description": "We have collaborated with the CFO Bridge team on PAN India projects. Their commendable leadership skills and unparalleled learning opportunities have greatly benefited us. We look forward for a long term mutual growth.", "rating": 5},
    {"name": "Akshay Jagatia", "description": "I had an enriching experience working at CFO Bridge. It helped me develop my skills in various finance domains. Thanks to the Partners who are highly approachable, provided continuous support and the efforts were recognised well. And yes, friendly team and good work-life balance goes without saying. So overall its an amazing place to work!!", "rating": 5},
    {"name": "Akhilesh Bhargava", "description": "CFO bridge team has played a very important role in helping us turn the company around and improve profitability. They have been able to identify lapses in our system which then helped us get accurate information and their monthly MIS helps me understand how the business is moving segment wise, we are able to see the effect of our strategy and decisions in less than a month. They have been great business partners to us.", "rating": 5}
]';

// Decode JSON data into PHP array
$reviews = json_decode($jsonData, true);

// Check if decoding was successful
if ($reviews === null) {
    die("Error decoding JSON");
}

// Select a random review
$randomReview = $reviews[array_rand($reviews)];

// Extract review data
$name = $randomReview['name'];
$description = $randomReview['description'];
$rating = $randomReview['rating']; ?>


<div class="tes-swiper mt-30 swiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="tes-card">
                <div class="det">
                    <img src="<?= base_url() ?>assets/images/quote-icon.svg" alt="">
                    <p class="para">
                        <?= $description ?>
                    </p>
                </div>
                <div class="btm">
                    <div class="prof">
                        <img src="<?= base_url() ?>uploads/images/user.png" width="50px" alt="<?= $name ?>">
                    </div>
                    <div>
                        <h3><?= $name ?></h3>
                        <?php for ($i = 0; $i < $rating; $i++) { ?>
                            <img src="<?= base_url() ?>assets/images/one-star.png" alt="" width="20">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
