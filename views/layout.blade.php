<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Miranda Web</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&family=Old+Standard+TT:wght@400;700&family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link rel="stylesheet" type="text/css" href="http://localhost/miranda-web-php/styles.css" />
  </head>
  <body>
    <header class="header" id="header">
      <div class="header__container">
        <div class="nav-bar">
          <nav class="nav-bar__container">
            <ul class="nav-bar__ul">
              <li><a href="http://localhost/miranda-web-php/about">About Us</a></li>
              <li><a href="http://localhost/miranda-web-php/rooms">Rooms</a></li>
              <li><a href="http://localhost/miranda-web-php/offers">Offers</a></li>
              <li><a href="http://localhost/miranda-web-php/contact">Contact</a></li>
            </ul>
          </nav>
          <label for="menu" class="nav-bar__burger-menu">
            <span id="span1"></span>
            <span id="span2"></span>
            <span id="span3"></span>
          </label>
        </div>
        <a href="http://localhost/miranda-web-php/index">
          <div class="logo">
            <div class="logo-h__container">
              <img
                class="logo-h"
                src="http://localhost/miranda-web-php/assets/header/h.svg"
                alt="Short Logo"
              />
            </div>
            <img
              class="logo__title"
              src="http://localhost/miranda-web-php/assets/header/hotelMiranda.svg"
              alt="Full Logo"
            />
          </div>
        </a>
      </div>
      <div class="header__container">
        <div class="icon-container">
          <img
            class="icon"
            src="http://localhost/miranda-web-php/assets/header/account.svg"
            alt="Profile Icon"
          />
        </div>
        <div class="icon-container">
          <img
            class="icon"
            src="http://localhost/miranda-web-php/assets/header/search.svg"
            alt="Search Icon"
          />
        </div>
      </div>
    </header>
    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer__container">
          <div class="footer__information">
            <div class="footer__information__logo">
              <div class="sm-logo-container">
                <p class="sm-logo">H</p>
              </div>
              <img
                class="lg-logo"
                src="http://localhost/miranda-web-php/assets/header/hotelMiranda.svg"
                alt="Full Logo"
              />
            </div>
            <p class="footer__information__description">
              Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing
              eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim
              ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
            </p>
            <div class="social-icons__container">
              <a class="social-icon__item">
                <img src="http://localhost/miranda-web-php/assets/footer/fb.png" alt="Facebook logo" />
              </a>
              <a class="social-icon__item">
                <img
                  class="twitter-icon"
                  src="http://localhost/miranda-web-php/assets/footer/tw.png"
                  alt="Twitter logo"
                />
              </a>
              <a class="social-icon__item">
                <img src="http://localhost/miranda-web-php/assets/footer/be.png" alt="Bahance logo" />
              </a>
              <a class="social-icon__item">
                <img src="http://localhost/miranda-web-php/assets/footer/in.png" alt="Linkedin logo" />
              </a>
              <a class="social-icon__item">
                <img src="http://localhost/miranda-web-php/assets/footer/yt.png" alt="Youtube logo" />
              </a>
            </div>
          </div>
          <div class="footer__services">
            <h6>Services.</h6>
            <div class="footer__services__container">
              <div class="footer__services__columun1">
                <p class="services_item">+ Bar</p>
                <p class="services_item">+ Restaurant</p>
                <p class="services_item">+ Swimming Pool</p>
                <p class="services_item">+ Wellness & Spa</p>
                <p class="services_item">+ Conference Room</p>
                <p class="services_item">+ Cocktail Party House</p>
              </div>
              <div class="footer__services__columun2">
                <p class="services_item">+ Gaming Zone</p>
                <p class="services_item">+ Marrige Party</p>
                <p class="services_item">+ Party Planning</p>
                <p class="services_item">+ Tour Consultancy</p>
              </div>
            </div>
          </div>
          <div class="footer__contact-us">
            <h6>Contact Us.</h6>
            <div class="contact-us__container">
              <img src="http://localhost/miranda-web-php/assets/footer/phone.png" alt="Phone logo" />
              <div class="information-container">
                <p class="information__container__item">Phone Number</p>
                <a
                  href="tel:987 876 765 76 577"
                  class="information__container__item-sm"
                  >+987 876 765 76 577</a
                >
              </div>
            </div>
            <div class="contact-us__container">
              <img src="http://localhost/miranda-web-php/assets/footer/mail.png" alt="Mail logo" />
              <div class="information-container">
                <p class="information__container__item">E-mail</p>
                <a
                  href="mailto:contact@hotelmiranda.com"
                  class="information__container__item-sm"
                >
                  contact@hotelmiranda.com
                </a>
              </div>
            </div>
            <div class="contact-us__container">
              <img src="http://localhost/miranda-web-php/assets/footer/maps.png" alt="Maps logo" />
              <div class="information-container">
                <p class="information__container__item">Our Address</p>
                <p class="information__container__item-sm">
                  123 Main St, New York
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="footer__copyright-policies">
          <div class="footer__copyright">
            <p>Copyright By@Cuadri84 - 2023</p>
          </div>
          <div class="footer__policies">
            <a href="#">Terms of use</a>
            <p>|</p>
            <a href="#">Privacy Environmental Policy</a>
          </div>
        </div>
      </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="http://localhost/miranda-web-php/scripts/scripts.js"></script>
  </html>
