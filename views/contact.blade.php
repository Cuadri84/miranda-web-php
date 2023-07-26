@extends('layout')
@section('content')
    <section class="main">
      <div class="about__container">
        <h3>THE ULTIMATE LUXURY</h3>
        <h2>New Details</h2>

        <div class="page-navigation">
          <a class="page-navitation__home" href="../index.html"> Home </a>
          <p>|</p>
          <a class="page-navitation__contact" href="./contact-page.html">
            Contact
          </a>
        </div>
      </div>
    </section>

    <section class="contact__details">
      <div class="detail__item">
        <img src="../assets/footer/mail.png" class="detail__item__icon" />
        <div class="detail__item__info">
          <h3>Hotel Address</h3>
          <h4>19/A, Cirikon City hall Tower New York, NYC</h4>
        </div>
        <img
          class="contact__list__number"
          src="../assets/contact/01.png"
          alt="Contact list number"
        />
      </div>
      <div class="detail__item">
        <img src="../assets/footer/phone.png" class="detail__item__icon" />
        <div class="detail__item__info">
          <h3>Phone Number</h3>
          <h4>+ 976 586 7578 644 7</h4>
          <h4>+ 876 766 8675 765 6</h4>
        </div>
        <img
          class="contact__list__number"
          src="../assets/contact/02.png"
          alt="Contact list number"
        />
      </div>
      <div class="detail__item">
        <img src="../assets/footer/maps.png" class="detail__item__icon" />
        <div class="detail__item__info">
          <h3>Email</h3>
          <h4>info@webmail.com</h4>
          <h4>jobs.webmail@mail.com</h4>
        </div>
        <img
          class="contact__list__number"
          src="../assets/contact/03.png"
          alt="Contact list number"
        />
      </div>
    </section>

    <form class="form">
      <img class="hotel-img" src="../assets/contact/map-hotel.png" />
      <div class="form__container">
        <div class="form__item">
          <img
            src="../assets/contact/person.png"
            class="contact__form__img"
            alt="Full Name Icon"
          />
          <input
            class="form__input"
            type="text"
            placeholder="Your full name"
            required
          />
        </div>
        <div class="form__item">
          <img
            src="../assets/contact/notebook.png"
            class="contact__form__img"
            alt="Phone Icon"
          />
          <input
            class="form__input"
            type="number"
            placeholder="Add phone number"
            required
          />
        </div>
      </div>
      <div class="form__container">
        <div class="form__item">
          <img
            src="../assets/contact/envelop.png"
            class="contact__form__img"
            alt="Email Icon"
          />
          <input
            class="form__input"
            type="email"
            placeholder="Enter email address"
            required
          />
        </div>
        <div class="form__item">
          <img
            src="../assets/contact/oldphone.png"
            class="contact__form__img"
            alt="Subject Icon"
          />
          <input
            class="form__input"
            type="text"
            placeholder="Enter subject"
            required
          />
        </div>
      </div>
      <div class="form__container form__container-column">
        <div class="form__item form__item-full">
          <div class="message-div">
            <img
              src="../assets/contact/pen.png"
              class="contact__form__img"
              alt="Message Icon"
            />
            <input
              class="form__input"
              id="message"
              type="text"
              placeholder="Enter message"
              required
            />
          </div>
        </div>
      </div>
      <div class="button-div">
        <button class="form__button" type="button">SEND</button>
      </div>
    </form>
    @endsection