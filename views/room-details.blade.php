@extends('layout')
@section('content')

    <section class="main">
      <div class="about__container">
        <h3>THE ULTIMATE LUXURY</h3>
        <h2>Ultimate Room</h2>

        <div class="page-navigation-details">
          <a class="page-navitation__home" href="/index"> Home </a>
          <p>|</p>
          <a class="page-navitation__contact" href="/room-details">
            Room Details
          </a>
          <p>|</p>
          <a class="page-navitation__home" href="/room-details">
            Luxury Double Bed
          </a>
        </div>
      </div>
    </section>

    <section class="main--detail">
      <div class="detail__container">
        <div class="title__price__container">
          <div>
            <h3>DOUBLE BED</h3>
            <h2>Luxury Double Bed</h2>
          </div>

          <div class="price__container">
            <p class="room__price">
              $345 <span class="room__price--sm"> /Night</span>
            </p>
          </div>
        </div>

        <div class="detail__img__container">
          <img class="detail__img" src="/assets/rooms/room6.jpg" />
        </div>

        <div class="reservation__container">
          <h3>Check Availability</h3>
          <div class="form__item">
            <label>Check In</label>
            <input
              class="form__input"
              type="date"
              placeholder="Fri, 14th June 2020"
              required
            />
          </div>
          <div class="form__item">
            <label>Check Out</label>
            <input
              class="form__input"
              type="date"
              placeholder="Sun, 16th June 2020"
              required
            />
          </div>
          <div class="form__item">
            <label>Full Name</label>
            <input
              class="form__input"
              type="text"
              placeholder="Enter your name"
              required
            />
          </div>
          <div class="form__item">
            <label>Email</label>
            <input
              class="form__input"
              type="email"
              placeholder="Enter your email"
              required
            />
          </div>
          <div class="form__item">
            <label>Phone</label>
            <input
              class="form__input"
              type="number"
              placeholder="Enter your phone number"
              required
            />
          </div>
          <div class="form__item">
            <label>Message</label>
            <input
              class="form__input"
              type="text"
              placeholder="Let us know for any special request"
              required
            />
          </div>
          <button id="check-availability__button">CHECK AVAILABILITY</button>
        </div>

        <p class="room__description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum. Sed ut
          perspiciatis unde omnis iste natus error sit voluptatem accusantium
          doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
          inventore veritatis et quasi architecto beatae vitae dicta sunt
          explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
          odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
          voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
          quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
          eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
          voluptatem.
        </p>
      </div>

      <div class="facilities__container">
        <h3>Amenities</h3>

        <div class="facilities__grid">
          <li class="facilitites__li">
            <img src="/assets/amenities/aircon.png" alt="A/C Facility" />
            <p>Air conditioner</p>
          </li>
          <li class="facilitites__li">
            <img src="/assets/amenities/wifi.png" alt="Wifi Facility" />
            <p>High speed WiFi</p>
          </li>
          <li class="facilitites__li">
            <img
              src="/assets/amenities/key.png"
              alt="Strong Locker Facility"
            />
            <p>Strong Locker</p>
          </li>
          <li class="facilitites__li">
            <img
              src="/assets/amenities/cutlery.png"
              alt="Breakfast Facility"
            />
            <p>Breakfast</p>
          </li>
          <li class="facilitites__li">
            <img src="/assets/amenities/kitchen.png" alt="Kitchen Facility" />
            <p>Kitchen</p>
          </li>
          <li class="facilitites__li">
            <img
              src="/assets/amenities/lock.png"
              alt="Expert Team Facility"
            />
            <p>Smart Security</p>
          </li>
          <li class="facilitites__li">
            <img
              src="/assets/amenities/cleaning.png"
              alt="Cleaning Facility"
            />
            <p>Cleaning</p>
          </li>
          <li class="facilitites__li">
            <img src="/assets/amenities/shower.png" alt="Shower Facility" />
            <p>Shower</p>
          </li>
          <li class="facilitites__li">
            <img
              src="/assets/amenities/headphones.png"
              alt="24/7 Online Support Facility"
            />
            <p>24/7 Online Support</p>
          </li>
          <li class="facilitites__li">
            <img
              src="/assets/amenities/groceries.png"
              alt="Grocery Facility"
            />
            <p>Grocery</p>
          </li>
          <li class="facilitites__li">
            <img src="/assets/amenities/bed.png" alt="Single bed Facility" />
            <p>Single bed</p>
          </li>
          <li class="facilitites__li">
            <img
              src="/assets/amenities/personpc.png"
              alt="Smart Security Facility"
            />
            <p>ExpertTeam</p>
          </li>
          <li class="facilitites__li">
            <img src="/assets/amenities/shop.png" alt="Shop near Facility" />
            <p>Shop near</p>
          </li>
          <li class="facilitites__li">
            <img src="/assets/amenities/towel.png" alt="Towels Facility" />
            <p>Towels</p>
          </li>
        </div>
      </div>

      <div class="guest-information">
        <div class="guest-img__container">
          <img src="/assets/room-details/founder.jpg" alt="Guest Image" />
        </div>
        <h3>Emily Brickowski</h3>
        <h4>Hotel Director</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore.
        </p>
      </div>

      <div class="policies">
        <h3>Cancellation</h3>
        <p>
          Phasellus volutpat neque a tellus venenatis, a euismod augue
          facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus.
          Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to
          get a full refund.
        </p>
      </div>

      <section class="rooms" id="rooms-details-offers-swiper">
        <h3 id="related">Related Rooms</h3>
        <div class="ameneties-home">
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
        <div class="swiper home__swiper__navigation">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img
                src="/assets/rooms/room1.jpg"
                alt="Hotel Room"
                id="room-img"
              />
              <div class="room__information">
                <div class="room__information__container">
                  <div>
                    <h4>Minimal Duplex Room</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    </p>
                  </div>
                  <p class="room__price">
                    $345/ <span class="room__price--sm">Night</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <img
                src="/assets/rooms/room2.jpg"
                alt="Hotel Room"
                id="room-img"
              />
              <div class="room__information">
                <div class="room__information__container">
                  <div>
                    <h4>Standard Duplex</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    </p>
                  </div>
                  <p class="room__price">
                    $645/ <span class="room__price--sm">Night</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <img
                src="/assets/rooms/room3.jpg"
                alt="Hotel Room"
                id="room-img"
              />
              <div class="room__information">
                <div class="room__information__container">
                  <div>
                    <h4>Suite</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    </p>
                  </div>
                  <p class="room__price">
                    $445/ <span class="room__price--sm">Night</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <img
                src="/assets/rooms/room4.jpg"
                alt="Hotel Room"
                id="room-img"
              />
              <div class="room__information">
                <div class="room__information__container">
                  <div>
                    <h4>Luxury Room</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    </p>
                  </div>
                  <p class="room__price">
                    $490/ <span class="room__price--sm">Night</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <img
                src="/assets/rooms/room5.jpg"
                alt="Hotel Room"
                id="room-img"
              />
              <div class="room__information">
                <div class="room__information__container">
                  <div>
                    <h4>Full Sea View Room</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    </p>
                  </div>
                  <p class="room__price">
                    $545/ <span class="room__price--sm">Night</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <img
                src="/assets/rooms/room6.jpg"
                alt="Hotel Room"
                id="room-img"
              />
              <div class="room__information">
                <div class="room__information__container">
                  <div>
                    <h4>Economy Duplex</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    </p>
                  </div>
                  <p class="room__price">
                    $290/ <span class="room__price--sm">Night</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <img
                src="/assets/rooms/room7.jpg"
                alt="Hotel Room"
                id="room-img"
              />
              <div class="room__information">
                <div class="room__information__container">
                  <div>
                    <h4>Deluxe Duplex</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    </p>
                  </div>
                  <p class="room__price">
                    $745/ <span class="room__price--sm">Night</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <img
                src="/assets/rooms/room8.jpg"
                alt="Hotel Room"
                id="room-img"
              />
              <div class="room__information">
                <div class="room__information__container">
                  <div>
                    <h4>Gold Duplex Room</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    </p>
                  </div>
                  <p class="room__price">
                    $590/ <span class="room__price--sm">Night</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <img
                src="/assets/rooms/room9.jpg"
                alt="Hotel Room"
                id="room-img"
              />
              <div class="room__information">
                <div class="room__information__container">
                  <div>
                    <h4>Silver Duplex Room</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    </p>
                  </div>
                  <p class="room__price">
                    $490/ <span class="room__price--sm">Night</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-arrows">
            <div class="swiper-button-next next"></div>
            <div class="swiper-button-prev prev"></div>
          </div>
        </div>
      </section>

      <div id="rooms__responisve">
        <div class="room-container">
          <div class="room__facilities">
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
              alt="Room facility icon"
            />
          </div>
          <img src="/assets/rooms/room4.jpg" alt="Hotel Room" />
          <div class="room__information__container">
            <div>
              <h4>Minimal Duplex Room</h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore.
              </p>
            </div>
            <div class="price__container">
              <p class="room__price">
                $345/ <span class="room__price--sm">Night</span>
              </p>
              <button class="boooking__button">
                <a href="./room-detail"><span>Booking Now</span></a>
              </button>
            </div>
          </div>
        </div>
        <div class="room-container">
          <div class="room__facilities">
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
              alt="Room facility icon"
            />
          </div>
          <img src="/assets/rooms/room9.jpg" alt="Hotel Room" />
          <div class="room__information__container">
            <div>
              <h4>Economy Duplex</h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore.
              </p>
            </div>
            <div class="price__container">
              <p class="room__price">
                $290/ <span class="room__price--sm">Night</span>
              </p>
              <button class="boooking__button">
                <a href="./room-detail"><span>Booking Now</span></a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection
