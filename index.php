<?php
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/SMTP.php';
require_once 'scripts/contact.php';

if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $name = trim($_POST['lname']);
    $subject = trim($_POST['messagesub']);
    $email = trim($_POST['email']);
    $msg = trim($_POST['message']);

    if(!empty($name) && !empty($email) && !empty($subject) && !empty($msg) && !empty($lname)){
        contactMail($name, $email, $subject, $msg, $lname);
    }else{
        $message = 'Please fill out the required feilds';
    }
    
}

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
    <title>Home Page</title>
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
                <li class="nav__item"><a class="nav__link" href="#home">Home</a></li>
                <li class="nav__item"><a class="nav__link" href="#services">My Services</a></li>
                <li class="nav__item"><a class="nav__link" href="#work">My Work</a></li>
                <li class="nav__item"><a class="nav__link" href="#about">About Me</a></li>
                <li class="nav__item"><a class="nav__link" href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- introduction -->
    <section class="intro" id="home">
        <h1 class="section__title section__title--intro">
            Hi i am <strong>Collins Ilo</strong>
        </h1>
        <p class="section__subtitle section__subtitle--intro">Full Stack Developer</p>
        <img src="images/collins.jpg" alt="image of collins" class="intro__img">
    </section>

    <!-- my services -->
    <section class="my-services" id="services">
        <h2 class="section__title section__title--services">
            What I Do
        </h2>
        <div class="services">

            <div class="service">
                <h3>Development</h3>
                <p class="text">Front End Web Design, Back End Development, CMS (Content Management Systems ), UMS (User Mangement Systems) and E-Commerce Websites.</p>
            </div>

            <div class="service">
                <h3>Design</h3>
                <p class="text">Graphic and Motion Designer. Logos, Infographics, short-videos, posters, online and Print Ad designs.</p>
            </div>
            

        </div>
        <a href="#work" class="btn">My Work</a>
    </section>

    <!-- about section -->
    <section class="about-me" id="about">
        <h2 class="section__title section__title--about">Who I am</h2>
        <p class="section__subtitle section__subtitle--about">
            Web Designer & Developer 
        </p>

        <div class="about-me__body">
            <p>I am a Frontend and Backend Web Developer with a passion for solving problems. I find fulfilment in turning ideas into reality. I am a Self Starter who also thrives in a collaborative environment. </p>
            <a href="https://drive.google.com/file/d/1WFdUZHIVw9Gblsy8b4QPbW9gNCOhZtJC/view?usp=sharing" class="btn">View Resume</a>
        </div>


        <img src="images/collins_about.jpg" alt="image of collins" class="about-me__img">
    </section>


    <!-- my work -->
    <section class="my-work" id="work">
        <h2 class="section__title section__title--work">My Projects</h2>
        <p class="section__subtitle section__subtitle--work">A Collection of my range of work</p>

        <h3 class="section__title section__title--work port-title">Web Development</h2>
        <div class="portfolio">
            <a href="portfolio.php#roku" class="portfolio__item">
                <img src="images/roku_mockup.jpg" class="portfolio__img" alt="Roku Flashback Mockup">
            </a>

            <a href="portfolio.php#sportschek" class="portfolio__item">
                <img src="images/sportchek_logo.jpg" class="portfolio__img" alt="SportChek CMS Logo">
            </a>

            <a href="portfolio.php#Drag" class="portfolio__item">
                <img src="images/drag_n_drop.jpg" class="portfolio__img" alt="image of drag and drop app">
            </a>

            <a href="portfolio.php#Drumkit" class="portfolio__item">
                <img src="images/drumkit.jpg" class="portfolio__img" alt="image of drumkit app">
            </a>

            <a href="portfolio.php#Hiv" class="portfolio__item">
                <img src="images/hiv_aids_mockup.jpg" class="portfolio__img" alt="mockup of Hiv Campaign">
            </a>

            <a href="portfolio.php#chat-app" class="portfolio__item">
                <img src="images/chat_app_1.jpg" class="portfolio__img" alt="image of ChatApp">
            </a>

            <a href="portfolio.php#ontario" class="portfolio__item">
                <img src="images/ontario.jpg" class="portfolio__img" alt="Ontario Summer Logo">
            </a>

        </div>

        <h3 class="section__title section__title--work port-title">Graphic & Motion Design</h2>
            <div class="portfolio motion-graphic">
                <a href="portfolio.php#cig" class="portfolio__item">
                    <img src="images/e-cig_ad.jpg" class="portfolio__img" alt="image of E-cig Ad">
                </a>
                <a href="portfolio.php#cliff" class="portfolio__item">
                <img src="images/logo-cliff.jpg" class="portfolio__img" alt="Cliff Creatives Logo">
            </a>
                <a href="portfolio.php#kobe" class="portfolio__item">
                    <img src="images/mamba.jpg" class="portfolio__img" alt="image of Sports Visuals Mockup">
                </a>
            </div>

    </section>

    <section id="contact" class="contact">
        <h2 class="heading">Get In Touch</h2>
        <br><br><?php echo !empty($message)? $message: ''; ?></p>
        <div class="contact__form">
        <form action="index.php" method="post" class="contact-form">
                <div class="col-sm-6">
                  <div class="input-block">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="name" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-block">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" name="lname"  required>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-block">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email"  required>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-block">
                    <label for="">Message Subject</label>
                    <input type="text" class="form-control" name="messagesub"  required>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-block textarea">
                    <label for="">Drop your message here</label>
                    <textarea rows="3" type="text" class="form-control" name="message"  required></textarea>
                  </div>
                </div>
                <div class="col-sm-12">
                <button name='submit' class="square-button">Send</button>
                </div>
              </form>
        </div>
    </section>

    <footer class="footer">
        <ul class="social-list">
            <li class="social-list__item">
                <a href="https://twitter.com/Ilominati" class="social-list__link"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="social-list__item">
                <a href="https://github.com/junior231" class="social-list__link"><i class="fab fa-github-square"></i></a>
            </li>
            <li class="social-list__item">
                <a href="https://www.instagram.com/ilominati231/" class="social-list__link"><i class="fab fa-instagram-square"></i></a>
            </li>
            <li class="social-list__item">
                <a href="https://www.linkedin.com/in/collins-ilo-37498a193/?msgControlName=reply_to_sender&msgConversationId=6662125395372060673&msgOverlay=true" class="social-list__link"><i class="fab fa-linkedin-in"></i></i></a>
            </li>
        </ul>

        <p class="copy">&copy; 2020 Collins Ilo<p>


    </footer>

    <script src="js/main.js"></script>

</body>
</html>