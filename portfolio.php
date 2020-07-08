<?php
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/SMTP.php';
require_once 'scripts/contact.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Source+Sans+Pro&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b7fcc26f1f.js" crossorigin="anonymous"></script>
    <title>Portfolio Page</title>
</head>
<body>
    <header>
        <div class="logo">
            <!-- <h2>colins</h2> -->
            <img src="images/collins_logo_colored.svg" alt="" class="logo-img">
        </div>
        <button class="nav-toggle" aria-label="toggle navigation">
            <span class="hamburger"></span>
        </button>

        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item"><a class="nav__link" href="index.php">Home</a></li>
                <li class="nav__item"><a class="nav__link" href="index.php#services">My Services</a></li>
                <li class="nav__item"><a class="nav__link" href="index.php#work">My Work</a></li>
                <li class="nav__item"><a class="nav__link" href="index.php#about">About Me</a></li>
                <li class="nav__item"><a class="nav__link" href="index.php#about">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="intro">
        <h1 class="section__title section__title--intro">
            Project<strong>Breakdown</strong>
        </h1>
        <p class="section__subtitle section__subtitle--intro">Method behind the Madness</p>
        <img src="images/bg_image.jpg" alt="image of laptop" class="intro__img">
    </section>


    <!-- chat app description begins -->
    <div id="chat-app" class="portfolio-item-individual">
        <h2 class="headings">Chat App</h2>
        <p class="port-flex">This is a Chat App i designed and built as a school project during my program at Fanshawe College. It is simple and super easy to use. Get chatting with friends and have some fun.</p>

        <h3 class="headings"><strong>Built with:</strong> HTML5, CSS3, SASS, Javascript, Express, Vue.js</h3>

        <div class="inner-pic">
            <h3 class="sub-headings">Purpose & Objective </h3>
            <p class="port-text">The main objective was to create a chat application that enables users to send and receive messages in a chat room.</p>

            <h3 class="sub-headings">How it was executed</h3>
            <p class="port-text">Started off with an HTML form and styling with CSS/SASS. The next step was to make the Chat Application dynamic i.e. Enable two-way messaging. This was achieved using the Vue.js Framework, Node.js and Express HandleBars. The Node.js, Express handlebars and Vue.js Framework provided the tools for Server/Client two-way binding and Dynamic Routing. 
            
            <img src="images/chat_app_1.jpg" alt="Image of Chat App Signup Page" class="port-img inner-image">
            <br><br>To Validate the User before entering the Chat room, i included a Login Page. I also displayed the current users online on the Chat App once Login is complete. This lets other users know when someone leaves or enters the chat room.</p>
            
            
            <h3 class="sub-headings">Final Look</h3>
            <img src="images/chat_app_3.jpg" alt="Image Of Chat App Interface" class="inner-image">
            <img src="images/chat_app_2.jpg" alt="Image of Chat App Interface" class="inner-image">
            <a href="https://github.com/junior231/ilo_collins_ChatApp" class="btn">Github Repository</a>
        </div>
    </div>

    <!-- sportschek cms -->
    <div id="sportschek" class="portfolio-item-individual">
        <h2 class="headings">SportChek CMS </h2>
        <p>This is a Custom Content Mangement Sytem built and designed as a school project for Sportchek.</p>
        <h3 class="headings"><strong>Built with:</strong> HTML5, CSS3, SASS, Javascript, PHP, MySQL</h3>

        <h4 class="headings"><strong>Role: </strong>Lead Back-end Developer</h4>
        
        <div class="inner-pic">
        <h3 class="sub-headings">Purpose & Objective </h3>
        <p class="port-text">The main objective was to design an Online Store with pictures all sourced from the SportChek website, and also create a Content Management System (CMS) that allows an Administrator to Create new products, Edit products and Delete products on the website.</p>

        <h3 class="sub-headings">How it was executed</h3>
        <p class="port-text">First, we had to gather all the images/products displayed on the website, from the official SportChek website. Then we had to create a database for the products using MySQL. Once the Database was created, we had to establish Client/Server Side connection using PHP to dyanmically display all the products currently in the database on the website. Filters and a Search area were also added to make the user experience more enjoyable.
        
        <img src="images/sportchek_mockup_4.jpg" alt="SportChek CMS Mockup" class="port-img inner-image">
        <img src="images/sportchek_mockup_2.jpg" alt="Image of SportChek CMS Interface" class="inner-image">
        
        <br><br>An Admin Page was also created to allow the admin create, edit and delete products. For validation, the admin has to log in to be able to carry out these tasks.</p>
        <img src="images/sportchek_mockup_3.jpg" alt="Image Of SportChek CMS Interface" class="inner-image">
        <img src="images/sportchek_admin.jpg" alt="Image of Admin Page" class="inner-image">

        <a href="https://github.com/grahamvickers/sportchek_cms" class="btn">Github Repository</a>
        </div>
    </div>

    <!-- drumkit -->
    <div id="Drumkit" class="portfolio-item-individual">
        <div class="inner-pic">
        <h2 class="headings">DrumKit App</h2>
        <p class="port-text">This is a Cool Drumkit App, come up with some nice beat combos by simply pushing the keys on your keyboard. Combine sounds to come up with a catchy tune.</p>
        <img src="images/drumkit.jpg" alt="Image of Drumkit App" class="inner-image">
        <h3 class="headings"><strong>Built with:</strong> HTML5, CSS3, and Javascript</h3>
        <a href="https://github.com/junior231/JavaScript_DrumKit" class="btn">Github Repository</a>
        </div>
    </div>

    <!-- drag and drop -->
    <div id="Drag" class="portfolio-item-individual">
        <div class="inner-pic">
        <h2 class="headings">Drag and Drop Puzzle App</h2>
        <p class="port-text">This is Drag and Drop App which lets you solve various Picture Puzzles. Drag and drop the images on the left into the boxes on the right and try to come up with the perfect image.</p>
        <img src="images/drag_n_drop.jpg" alt="Image of the Drag and Drop App" class="inner-image">
        <h3 class="headings"><strong>Built with:</strong> HTML5, CSS3, and Javascript</h3>
        <a href="https://github.com/junior231/Drag_and_Drop" class="btn">Github Repository</a>
        </div>
    </div>


    <div id="Hiv" class="portfolio-item-individual">
       <div class="inner-pic">
       <h2 class="headings">RHAC London Safe Sex Campaign</h2>
        <p class="port-text">This is a campaign we came up with to discuss and promote safe and healthy sexual behaviour in the LBGTQA+ community.</p>
        <img src="images/hiv_aids_mockup.jpg" alt="Image of Hiv/Aids Mockup" class="inner-image">
        <h3 class="headings"><strong>Built with:</strong> HTML5, SASS, Javascript, MySQL, PHP</h3>
        <h4 class="headings"><strong>Role: </strong>Front-end Developer</h4>
        <a href="https://github.com/MalekFarag/farag_ilo_macdonald_shahfazlollahi_fip_" class="btn">Github Repository</a>
       </div>
    </div>

    <div id="ontario" class="portfolio-item-individual">
      <div class="inner-pic">
      <h2 class="headings">Ontario Summer</h2>
        <p class="port-text">This is a Website and Ad Campaign promoting a summer of fun in Ontario. This was a Hackathon group task for school and had to be completed in 24hrs.</p>
        <img src="images/ontario.jpg" alt="Image of Ontario Summer Logo" class="inner-image">
        <h3 class="headings"><strong>Built with:</strong> HTML5, CSS3, SASS, Vue.js, PHP, MySQL and Javascript</h3>
        <h4 class="headings"><strong>Role: </strong>Lead Back-end Developer</h4>
        <a href="https://github.com/junior231/ilo_Macdonald_Nick_Farag_Kaur_Hackathon_2020" class="btn">Github Repository</a>
      </div>
    </div>

    <div id="cliff" class="portfolio-item-individual">
       <div class="inner-pic">
       <h2 class="headings">Cliffs Creatives Branding Agency</h2>
       <p class="port-text">This is a Branding Agency a group of friends and i came up with for a school project in 10 days. Logo, images and text had to be original, we also designed a website and a created a video that tells you what the Agency is all about.</p>
       <img src="images/logo-cliff.jpg" alt="Image of Ontario Summer Logo" class="inner-image">
       <h3 class="headings"><strong>Built with:</strong> HTML5, CSS3, SASS, Adobe Illustrator, Photoshop, Adobe Premier Pro and JavaScript</h3>
        <h4 class="headings"><strong>Role: </strong>Lead Back-end Developer</h4>
        <a href="https://github.com/MalekFarag/farag_m_ilo_c_shahfazlollahi_n_boot_camp" class="btn">Github Repository</a>
       </div>
    </div> 

    <div id="kobe" class="portfolio-item-individual">
        <div class="inner-pic">
        <h2 class="headings">Data Visualization</h2>
        <p class="port-text">This is a Sports Data Visualization Project using original futuristic HUD designs to higlight various strengths and abilities of an athlete. As a tribute to the Late Kobe Bryant, we decided to make him the athlete in focus, for this group project for school.</p>
        <img src="images/mamba.jpg" alt="Image of Kobe" class="inner-image">
        <h3 class="headings"><strong>Built with:</strong> Adobe Illustrator, Adobe After Effects and Adobe Premier</h3> 
        <h4 class="headings">Watch Video Below</h4>
        <video src="video/kobe_vid.mp4" controls></video>

        </div>
    </div> 

    <div id="roku" class="portfolio-item-individual">
        <div class="inner-pic">
        <h2 class="headings">Roku Flashback App</h2>
        <p class="port-text">This is a Flashback App designed and created as a retro streaming platform for old movies, tv-shows and music from the 50s to 80s. Take a flashback, by going on a trip down memory lane.</p>
        <img src="images/roku_mockup.jpg" alt="Image of Roku Flashback login screen" class="inner-image">
        <h3 class="headings"><strong>Built with:</strong>HTML5, CSS3, Vue.js, SASS, Gulp.js, PHP, MYSQL, Node.js and JavaScript</h3> 
        <a href="https://github.com/junior231/Ilo_C_Gajjar_K_Roku_Flashback" class="btn">Github Repository</a>
        </div>
    </div> 

    <div id="cig" class="portfolio-item-individual">
        <div class="inner-pic">
        <h2 class="headings">E-cig Advertising Campaign</h2>
        <p class="port-text">Checkout this Poster designed for an Ad campaign against teenage vaping and E-cig usage. This was created as a school project for Health Canada.</p>
        <img src="images/e-cig_ad.jpg" alt="Image of Poster" class="inner-image">
        <h3 class="headings"><strong>Built with:</strong>Adobe Illustrator and Photoshop</h3>
        </div>
    </div> 

    <footer class="footer">
        <div class="port-links">
        <a href="index.php" class="footer__link">Home</a>
        <a href="index.php#contact" class="footer__link">Contact</a>
        </div>
        <ul class="social-list">
            <li class="social-list__item">
                <a href="#" class="social-list__link"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="social-list__item">
                <a href="#" class="social-list__link"><i class="fab fa-github-square"></i></a>
            </li>
            <li class="social-list__item">
                <a href="#" class="social-list__link"><i class="fab fa-instagram-square"></i></a>
            </li>
            <li class="social-list__item">
                <a href="#" class="social-list__link"><i class="fab fa-codepen"></i></a>
            </li>
        </ul>

        <p class="copy">&copy; 2020 Collins Ilo<p>
    </footer>

    <script src="js/main.js"></script>

</body>
</html>