

<style>
.testimonial p {
  font-size: 28px;
  letter-spacing: 0.02em;
  line-height: 35px;
}
.testimonial .name {
  font-weight: bold;
  font-size: 18px;
  letter-spacing: 0.04em;
  line-height: 35px;
  text-align: left;
}
.testimonial .designation {
  font-size: 14px;
  letter-spacing: 0.04em;
  text-align: left;
  color: #fff;
  opacity: 0.65;
}

.gallery-thumbs .swiper-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
  border: 1px solid #014293;
}

.bottom-box {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  background: #014293;;
  color: white;
  text-align: center;
  padding: 10px 0;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
}
.bottom-box .name {
  font-weight: bold;
  font-size: 16px;
  margin: 0;
}
.bottom-box .designation {
  font-size: 14px;
  margin: 0;
  opacity: 0.8;
}

.gallery-thumbs {
    height: 80%;
    background-color: #f0f3fd;
    position: relative; 
	margin-top: 50px;
	margin-bottom: 50px;
	alignment: center;
}

 .gallery-thumbs .swiper-wrapper {
	 align-items: center;
}

 .gallery-thumbs .swiper-slide-active img {
	 filter: contrast(1) blur(0px) !important;
}
 .flex-row {
	 display: -webkit-box;
	 display: -ms-flexbox;
	 display: flex;
	 -ms-flex-wrap: wrap;
	 flex-wrap: wrap;
	 margin-right: -15px;
	 margin-left: -15px;
}
 .flex-row .flex-col {
	 -ms-flex-preferred-size: 0;
	 flex-basis: 0;
	 -webkit-box-flex: 1;
	 -ms-flex-positive: 1;
	 flex-grow: 1;
	 max-width: 100%;
	 position: relative;
	 width: 100%;
	 min-height: 1px;
	 padding-right: 15px;
	 padding-left: 15px;
}

.gallery-thumbs .swiper-wrapper {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}


.testimonial-section .quote {
    width: 100%;
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 70px;
    padding-right: 70px;
}


.swiper-container.testimonial {
    height: 600px;
    padding-bottom: 50px;
}
.testimonial-section .user-saying {
    background: #014293;
    width: 50%;
    color: #fff;
    min-height: 500px;
    height: 100%;
}
.testi-user-img {
    width: 50%;
	background-color: #f0f3fd;
}

.testimonial-section {
  display: flex;
  justify-content: space-between;
  width: 100%;
  height: 100%;
}

.testimonial-section .quote p {
  font-size: 16px;
  font-weight: 300;
  line-height: 1.6;
  font-style: italic;
  margin: 0;
  width: 100%;

}

.quote-icon {
  width: 38px;
  display: block;
  margin-left: 500px;
}
.swiper-container.gallery-thumbs .main-btn {
  position: absolute;
  bottom: 300px;
  left: 50%;
  transform: translateX(-50%);
  text-align: center;
  display: inline-block;
}


.gallery-thumbs .swiper-slide .bottom-box {
  visibility: hidden;
  opacity: 0;
  margin-top: 20px;
  transition: opacity 0.3s ease, visibility 0.3s ease;
}

/* Show bottom-box for the active slide */
.gallery-thumbs .swiper-slide-active .bottom-box {
  visibility: visible;
  opacity: 1;
}


/* Responsive styles */
@media screen and (max-width: 768px) {
  .testimonial-section {
    flex-direction: column;
    align-items: center;
  }
  .user-saying {
    order: 1; /* Move user-saying to the top */
    width: 100%;
    height: auto;
    padding: 20px;
  }
  .testi-user-img {
    order: 2; /* Move testi-user-img to the bottom */
    width: 100%;
    height: auto;
    padding: 20px;
  }
  .gallery-thumbs .swiper-slide {
    width: 250px !important;
    height: 300px;
  }
  .testimonial-section .quote {
    padding: 20px;
    text-align: left;
  }
  .testimonial-section .quote p {
    font-size: 18px;
	width: 50vh;
  }
  .testimonial-section .user-saying{
    width: 100%;
    height: 100%;
  }
}

@media screen and (max-width: 480px) {
  .testimonial-section {
    flex-direction: column;
  }
  .user-saying {
    order: 2; /* Move user-saying to the top */
    width: 100%;
    height: auto;
    padding: 15px;
  }
  .testi-user-img {
    order: 1; /* Move testi-user-img to the bottom */
    width: 100%;
    height: auto;
    padding: 15px;
  }
  .testimonial-section .quote {
    padding: 15px;
    text-align: left;
	padding-right: 40px;
	
  }
  .testimonial-section .quote p {
    font-size: 16px;
	width: 50vh;
	padding-right: 20%;
	line-height: 27px;
  }
  .quote-icon {
    display:none;
  }
  .testimonial-section .user-saying{
    width: 100%;
    height: 100%;
  }
  .testimonial .designation {
  font-size: 12px;
  letter-spacing: 0.02em;
}
.testimonial .name {

font-size: 14px;
letter-spacing: 0.02em;
line-height: 20px;

}
.swiper-container.testimonial {
    height: 60vh;
    padding-bottom: 10px;
}
.gallery-thumbs .swiper-slide {
    width: 180px !important;
    height: 250px;
  }

  .gallery-thumbs .swiper-slide img {
  width: 100%;
  height: 70%;
  object-fit: cover;
  border-radius: 50%;
}
  .gallery-thumbs {
	margin-bottom:0px;
	margin-top:0px;
	padding-top:0px;
	padding-bottom:0px;
  
  }
  .bottom-box{
    visibility: hidden;
    flex-direction: column;
    align-items: center; /* Centers the content horizontally */
    text-align: center;
    background:none;
    color: #000000;
}
.gallery-thumbs .swiper-slide-active .bottom-box {
  visibility: visible;
  opacity: 1;
  margin-top:0px;
}

}
.quote .white-btn {
  background: white !important;
  max-width: 150px;
  padding: 0px 10px 10px 10px; /* Add padding for better spacing */
  display: inline-flex; /* Use flexbox for easy centering */
  align-items: center; /* Vertically center the content */
  justify-content: center; /* Horizontally center the content */
  text-align: center; /* Ensure text is centered */
  border-radius: 5px; /* Optional: Add rounded corners */
  text-decoration: none; /* Remove underline from link */
  font-size: 16px; /* Adjust font size as needed */
  color: var(--blue); /* Set text color */
  margin-top: 20px;
}


.quote .white-btn span {
  
  color: inherit; /* Inherit color from parent */
  margin-top: 10px !important;
}


</style>

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://md-aqil.github.io/images/swiper.min.css">

		
<section style="margin-top:100px;">
    <div class="testimonial-section">
        <div class="testi-user-img">
            <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="u3" src="https://cfobridge.com/uploads/images/vishal_gondal.webp" alt="vishal_gondal" loading="lazy">
                        <div class="bottom-box">
                            <div class="name">Vishal Gondal</div>
                            <div class="designation">Founder & CEO - GOQii</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img class="u1" src="https://cfobridge.com/uploads/images/akhilesh_bhargava.webp" alt="akhilesh_bhargava" loading="lazy">
                        <div class="bottom-box">
                            <div class="name">Akhilesh Bhargava</div>
                            <div class="designation">MD - AVI Global Plast</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img class="u2" src="https://cfobridge.com/uploads/images/siddhi_milap_shah.webp" alt="siddhi_milap_shah" loading="lazy">
                        <div class="bottom-box">
                            <div class="name">Siddhi Milap Shah</div>
                            <div class="designation">Owner & Founder - PrintStop</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img class="u4" src="https://cfobridge.com/uploads/images/mahesh_bhupathi.webp" alt="mahesh_bhupathi" loading="lazy">
                        <div class="bottom-box">
                            <div class="name">Mahesh Bhupathi</div>
                            <div class="designation">Co-Founder - Scentials Beauty & Social Swag</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img class="u4" src="https://cfobridge.com/uploads/images/janos_vaczi.webp" alt="janos_vaczi" loading="lazy">
                        <div class="bottom-box">
                            <div class="name">Janos Vaczi</div>
                            <div class="designation">CEO & MD - Extrovis</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img class="u4" src="https://cfobridge.com/uploads/images/gautam_rajani.webp" alt="gautam_rajani" loading="lazy">
                        <div class="bottom-box">
                            <div class="name">Gautam Rajani</div>
                            <div class="designation">CEO & Founder - TM Printers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-saying">
            <div class="swiper-container testimonial">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper ">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="quote">
                            <p style="margin-bottom: 10px; font-style: normal; font-weight: 500; font-size: 28px;">Our Testament of Service Well-Served</p>
                            
                            <p>
                                “Working with CFO Bridge has been the best investment for GOQii. Their strategic financial insights, robust modeling, and partnership-driven approach unlocked unseen opportunities. They seamlessly scaled with our needs, becoming an integral part of our core team.“
                            </p>
                            <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="Quote Icon">
                            <div class="name">Vishal Gondal</div>
                            <div class="designation">Founder & CEO - GOQii</div>
                            <a href="<?=base_url('testimonials')?>" class="white-btn">
                                <span>Know More</span>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="quote">
                            <p style="margin-bottom: 10px; font-style: normal; font-weight: 500; font-size: 28px;">Our Testament of Service Well-Served</p>
                            

                            <p>
                              “Working with CFO Bridge has been transformative. Their expertise in financial modeling, accurate data handling, and strategic insights has driven our growth. A reliable partner for over 7 years, delivering consistent value.“
                            </p>
                            <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="Quote Icon">
                            <div class="name">Akhilesh Bhargava</div>
                            <div class="designation">MD - AVI Global Plast</div>
                            <a href="<?=base_url('testimonials')?>" class="white-btn">
                                <span>Know More</span>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="quote">
                            <p style="margin-bottom: 10px; font-style: normal; font-weight: 500; font-size: 28px;">Our Testament of Service Well-Served</p>
                            

                            <p>
                                “CFO Bridge has been instrumental in scaling our finance practices. Their expertise in cash flow, working capital, and strategic planning helped us achieve 30-35% growth. Their flexible partnership model is a game-changer.“
                            </p>
                            <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="Quote Icon">
                            <div class="name">Siddhi Milap Shah</div>
                            <div class="designation">Owner & Founder - PrintStop</div>
                            <a href="<?=base_url('testimonials')?>" class="white-btn">
                                <span>Know More</span>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="quote">
                            <p style="margin-bottom: 10px; font-style: normal; font-weight: 500; font-size: 28px;">Our Testament of Service Well-Served</p>
                            

                            <p>
                                “Working with CFO Bridge for two years has been fantastic. Their team—Srini, Shilpa, and Hitesh—has been incredibly supportive. I highly recommend them, especially for startups needing top-quality CFO expertise without the full-time cost. Great work!“
                            </p>
                            <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="Quote Icon">
                            <div class="name">Mahesh Bhupathi</div>
                            <div class="designation">Co-Founder - Scentials Beauty & Social Swag</div>
                            <a href="<?=base_url('testimonials')?>" class="white-btn">
                                <span>Know More</span>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="quote">
                            <p style="margin-bottom: 10px; font-style: normal; font-weight: 500; font-size: 28px;">Our Testament of Service Well-Served</p>
                            

                            <p>
                                “CFO Bridge helped us create compliant inter-company policies and optimize local financial processes. They exceeded expectations and made the collaboration enjoyable. Highly recommend their expertise!“
                            </p>
                            <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="Quote Icon">
                            <div class="name">Janos Vaczi</div>
                            <div class="designation">CEO & MD - Extrovis</div>
                            <a href="<?=base_url('testimonials')?>" class="white-btn">
                                <span>Know More</span>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="quote">
                            <p style="margin-bottom: 10px; font-style: normal; font-weight: 500; font-size: 28px;">Our Testament of Service Well-Served</p>
                            

                            <p>
                                “CFO Bridge has been a trusted partner for 3-4 years. Their team, especially Hitesh, helped us build a strong MIS process and provided invaluable insights for growth decisions. Highly recommend their expertise!“
                            </p>
                            <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="Quote Icon">
                            <div class="name">Gautam Rajani</div>
                            <div class="designation">CEO & Founder - TM Printers</div>
                            <a href="<?=base_url('testimonials')?>" class="white-btn">
                                <span>Know More</span>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>



<div class="swiper-pagination" style="visibility: hidden;"></div>

    
	<script src="https://md-aqil.github.io/images/swiper.min.js"></script>
	<script>
	var galleryThumbs = new Swiper('.gallery-thumbs', {
		effect: 'coverflow',
		grabCursor: true,
		centeredSlides: true,
		slidesPerView: '2',
		// coverflowEffect: {
		//   rotate: 50,
		//   stretch: 0,
		//   depth: 100,
		//   modifier: 1,
		//   slideShadows : true,
		// },
		
		coverflowEffect: {
			rotate: 0,
			stretch: 0,
			depth: 50,
			modifier: 8,
			slideShadows : false,
		  },
		  
	  });
	  
	  
	var galleryTop = new Swiper('.swiper-container.testimonial', {
		speed: 400,
		spaceBetween: 100,
		autoplay: {
		  delay: 3000,
		  disableOnInteraction: false,
		},
		direction: 'vertical',
		pagination: {
		  clickable: true,
		  el: '.swiper-pagination',
		  type: 'bullets',
		},
		thumbs: {
			swiper: galleryThumbs
		  }
	  });



</script>