<?php include 'header.php';?>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="2221969247888734">
      </div>
<main>
	 <section class="form-studio">
	 	<div class="container">
	 		<div class="max-740">
	 			<div class="title-main wow fadeInUp wHighlight" data-wow-delay=".25s">
		 			<h1><span class="lang" key="hiPlease">Hi, please</span> <br> <span class="lang" key="introduceYourselfABit">introduce yourself a bit<span></h1>
		 		</div>
                <!-- <form action="result.php" method="post"> -->
    		 		<div class="list-form">
    		 			<div class="cb-form-group" id="element-information">
    		 				<div class="title-form wow fadeInUp wHighlight" data-wow-delay=".25s"><p><img src="images/t-form-1.svg" class="img-fluid" alt=""><label key="personalInformation" class="lang">Personal information</label></p></div>
                            <div class="cb-input cb-input_light wow fadeInUp wHighlight" data-wow-delay=".25s">
                                <div class="cb-input_light-box">
                                    <input type="text" class="lang" id="yourName" data-translate="yourName" placeholder="Your name"/>
                                    <div class="cb-input_light-line"></div>
                                </div>
                                <div class="cb-input_light-message"></div>
                            </div>
                            <div class="cb-input cb-input_light wow fadeInUp wHighlight" data-wow-delay=".25s">
                                <div class="cb-input_light-box"> 
                                    <input type="text" class="lang" id="yearOfBirth" data-translate="yearOfBirth" placeholder="Year of Birth"/>
                                    <div class="cb-input_light-line line-bird"></div>
                                </div>
                                <div class="cb-input_light-message"></div>
                                <div class="rqYoB lang" key="yearOfBirthNotFormat">Seem your year of birth is not a right number</div>
                            </div>
                            <div class="cb-input cb-input_light wow fadeInUp wHighlight" data-wow-delay=".25s">
                                <div class="cb-input_light-box">
                                    <input type="text" class="lang" id="yourSchool" data-translate="yourSchool" placeholder="Your school / work place"/>
                                    <div class="cb-input_light-line"></div>
                                </div>
                                <div class="cb-input_light-message"></div>
                            </div>
                            <div class="cb-input cb-input_light wow fadeInUp wHighlight" data-wow-delay=".25s">
                                <div class="cb-input_light-box">
                                    <input type="text" class="lang" data-translate="designCoursesEach" id="designCoursesEach" placeholder="Design courses each participated (optional)"/>
                                    <div class="cb-input_light-line"></div>
                                </div>
                                <div class="cb-input_light-message"></div>
                            </div>
                        </div>
    		 			<div class="cb-form-group" id="element-contact">
    		 				<div class="title-form wow fadeInUp wHighlight" data-wow-delay=".25s"><p><img src="images/t-form-2.svg" class="img-fluid" alt=""><label class="lang" key="contactInformation">Contact information</label></p></div>
                            <div class="cb-input cb-input_light wow fadeInUp wHighlight" data-wow-delay=".25s">
                                <div class="cb-input_light-box">
                                    <input type="text" class="lang" id="yourEmail" data-translate="yourEmail" placeholder="Your email"/>
                                    <div class="cb-input_light-line line-mail"></div>
                                </div>
                                <div class="cb-input_light-message"></div>
                                <div class="rqEmail lang" key="yourEmailNotFormat">Seem your email is not correct format</div>
                            </div>
                            <div class="cb-input cb-input_light wow fadeInUp wHighlight" data-wow-delay=".25s">
                                <div class="cb-input_light-box">
                                    <input type="text" class="lang" id="yourPhoneNumber" data-translate="yourPhoneNumber" placeholder="Your Phone number"/>
                                    <div class="cb-input_light-line line-phone"></div>
                                </div>
                                <div class="cb-input_light-message"></div>
                                <div class="rqPhone lang" key="yourPhoneNotFormat">Seem your phone number is not correct format</div>
                            </div>
                            <div class="cb-input cb-input_light wow fadeInUp wHighlight" data-wow-delay=".25s">
                                <div class="cb-input_light-box">
                                    <input type="text" class="lang" id="yourFacebookLink" data-translate="yourFacebookLink" placeholder="Your Facebook link"/>
                                    <div class="cb-input_light-line"></div>
                                </div>
                                <div class="cb-input_light-message"></div>
                            </div>
                        </div>
    		 			<div class="cb-form-group">
    		 				<div class="title-form wow fadeInUp wHighlight" data-wow-delay=".25s"><p><img src="images/t-form-3.svg" class="img-fluid" alt=""><label class="lang" key="yourCreation">Your creation</label></p> <span class="lang" key="summarizeAnyOf">Summarize any of your best design experiences here</span></div>
                            <div class="cb-input cb-input_light wow fadeInUp wHighlight" data-wow-delay=".25s">
                                <div class="cb-input_light-box">
                                    <input type="text" class="lang" id="yourPortfolioLink" data-translate="yourPortfolioLink" placeholder="Portfolio Link"/>
                                    <div class="cb-input_light-line"></div>
                                </div>
                                <div class="cb-input_light-message"></div>
                            </div>
                            <!-- <div class="cb-input cb-input_light wow fadeInUp wHighlight" data-wow-delay=".25s">
                                <div class="cb-input_light-box">
                                    <input type="text" data-translate="orBehanceLink" placeholder="Or Behance link"/>
                                    <div class="cb-input_light-line"></div>
                                </div>
                                <div class="cb-input_light-message"></div>
                            </div>
                            <div class="cb-input cb-input_light wow fadeInUp wHighlight" data-wow-delay=".25s">
                                <div class="cb-input_light-box">
                                    <input type="text" placeholder="Or Dribbble link"/>
                                    <div class="cb-input_light-line"></div>
                                </div>
                                <div class="cb-input_light-message"></div>
                            </div> -->
                        </div>
    		 			<div class="cb-form-group">
    		 				<div class="title-form wow fadeInUp wHighlight" data-wow-delay=".25s"><p><img src="images/t-form-4.svg" class="img-fluid" alt=""><label class="lang" key="doYouHaveAnyMessages">Do you have a message to Pit?</label></p></span></div>
                            <div class="cb-input cb-input_light wow fadeInUp wHighlight" data-wow-delay=".25s">
                                <div class="cb-input_light-box">
                                    <textarea name="" cols="30" rows="10" class="lang" id="weAreReadyToListen" data-translate="weAreReadyToListen" placeholder="We are ready to listen to any questions you may have (optional)"></textarea>
                                    <div class="cb-input_light-line"></div>
                                </div>
                                <div class="cb-input_light-message"></div>
                            </div>
                        </div>
    		 			<div class="cb-form-group">
                            <div class="cb-input cb-input_light wow fadeInUp wHighlight" data-wow-delay=".25s">
                                <div class="cb-input_light-box">
                                    <button class="btn-form">
                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn_not_color">
                                            <circle cx="24" cy="24" r="24" transform="rotate(-90 24 24)" fill="#B6B9BE"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.2001 32.3999L25.2001 18.1619L30.4321 22.5215C30.9409 22.9463 31.6981 22.8767 32.1217 22.3679C32.5465 21.8579 32.4769 21.1019 31.9681 20.6771L24.7681 14.6771C24.7117 14.6303 24.6457 14.6075 24.5833 14.5727C24.5329 14.5439 24.4897 14.5091 24.4345 14.4875C24.2965 14.4335 24.1513 14.4011 24.0049 14.4011C24.0037 14.4011 24.0013 14.3999 24.0001 14.3999C23.9989 14.3999 23.9965 14.4011 23.9953 14.4011C23.8489 14.4011 23.7037 14.4335 23.5657 14.4875C23.5105 14.5091 23.4673 14.5439 23.4169 14.5727C23.3545 14.6075 23.2885 14.6303 23.2321 14.6771L16.0321 20.6771C15.7477 20.9159 15.6001 21.2567 15.6001 21.5999C15.6001 21.8711 15.6913 22.1435 15.8785 22.3679C16.3021 22.8767 17.0593 22.9463 17.5681 22.5215L22.8001 18.1619L22.8001 32.3999C22.8001 33.0623 23.3377 33.5999 24.0001 33.5999C24.6625 33.5999 25.2001 33.0623 25.2001 32.3999Z" fill="white"/>
                                        </svg>

                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn_color">
                                            <circle cx="24" cy="24" r="24" transform="rotate(-90 24 24)" fill="#11AF88"/>
                                            <rect width="28.8" height="28.8" transform="translate(9.6001 38.3999) rotate(-90)" fill="#11AF88"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.2001 32.3999L25.2001 18.1619L30.4321 22.5215C30.9409 22.9463 31.6981 22.8767 32.1217 22.3679C32.5465 21.8579 32.4769 21.1019 31.9681 20.6771L24.7681 14.6771C24.7117 14.6303 24.6457 14.6075 24.5833 14.5727C24.5329 14.5439 24.4897 14.5091 24.4345 14.4875C24.2965 14.4335 24.1513 14.4011 24.0049 14.4011C24.0037 14.4011 24.0013 14.3999 24.0001 14.3999C23.9989 14.3999 23.9965 14.4011 23.9953 14.4011C23.8489 14.4011 23.7037 14.4335 23.5657 14.4875C23.5105 14.5091 23.4673 14.5439 23.4169 14.5727C23.3545 14.6075 23.2885 14.6303 23.2321 14.6771L16.0321 20.6771C15.7477 20.9159 15.6001 21.2567 15.6001 21.5999C15.6001 21.8711 15.6913 22.1435 15.8785 22.3679C16.3021 22.8767 17.0593 22.9463 17.5681 22.5215L22.8001 18.1619L22.8001 32.3999C22.8001 33.0623 23.3377 33.5999 24.0001 33.5999C24.6625 33.5999 25.2001 33.0623 25.2001 32.3999Z" fill="white"/>
                                        </svg>
                                        <span class="lang" id="submitYourProfile" key="submitYourProfile" style="color: #B6B9BE">Submit your profile</span>
                                    </button>
                                </div>
                            </div>
                        </div>
    		 		</div>
                <!-- </form> -->
	 		</div>
	 	</div>
	 </section>
</main>
<style>
    .content-fppter {
        border-top: 1px solid #E7E8E9;
    }

    .content-fppter a {
        color: #222222 !important;
    }

    footer {
        color: #222222;
        background: #fff;
    }

    .logo-dark {
        display: block;
    }

    .logo-light {
        display: none;
    }
</style>
<?php include 'footer.php';?>     
      