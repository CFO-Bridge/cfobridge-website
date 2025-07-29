
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&amp;display=swap" rel="stylesheet">
<link
  href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Outfit:wght@100..900&amp;display=swap"
  rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<style>
  .service-details {
    position: relative
  }

  .service-sidebar {
    position: relative;
    display: block
  }

  .service-sidebar .category-widget {
    position: relative;
    display: block;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 20px 50px 0 rgba(0, 0, 0, .05)
  }

  .service-sidebar .category-widget .category-list li {
    position: relative;
    display: block
  }

  .service-sidebar .category-widget .category-list li a {
    position: relative;
    display: block;
    font-size: 19px;
    line-height: 30px;
    font-family: sequelbook, sans-serif;
    font-weight: 500;
    color: #014293;
    background: #fff;
    padding: 16px 30px;
    border-bottom: 1px solid rgba(229, 229, 229, 1)
  }

  .service-sidebar .category-widget .category-list li:last-child a {
    border-bottom: none
  }

  .service-sidebar .category-widget .category-list li a i {
    position: relative;
    display: inline-block;
    float: right;
    font-size: 12px;
    font-weight: 400;
    top: 10px;
    opacity: 0;
    transition: all .5s ease
  }

  .service-sidebar .category-widget .category-list li a:hover {
    background-color: #014293;
    color: #fff;
  }

  .service-sidebar .download-widget {
    position: relative;
    display: block;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 20px 50px 0 rgba(0, 0, 0, .05);
    text-align: center;
    padding: 40px
  }

  .service-sidebar .download-widget .shape {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center
  }

  .service-sidebar .download-widget .image-box {
    position: relative;
    display: block;
    margin-bottom: 21px
  }

  .service-sidebar .download-widget h4 {
    position: relative;
    display: block;
    font-size: 20px;
    line-height: 30px;
    margin-bottom: 25px
  }

  .service-details-content {
    position: relative;
    display: block
  }

  .service-details-content p {
    font-size: 18px;
    line-height: 30px
  }

  .service-details-content .image-box {
    position: relative;
    display: block;
    border-radius: 10px
  }

  .service-details-content .image-box img {
    width: 100%;
    border-radius: 10px
  }

  .service-details-content .text-box p {
    word-wrap: break-word;
    word-break: break-word;
    overflow-wrap: break-word
  }

  .service-details-content .text-box h2 {
    position: relative;
    display: block;
    font-size: 36px;
    line-height: 44px;
    margin-bottom: 20px
  }

  .service-details-content .tabs-box {
    position: relative;
    padding-left: 0
  }

  .service-details-content .tabs-box .tab-btns {
    left: 0;
    top: 0;
    height: 100%;
    position: relative;
    transform: rotate(0);
    writing-mode: inherit;
    margin-bottom: 30px
  }

  .service-details-content .tabs-box .tab-btns li {
    position: relative;
    display: block;
    font-size: 16px;
    line-height: 20px;
    font-family: sequelbook, sans-serif;
    font-weight: 600;
    color: #014293;
    border: 1px solid #e5e5e5;
    border-radius: 10px;
    cursor: pointer;
    transition: all .5s ease;
    padding: 20px 30px 22px 30px;
    margin-left: 0;
    margin-bottom: 15px
  }

  .service-details-content .tabs-box .tab-btns li:first-child {
    margin-left: 0
  }

  .service-details-content .tabs-box .tab-btns li:hover {
    color: #fff;
    background: #014293
  }

  .service-details-content .tabs-box .tab-btns i {
    color: #014293
  }

  .service-details-content .tabs-box .tab-btns li:hover i {
    color: #fff
  }

  .service-details-content .tabs-box .tab-btns li i {
    position: relative;
    display: inline-block;
    font-size: 26px;
    margin-bottom: 0;
    margin-right: 15px;
    top: 3px
  }

  .service-details-content .tabs-box .inner-box {
    position: relative;
    display: block;
    border-radius: 10px;
    overflow: hidden
  }

  .service-details-content .tabs-box .inner-box .content-box {
    position: relative;
    left: 0;
    bottom: 0;
    width: 100%;
    background: #f4f8ff;
    padding: 25px 30px 34px 30px
  }

  .service-details-content .tabs-box .inner-box .content-box h6 {
    display: block;
    font-size: 16px;
    line-height: 20px;
    margin-bottom: 9px
  }

  .service-details-content .tabs-box .inner-box .content-box p {
    font-size: 14px;
    line-height: 22px
  }

  @media only screen and (max-width:991px) {
    .service-details .row {
      display: flex;
      flex-direction: column-reverse
    }

    .service-sidebar {
      margin-right: 0;
      margin-bottom: 40px
    }
  }

  @media only screen and (max-width:767px) {
    .service-details-content .tabs-box {
      padding-left: 0
    }

    .service-details-content .tabs-box .tab-btns {
      position: relative;
      transform: rotate(0);
      writing-mode: inherit;
      margin-bottom: 30px
    }

    .service-details-content .tabs-box .tab-btns li {
      padding: 20px 30px 22px 30px;
      margin-left: 0;
      margin-bottom: 15px
    }

    .service-details-content .tabs-box .tab-btns li i {
      margin-bottom: 0;
      margin-right: 15px;
      top: 3px
    }

    .service-details {
      padding: 70px 0
    }
  }

  @media only screen and (max-width:499px) {
    .service-details-content .tabs-box .inner-box .content-box {
      position: relative;
      border-radius: 10px;
      margin-top: 30px
    }
    
     .icon-list {
    padding: 1rem !important; 
  }
  
.blog-inner-det-area span:has(img) {
  width: 100% !important;
  height: auto !important;
  padding-left: 0.5rem !important;
}

.blog-inner-det-area span img {
  width: 100% !important;
  height: auto !important;
}

  }


  .service-details-content .icon-list {
    position: relative;
    top: 0;
    right: 0;
    display: flex;
    gap: 15px;
  }

  @media screen and (max-width:600px) {
    .service-details-content .icon-list {}
  }

  .service-details-content .icon-list i {
    font-size: 14px;
    color: #333;
    cursor: pointer;
    transition: transform .2s ease, color .2s ease
  }

  .service-details-content .icon-list i:hover {
    transform: scale(1.1);
    color: #0c3a6b
  }

  .title-fnt {
    font-weight: 600;
    color: #014293;
    font-family: sequelbook, sans-serif;
    font-size: 48px
  }

  .tts-container {
    display: flex;
    gap: 10px;
    align-items: center
  }

  .tts-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    outline: 0;
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: background-color .3s, transform .2s
  }

  .tts-button i {
    margin-right: 8px
  }

  .tts-button:hover {
    background-color: #0056b3
  }

  .tts-button:active {
    transform: scale(.95)
  }

  .tts-button:disabled {
    background-color: #ccc;
    cursor: not-allowed
  }

  .content-wrapper {
    max-width: 100%;
    overflow: hidden;
  }

  .content-wrapper img {
    max-width: 80%;
    height: auto;
    display: block;
    margin: 10px 0;

  }

  @media screen and (max-width: 1024px) {
    .content-wrapper img {
      max-width: 70% !important;
    }

    .content-wrapper span:has(> img) { 
        height: 150px  !important;
    }
  }

  @media screen and (max-width: 768px) {
    .content-wrapper img {
      max-width: 45% !important;
    }
  }

  .icon-list img {
    border: 2px solid #ccc;
    object-fit: cover;
  }

  .icon-list a {
    color: #000;
  }
  
  @media screen and (max-width: 991px) {
  .service-details .row {
    display: flex;
    flex-direction: column;
  }

  .content-side {
    order: 1; /* Main content first */
  }

  .tabs-box {
    order: 2; /* Editor's note second */
  }

  .sidebar-side {
    order: 3; /* Sidebar last */
  }
}
</style>

<header class="inner-banner sec" style="position: relative; overflow: hidden;">
  <div style="
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: url(<?= base_url('uploads/images/') . $doc['image'] ?>) center/cover no-repeat;
        filter: blur(3px);
        opacity: 0.5;
        z-index: 0;">
  </div>
  <div class="container" style="position: relative; z-index: 1;">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-8 col-12">
        <div class="sec-head center white">
          <h1><?= $doc['short_description'] ?></h1>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="icon-list d-flex flex-wrap align-items-center justify-content-between w-100 px-5">
            <!-- Author Section (Left) -->
           <div class="d-flex align-items-center mt-4 mb-4">
    <?php if ($doc['teamid'] == 30): ?>
        <img src="<?= base_url() ?>assets/images/subbu11zon1.png.jpg" alt="Author" class="rounded-circle" width="50" height="50">
        <a href="<?= base_url('/team/subramanian-g') ?>" class="ms-2 text-decoration-none">Subramanian Gopalakrishnan, CFO Partner</a>
    <?php else: ?>
        <img src="<?= base_url() ?>assets/images/srini-short-image.jpg" alt="Author" class="rounded-circle" width="50" height="50">
        <a href="<?= base_url('/team/srinivasan-v') ?>" class="ms-2 text-decoration-none">Srinivasan V, Founder & CFO Partner</a>
    <?php endif; ?>
</div>

            <!-- Icons Section (Right) -->
            <div class="d-flex gap-3">
              <a href="#" id="shareButton"><i class="fas fa-share-alt"></i></a>
              <a href="#" id="printButton"><i class="fas fa-print"></i></a>
              <a href="#con-sec"><i class="fas fa-download d-b"></i></a>
              <a href="#" id="playPauseBtn"><i class="fa fa-play"></i></a>
              <a href="#" id="stopBtn"><i class="fa fa-stop"></i></a>
            </div>
          </div>

      



<section class="service-details pt-5 pb-5">
  <div class="container">
    <div class="row">
      
      <!-- Content Section -->
      <div class="col-lg-8 col-md-12 col-sm-12 content-side">
        <div class="service-details-content">

          <!--<figure class="image-box mb-4">
            <img src="<?= base_url('uploads/images/') . $doc['image'] ?>" alt="" class="img-fluid rounded">
          </figure>-->

          


          <div class="text-box mb-4">
            <div class="blog-inner-det-area">
              <p class="para">
                <?= html_entity_decode($doc['description']) ?>
              </p>
            </div>
          </div>
          
<?php if (!empty($doc['abt_author'])): ?>
  <div class="tabs-box">
    <ul class="tab-btns tab-buttons">
      <li class="tab-btn" data-tab="#tab-3">
        <i class="fa-solid fa-pen"></i>Editor's Note
      </li>
    </ul>
    <div class="tabs-content">
      <div class="tab" id="tab-3">
        <div class="inner-box">
          <div class="content-box">
            <?= html_entity_decode($doc['abt_author']) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

          
        </div>
    </div>
    <!-- Sidebar Section -->
      <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side mb-4">
        <div class="service-sidebar pt-3 ">
          <div class="download-widget text-center mb-4">
            <div class="shape" style="background-image: url('<?= base_url('assets/images/shape-24.png'); ?>');"></div>
            <div class="inner-box">
              <figure class="image-box">
                <img src="<?= base_url('assets/images/' . 'book-3.png') ?>" alt="Insights Book Image"
                  class="img-fluid rounded">
              </figure>
              <h4 class="h5 mt-2"><?= $doc['title'] ?></h4>
              <a href="#con-sec" class="main-btn d-bb"><span>Download Now</span></a>
            </div>
          </div>

          <?php if (!empty($nearby_downloads)): ?>
            <div class="category-widget mb_40">
              <ul class="category-list clearfix">
                <?php foreach ($nearby_downloads as $download): ?>
                  <?php
                  $slugs = explode(',', $download['nearby_slugs']);
                  $titles = explode(',', $download['nearby_titles']);
                  $count = min(count($slugs), count($titles)); // Ensuring equal pairing
                  ?>
                  <?php for ($i = 0; $i < 4; $i++): ?>
                    <li>
                      <a href="<?= htmlspecialchars(trim($slugs[$i])) ?>">
                        <?= htmlspecialchars(trim($titles[$i])) ?>
                      </a>
                    </li>
                  <?php endfor; ?>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!--<section class="sec" id="con-sec" style="background: #f4f8ff !important">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-12">
        <div class="sec-head">
          <h2>Download Form</h2>
        </div>
        <p class="para">
          Fill a form to get download link
        </p>
        <form data-form="insertcontact" data-file-name="<?= $doc['title'] ?>"
          data-download="<?= base_url('uploads/pdf/') . $doc['file'] ?>" method="post" class="contact-form form">
          <div class="row">
            <div class="col-lg-6 col-12">
              <div class="form-group">
                <label for="" class="label-text">Name <span>*</span></label>
                <div class="inp-grp">
                  <input type="text" name="name">
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="" class="label-text">Surname <span>*</span></label>
                                <div class="inp-grp">
                                    <input type="text" name="surname">
                                </div>
                            </div>
                        </div> -->
            <!--<div class="col-lg-6 col-12">
              <div class="form-group">
                <label for="" class="label-text">Email Address <span>*</span></label>
                <div class="inp-grp">
                  <input type="email" name="email">
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-12">
              <div class="form-group">
                <label for="" class="label-text">Phone Number <span>*</span></label>
                <div class="inp-grp">
                  <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number" name="phone">
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-12">
              <div class="form-group">
                <label for="" class="label-text">Message</label>
                <div class="inp-grp">
                  <textarea name="message" id="" rows="3"></textarea>
                </div>
              </div>
              <button type="submit" class="main-btn with-icon mt-10 mb-20">
                <span>Download File</span>
                <img src="<?= base_url() ?>assets/images/blue-arrow.svg" alt="">
              </button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</section>-->

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const downloadBtn = document.querySelector(".d-b");

    if (downloadBtn) {
        downloadBtn.addEventListener("click", function (e) {
            e.preventDefault();
            const fileUrl = "<?= base_url('uploads/pdf/') . $doc['file'] ?>";
            // Adjust file path dynamically
            const link = document.createElement("a");
            link.href = fileUrl;
            link.download = "<?= $doc['title'] ?>"; // Set default filename
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    }
});

</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const downloadBtn = document.querySelector(".d-bb");

    if (downloadBtn) {
        downloadBtn.addEventListener("click", function (e) {
            e.preventDefault();
            const fileUrl = "<?= base_url('uploads/pdf/') . $doc['file'] ?>";
            // Adjust file path dynamically
            const link = document.createElement("a");
            link.href = fileUrl;
            link.download = "<?= $doc['title'] ?>"; // Set default filename
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    }
});

</script>

<script>
  // Tabs Box
  if ($('.tabs-box').length) {
    $('.tabs-box .tab-buttons .tab-btn').on('click', function (e) {
      e.preventDefault();
      var target = $($(this).attr('data-tab'));

      // Check if the clicked tab is already active
      if ($(this).hasClass('active-btn')) {
        // Deactivate and hide the currently active tab
        $(this).removeClass('active-btn');
        target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
        target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
      } else {
        // Activate the clicked tab and show its content
        target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
        $(this).addClass('active-btn');
        target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
        target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
        $(target).fadeIn(100);
        $(target).addClass('active-tab');
      }
    });
  }
</script>

<script>
  if (navigator.share) {
    const shareButton = document.getElementById('shareButton');

    shareButton.addEventListener('click', async () => {
      try {
        // Use the Web Share API to trigger the native sharing dialog
        await navigator.share({
          title: 'Share Example',
          text: 'Check out this awesome content!',
          url: window.location.href
        });

        console.log('Shared successfully');
      } catch (error) {
        console.error('Error sharing:', error.message);
      }
    });
  } else {
    console.warn('Web Share API not supported on this browser');
  }
</script>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const printButton = document.getElementById('printButton');
    const fileUrl = "<?= base_url('uploads/pdf/') . $doc['file'] ?>"; // Change this to your file path
    console.log(fileUrl);

    if (printButton) {
      printButton.addEventListener('click', () => {
        try {
          const newWindow = window.open(fileUrl, '_blank');
          if (newWindow) {
            console.log('opened');
          } else {
            console.error('Failed to open the file.');
          }
        } catch (error) {
          console.error('Error printing file:', error.message);
        }
      });
    } else {
      console.warn('Print button not found in the DOM.');
    }
  });
</script>

<script>
  speechSynthesis.cancel();

  let textToSpeak = <?php
  echo json_encode(
    strip_tags(
      html_entity_decode($doc['description'])
    )
  );
  ?>;

  let utterance;
  let isPlaying = false;
  let isPaused = false;

  const playPauseBtn = document.getElementById('playPauseBtn');
  const stopBtn = document.getElementById('stopBtn');
  const playPauseIcon = playPauseBtn.querySelector('i');

  function resetSpeech() {
    speechSynthesis.cancel(); 
    isPlaying = false;
    isPaused = false;
    utterance = null;
    updateUI();
  }

  playPauseBtn.addEventListener('click', (event) => {
    event.preventDefault();

    if (!isPlaying) {
      startSpeech();
      return;
    }

    if (!isPaused) {
      speechSynthesis.pause();
      isPaused = true;
      updateUI();
    } else {
      speechSynthesis.resume();
      isPaused = false;
      updateUI();
    }
  });

  stopBtn.addEventListener('click', (event) => {
    event.preventDefault();
    resetSpeech();
  });

  function startSpeech() {
  if (!textToSpeak.trim()) return;

  resetSpeech(); 

  utterance = new SpeechSynthesisUtterance(textToSpeak);

  const voices = speechSynthesis.getVoices();
  const femaleVoice = voices.find(voice => voice.name.toLowerCase().includes('female') || voice.gender === 'female' || voice.name.toLowerCase().includes('samantha') || voice.name.toLowerCase().includes('zira'));

  if (femaleVoice) {
    utterance.voice = femaleVoice;
  }

  utterance.onstart = () => {
    isPlaying = true;
    isPaused = false;
    updateUI();
  };

  utterance.onend = () => {
    resetSpeech();
  };

  speechSynthesis.speak(utterance);
}


  function updateUI() {
    playPauseIcon.className = isPlaying && !isPaused ? 'fa fa-pause' : 'fa fa-play';
  }

  window.addEventListener("load", resetSpeech);
</script>

