
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KolkataFala Restaurant</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('welcome/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('welcome/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('welcome/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('welcome/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('welcome/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('welcome/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('welcome/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('welcome/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('welcome/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent">
    <div class="container text-right">
      <i class="icofont-phone"></i> +1 5589 55488 55
      <i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{ url('/') }}"><span>KolkataFala</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="{{ url('/') }}"><img src="welcome/assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#specials">Specials</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="book-a-table text-center">
          @guest
              <a href="{{ route('login') }}">Login/Register</a>
          @else
            @if (Auth::user()->is_admin)
                <a href="{{ route('admin') }}">DASHBOARD</a>             
            @else
                <a href="{{ route('home') }}">DASHBOARD</a>
            @endif
          </li>
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="{{ route('logout') }}" style="color: black" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </div>
            </li>         
          @endguest
          
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(welcome/assets/img/slide/slide-1.png);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Kolkata</span> Fala</h2>
                <p class="animate__animated animate__fadeInUp">Kolkata's now has its very own fine dining experience brining you handpicked cusines from around the country seasoned with premium fiancée and exotic flavouring of your own KolkataFala.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="{{ route( 'reservation.form') }}" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(welcome/assets/img/slide/slide-2.png);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Come & Taste Food from The City's Exclusive Kitchen</h2>
                <p class="animate__animated animate__fadeInUp">Our world class kitchen is the home of high level cooking where our chefs perform thier mastery to bring our dinners thier plate full perfectly cooked delicacies to devour upon.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="{{ route( 'reservation.form') }}" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(welcome/assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Serving Happiness in Plates, Food that will make you close your eyes & smile</h2>
                <p class="animate__animated animate__fadeInUp">Where elegance meets professionalism, each of our servings are crafted with pure skills and artsy of nation's most talented food experts. Our array of talanted chefs produce works of art that will trigger senses of unprecedented pleasure in your tastebud.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="{{ route( 'reservation.form') }}" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("welcome/assets/img/about.jpg");'>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3> <strong>Our Story</strong>.</h3>
              <p>
                Would you like to savor the exquisite cuisine and bring the art of dining to a new level? We obtain the freshest products from reputable purveyors and incorporate them into our exclusive dishes.
              </p>
              <p class="font-italic">
                Welcome to the home exotic cusines and uforgetable delicacies...
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> During the same period, the delicious bouquets of the hunt drift out from the kitchen. Simmering on the stove, hare, venison or quail await your arrival at table..</li>
                <li><i class="bx bx-check-double"></i>During the end of year festivals: products of excellence have the place of honour to finish the year off with a flourish.</li>
                <li><i class="bx bx-check-double"></i> In summer: Grilled meats, mixed salads and a summer menu for a light meal on the terrace</li>
              </ul>
              <p>
                 Our menus are influenced by culinary traditions of Europe, Far East and other parts of the world. We are open to experiments and often add new dishes to our a la carte menu. After trying our appetizers, entrees and one-of-a-kind desserts, you won’t be able to resist the temptation and ask for more. Our courteous and attentive waiters in smoking jackets and bow ties will bring you anything you wish.
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-Main_Course">Main Course</li>
              <li data-filter=".filter-Sides">Sides</li>
              <li data-filter=".filter-Desserts">Desserts</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">


          <div class="col-lg-6 menu-item filter-Main_Course">
            <div class="menu-content">
              <a href="#">Jheenga Biryani</a><span>₹380</span>
            </div>
            <div class="menu-ingredients">
              Dum pukhti method of cooking rice, Fresh river prawns
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-Main_Course">
            <div class="menu-content">
              <a href="#">Chicken & Buffalo Fajita</a><span>₹395</span>
            </div>
            <div class="menu-ingredients">
              Choice of protein or veg with chipotle butter, fresh cilantro, grilled bell peppers & onions. Served sizzling with soft flour tortillas, pico de
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-Main_Course">
            <div class="menu-content">
              <a href="#">Awadhi Sugandhi Mahi</a><span>₹415</span>
            </div>
            <div class="menu-ingredients">
              Cubes of grilled Chicken, Saffron, Yougourt, Kolkata Favourite Gandhoraj
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-Main_Course">
            <div class="menu-content">
              <a href="#">KolkataFala Special Raan Biryani</a><span>₹2209</span>
            </div>
            <div class="menu-ingredients">
              Cubes of grilled Chicken, Saffron, Yougourt, Kolkata Favourite Gandhoraj
            </div>
          </div>


          <div class="col-lg-6 menu-item filter-Desserts">
            <div class="menu-content">
              <a href="#">Kulfi</a><span>₹250</span>
            </div>
            <div class="menu-ingredients">
              Milk, nuts & cardamoms
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-Desserts">
            <div class="menu-content">
              <a href="#">Ras malai</a><span>₹300</span>
            </div>
            <div class="menu-ingredients">
              Milk, Sugar, Paneer, Cream, Cardamoms
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-Desserts">
            <div class="menu-content">
              <a href="#">Gulab jamun</a><span>₹300</span>
            </div>
            <div class="menu-ingredients">
            Khoa, Maida Flour, Baking Powder, cardamoms, Milk, Paneer, Ghee, Sugar, Rose Water
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Pneer Tikka</a><span>₹350</span>
            </div>
            <div class="menu-ingredients">
              Paneer, Yogurt, Capsicum, Onion, Tomato
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Mushroom 65</a><span>₹350</span>
            </div>
            <div class="menu-ingredients">
              Mushroom, Yogurt, Garlic, Curry Leaves
            </div>
          </div>

           <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">BBQ Fish</a><span>₹370/450</span>
            </div>
            <div class="menu-ingredients">
              Basil/Vetki, Garlic, Parsley, Orange, Onion, Rocket Leaves, Papper
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Grill Chicken Breasts</a><span>₹430</span>
            </div>
            <div class="menu-ingredients">
               Skinless Chicken Breasts, Seasoning, Oregano, Black Pepper, Lemon
            </div>
          </div>

          

          <div class="col-lg-6 menu-item filter-Sides">
            <div class="menu-content">
              <a href="#">Methi Aloo</a><span>₹250</span>
            </div>
            <div class="menu-ingredients">
              Aloo, Methi, Dry spices
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-Sides">
            <div class="menu-content">
              <a href="#">Nimbu Aur Hari Mirch Ka Murgh</a><span>₹400</span>
            </div>
            <div class="menu-ingredients">
              Chicken, Lime, Coriander Leaves, Dry Spices
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-Sides">
            <div class="menu-content">
              <a href="#">sali Boti</a><span>₹500</span>
            </div>
            <div class="menu-ingredients">
              Mutton, Hot Spices, Potato
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Check our <span>Specials</span></h2>
          <p>Give yourself the elite feel by trying  out something from our array of exlusively handpicked exotic delicasies and tradional cusines that are KolkataFala's Speccial.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Kozhikodan Murgh Dum Biryani</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Jujeh Kabab (Joojay kebob or Joojeh kabab)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Creamy Coriander Chicken</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4">Pepper Butter Prawn</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5">KolkataFala Speial Mutton</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Delicious,and flavorful North Kerala style one pot meal</h3>
                    <p class="font-italic">The Kozhikodan biriyani is famous for its special taste and aroma.The main ingredients of this delicious biriyani is  chicken ,ghee,spices and the special khaima rice(jeeraka sala)</p>
                    <p>Topped with boiled eggs, this southern-style biryani is simply unmissable! Tantalising spices like fennel powder, red chilli, green chilli and turmeric cooked with basmati rice, tomatoes, ginger-garlic and chicken, makes for this stellar biryani.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="welcome/assets/img/specials-1.webp" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Grilled Chicken on Skewers</h3>
                    <p class="font-italic">Jujeh Kabab is an Iranian dish that consists of grilled chunks of chicken which are sometimes with bone and other times without bone.</p>
                    <p>This is one of the most common and popular dishes of Iran.It is common to marinate the chunks in minced onion, lemon juice and saffron.Served on chelo rice or wrapped in lavash bread.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="welcome/assets/img/specials-2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Here is a different way to enjoy chicken for a midweek meal!</h3>
                    <p class="font-italic">This indulgent creamy coriander chicken dish combines coriander with oregano, onions, garlic and sour cream to make a delicious sauce. The addition of Sliced Cactus in this dish adds a nice twist, as well as some kick in the form of Smoky Chipotle Fajita and Taco Mix.</p>
                    <p>This dish gets its flavor from both the leaves and seeds of the coriander plant. Ground coriander seasons the chicken while coriander leaves, better known as cilantro leaves in the United States, accent the creamy sauce.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="welcome/assets/img/specials-3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Buttery large prawns soaked in gravy with curry leaves</h3>
                    <p class="font-italic">Pepper Butter Prawn is a relatively new Malaysian creation–combining the best of Malay, Chinese, Indian, and western ingredients, this is a knockout dish in terms of taste, smell, and presentation.</p>
                    <p>The exotic scent of these dark green leaves saturates coconut milk based curries with rich fragrance and perks up seafood dishes such as Butter Prawn and Black Pepper Crab.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="welcome/assets/img/specials-4.gif" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Tender, flavorsome, succulent and sensational! </h3>
                    <p class="font-italic">Delicious, soft tender chunks of mutton meat in Indian style spiced onion tomato gravy</p>
                    <p>Mutton is a tough and strongly-flavored meat that needs to be marinated and cooked well to bring out its unique taste. It features prominently in various cuisines across the globe, from American hamburgers and British roasts to the classic </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="welcome/assets/img/specials-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Organize Your <span>Events</span> in our Restaurant</h2>
        </div>

        <div class="owl-carousel events-carousel">

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="welcome/assets/img/event-birthday.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Birthday Parties</h3>
              <div class="price">
                <p><span>₹1,899</span></p>
              </div>
              <p class="font-italic">
                A birthday party is a celebration of the anniversary of the birth of the person who is being honored.Special occasions deserve special treatment.From balloon decoration to props.Planning party is never an easy breathewhen you already have a tight schedule.
                <strong>So,It’s your birthday — shout hooray!</strong>
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> <strong>Curated performances for kids across magic, DIY, and more for birthdays</strong></li>
                <li><i class="icofont-check-circled"></i> <strong>Under 6</strong><br>Birthdy Parties for little ones-Storytelling,puppetry and more!!! </li>
                <li><i class="icofont-check-circled"></i><strong>Between 6-11</strong><br>Birthday Parties for Young Rockstars-activities,magic shows and more!!! </li>
                <li><i class="icofont-check-circled"></i><strong>Between 11-18</strong><br>Parties and fun group activities for teenagers for birthdays and other occasions!!! </li>
              </ul>
              <p>
                Maintaining a healthy budget also comes into play while going through the execution process.with a way out of this riddles,<strong>KOLKATAFALA </strong>came up with the customized Birthday Party planner service to assist you with the proffessional planners,suiting your budget and requirements.
              </p>
            </div>
          </div>

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="welcome/assets/img/event-private.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Private Parties</h3>
              <div class="price">
                <p><span>₹2,990</span></p>
              </div>
              <p class="font-italic">
                <strong>KOLKATAFALA</strong> also assis you with spot booking facilities and that's why our latest service-<strong>Private parties</strong>-is designed to take virtual celebrations to a new high.With Private Parties,you can book exclusive performances,delivered virtually in a personalised and intimate setting for your guests.
              </p>
              <ul>
                We are offerring:
                <li><i class="icofont-check-circled"></i>Rooftop view with swimming pool </li>
                <li><i class="icofont-check-circled"></i> Catering</li>
                <li><i class="icofont-check-circled"></i> Nightlife with our housewarming cocktails</li>
              </ul>
              <p>
                Say hi to a new era of party planning!
                Special occasions made fun with Private Parties from our Insider. Choose from our curated list of services and book a private online event for friends or family!Booking these private events from our insider is simple and convenient. 
              </p>
            </div>
          </div>

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="welcome/assets/img/event-custom.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Custom Parties</h3>
              <div class="price">
                <p><span>₹1,199</span></p>
              </div>
              <p class="font-italic">
                Are you looking for a custom party theme for your son or daughters upcoming birthday party?  Let Parties On Purpose create a custom event just for you! We will work with you to discuss your vision and ideas and come up with fun and creative options.  We have created themes based on movies, books, favorite fairytales and more!
              </p>
              <ul>
                Our service offers you:
                <li><i class="icofont-check-circled"></i> Unlimited buffet</li>
                <li><i class="icofont-check-circled"></i> Dessert Counter</li>
                <li><i class="icofont-check-circled"></i> Music</li>
              </ul>
              <p>
               Parties On Purpose is ready to turn your vision into a reality!
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Why choose <span>Our Restaurant</span></h2>
          <p>Here are 3 reasons why KolkataFala should be the destination of your next food Adventure.</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Covid Safe</h4>
              <p>Contactless payment, Disposable Safety Gear, Cleanliness, Sanitisation and Disinfection, Daily Wellness checks. </p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Kids Eat Free</h4>
              <p>Good news for Parents! Come along with your kids and they can feast unlimited, kids below the age of 6 eat for free. </p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4>Student Offer</h4>
              <p>Attention Students! Walk-in and show us your ID card to avail your favorite (name) buffet lunch at Rs.522* and dinner at Rs.617*. </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Some photos from <span>Our Restaurant</span></h2>
          <p>Take a look at our gallery showcasing our indoor dinning ambience and snapshots of some of our beautifully garnished dishes.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="welcome/assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                <img src="welcome/assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="welcome/assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                <img src="welcome/assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="welcome/assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                <img src="welcome/assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="welcome/assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                <img src="welcome/assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="welcome/assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                <img src="welcome/assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="welcome/assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                <img src="welcome/assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="welcome/assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                <img src="welcome/assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="welcome/assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                <img src="welcome/assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>We have the country's most talented pairs of of hands preparing meals for you.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="welcome/assets/img/chefs/chefs-1.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Biswajit Roy</h4>
                <span>Master Chef</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="welcome/assets/img/chefs/chefs-2.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ahana Nandi</h4>
                <span>Patissier</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="welcome/assets/img/chefs/chefs-3.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Vikrant Patel</h4>
                <span>Cook</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="welcome/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Himanshu Dutta</h3>
            <h4>Ceo &amp; Founder</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Great service and polite bearers. Walked in for a lunch reservation and the food was great. Quite lots of options to pick from. 
• So this place does’nt need any explanation. It’s the best place for having grills in the city. One of the best place I have visited. 
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="welcome/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Ganguly</h3>
            <h4>Designer</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Had been to this place on occasion of Diwali. Loved the starters. Taste is awesome. Excellent staff who takes care of our needs. They surprised us with complimentary beer for that day.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="welcome/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jayti Majhumder </h3>
            <h4>Store Owner</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              o this place does’nt need any explanation. It’s the best place for having grills in the city. One of the best place I have visited. 
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="welcome/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Pervin Jain</h3>
            <h4>Freelancer</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               You can't match the quality of food available here. The service is also excellent. Some of our desired dishes were not available at that moment but given the pandemic situation and less crowd demand, I'm going to let it pass. My only complaint would be that the ambience was not as good as the food, otherwise it would be just nothing to say about ! Awesome food nonetheless !
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="welcome/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>Saikat Halder</h3>
            <h4>Entrepreneur</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               The are sanitizing the guests the place thoroughly. And nothing to say about the food. They are the best north indian restaurant in kolkata and have maintained their quality even after the pandemic, unlike other popular restaurant.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Let Us know Any Querires, Feedback or Suggestions you have for us, your words mean the most. Feel free to write to us!</p>
        </div>
      </div>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.6674911309447!2d88.34916311495927!3d22.554125285192356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0276e7479c7cad%3A0x2ce399323c653f92!2sPark%20St%2C%20Kolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1609091610391!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>A108 Park Street<br>Kolkata, Kol 700 065</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-clock-time icofont-rotate-90"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>info@KolkataFala.rf.gd<br>contact@KolkataFala.rf.gd</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
            </div>
          </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Kolkata<span style="color: white">Fala</span></h3>
      <p>Where elegance meets professionalism</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="welcome/assets/vendor/jquery/jquery.min.js"></script>
  <script src="welcome/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="welcome/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="welcome/assets/vendor/php-email-form/validate.js"></script>
  <script src="welcome/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="welcome/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="welcome/assets/vendor/venobox/venobox.min.js"></script>
  <script src="welcome/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="welcome/assets/js/main.js"></script>

</body>

</html>