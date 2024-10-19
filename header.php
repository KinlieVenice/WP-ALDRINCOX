<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php is_front_page() ? blogInfo('title') : wp_title() ?></title>
    <?php wp_head()?>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script>
      (function () {
        emailjs.init({
          publicKey: "pTqqaW4QQPbbe_8-G",
        });
      })();
    </script>
  </head>

  <body>
    <!-- HEADER -->
    <header class="header">
      <h1 class="opacity-0 z-[-1] absolute top-[-100%]">Aldrin COX Visa Services LLC</h1>
      <div
        class="header__wrapper flex justify-between items-center px-10 lg:px-20 max-w-[1600px] mx-auto"
      >
        <div class="header__logo">
          <a href="./index.html"><img src="../img/Logo.png" alt="" /></a>
        </div>
        <nav>
          <ul class="header__nav">
            <li><a href="./about.html">ABOUT</a></li>
            <li><a href="./services.html">SERVICES</a></li>
            <li><a href="./gallery.html">GALLERY</a></li>
            <li><a href="./faqs.html">FAQs</a></li>
            <li><a href="./contact.html">CONTACT</a></li>
          </ul>
        </nav>

        <div class="toggle__menu">
          <span class=""></span>
          <span class=""></span>
        </div>
      </div>
      <div class="backdrop"></div>
    </header>
