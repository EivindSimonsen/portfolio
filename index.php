<!DOCTYPE html>
<?php
  $message_sent = false;
  if(isset($_POST["email"]) && $_POST["email"] != "") {

    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      // Submit the form
      $userName = $_POST["name"];
      $userEmail = $_POST["email"];
      $messageSubject = $_POST["subject"];
      $userMessage = $_POST["message"];

      $to = "eivind.simonsen1998@gmail.com";
      $body = "";

      $body .= "From: ".$userName. "\r\n";
      $body .= "Email: ".$userEmail. "\r\n";
      $body .= "Message: ".$userMessage. "\r\n";

      mail($to, $messageSubject, $body);

      $message_sent = true;
    }
    else {
      $invalid = "form-invalid";
    }
  }
?> 
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EAS Portfolio</title>
    <script src="https://kit.fontawesome.com/8bf4111a60.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header>
      <section class="home">
        <div class="home__intro">
          <h1>Hello!</h1>
          <p>I'm <span class="creator">Eivind Aleksander Simonsen</span></p>
          <p>Junior front-end developer</p>
          <a class="cta active-home" href="#about">View my work</a>
        </div>
        <div class="home__snippet">
          <p>const infoAboutMe = [</p>
          <p class="curly-braces">{</p>
          <p><span class="red">firstName</span>: <span class="green">"Eivind"</span>,</p>
          <p><span class="red">lastName</span>: <span class="green">"Simonsen"</span>,</p>
          <p><span class="red">age</span>: <span class="green">23</span>,</p>
          <p><span class="red">description</span>: <span class="green">"Nice guy!"</span>,</p>
          <p><span class="red">job</span>: <span class="green">null</span>,</p>
          <p class="curly-braces">}</p>
          <p class="bracket">];</p>
        </div>
      </section>
    </header>
    <main>
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <i class="fas fa-bars"></i>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link home-btn" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active-about" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active-projects" href="#projects">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active-contact" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- About section -->
      <section class="about" id="about">
        <div class="section-heading extra-padding-about-h2">
          <h2>About</h2>
        </div>
        <div class="description">
          <div class="description__image">
            <img src="img/profilbilde.jpg" alt="A profile image of me" />
          </div>
          <div class="description__text">
            <h3>This is me</h3>
            <p>My name is Eivind Aleksander Simonsen, and I am 23 years of age. Currently I study front-end at Noroff University.</p>
            <p>My passion is creating good looking websites with dynamic and detailed features. I love the feeling of making things work!</p>
          </div>
        </div>
        <!-- Attributes section -->
        <div class="attributes">
          <div class="hexagon">
            <i class="fas fa-desktop"></i>
            <i class="fas fa-mobile-alt"></i>
            <div class="hexagon__text responsive">
              <h4>Responsive</h4>
              <p>I provide websites for all screen sizes.</p>
            </div>
          </div>
          <div class="hexagon">
            <i class="fas fa-history"></i>
            <div class="hexagon__text effectivity">
              <h4>Effectivity</h4>
              <p>Always focused on the task at hand.</p>
            </div>
          </div>
          <div class="hexagon">
            <i class="fas fa-search"></i>
            <div class="hexagon__text attention">
              <h4>Attention to details</h4>
              <p>I've got an eye for small and big design details.</p>
            </div>
          </div>
          <div class="hexagon">
            <i class="fas fa-lightbulb"></i>
            <div class="hexagon__text adaptive">
              <h4>Adaptive</h4>
              <p>Always up to date on new features.</p>
            </div>
          </div>
        </div>
        <!-- Skillset section -->
        <div class="skillset container row">
          <div class="skillset__container col-sm-12 col-md-6 col-lg-4">
            <h4>HTML</h4>
            <i class="fab fa-html5"></i>
          </div>
          <div class="skillset__container col-sm-12 col-md-6 col-lg-4">
            <h4>CSS</h4>
            <i class="fab fa-css3-alt"></i>
          </div>
          <div class="skillset__container col-sm-12 col-md-6 col-lg-4">
            <h4>Javascript</h4>
            <i class="fab fa-js-square"></i>
          </div>
          <div class="skillset__container col-sm-12 col-md-6 col-lg-4">
            <h4>SASS</h4>
            <i class="fab fa-sass"></i>
          </div>
          <div class="skillset__container col-sm-12 col-md-6 col-lg-4">
            <h4>Bootstrap</h4>
            <i class="fab fa-bootstrap"></i>
          </div>
          <div class="skillset__container col-sm-12 col-md-6 col-lg-4">
            <h4>Wordpress/Strapi</h4>
            <i class="fab fa-wordpress"></i>
          </div>
        </div>
      </section>
      <!-- Project section -->
      <section class="projects" id="projects">
        <div class="section-heading">
          <h2>Projects</h2>
        </div>
        <div class="projects__container container row"></div>
      </section>
      <!-- Contact section -->
      <section class="contact" id="contact">
        <div class="section-heading">
          <h2>Contact</h2>
        </div>
        <?php
            if ($message_sent):
          ?>
          <h3>Message sent!</h3>
          <?php
            else:
          ?>
        <form action="index.php" method="POST">
          <!-- <div class="mail">
            <p>php skills not found...</p>
            <p>Form is non-functional at this time.</p>
            <a class="nav-link" href="https://www.linkedin.com/in/eivind-simonsen-9469121b9/">You can reach me at linkedIn here!</a>
          </div> -->
          <label for="name"></label>
          <input name="name" type="text" id="name" placeholder="First name" />
          <label for="email"></label>
          <input name="email" type="text" id="email <?= $invalid ?? "" ?>" placeholder="Your mail" />
          <label for="subject"></label>
          <input name="subject" type="text" id="subject" placeholder="Subject" />
          <label for="message"></label>
          <textarea name="message" id="message" placeholder="Your message" cols="30" rows="10"></textarea>
          <button class="cta">Submit</button>
        </form>
        <?php
          endif;
        ?>
        <div class="to-top">
          <a href="#"><i class="fas fa-arrow-alt-circle-up"></i></a>
        </div>
      </section>
    </main>
    <footer>
      <ul class="nav justify-content-center">
        <li class="nav-item" id="socials">
          <a class="nav-link" href="https://www.linkedin.com/in/eivind-simonsen-9469121b9/"><i class="fab fa-linkedin"></i></a>
        </li>
        <li class="nav-item" id="socials">
          <a class="nav-link" href="https://github.com/EivindSimonsen?tab=repositories"><i class="fab fa-github"></i></a>
        </li>
      </ul>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/script.js" type="module"></script>
  </body>
</html>
