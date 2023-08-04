@extends('layout')
@section('content')
<?php
include("database.php");
$sql = "SELECT * FROM rooms";
$result = $conn->query($sql);


?>
    <section class="main">
      <div class="about__container">
        <h3>THE ULTIMATE LUXURY</h3>
        <h2>Ultimate Room</h2>

        <div class="page-navigation">
          <a class="page-navitation__home" href="/index"> Home </a>
          <p>|</p>
          <a class="page-navitation__contact" href="./rooms"> Rooms </a>
        </div>
      </div>
    </section>

    <div class="rooms-list-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          @foreach ($result as $row)
          <div class="list-container">
            <img
              src={{$row['photo']}}
              alt="Hotel Room"
              width="510px"
            />
            <div class="room-list-container">
              <div class="amenities-title-container">
                <div class="list-amanities">
                  <img
                    src="/assets/amenities/bed-black.png"
                    alt="Room facility icon"
                  />
                  <img
                    src="/assets/amenities/wifi-black.png"
                    alt="Room facility icon"
                  />
                  <img
                    src="/assets/amenities/car-black.png"
                    alt="Room facility icon"
                  />
                  <img
                    src="/assets/amenities/snowflake-black.png"
                    alt="Room facility icon"
                  />
                  <img
                    src="/assets/amenities/gym-black.png"
                    alt="Room facility icon"
                  />
                  <img
                    src="/assets/amenities/smocking-black.png"
                    alt="Room facility icon"
                  />
                  <img
                    src="/assets/amenities/drinks-black.png"
                    alt="    Room facility icon"
                  />
                </div>
                <h4>{{$row['bed_type']}}</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore.
                </p>
              </div>
              <div class="price__container">
                <p class="room__price">
                  ${{$row['room_rate']}}/ <span class="room__price--sm">Night</span>
                </p>
                <button class="boooking__button">
                  <a href=""><span>Booking Now</span></a>
                </button>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

    @endsection
