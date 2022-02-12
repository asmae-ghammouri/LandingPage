<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <!-- Date picker library -->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js"></script>
    <link
      href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css"
      rel="stylesheet"
      type="text/css"
    />
  </head>

  <body>
    <div class="overlay"></div>

    <!--nav-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <img src="images/travel-case.png" alt="" width="50" />
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" data-value="header" href="#header">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-value="about" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-value="destinations" href="#destinations"
              >Destinations</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" data-value="activities" href="#activities"
              >activities</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" data-value="details" href="#details">Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-value="book" href="#book">Book now</a>
          </li>
        </ul>
      </div>
    </nav>
    <!--header-->

    <header class="header" id="header">
      <div class="overlay"></div>
      <div class="container">
        <div class="description" data-aos="fade-left" data-aos-duration="4000">
          <h1>Morocco Adventure Tour</h1>
          <p>
            The best tour to see as much of Morocco as possible in 12 days with
            perfect balance of activity!
          </p>

          <a href="#about"
            ><button class="btn btn-outline-secondary btn-lg">See more</button>
          </a>
        </div>
      </div>
    </header>

    <!--about-->

    <div class="about" id="about">
      <div class="container" data-aos="fade-down">
        <h1 class="text-center">About</h1>

        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-down">
            <img
              src="images/chefchaouen.jpg"
              class="img-fluid"
              alt="chefchaouen image"
            />
          </div>
          <div
            class="col-lg-8 col-md-8 col-sm-12"
            id="content"
            data-aos="fade-down"
          >
            <h3>Why Morocco?</h3>
            <p>
              To travel to Morocco is to experience one of the true jewels of
              North Africa. It is a land of profound historical and cultural
              importance. A land of endless diversity and constant surprises, a
              land of Islamic imperial grandeur and old-European elegance.
              Morocco is a country where the past and present live together in
              fascinating harmony. You will find it a country both enchantingly
              exotic, yet comfortingly familiar.This country has desert,
              mountains, beaches, small villages and big cities; a little
              something for everyone. The food is amazing, the culture is
              unique, and the prices are affordable.
            </p>
            <div id="z">
              <span> Tour Operator: </span> Intrepid <br />
              <span>Tour length :</span> 12 days
              <br />
              <span> Travel Style :</span> Group <br />

              <span>Travel Max group size :</span> 15 (operator and driver
              included) <br />

              <span> Age range :</span>18 to 60 <br />
              <span> Operated in :</span>English,French, Arabic <br />

              <span> Price :</span> $1,500 Per Person <br />
            </div>
            <button class="btn btn-outline-secondary btn-lg">
              <a href="#details">More details</a>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Destinations-->
    <div class="destinations" id="destinations">
      <div class="container" data-aos="fade-down">
        <h1 class="text-center">Destinations</h1>
        <div class="row">
          <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card" data-aos="fade-down">
              <div class="card-img">
                <img
                  src="images/Tangier.jpg"
                  class="img-fluid"
                  alt="Tangier image"
                />
              </div>

              <div class="card-body">
                <h4 class="card-title">Tangier</h4>
                <p class="card-text">
                  Tangier is one of the most beautiful cities in Morocco located
                  in the north of the country. A blend of romantic medinas and
                  alleyways, landmarks and Mediterranean beaches
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card" data-aos="fade-down">
              <div class="card-img">
                <img
                  src="images/chefchaouen1.jpg"
                  class="img-fluid"
                  alt="Chefchaouen image"
                />
              </div>

              <div class="card-body">
                <h4 class="card-title">Cheafchaouen</h4>
                <p class="card-text">
                  Morocco’s blue city, is a truly beautiful town with
                  appropriately blue walls and majestic mountains overlooking
                  the characterful town. A town as rich in history as it is
                  beauty.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card" data-aos="fade-down">
              <div class="card-img">
                <img src="images/fez.jpg" class="img-fluid" alt="Fes image" />
              </div>

              <div class="card-body">
                <h4 class="card-title">Fes</h4>
                <p class="card-text">
                  Fes or Fez is the most beautiful imperial city in this North
                  African country. And that, of course, has much to do with the
                  beautiful sights that hide behind the walls of this fairytale
                  city.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card" data-aos="fade-down">
              <div class="card-img">
                <img
                  src="images/Meknes.jpg"
                  class="img-fluid"
                  alt="Meknes image"
                />
              </div>

              <div class="card-body">
                <h4 class="card-title">Meknes</h4>
                <p class="card-text">
                  Meknes, between plains, mountains, and thermal spas it is one
                  of the beautiful imperial cities, Meknes has some great
                  surprises in store for all lovers of wide open spaces.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card" data-aos="fade-down">
              <div class="card-img">
                <img
                  src="images/rabat.jpg"
                  class="img-fluid"
                  alt="Rabat image"
                />
              </div>

              <div class="card-body">
                <h4 class="card-title">Rabat</h4>
                <p class="card-text">
                  As Morocco's capital, Rabat is home to the country's most
                  important museum, the Royal Palace, and the Mausoleum of
                  Mohammed V, as well as several historical attractions.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card" data-aos="fade-down">
              <div class="card-img">
                <img
                  src="images/essaouira.jpg"
                  class="img-fluid"
                  alt="Essaouira image"
                />
              </div>

              <div class="card-body">
                <h4 class="card-title">Essaouira</h4>
                <p class="card-text">
                  Essaouira is known as Morocco’s windy city. A combination of
                  spectacular beaches, great sea, it is one of the world’s
                  greatest sites for exhilarating watersports.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card" data-aos="fade-down">
              <div class="card-img">
                <img
                  src="images/Marrakesh.jpg"
                  class="img-fluid"
                  alt="Marrakesh image"
                />
              </div>

              <div class="card-body">
                <h4 class="card-title">Marrakesh</h4>
                <p class="card-text">
                  Between tradition and modernity, Marrakesh is the promise of
                  unequalled sensations.No one can be misled when the word
                  Marrakesh is said!<span id="marrakeshspan">
                    It's Morocco's most attractive tourist destination.</span
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card" data-aos="fade-down">
              <div class="card-img">
                <img
                  src="images/Benimellal.jpg"
                  class="img-fluid"
                  alt="Benimellal image"
                />
              </div>

              <div class="card-body">
                <h4 class="card-title">Benimellal</h4>
                <p class="card-text">
                  The city of Beni Mellal is one of the fastest growing cities
                  in Morocco. Positioned between the Middle Atlas Mountains and
                  Atlas Mountains,it is an agricultural city with an abundance
                  of fruit and vegetable crops.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card" data-aos="fade-down">
              <div class="card-img">
                <img
                  src="images/merzouga.jpg"
                  class="img-fluid"
                  alt="Merzouga image"
                />
              </div>

              <div class="card-body">
                <h4 class="card-title">Merzouga</h4>
                <p class="card-text">
                  Merzouga is one of the gates of the Sahara which is a small
                  magnetic village located in the middle of the sands. . It’s
                  the territory of the Erg Chebbi, a world of dunes, palm
                  groves, tracks and hikes.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--activities-->

    <div class="activities" id="activities">
      <div class="container" data-aos="fade-down">
        <h1 class="text-center">Activities</h1>
        <div class="row">
          <div
            class="col-lg-4 col-md-4 col-sm-12 item activity"
            data-aos="fade-right"
          >
            <img src="images/hiking.jpg" class="img-fluid" alt="activity" />

            <div class="des">Hiking</div>
          </div>
          <div
            class="col-lg-4 col-md-4 col-sm-12 item activity"
            data-aos="fade-right"
          >
            <img src="images/Quadbike.jpg" class="img-fluid" alt="activity" />
            <div class="des">Quad bike</div>
          </div>
          <div
            class="col-lg-4 col-md-4 col-sm-12 item activity"
            data-aos="fade-right"
          >
            <img src="images/tagine.jpg" class="img-fluid" alt="activity" />
            <div class="des">Trying moroccan food</div>
          </div>
          <div
            class="col-lg-4 col-md-4 col-sm-12 item activity"
            data-aos="fade-right"
          >
            <img src="images/camelride.jpg" class="img-fluid" alt="activity" />
            <div class="des">Camel ride</div>
          </div>
          <div
            class="col-lg-4 col-md-4 col-sm-12 item activity"
            data-aos="fade-right"
          >
            <img src="images/market.jpg" class="img-fluid" alt="team" />
            <div class="des">Market visit</div>
          </div>
          <div
            class="col-lg-4 col-md-4 col-sm-12 item activity"
            data-aos="fade-right"
          >
            <img
              src="images/paragliding.jpg"
              class="img-fluid"
              alt="activity"
            />
            <div class="des">Air sport</div>
          </div>
          <div
            class="col-lg-4 col-md-4 col-sm-12 item activity"
            data-aos="fade-right"
          >
            <img src="images/camping.jpg" class="img-fluid" alt="activity" />
            <div class="des">Camping</div>
          </div>
          <div
            class="col-lg-4 col-md-4 col-sm-12 item activity"
            data-aos="fade-right"
          >
            <img src="images/watersport.jpg" class="img-fluid" alt="activity" />
            <div class="des">Water sport</div>
          </div>
          <div
            class="col-lg-4 col-md-4 col-sm-12 item activity"
            data-aos="fade-right"
          >
            <img src="images/skating.jpg" class="img-fluid" alt="activity" />
            <div class="des">Skating</div>
          </div>
          <div
            class="col-lg-4 col-md-4 col-sm-12 item activity"
            data-aos="fade-right"
          >
            <img src="images/zoo.jpg" class="img-fluid" alt="activity" />
            <div class="des">Zoo visit</div>
          </div>
          <div
            class="col-lg-4 col-md-4 col-sm-12 item activity"
            data-aos="fade-right"
          >
            <img src="images/dance.jpg" class="img-fluid" alt="activity" />
            <div class="des">Learn about various moroccan arts</div>
          </div>
          <div
            class="col-lg-4 col-md-4 col-sm-12 item activity"
            data-aos="fade-right"
          >
            <img src="images/pottery.jpg" class="img-fluid" alt="activity" />
            <div class="des">Trying pottery</div>
          </div>
        </div>
      </div>
    </div>
    <!--details-->

    <div class="details" id="details">
      <div class="container" style="margin: auto">
        <h1 class="text-center">Details</h1>

        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-12 detail" data-aos="fade-right">
            <h2>Itinerary :</h2>

            <div>Day 1: Airport pick up to hotel in Tangier</div>
            <div class="h-divider"></div>
            <div>Day 2: Tangier</div>
            <div class="h-divider"></div>
            <div>Day 3: Chefchaouen</div>
            <div class="h-divider"></div>
            <div>Day 4: Fes</div>
            <div class="h-divider"></div>
            <div>Day 5: Meknes</div>
            <div class="h-divider"></div>
            <div>Day 6: Rabat</div>
            <div class="h-divider"></div>
            <div>Day 7: Essaouira</div>
            <div class="h-divider"></div>
            <div>Day 8: Marrakesh</div>
            <div class="h-divider"></div>
            <div>Day 9: Marrakesh</div>
            <div class="h-divider"></div>
            <div>Day 10: Merzouga</div>
            <div class="h-divider"></div>
            <div>Day 11: Benimellal</div>
            <div class="h-divider"></div>
            <div>Day 12: Benimellal airport transfer</div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12 detail" data-aos="fade-right">
            <h2>What's Included:</h2>

            <div>
              <i class="fas fa-check-square"></i>
              Guide
            </div>
            <div class="h-divider"></div>
            <div><i class="fas fa-check-square"></i> Meals</div>
            <div class="h-divider"></div>

            <div><i class="fas fa-check-square"></i> Transport</div>
            <div class="h-divider"></div>

            <div><i class="fas fa-check-square"></i> Insurance</div>
            <div class="h-divider"></div>
            <div><i class="fas fa-window-close"></i> Flights</div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12 detail" data-aos="fade-right">
            <h2>Where You'll Stay:</h2>

            <div><i class="fas fa-bed"></i> Hotel 9 nights</div>
            <div class="h-divider"></div>

            <div>
              <img src="images/campground-solid.svg" alt="" width="17" />
              Camping 2 night
            </div>
            <div class="h-divider"></div>

            <div><i class="fas fa-bed"></i> Guesthouse 1 night</div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact form -->
    <div id="book">
      <div class="container" data-aos="fade-down">
        <h1 class="text-center">Book now!</h1>
        <form action="hi.php" method="post">
          <div class="form-row" data-aos="fade-down">
            <div class="form-group col-md-6" data-aos="fade-down">
              <label for="firstname">First name</label>
              <input
                type="text"
                class="form-control"
                id="firstname"
                name="firstname"
                placeholder="First name"
                required
              />
            </div>
            <div class="form-group col-md-6" data-aos="fade-down">
              <label for="lastname">Last name</label>
              <input
                type="text"
                class="form-control"
                id="lastname"
                name="lastname"
                placeholder="Last name"
                required
              />
            </div>
            <div class="form-group col-md-6" data-aos="fade-down">
              <label for="email">Email</label>
              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                placeholder="Email"
                required
              />
            </div>
            <div class="form-group col-md-6" data-aos="fade-down">
              <label for="phone">Phone</label>
              <input
                type="number"
                class="form-control"
                id="phone"
                name="phone"
                placeholder="Phone"
                required
              />
            </div>
            <div class="form-group col-md-6" data-aos="fade-down">
              <label for="pickupaddress">Pickup Address(in Rabat)</label>
              <input
                type="text"
                class="form-control"
                id="pickupaddress"
                name="pickupaddress"
                placeholder="Pickup address"
                required
              />
            </div>
            <div class="form-group col-md-6" data-aos="fade-down">
              <label for="datepicker1">Departure date</label>
              <input
                type="date"
                class="form-control"
                id="datepicker1"
                name="datepicker1"
                required
              />
              
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6" data-aos="fade-down">
              <label for="passengersnumber">Numbers of passengers</label>
              <select id="passengersnumber" name="passengersnumber" class="form-control" required>
                <option value="" disabled>
                  choose the number of passengers
                </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
              </select>
            </div>
            <div class="form-group col-md-4" data-aos="fade-down">
              <label for="country">Country</label>
              <select id="country" name="country" class="form-control" required>
                <option value="" disabled>choose your country</option>
                <option value="Afganistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bonaire">Bonaire</option>
                <option value="Bosnia & Herzegovina">
                  Bosnia & Herzegovina
                </option>
                <option value="Botswana">Botswana</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Ter">
                  British Indian Ocean Ter
                </option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Canary Islands">Canary Islands</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">
                  Central African Republic
                </option>
                <option value="Chad">Chad</option>
                <option value="Channel Islands">Channel Islands</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Island">Cocos Island</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote DIvoire">Cote DIvoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curaco">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Ter">French Southern Ter</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Great Britain">Great Britain</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="Indonesia">Indonesia</option>
                <option value="India">India</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea North">Korea North</option>
                <option value="Korea Sout">Korea South</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Malawi">Malawi</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Midway Islands">Midway Islands</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Nambia">Nambia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherland Antilles">Netherland Antilles</option>
                <option value="Netherlands">
                  Netherlands (Holland, Europe)
                </option>
                <option value="Nevis">Nevis</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau Island">Palau Island</option>
                <option value="Palestine">Palestine</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Phillipines">Philippines</option>
                <option value="Pitcairn Island">Pitcairn Island</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Republic of Montenegro">
                  Republic of Montenegro
                </option>
                <option value="Republic of Serbia">Republic of Serbia</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="St Barthelemy">St Barthelemy</option>
                <option value="St Eustatius">St Eustatius</option>
                <option value="St Helena">St Helena</option>
                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                <option value="St Lucia">St Lucia</option>
                <option value="St Maarten">St Maarten</option>
                <option value="St Pierre & Miquelon">
                  St Pierre & Miquelon
                </option>
                <option value="St Vincent & Grenadines">
                  St Vincent & Grenadines
                </option>
                <option value="Saipan">Saipan</option>
                <option value="Samoa">Samoa</option>
                <option value="Samoa American">Samoa American</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Tahiti">Tahiti</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Erimates">
                  United Arab Emirates
                </option>
                <option value="United States of America">
                  United States of America
                </option>
                <option value="Uraguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City State">Vatican City State</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands (Brit)">
                  Virgin Islands (Brit)
                </option>
                <option value="Virgin Islands (USA)">
                  Virgin Islands (USA)
                </option>
                <option value="Wake Island">Wake Island</option>
                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                <option value="Yemen">Yemen</option>
                <option value="Zaire">Zaire</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
              </select>
            </div>

            <div class="form-group col-md-12" data-aos="fade-down">
              <h3>Add payment details</h3>
              <label for="cardowner">Card Owner</label>
              <input
                type="text"
                class="form-control"
                id="cardowner"
                name="cardowner"
                placeholder="Card owner"
                required
              />
            </div>
            <div class="form-group col-md-4" data-aos="fade-down">
              <label for="cardnumber">Card number</label>
              <input
                type="number"
                class="form-control"
                id="cardnumber"
                name="cardnumber"
                placeholder="Card number"
                required
              />
            </div>
            <div class="form-group col-md-4" data-aos="fade-down">
              <label for="datepicker">Expiration Date</label>
              <input
                type="date"
                class="form-control"
                id="datepicker"
                name="datepicker"
                required
              />
              
            </div>

            <div class="form-group col-md-4" data-aos="fade-down">
              <label for="CVV">CVV </label>
              <input
                type="number"
                class="form-control"
                id="CVV"
                name="CVV"
                placeholder="CVV"
                required
              />
            </div>
          </div>

          <div>
            <button type="submit" class="btn btn-lg btn-block" id="btn">
              Submit
            </button>
          </div>
        </form>
      </div>
      
    </div>
    
    <footer class="footer">
      <div class="container">
        <div>
          <p>&copy;Copyright.All rights reserved.</p>
        </div>
      </div>
    </footer>

    <!-- AOS animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

    <!-- Font Awesome JS -->
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
      integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
      crossorigin="anonymous"
    ></script>
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
      integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
      crossorigin="anonymous"
    ></script>
    <!-- JS files -->
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
