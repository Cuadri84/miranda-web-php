@extends('layout')
@section('content')
<?php
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array();

    if (empty($_POST["full_name"])) {
        $errors[] = "Full name is required";
    }

    if (empty($_POST["phone_number"])) {
        $errors[] = "Phone number is required";
    } elseif (!preg_match('/^\d{9,}$/', $_POST["phone_number"])) {
        $errors[] = "Invalid phone number format";
    }

    if (empty($_POST["email"])) {
        $errors[] = "Email address is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($_POST["subject"])) {
        $errors[] = "Subject is required";
    } elseif (strlen($_POST["subject"]) > 50) {
        $errors[] = "Subject must be maximum 50 characters";
    }

    if (empty($_POST["message"])) {
        $errors[] = "Message is required";
    }


    if (empty($errors)) {
        $full_name = $_POST["full_name"];
        $phone_number = $_POST["phone_number"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $sql = "INSERT INTO contact (date, userName, userEmail, userPhone, messageSubject, messageBody, archived)
            VALUES (NOW(), '$full_name', '$email', '$phone_number', '$subject', '$message', 0)";

        if ($conn->query($sql) === TRUE){
            $success_message = "Form submitted and data inserted into the 'miranda' table!";
        } else {
            $errors[] = "Error inserting data into the database: " . $conn->error;
        }
    }
}
?>
    <section class="main">
      <div class="about__container">
        <h3>THE ULTIMATE LUXURY</h3>
        <h2>New Details</h2>

        <div class="page-navigation">
          <a class="page-navitation__home" href="http://localhost/miranda-web-php/index.php"> Home </a>
          <p>|</p>
          <a class="page-navitation__contact" href="./contact-page.php">
            Contact
          </a>
        </div>
      </div>
    </section>

    <section class="contact__details">
      <div class="detail__item">
        <img src="http://localhost/miranda-web-php/assets/footer/mail.png" class="detail__item__icon" />
        <div class="detail__item__info">
          <h3>Hotel Address</h3>
          <h4>19/A, Cirikon City hall Tower New York, NYC</h4>
        </div>
        <img
          class="contact__list__number"
          src="http://localhost/miranda-web-php/assets/contact/01.png"
          alt="Contact list number"
        />
      </div>
      <div class="detail__item">
        <img src="http://localhost/miranda-web-php/assets/footer/phone.png" class="detail__item__icon" />
        <div class="detail__item__info">
          <h3>Phone Number</h3>
          <h4>+ 976 586 7578 644 7</h4>
          <h4>+ 876 766 8675 765 6</h4>
        </div>
        <img
          class="contact__list__number"
          src="http://localhost/miranda-web-php/assets/contact/02.png"
          alt="Contact list number"
        />
      </div>
      <div class="detail__item">
        <img src="http://localhost/miranda-web-php/assets/footer/maps.png" class="detail__item__icon" />
        <div class="detail__item__info">
          <h3>Email</h3>
          <h4>info@webmail.com</h4>
          <h4>jobs.webmail@mail.com</h4>
        </div>
        <img
          class="contact__list__number"
          src="http://localhost/miranda-web-php/assets/contact/03.png"
          alt="Contact list number"
        />
      </div>
    </section>

    <form class="form" method="POST">
      <img class="hotel-img" src="http://localhost/miranda-web-php/assets/contact/map-hotel.png" />
      <div class="form__container">
        <div class="form__item">
          <img
            src="http://localhost/miranda-web-php/assets/contact/person.png"
            class="contact__form__img"
            alt="Full Name Icon"
          />
          <input
            class="form__input"
            type="text"
            placeholder="Your full name"
            name="full_name"
            required
          />
        </div>
        <div class="form__item">
          <img
            src="http://localhost/miranda-web-php/assets/contact/notebook.png"
            class="contact__form__img"
            alt="Phone Icon"
          />
          <input
            class="form__input"
            type="number"
            placeholder="Add phone number"
            name="phone_number"
            required
          />
        </div>
      </div>
      <div class="form__container">
        <div class="form__item">
          <img
            src="http://localhost/miranda-web-php/assets/contact/envelop.png"
            class="contact__form__img"
            alt="Email Icon"
          />
          <input
            class="form__input"
            type="email"
            placeholder="Enter email address"
            name="email"
            required
          />
        </div>
        <div class="form__item">
          <img
            src="http://localhost/miranda-web-php/assets/contact/oldphone.png"
            class="contact__form__img"
            alt="Subject Icon"
          />
          <input
            class="form__input"
            type="text"
            placeholder="Enter subject"
            name="subject"
            required
          />
        </div>
      </div>
      <div class="form__container form__container-column">
        <div class="form__item form__item-full">
          <div class="message-div">
            <img
              src="http://localhost/miranda-web-php/assets/contact/pen.png"
              class="contact__form__img"
              alt="Message Icon"
            />
            <input
              class="form__input"
              id="message"
              type="text"
              placeholder="Enter message"
              name="message"
              required
            />
          </div>
        </div>
      </div>
      <div class="button-div">
        <button class="form__button" type="submit">SEND</button>
      </div>
    </form>


@endsection