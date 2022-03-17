<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $mailheader = "From:".$name."<".$email.">\r\n";

  $recipient = "ramosgad.hab@gmail.com";

  mail($recipient, "New hiring", $message, $mailheader) or die("Error!");

  echo '
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaddiel H. Ramos</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;1,500&family=Poppins:wght@600&family=Roboto+Mono:wght@300;500&display=swap" rel="stylesheet">

  </head>
    <body>
      <!-- Navigation section -->
      <section id="navigation">
        <div class="nav-icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </div>
      </section>
      <section id="nav-content">
        <div class="close-btn">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <div class="wrapper">
          <h2 class="section-heading" data-outline="Menu">Menu</h2>
          <nav>
            <ul>
              <li>
                <a data-text="Home" href="index.html#hero">Home</a>
              </li>
              <li>
                <a data-text="About" href="index.html#about">About</a>
              </li>
              <li>
                <a data-text="Projects" href="index.html#projects">Projects</a>
              </li>
              <!-- <li>
                <a data-text="Testimonials" href="#testimonial">Testimonials</a>
              </li> -->
              <li>
                <a data-text="Contact" href="contact.html">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </section>
      <!-- end Navigation Section -->
      <!-- <section id="message"> -->
        <div class="thanks">
          <h1>Thank you for contacting me.</h1>
        </div>
        <br>
        <div class="thanks">
          <h2>I will get back to you as soon as possible</h2>
        </div>
        <div class="go-back buttons">
          <p> <a href="index.html" class="primary-btn">Go back</a> </p>
        </div>

      <!-- </section> -->


      <script src="js/main.js">  </script>
    </body>
  </html>



  ';

 ?>
