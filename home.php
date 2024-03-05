<?php
// Start session
session_start();
require_once("config.php");
$ip = get_client_ip();
// $ip = '94.204.192.2';
// echo $ip;
$response = file_get_contents("http://ip-api.com/json/{$ip}");
$data = json_decode($response);

$country_code = $data->countryCode;
// $query = "SELECT * FROM `tbl_pricing` WHERE `prc_id`= 1";
// $run_query = $db->selectSingleRow($query);
switch ($country_code) {
    case 'AE': // For UAE
        list($day7, $day30, $month3) = explode(',', get_price('1'));
        $day7 = "AED " . $day7;
        $day30 = "AED " . $day30;
        $month3 = "AED " . $month3;
        break;
    case 'IN': // For India
        list($day7, $day30, $month3) = explode(',', get_price('2'));
        $day7 = "INR " . $day7;
        $day30 = "INR " . $day30;
        $month3 = "INR " . $month3;


        break;
    case 'SA': // For Saudi Arabia
        list($day7, $day30, $month3) = explode(',', get_price('3'));
        $day7 = "SAR " . $day7;
        $day30 = "SAR " . $day30;
        $month3 = "SAR " . $month3;

        break;
    default:
        list($day7, $day30, $month3) = explode(',', get_price('4'));
        $day7 = "USD " . $day7;
        $day30 = "USD " . $day30;
        $month3 = "USD " . $month3;
}

// Generate token and IDpreloader-phone.svg
$tokenId = bin2hex(random_bytes(16)); // generate a random ID
$tokenKey = bin2hex(random_bytes(32)); // generate a random token

// Store the token and ID in the session or database
$_SESSION['tokenId'] = $tokenId;
$_SESSION['tokenKey'] = $tokenKey;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>fitverse</title>
    <!-- Main Style Sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
 

    <!-- Bootstrap -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />

    <!-- swiper slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
     <!-- Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- google Font  -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/b2b7d27ef0.js" crossorigin="anonymous"></script>

   

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css" />
    <link rel="icon" type="image/x-icon" href="images/f.ico">
</head>

<body>
    <section class="offer-news">
        <div class="news-container">
            <div class="swiper-wrapper client-w">
                <div class="swiper-slide news-slider openPopup">
                    <p>Enjoy first free session. <a href="#">Book Now</a></p>
                </div>
                <div class="swiper-slide news-slider openPopup">
                    <p>Enjoy first free session. <a href="#">Book Now</a></p>
                </div>
                <div class="swiper-slide news-slider openPopup">
                    <p>Enjoy first free session. <a href="#">Book Now</a></p>
                </div>
                <div class="swiper-slide news-slider openPopup">
                    <p>Enjoy first free session. <a href="#">Book Now</a></p>
                </div>
                <div class="swiper-slide news-slider openPopup">
                    <p>Enjoy first free session. <a href="#">Book Now</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- hero-section-for desktop -->

    <section class="hero for-desktop">
        <video id="background-video" autoplay loop muted playsinline poster="images/preloader-web.webp">
            <source src="images/video-web.mp4" type="video/mp4" />
        </video>
        <div class="over-layer">
            <section id="navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container">
                        <a class="navbar-brand" href="index.php"><img src="images/Logo.svg" alt="" /></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#coaches">Coaches</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#price">Plans</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#stories">Stories</a>
                                </li>
                            </ul>

                            <button class="menu-btn openPopup">
                                <i class="fa-solid fa-circle"></i> Try free session
                            </button>
                        </div>
                    </div>
                </nav>
            </section>

            <section class="hero-content">
                <div class="container">
                    <div class="hero-welcome">
                        <h1>Your wellness. Simplified.</h1>
                        <ul>
                            <li>Get a dedicated fitness & nutrition coach</li>
                            <li>1-on-1 online sessions. Anywhere, anytime</li>
                            <li>Unlimited chat with your coaches </li>
                        </ul>
                        <div class="gobal-btn">
                            <a href="#" class="openPopup"><i class="fa-solid fa-circle"></i> Try free session</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- hero-section-for desktop -->

    <!-- hero-section-for mobile -->

    <section class="for-mobile">
        <section id="navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><img src="images/Logo.svg" alt="" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#coaches">Coaches</a>
                            </li>

                            <li class="nav-item">
                                <a href="#price">Plans</a>
                            </li>

                            <li class="nav-item">
                                <a href="#stories">Stories</a>
                            </li>
                        </ul>

                        <button class="menu-btn openPopup">
                            <i class="fa-solid fa-circle"></i> Try free session
                        </button>
                    </div>
                </div>
            </nav>
        </section>
        <div class="container">
            <div class="hero-mobile">
                <div class="hero-welcome">
                    <h1>Your wellness. Simplified.</h1>
                    <ul>
                        <li>Get a dedicated fitness & nutrition coach</li>
                        <li>1-on-1 online sessions. Anywhere, anytime</li>
                        <li>Unlimited chat with your coaches </li>
                    </ul>
                    <div class="gobal-btn">
                        <a href="#" class="openPopup"><i class="fa-solid fa-circle"></i> Try free session</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mobile-video">
            <video id="background-video" autoplay loop muted playsinline poster="images/preloader-phone.webp">
                <source src="images/phone-video.mp4" type="video/mp4" />
            </video>
        </div>
    </section>
    <!-- hero-section-for mobile -->

    <section class="programe">
        <div class="container">
            <div class="center-title">
                <h2> Program designed to prioritize your well-being.</h2>
            </div>
        </div>
    </section>
    <!-- 	programe-slidefor-desktop -->
    <section class="programe-slider for-desktop">
        <div class="service-slider">
            <div class="owl-carousel">
                <div class="iteam">
                    <div class="programe-benefit" style="background: url(images/programe1.webp)">
                        <div class="slider-three-left" id="target-section">
                            <div class="message-type">
                                <img src="images/message-1.svg" alt="" class="" />
                                <section class="target-section">
                                    <p class="typing-text">
                                        Hi Chirag, let’s begin the workout with the warm-up. We
                                        have to be careful with your injury.
                                    </p>
                                </section>
                            </div>
                        </div>

                        <div class="programe-bottom">
                            <h4><i class="fa-solid fa-circle"></i> Dedicated coaches</h4>
                            <p>Have a team of fitness coach & nutritionist</p>
                        </div>
                    </div>
                </div>
                <!-- team -->

                <div class="iteam">
                    <div class="programe-benefit" style="background: url(images/programe2.webp)">
                        <div class="programe-bottom">
                            <h4>
                                <i class="fa-solid fa-circle"></i> 1-on-1 online sessions
                            </h4>
                            <p>Enjoy your session anywhere, anytime</p>
                        </div>
                    </div>
                </div>
                <!-- team -->

                <div class="iteam">
                    <div class="programe-benefit" style="background: url(images/programe3.webp)">
                        <div class="slider-last-left" id="target-section">
                            <div class="message-type">
                                <img src="images/message.svg" alt="" class="" />
                                <section class="target-section">
                                    <p class="typing-text">
                                        Alexa! I know your work day’s been crazy, so I shortned
                                        your workout. Consistency is our motto! Let’s keep that
                                        treak going.
                                    </p>
                                </section>
                            </div>

                            <div class="message-box">
                                <img src="images/messgae-box.svg" alt="" />
                            </div>
                        </div>

                        <div class="programe-bottom">
                            <h4><i class="fa-solid fa-circle"></i> Unlimited chats</h4>
                            <p>Whenever in doubt ask the experts</p>
                        </div>
                    </div>
                </div>
                <!-- team -->
            </div>

            <div class="custom-nav">
                <button class="prev">
                    <img src="images/clarity_arrow-line.png" alt="" />
                </button>
                <button class="next">
                    <img src="images/clarity_arrow-line-2.png" alt="" />
                </button>
            </div>
        </div>
    </section>
    <!-- 	programe-slidefor-desktop -->

    <!-- 	programe-slidefor-mobile -->
    <section class="for-mobile programe-mobile">
        <div class="container">
            <div class="proggrame-iteam-phone">
                <div class="mobile-programe-box">
                    <img src="images/phone-slider/1.webp" alt="" />
                    <div class="message-type">
                        <img src="images/message-1.svg" alt="" class="" />
                        <section class="target-section">
                            <p class="typing-text">Hey Chirag, let’s begin with warm up</p>
                        </section>
                    </div>
                </div>
                <div class="afterprograme-content">
                    <h4><i class="fa-solid fa-circle"></i> Dedicated coaches</h4>
                    <p>Have a team of fitness coach & nutritionist</p>
                </div>
            </div>
            <!-- proggrame-iteam-phone -->

            <div class="proggrame-iteam-phone">
                <div class="mobile-programe-box">
                    <img src="images/phone-slider/2.webp" alt="" />
                </div>
                <div class="afterprograme-content">
                    <h4><i class="fa-solid fa-circle"></i> 1-on-1 online sessions</h4>
                    <p>Enjoy your session anywhere, anytime</p>
                </div>
            </div>
            <!-- proggrame-iteam-phone -->

            <div class="proggrame-iteam-phone">
                <div class="mobile-programe-box">
                    <img src="images/phone-slider/3.webp" alt="" />

                    <div class="thierd-message">
                        <div class="message-type">
                            <img src="images/message.svg" alt="" class="" />
                            <section class="target-section">
                                <p class="typing-text">Hi coach, just finished my cardio</p>
                            </section>
                        </div>
                        <div class="message-box">
                            <img src="images/messgae-box.svg" alt="" />
                        </div>
                    </div>
                </div>
                <div class="afterprograme-content">
                    <h4><i class="fa-solid fa-circle"></i> Unlimited chats</h4>
                    <p>Whenever in doubt ask the experts</p>
                </div>
            </div>
            <!-- proggrame-iteam-phone -->
        </div>
    </section>
    <!-- 	programe-slidefor-mobile -->

    <section class="how-work section-padding">
        <div class="container">
            <div class="center-title">
                <h2>How it works.</h2>
                <p class="for-desktop">
                    We have decided to opt for a simple, clear process that will make
                    your life easier every day. Just follow the steps!
                </p>
                <div class="gobal-btn for-desktop">
                    <a href="#" class="openPopup"><i class="fa-solid fa-circle"></i> Try free session</a>
                </div>
            </div>

            <div class="step-box-all">
                <div class="step-box" id="box1">
                    <h4><i class="fa-solid fa-circle"></i> Step 01</h4>
                    <h3>
                        Tiny steps,<br />
                        big impact
                    </h3>
                    <p>Choose the plan that suits your need</p>
                </div>
                <div class="step-box" id="box2">
                    <h4><i class="fa-solid fa-circle"></i> Step 02</h4>
                    <h3>Say hello to the dream team</h3>
                    <p>Hop on a video call with your coaches</p>
                </div>
                <div class="step-box" id="box3">
                    <h4><i class="fa-solid fa-circle"></i> Step 03</h4>
                    <h3>Make a strong start</h3>
                    <p>Coaches will take 1-on-1 live sessions</p>
                </div>
                <div class="step-box bor-none" id="box4">
                    <h4><i class="fa-solid fa-circle"></i> Step 04</h4>
                    <h3>Energize your routine</h3>
                    <p>Connect, get coached & chat with the coaches</p>
                </div>
            </div>
        </div>
    </section>

    <section class="price-bg" id="price">
        <div class="price-container">
            <div class="price-flex">
                <div class="price-content for-desktop">
                    <h2>Wellness program made to fit your lifestyle</h2>
                </div>
                <div class="price-detailes">
                    <div>
                        <h4><?php echo $day7; ?> per month</h4>
                        <p>
                            12 session with a fitness coach<br />
                            Counseling & meal plan with a nutritionist <br />
                            Unlimited chats with coaches
                        </p>
                        <div class="gobal-btn">
                            <a href="checkout.php?pakage=30"><i class="fa-solid fa-circle"></i> Start Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="price-color">
        <div class="container">
            <div class="price-bottom">
                <div class="price-bottom-middle">
                    <h3>Check out more plans</h3>
                    <p>
                        We offer monthly, quarterly & half yearly plans with easy payment
                        options
                    </p>
                    <div class="gobal-btn">
                        <a href="price-paln.php"><i class="fa-solid fa-circle"></i> Explore plans</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="coaches section-padding" id="coaches">
        <div class="container">
            <div class="center-title">
                <h2>Meet our wellness coaches</h2>
                <p>
                    Our team consist of Personal trainers, Yoga coaches & Nutritionists
                    to cater you physical well-being.
                </p>
                <div class="gobal-btn">
                    <a href="coaches.php">View all</a>
                </div>
            </div>
            <div class="for-desktop">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="coaches-box">
                            <img src="images/phone-choaches/1.webp" alt="" />

                            <div class="coaches-descripition chaima-dis">
                                <div class="cd-top">
                                    <p><span>“Chaima</span></p>
                                    <p>Fitness coach</p>
                                </div>
                                <p>
                                    “Chaima values time and understands the importance of
                                    staying on track. She will work with you to create a
                                    customized plan that fits your busy schedule and helps you
                                    achieve your goals efficiently. She always looks forward to
                                    hearing about her clients' experiences and celebrating their
                                    achievements together.”
                                </p>
                            </div>
                        </div>
                        <!-- coaches-box -->
                        <div class="coaches-box">
                            <img src="images/phone-choaches/2-web.webp" alt="" />

                            <div class="coaches-descripition ruchir-dis">
                                <div>
                                    <div class="cd-top">
                                        <p><span>Ruchir</span></p>
                                        <p>Fitness Coach</p>
                                    </div>
                                    <p>
                                        “I fosters a holistic approach to health, overcoming
                                        mental barriers, and building confidence through balanced
                                        and friendly workouts. ”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="coaches-box">
                            <img src="images/phone-choaches/1-web.webp" alt="" />

                            <div class="coaches-descripition">
                                <div class="cd-top">
                                    <p><span>Anjali</span></p>
                                    <p>Nutritionist</p>
                                </div>
                                <p>
                                    “I am a certified nutritionist who holds a degree in
                                    clinical nutrition and has a passion for helping clients
                                    achieve their health goals through sustainable lifestyle
                                    changes. ”
                                </p>
                            </div>
                        </div>
                        <div class="coaches-box">
                            <img src="images/phone-choaches/4.webp" alt="" />

                            <div class="coaches-descripition estefania-dis">
                                <div class="cd-top">
                                    <p><span>Estefania</span></p>
                                    <p>Fitness Coach</p>
                                </div>
                                <p>
                                    “Meet Estefania, a fitness enthusiast with a background in
                                    Strength Training. Estefania knows what it takes to build
                                    strength, endurance, and resilence. Her favorite exercise is
                                    the Squats, a movement that targets the quadriceps, glutes,
                                    and lower back. As your personal trainer, she will adapt to
                                    your fitness level and lifestyle to make your journey
                                    enjoyable toward reaching your goals. ”
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="coaches-box">
                            <img src="images/phone-choaches/5.webp" alt="" />

                            <div class="coaches-descripition rachna-dis">
                                <div class="cd-top">
                                    <p><span>Rachna</span></p>
                                    <p>Yoga Coach</p>
                                </div>
                                <p>
                                    “ I am a post graduate in Yoga education. I encourages my
                                    clients to embrace yoga as a lifestyle rather than just a
                                    workout, fostering mindfulness, self-awareness, and a sense
                                    of inner peace. ”
                                </p>
                            </div>
                        </div>
                        <div class="coaches-box">
                            <img src="images/phone-choaches/3-web.webp" alt="" />

                            <div class="coaches-descripition rachna-dis">
                                <div class="cd-top">
                                    <p><span>Rasika</span></p>
                                    <p>Nutritionist</p>
                                </div>
                                <p>
                                    “I am a certified nutritionist who believes in the beauty of
                                    the journey towards a fitter tomorrow. I encourage clients
                                    to trust me and follow customized diet plan while consuming
                                    favorite foods in moderation”
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="choach-slider for-mobile">
                <div class="owl-carousel choach-all">
                    <div class="iteam">
                        <div class="coaches-box">
                            <img src="images/phone-choaches/1.webp" alt="" />

                            <div class="coaches-descripition chaima-dis">
                                <div class="cd-top">
                                    <p><span>“Chaima</span></p>
                                    <p>Fitness coach</p>
                                </div>
                                <p>
                                    “Chaima values time and understands the importance of
                                    staying on track. She will work with you to create a
                                    customized plan that fits your busy schedule and helps you
                                    achieve your goals efficiently. She always looks forward to
                                    hearing about her clients' experiences and celebrating their
                                    achievements together.”
                                </p>
                            </div>
                        </div>
                        <!-- coaches-box -->
                    </div>

                    <div class="iteam">
                        <div class="coaches-box">
                            <img src="images/phone-choaches/2.webp" alt="" />

                            <div class="coaches-descripition ruchir-dis">
                                <div>
                                    <div class="cd-top">
                                        <p><span>Ruchir</span></p>
                                        <p>Fitness Coach</p>
                                    </div>
                                    <p>
                                        “I fosters a holistic approach to health, overcoming
                                        mental barriers, and building confidence through balanced
                                        and friendly workouts. ”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iteam">
                        <div class="coaches-box">
                            <img src="images/phone-choaches/3.webp" alt="" />

                            <div class="coaches-descripition">
                                <div class="cd-top">
                                    <p><span>Anjali</span></p>
                                    <p>Nutritionist</p>
                                </div>
                                <p>
                                    “I am a certified nutritionist who holds a degree in
                                    clinical nutrition and has a passion for helping clients
                                    achieve their health goals through sustainable lifestyle
                                    changes. ”
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="iteam">
                        <div class="coaches-box">
                            <img src="images/phone-choaches/4.webp" alt="" />

                            <div class="coaches-descripition estefania-dis">
                                <div class="cd-top">
                                    <p><span>Estefania</span></p>
                                    <p>Fitness Coach</p>
                                </div>
                                <p>
                                    “Meet Estefania, a fitness enthusiast with a background in
                                    Strength Training. Estefania knows what it takes to build
                                    strength, endurance, and resilence. Her favorite exercise is
                                    the Squats, a movement that targets the quadriceps, glutes,
                                    and lower back. As your personal trainer, she will adapt to
                                    your fitness level and lifestyle to make your journey
                                    enjoyable toward reaching your goals. ”
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- iteam -->
                    <div class="iteam">
                        <div class="coaches-box">
                            <img src="images/phone-choaches/5.webp" alt="" />

                            <div class="coaches-descripition rachna-dis">
                                <div class="cd-top">
                                    <p><span>Rachna</span></p>
                                    <p>Yoga Coach</p>
                                </div>
                                <p>
                                    “ I am a post graduate in Yoga education. I encourages my
                                    clients to embrace yoga as a lifestyle rather than just a
                                    workout, fostering mindfulness, self-awareness, and a sense
                                    of inner peace. ”
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="iteam">
                        <div class="coaches-box">
                            <img src="images/phone-choaches/6.webp" alt="" />

                            <div class="coaches-descripition rachna-dis">
                                <div class="cd-top">
                                    <p><span>Rasika</span></p>
                                    <p>Nutritionist</p>
                                </div>
                                <p>
                                    “I am a certified nutritionist who believes in the beauty of
                                    the journey towards a fitter tomorrow. I encourage clients
                                    to trust me and follow customized diet plan while consuming
                                    favorite foods in moderation”
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="problem-slove section-padding">
        <div class="container">
            <div class="center-title">
                <h2>Problem-solving through compassion & team-work</h2>
            </div>

            <div id="accordion1">
                <!-- FAQ Item 1 -->
                <div class="card">
                    <div class="card-header active-faq" id="headingOne1" data-toggle="collapse"
                        data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                        <div class="faq-heading">
                            <h4><img src="images/circle.png" alt="" />01</h4>
                            <h5>Overeating</h5>
                        </div>
                        <i class="fa-solid fa-chevron-up"></i>
                    </div>

                    <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1"
                        data-parent="#accordion1">
                        <div class="card-body">
                            <div class="faq-ans1">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="faq-message" style="
                          background: url(images/piza.webp) center center
                            no-repeat;
                        ">
                                            <ul>
                                                <li>
                                                    I am out with friends today and this pizza is hard
                                                    to resist.
                                                </li>
                                                <li>
                                                    Go for the single slice, that won’t harm.
                                                    <img src="images/faq-1img.svg" alt="" />
                                                </li>
                                                <li>
                                                    Let’s try and jump back on track tomorrow.
                                                    <img src="images/faq-1img.svg" alt="" />
                                                </li>
                                                <li>I needed to hear that, thank coach!</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="faq-content">
                                            <p>
                                                Get a personalized strategies from your dedicated
                                                nutritionist to promote mindful eating
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="card">
                    <div class="card-header" id="headingOne2" data-toggle="collapse" data-target="#collapseOne2"
                        aria-expanded="true" aria-controls="collapseOne1">
                        <div class="faq-heading">
                            <h4><img src="images/circle.png" alt="" />02</h4>
                            <h5>Physical Inactivity</h5>
                        </div>
                        <i class="fa-solid fa-chevron-up"></i>
                    </div>

                    <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordion1">
                        <div class="card-body">
                            <div class="faq-ans1">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="faq-message" style="
                          background: url(images/faq-bg1.jpg) center center
                            no-repeat;
                        ">
                                            <ul>
                                                <li>
                                                    You have to finish 10000 steps today.<img src="images/faq2.svg"
                                                        alt="" />
                                                </li>
                                                <li>On it coach 7K done.</li>
                                                <li>
                                                    Great, we will do core exercise in our session
                                                    tomorrow! <img src="images/faq2.svg" alt="" />
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="faq-content">
                                            <p>Get tailored workouts and 1 on 1 live sessions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="card">
                    <div class="card-header" id="headingOne3" data-toggle="collapse" data-target="#collapseOne3"
                        aria-expanded="true" aria-controls="collapseOne1">
                        <div class="faq-heading">
                            <h4><img src="images/circle.png" alt="" />03</h4>
                            <h5>Stress</h5>
                        </div>
                        <i class="fa-solid fa-chevron-up"></i>
                    </div>

                    <div id="collapseOne3" class="collapse" aria-labelledby="headingOne3" data-parent="#accordion1">
                        <div class="card-body">
                            <div class="faq-ans1">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="faq-message" style="
                          background: url(images/stress.webp) center center
                            no-repeat;
                        ">
                                            <ul>
                                                <li>
                                                    I am having a tough day at work, my boss stressing
                                                    me out.
                                                </li>
                                                <li>
                                                    Do you have a time for quick walk?
                                                    <img src="images/faq3.svg" alt="" />
                                                </li>
                                                <li>I am so busy, NO.</li>
                                                <li>
                                                    <span>Let’s try a breathing technique to keep stress
                                                        under control. Let me know how you feel.</span>
                                                    <img src="images/faq3.svg" alt="" />
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="faq-content">
                                            <p>
                                                Learn effective techniques to manage stress & poor
                                                sleep
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="card">
                    <div class="card-header" id="headingOne4" data-toggle="collapse" data-target="#collapseOne4"
                        aria-expanded="true" aria-controls="collapseOne1">
                        <div class="faq-heading">
                            <h4><img src="images/circle.png" alt="" />04</h4>
                            <h5>Lack of motivation</h5>
                        </div>
                        <i class="fa-solid fa-chevron-up"></i>
                    </div>

                    <div id="collapseOne4" class="collapse" aria-labelledby="headingOne4" data-parent="#accordion1">
                        <div class="card-body">
                            <div class="faq-ans1">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="faq-message" style="
                          background: url(images/faqbg-2.jpg) center center
                            no-repeat;
                        ">
                                            <ul>
                                                <li>
                                                    Can we skip the session today. Too lazy to wake up.
                                                </li>
                                                <li>
                                                    Don’t worry we will keep it light today.
                                                    <img src="images/faq4.svg" alt="" />
                                                </li>
                                                <li>Are you sure?</li>
                                                <li>
                                                    <span>Yes, I am waiting for you to join the video
                                                        call.</span>
                                                    <img src="images/faq4.svg" alt="" />
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="faq-content">
                                            <p>
                                                Transform inertia into action, coaches help you
                                                overcome motivational hurdles
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add more FAQ items as needed for Section 1 -->
            </div>
        </div>
    </section>

    <section class="testmonail section-padding" id="stories">
        <div class="container">
            <div class="center-title">
                <h2>Users stories.</h2>
                <p>
                    Cultivating lifestyle changes. Here’s what our members are saying.
                </p>
            </div>
            <div class="testmonail-slider">
                <div class="owl-carousel testmonail-all">
                    <div class="iteam">
                        <div class="testmonail-box">
                            <span><img src="images/star.png" alt="" /></span>
                            <p>
                                "The online workout sessions leave me energized and help me
                                stay more productive and focussed at work & home. I wouldn't
                                have believed that virtual fitness training would be so
                                effective!"
                            </p>
                            <div class="test-img">
                                <img src="images/review/1.png" alt="" />
                                <p><span>Devika Pradhan, USA</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- iteam -->
                    <div class="iteam">
                        <div class="testmonail-box">
                            <span><img src="images/star.png" alt="" /></span>
                            <p>
                                "My conversation with my lifestyle coach was much more than
                                discussing just food! I was comfortable enough to discuss my
                                health with her. She was very understanding."
                            </p>
                            <div class="test-img">
                                <img src="images/review/2.png" alt="" />
                                <p><span>DJ Swanahh, UAE</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- iteam -->
                    <div class="iteam">
                        <div class="testmonail-box">
                            <span><img src="images/star.png" alt="" /></span>
                            <p>
                                "I took my first session at the comfort of my home. The best
                                part about @fitverse.ai is that you get a personal trainer who
                                monitors your journey throughout and is live during the
                                session to push you"
                            </p>
                            <div class="test-img">
                                <img src="images/review/3.png" alt="" />
                                <p><span>Farah Farooqui, UAE</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- iteam -->
                    <div class="iteam">
                        <div class="testmonail-box">
                            <span><img src="images/star.png" alt="" /></span>
                            <p>
                                "During the call with my coach today was a bit of reflection
                                and I feel alot more energized than before and feeling a
                                lighter already. I am sleeping much better now."
                            </p>
                            <div class="test-img">
                                <img src="images/review/4.png" alt="" />
                                <p><span>Hasan Kanchwala, UAE</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- iteam -->
                    <div class="iteam">
                        <div class="testmonail-box">
                            <span><img src="images/star.png" alt="" /></span>
                            <p>
                                "I love the fact I can workout from anywhere anytime being it
                                a virtual workout. My coach is super knowledgeable of human
                                anatomy, helping fix my injury & work on my weak muscles!"
                            </p>
                            <div class="test-img">
                                <img src="images/review/5.png" alt="" />
                                <p><span>Ali Rahbar, UAE</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- iteam -->
                    <div class="iteam">
                        <div class="testmonail-box">
                            <span><img src="images/star.png" alt="" /></span>
                            <p>
                                "My training coach took all the details from me including my
                                lifestyle, what I eat, my everyday routine or any health
                                issues and made the best workout plan for me. Excited for this
                                journey!"
                            </p>
                            <div class="test-img">
                                <img src="images/review/6.png" alt="" />
                                <p><span>Saadiya Rafique, UAE</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- iteam -->
                    <div class="iteam">
                        <div class="testmonail-box">
                            <span><img src="images/star.png" alt="" /></span>
                            <p>
                                "I got a customized nutrition plan which honestly suggested a
                                good variety of food options and more protiens! Meal plan
                                never looked this tempting!"
                            </p>
                            <div class="test-img">
                                <img src="images/review/7.png" alt="" />
                                <p><span>Arsh, UAE</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- iteam -->
                    <div class="iteam">
                        <div class="testmonail-box">
                            <span><img src="images/star.png" alt="" /></span>
                            <p>
                                Fitverse.ai program has become a lifestyle for me. The
                                trainers are passionate and dedicated, making every session
                                fun and effective. I couldn't be happier with the results!
                            </p>
                            <div class="test-img">
                                <img src="images/review/8.png" alt="" />
                                <p><span>Ishendra Singh, UAE</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- iteam -->
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-logo">
                    <img src="images/white-logo.svg" alt="" />
                </div>
                <div class="footer-menu">
                    <ul>
                        <li><a href="about.php">About</a></li>
                        <li><a href="price-paln.php">Plans </a></li>
                        <li><a href="corporate.php">Corporate</a></li>
                    </ul>
                    <ul>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="redeem.php">Redeem Voucher</a></li>
                        <li><a href="coaches.php">Coaches</a></li>
                    </ul>
                    <ul>
                        <li class="for-desktop"><a href="#">Contact Us</a></li>
                        <li class="for-desktop">
                            <a href="mailto:support@fitverse.ai">support@fitverse.ai</a>
                        </li>
                        <li class="for-desktop">
                            <a href="tel:+971 505021912">+971 505021912</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-action">
                    <p>Subscribe to our newsletter</p>
                    <form>
                        <input type="email" placeholder="Email" />
                        <input type="submit" value="Subscribe" />
                        <div class="checkbox-in">
                            <input type="checkbox" name="" id="" />
                            <p>
                                I would like to receive product, offers and feature update.
                            </p>
                        </div>
                    </form>
                </div>
            </div>

            <div class="footer-bottom">
                <ul class="policy-phone for-desktop">
                    <li>©2023 METAFIT - FZCO. All rights reserved.</li>
                    <li class="wi-50">
                        <a href="privacy-palicy.php">Privacy policy</a>
                    </li>
                    <li class="wi-50"><a href="term.php">Terms & Condition</a></li>
                </ul>
                <ul class="join-mobile">
                    <li>Join us</li>
                    <li>
                        <a href="https://www.linkedin.com/company/fitverse-ai/" target="_blank"><i
                                class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/fitverse.ai__?igshid=MzRlODBiNWFlZA%3D%3D" target="_blank"><i
                                class="fa-brands fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="footer-for-phone for-mobile">
                <ul>
                    <li><a href="privacy-palicy.php">Privacy policy</a></li>
                    <li><a href="term.php">Terms & Condition</a></li>
                </ul>
                <ul>
                    <li>©2023 METAFIT - FZCO. All rights reserved.</li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="overlay" id="overlay" data-aos="fade-up">
        <div id="popup" class="popup">
            <div class="free-season-popup">
                <div class="popup-from">
                    <h2>Book first free session</h2>
                    <form id="trialForm" action="submit.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="fname">First name</label>
                                <input type="text" id="fname" name="fname" placeholder="Add first name here"
                                    required="" />
                            </div>
                            <div class="col-md-6">
                                <label for="name">Last name</label>
                                <input type="text" id="lname" name="lname" placeholder="Add last name here"
                                    required="" />
                            </div>
                            <div class="col-md-6">
                                <label for="name">Email</label>
                                <input type="email" id="email" name="email" placeholder="Enter your email"
                                    required="" />
                            </div>
                           <div class="col-md-6">
								<label for="name">Phone number</label>
								<div class="number-filed">
									<select name="countryCode" id="country-code" class="country-code">
										<option data-countrycode="IN" value="+91">India(+91)</option><option data-countrycode="AE" value="+971" selected="">UAE(+971)</option><option data-countrycode="GB" value="+44">UK(+44)</option><option data-countrycode="US" value="+1">US(+1)</option><option data-countrycode="SA" value="+966">KSA(+966)</option><option data-countrycode="AU" value="+61">AUS(+61)</option> <option data-countrycode="IN" value="+91">India (+91)</option>
										<option data-countrycode="SA" value="+966">Saudi Arabia (+966)</option>
										<option data-countrycode="US" value="+44">UK (+44)</option>
										<optgroup label="Other countries">
											<option data-countrycode="DZ" value="+213">Algeria (+213)</option>
											<option data-countrycode="AD" value="+376">Andorra (+376)</option>
											<option data-countrycode="AO" value="+244">Angola (+244)</option>
											<option data-countrycode="AI" value="+1264">Anguilla (+1264)</option>
											<option data-countrycode="AG" value="+1268">Antigua &amp; Barbuda (+1268)</option>
											<option data-countrycode="AR" value="+54">Argentina (+54)</option>
											<option data-countrycode="AM" value="+374">Armenia (+374)</option>
											<option data-countrycode="AW" value="+297">Aruba (+297)</option>
											<option data-countrycode="AU" value="+61">Australia (+61)</option>
											<option data-countrycode="AT" value="+43">Austria (+43)</option>
											<option data-countrycode="AZ" value="+994">Azerbaijan (+994)</option>
											<option data-countrycode="BS" value="+1242">Bahamas (+1242)</option>
											<option data-countrycode="BH" value="+973">Bahrain (+973)</option>
											<option data-countrycode="BD" value="+880">Bangladesh (+880)</option>
											<option data-countrycode="BB" value="+1246">Barbados (+1246)</option>
											<option data-countrycode="BY" value="+375">Belarus (+375)</option>
											<option data-countrycode="BE" value="+32">Belgium (+32)</option>
											<option data-countrycode="BZ" value="+501">Belize (+501)</option>
											<option data-countrycode="BJ" value="+229">Benin (+229)</option>
											<option data-countrycode="BM" value="+1441">Bermuda (+1441)</option>
											<option data-countrycode="BT" value="+975">Bhutan (+975)</option>
											<option data-countrycode="BO" value="+591">Bolivia (+591)</option>
											<option data-countrycode="BA" value="+387">Bosnia Herzegovina (+387)</option>
											<option data-countrycode="BW" value="+267">Botswana (+267)</option>
											<option data-countrycode="BR" value="+55">Brazil (+55)</option>
											<option data-countrycode="BN" value="+673">Brunei (+673)</option>
											<option data-countrycode="BG" value="+359">Bulgaria (+359)</option>
											<option data-countrycode="BF" value="+226">Burkina Faso (+226)</option>
											<option data-countrycode="BI" value="+257">Burundi (+257)</option>
											<option data-countrycode="KH" value="+855">Cambodia (+855)</option>
											<option data-countrycode="CM" value="+237">Cameroon (+237)</option>
											<option data-countrycode="CA" value="+1">Canada (+1)</option>
											<option data-countrycode="CV" value="+238">Cape Verde Islands (+238)</option>
											<option data-countrycode="KY" value="+1345">Cayman Islands (+1345)</option>
											<option data-countrycode="CF" value="+236">Central African Republic (+236)</option>
											<option data-countrycode="CL" value="+56">Chile (+56)</option>
											<option data-countrycode="CN" value="+86">China (+86)</option>
											<option data-countrycode="CO" value="+57">Colombia (+57)</option>
											<option data-countrycode="KM" value="+269">Comoros (+269)</option>
											<option data-countrycode="CG" value="+242">Congo (+242)</option>
											<option data-countrycode="CK" value="+682">Cook Islands (+682)</option>
											<option data-countrycode="CR" value="+506">Costa Rica (+506)</option>
											<option data-countrycode="HR" value="+385">Croatia (+385)</option>
											<option data-countrycode="CU" value="+53">Cuba (+53)</option>
											<option data-countrycode="CY" value="+90392">Cyprus North (+90392)</option>
											<option data-countrycode="CY" value="+357">Cyprus South (+357)</option>
											<option data-countrycode="CZ" value="+42">Czech Republic (+42)</option>
											<option data-countrycode="DK" value="+45">Denmark (+45)</option>
											<option data-countrycode="DJ" value="+253">Djibouti (+253)</option>
											<option data-countrycode="DM" value="+1809">Dominica (+1809)</option>
											<option data-countrycode="DO" value="+1809">Dominican Republic (+1809)</option>
											<option data-countrycode="EC" value="+593">Ecuador (+593)</option>
											<option data-countrycode="EG" value="+20">Egypt (+20)</option>
											<option data-countrycode="SV" value="+503">El Salvador (+503)</option>
											<option data-countrycode="GQ" value="+240">Equatorial Guinea (+240)</option>
											<option data-countrycode="ER" value="+291">Eritrea (+291)</option>
											<option data-countrycode="EE" value="+372">Estonia (+372)</option>
											<option data-countrycode="ET" value="+251">Ethiopia (+251)</option>
											<option data-countrycode="FK" value="+500">Falkland Islands (+500)</option>
											<option data-countrycode="FO" value="+298">Faroe Islands (+298)</option>
											<option data-countrycode="FJ" value="+679">Fiji (+679)</option>
											<option data-countrycode="FI" value="+358">Finland (+358)</option>
											<option data-countrycode="FR" value="+33">France (+33)</option>
											<option data-countrycode="GF" value="+594">French Guiana (+594)</option>
											<option data-countrycode="PF" value="+689">French Polynesia (+689)</option>
											<option data-countrycode="GA" value="+241">Gabon (+241)</option>
											<option data-countrycode="GM" value="+220">Gambia (+220)</option>
											<option data-countrycode="GE" value="+7880">Georgia (+7880)</option>
											<option data-countrycode="DE" value="+49">Germany (+49)</option>
											<option data-countrycode="GH" value="+233">Ghana (+233)</option>
											<option data-countrycode="GI" value="+350">Gibraltar (+350)</option>
											<option data-countrycode="GR" value="+30">Greece (+30)</option>
											<option data-countrycode="GL" value="+299">Greenland (+299)</option>
											<option data-countrycode="GD" value="+1473">Grenada (+1473)</option>
											<option data-countrycode="GP" value="+590">Guadeloupe (+590)</option>
											<option data-countrycode="GU" value="+671">Guam (+671)</option>
											<option data-countrycode="GT" value="+502">Guatemala (+502)</option>
											<option data-countrycode="GN" value="+224">Guinea (+224)</option>
											<option data-countrycode="GW" value="+245">Guinea - Bissau (+245)</option>
											<option data-countrycode="GY" value="+592">Guyana (+592)</option>
											<option data-countrycode="GB" value="+47">Norway (+47)</option>
											<option data-countrycode="HT" value="+509">Haiti (+509)</option>
											<option data-countrycode="HN" value="+504">Honduras (+504)</option>
											<option data-countrycode="HK" value="+852">Hong Kong (+852)</option>
											<option data-countrycode="HU" value="+36">Hungary (+36)</option>
											<option data-countrycode="IS" value="+354">Iceland (+354)</option>
											<option data-countrycode="IN" value="+91">India (+91)</option>
											<option data-countrycode="ID" value="+62">Indonesia (+62)</option>
											<option data-countrycode="IR" value="+98">Iran (+98)</option>
											<option data-countrycode="IQ" value="+964">Iraq (+964)</option>
											<option data-countrycode="IE" value="+353">Ireland (+353)</option>
											<option data-countrycode="IL" value="+972">Israel (+972)</option>
											<option data-countrycode="IT" value="+39">Italy (+39)</option>
											<option data-countrycode="JM" value="+1876">Jamaica (+1876)</option>
											<option data-countrycode="JP" value="+81">Japan (+81)</option>
											<option data-countrycode="JO" value="+962">Jordan (+962)</option>
											<option data-countrycode="KZ" value="+7">Kazakhstan (+7)</option>
											<option data-countrycode="KE" value="+254">Kenya (+254)</option>
											<option data-countrycode="KI" value="+686">Kiribati (+686)</option>
											<option data-countrycode="KP" value="+850">Korea North (+850)</option>
											<option data-countrycode="KR" value="+82">Korea South (+82)</option>
											<option data-countrycode="KW" value="+965">Kuwait (+965)</option>
											<option data-countrycode="KG" value="+996">Kyrgyzstan (+996)</option>
											<option data-countrycode="LA" value="+856">Laos (+856)</option>
											<option data-countrycode="LV" value="+371">Latvia (+371)</option>
											<option data-countrycode="LB" value="+961">Lebanon (+961)</option>
											<option data-countrycode="LS" value="+266">Lesotho (+266)</option>
											<option data-countrycode="LR" value="+231">Liberia (+231)</option>
											<option data-countrycode="LY" value="+218">Libya (+218)</option>
											<option data-countrycode="LI" value="+417">Liechtenstein (+417)</option>
											<option data-countrycode="LT" value="+370">Lithuania (+370)</option>
											<option data-countrycode="LU" value="+352">Luxembourg (+352)</option>
											<option data-countrycode="MO" value="+853">Macao (+853)</option>
											<option data-countrycode="MK" value="+389">Macedonia (+389)</option>
											<option data-countrycode="MG" value="+261">Madagascar (+261)</option>
											<option data-countrycode="MW" value="+265">Malawi (+265)</option>
											<option data-countrycode="MY" value="+60">Malaysia (+60)</option>
											<option data-countrycode="MV" value="+960">Maldives (+960)</option>
											<option data-countrycode="ML" value="+223">Mali (+223)</option>
											<option data-countrycode="MT" value="+356">Malta (+356)</option>
											<option data-countrycode="MH" value="+692">Marshall Islands (+692)</option>
											<option data-countrycode="MQ" value="+596">Martinique (+596)</option>
											<option data-countrycode="MR" value="+222">Mauritania (+222)</option>
											<option data-countrycode="YT" value="+269">Mayotte (+269)</option>
											<option data-countrycode="MX" value="+52">Mexico (+52)</option>
											<option data-countrycode="FM" value="+691">Micronesia (+691)</option>
											<option data-countrycode="MD" value="+373">Moldova (+373)</option>
											<option data-countrycode="MC" value="+377">Monaco (+377)</option>
											<option data-countrycode="MN" value="+976">Mongolia (+976)</option>
											<option data-countrycode="MS" value="+1664">Montserrat (+1664)</option>
											<option data-countrycode="MA" value="+212">Morocco (+212)</option>
											<option data-countrycode="MZ" value="+258">Mozambique (+258)</option>
											<option data-countrycode="MN" value="+95">Myanmar (+95)</option>
											<option data-countrycode="NA" value="+264">Namibia (+264)</option>
											<option data-countrycode="NR" value="+674">Nauru (+674)</option>
											<option data-countrycode="NP" value="+977">Nepal (+977)</option>
											<option data-countrycode="NL" value="+31">Netherlands (+31)</option>
											<option data-countrycode="NC" value="+687">New Caledonia (+687)</option>
											<option data-countrycode="NZ" value="+64">New Zealand (+64)</option>
											<option data-countrycode="NI" value="+505">Nicaragua (+505)</option>
											<option data-countrycode="NE" value="+227">Niger (+227)</option>
											<option data-countrycode="NG" value="+234">Nigeria (+234)</option>
											<option data-countrycode="NU" value="+683">Niue (+683)</option>
											<option data-countrycode="NF" value="+672">Norfolk Islands (+672)</option>
											<option data-countrycode="NP" value="+670">Northern Marianas (+670)</option>
											<option data-countrycode="NO" value="+47">Norway (+47)</option>
											<option data-countrycode="OM" value="+968">Oman (+968)</option>
											<option data-countrycode="PW" value="+680">Palau (+680)</option>
											<option data-countrycode="PA" value="+507">Panama (+507)</option>
											<option data-countrycode="PG" value="+675">Papua New Guinea (+675)</option>
											<option data-countrycode="PY" value="+595">Paraguay (+595)</option>
											<option data-countrycode="PE" value="+51">Peru (+51)</option>
											<option data-countrycode="PH" value="+63">Philippines (+63)</option>
											<option data-countrycode="PL" value="+48">Poland (+48)</option>
											<option data-countrycode="PT" value="+351">Portugal (+351)</option>
											<option data-countrycode="PR" value="+1787">Puerto Rico (+1787)</option>
											<option data-countrycode="QA" value="+974">Qatar (+974)</option>
											<option data-countrycode="RE" value="+262">Reunion (+262)</option>
											<option data-countrycode="RO" value="+40">Romania (+40)</option>
											<option data-countrycode="RU" value="+7">Russia (+7)</option>
											<option data-countrycode="RW" value="+250">Rwanda (+250)</option>
											<option data-countrycode="SM" value="+378">San Marino (+378)</option>
											<option data-countrycode="ST" value="+239">Sao Tome &amp; Principe (+239)</option>
											<option data-countrycode="SA" value="+966">Saudi Arabia (+966)</option>
											<option data-countrycode="SN" value="+221">Senegal (+221)</option>
											<option data-countrycode="CS" value="+381">Serbia (+381)</option>
											<option data-countrycode="SC" value="+248">Seychelles (+248)</option>
											<option data-countrycode="SL" value="+232">Sierra Leone (+232)</option>
											<option data-countrycode="SG" value="+65">Singapore (+65)</option>
											<option data-countrycode="SK" value="+421">Slovak Republic (+421)</option>
											<option data-countrycode="SI" value="+386">Slovenia (+386)</option>
											<option data-countrycode="SB" value="+677">Solomon Islands (+677)</option>
											<option data-countrycode="SO" value="+252">Somalia (+252)</option>
											<option data-countrycode="ZA" value="+27">South Africa (+27)</option>
											<option data-countrycode="ES" value="+34">Spain (+34)</option>
											<option data-countrycode="LK" value="+94">Sri Lanka (+94)</option>
											<option data-countrycode="SH" value="+290">St. Helena (+290)</option>
											<option data-countrycode="KN" value="+1869">St. Kitts (+1869)</option>
											<option data-countrycode="SC" value="+1758">St. Lucia (+1758)</option>
											<option data-countrycode="SD" value="+249">Sudan (+249)</option>
											<option data-countrycode="SR" value="+597">Suriname (+597)</option>
											<option data-countrycode="SZ" value="+268">Swaziland (+268)</option>
											<option data-countrycode="SE" value="+46">Sweden (+46)</option>
											<option data-countrycode="CH" value="+41">Switzerland (+41)</option>
											<option data-countrycode="SI" value="+963">Syria (+963)</option>
											<option data-countrycode="TW" value="+886">Taiwan (+886)</option>
											<option data-countrycode="TJ" value="+7">Tajikstan (+7)</option>
											<option data-countrycode="TH" value="+66">Thailand (+66)</option>
											<option data-countrycode="TG" value="+228">Togo (+228)</option>
											<option data-countrycode="TO" value="+676">Tonga (+676)</option>
											<option data-countrycode="TT" value="+1868">Trinidad &amp; Tobago (+1868)</option>
											<option data-countrycode="TN" value="+216">Tunisia (+216)</option>
											<option data-countrycode="TR" value="+90">Turkey (+90)</option>
											<option data-countrycode="TM" value="+7">Turkmenistan (+7)</option>
											<option data-countrycode="TM" value="+993">Turkmenistan (+993)</option>
											<option data-countrycode="TC" value="+1649">Turks &amp; Caicos Islands (+1649)</option>
											<option data-countrycode="TV" value="+688">Tuvalu (+688)</option>
											<option data-countrycode="UG" value="+256">Uganda (+256)</option>
											<!-- <option data-countryCode="GB" value="+44">UK (+44)</option> -->
											<option data-countrycode="UA" value="+380">Ukraine (+380)</option>
											<option data-countrycode="AE" value="+971">United Arab Emirates (+971)</option>
											<option data-countrycode="UY" value="+598">Uruguay (+598)</option>
											<!-- <option data-countryCode="US" value="+1">USA (+1)</option> -->
											<option data-countrycode="UZ" value="+7">Uzbekistan (+7)</option>
											<option data-countrycode="VU" value="+678">Vanuatu (+678)</option>
											<option data-countrycode="VA" value="+379">Vatican City (+379)</option>
											<option data-countrycode="VE" value="+58">Venezuela (+58)</option>
											<option data-countrycode="VN" value="+84">Vietnam (+84)</option>
											<option data-countrycode="VG" value="+84">Virgin Islands - British (+1284)</option>
											<option data-countrycode="VI" value="+84">Virgin Islands - US (+1340)</option>
											<option data-countrycode="WF" value="+681">Wallis &amp; Futuna (+681)</option>
											<option data-countrycode="YE" value="+969">Yemen (North)(+969)</option>
											<option data-countrycode="YE" value="+967">Yemen (South)(+967)</option>
											<option data-countrycode="ZM" value="+260">Zambia (+260)</option>
											<option data-countrycode="ZW" value="+263">Zimbabwe (+263)</option>
										</optgroup>
									</select>
									<input id="phone-number" type="tel" name="phone" placeholder="0 000 0000" required=""/>
								</div>
							</div>
                            <div class="col-md-6">
                                <label for="name">Type of training</label>
                                <select id="t-training" name="t-training">
                                    <option value="Personal training" selected>
                                        Personal training
                                    </option>
                                    <option value="Yoga">Yoga</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Ideal training time</label>
                                <select id="t-time" name="t-time">
                                    <option value="Morning">Morning</option>
                                    <option value="Afternoon" selected>Afternoon</option>
                                    <option value="Evening">Evening</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Gender</label>
                                <select id="gender" name="gender">
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Prefer not to say">Prefer not to say</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Occupation</label>
                                <select name="occupation" id="occupation">
                                    <option value="Homemaker">Homemaker</option>
                                    <option value="job">Corporate job / Business</option>
                                    <option value="Student">Student</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <span><input type="submit" value="Book now" /></span>
                                <input type="hidden" id="tokenId" name="tokenId" value="<?php echo $tokenId; ?>" />
                                <input type="hidden" id="tokenKey" name="tokenKey" value="<?php echo $tokenKey; ?>" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="popup-img">
                    <img src="images/popup-img.png" alt="" />
                </div>
                <span class="close-btn" onclick="togglePopup()"><img src="images/pop-close.png" alt="" /></span>
            </div>
        </div>
    </div>

    <!-- jquary-cdn-link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   
    <!-- swiper slider -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   
    <!-- owl-carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <!-- main.js -->
    <script src="js/main.js"></script>

    <script>
    // Your provided JavaScript code
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("trialForm");
        form.addEventListener("submit", function(event) {
            event.preventDefault();
            // var fullPhoneNumber = iti.getNumber();

            const formData = new FormData(form);
            // formData.append("full-phone", fullPhoneNumber);

            // Perform form validation here if needed
            console.log(formData);

            // Submit the form data via AJAX
            fetch(form.action, {
                    method: "POST",
                    body: formData,
                })
                .then((response) => {
                    // Log the raw response data here
                    console.log(response);

                    // Return the response as JSON
                    return response.json();
                })
                .then((data) => {
                    // Handle the response data here
                    if (data.status === "success") {
                        Swal.fire({
                            icon: "success",
                            title: "<span style=\"font-family: 'Poppins', sans-serif; margin-bottom: 10px!important;\">Send!</span>",
                            text: "We received your request, we will get back to you shortly",
                            confirmButtonText: "Okay",
                            allowOutsideClick: false,
                            willClose: () => {
                                location.reload();
                            },
                        });
                        closePopup();
                    } else {
                        Swal.fire({
                            icon: "success",
                            title: "<span style=\"font-family: 'Poppins', sans-serif; margin-bottom: 10px!important;\">Send!</span>",
                            text: "We received your request, we will get back to you shortly",
                            confirmButtonText: "Okay",
                            allowOutsideClick: false,
                            willClose: () => {
                                location.reload();
                            },
                        });
                    }
                })
                .catch((error) => {
                    // Handle any errors that occurred during the AJAX request
                    console.error("Error:", error);
                });
        });
    });
    //
    </script>
</body>

</html>