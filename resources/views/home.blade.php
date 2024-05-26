<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inventory Management</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{config('app_url')}}/Frontend/{{config('app_url')}}/Frontend/assets/img/favicon.png" rel="icon">
  <link href="{{config('app_url')}}/Frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{config('app_url')}}/Frontend/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{config('app_url')}}/Frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{config('app_url')}}/Frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{config('app_url')}}/Frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{config('app_url')}}/Frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{config('app_url')}}/Frontend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{config('app_url')}}/Frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{config('app_url')}}/Frontend/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">INV<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a> --}}
            {{-- <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul> --}}
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      @if(Auth::user())
        @if(Auth::user()->role=='admin')
      <a href="{{url('admin/dashboard')}}" class="get-started-btn scrollto">Dashboard</a>
      @elseif (Auth::user()->role=='moderator')
      <a href="{{url('moderator/dashboard')}}" class="get-started-btn scrollto">Dashboard</a>
      @else
      <a href="{{url('user/dashboard')}}" class="get-started-btn scrollto">Dashboard</a>
      @endif

      {{-- <a href="{{url('/cart')}}" class="get-started-btn scrollto">Cart<i class="bx bx-cart"></i></a> --}}
      @else
      <a href="{{url('login')}}" class="get-started-btn scrollto">Login</a>
      <a href="{{url('register')}}" class="get-started-btn scrollto">Register</a>
      @endif

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Powerful Digital Solutions With Inventory<span>.</span></h1>
          <h2>A Solution to farm industry</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-inventory-line"></i>
            <h3><a href="">Stock Overview</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-price-tag-3-line"></i>
            <h3><a href="">Pricing</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-file-list-3-line"></i>
            <h3><a href="">Order Management</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-barcode-box-line"></i>
            <h3><a href="">Product Listings</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-file-transfer-line"></i>
            <h3><a href="">Supplier Management</a></h3>
          </div>
        </div>
      </div>
      
  </section><!-- End Hero -->

  <main id="main">

  <!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <img src="{{config('app_url')}}/Frontend/assets/img/about.jpg" class="img-fluid" alt="">      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
        <h3>Efficient and Reliable Inventory Management Solutions</h3>
        <p class="fst-italic">
          Our inventory management system is designed to streamline your business operations, ensuring that you have the right products at the right time.
        </p>
        <ul>
          <li><i class="ri-check-double-line"></i> Real-time tracking of stock levels and inventory movements.</li>
          <li><i class="ri-check-double-line"></i> Automated restocking and order management processes.</li>
          <li><i class="ri-check-double-line"></i> Comprehensive reporting and analytics to optimize inventory decisions.</li>
        </ul>
        <p>
          Our system provides a complete solution for managing your inventory, reducing errors, and increasing efficiency. From procurement to sales, we help you maintain optimal stock levels and improve customer satisfaction.
        </p>
      </div>
    </div>

  </div>
</section><!-- End About Section -->


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{config('app_url')}}/Frontend/assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{config('app_url')}}/Frontend/assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{config('app_url')}}/Frontend/assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{config('app_url')}}/Frontend/assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{config('app_url')}}/Frontend/assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{config('app_url')}}/Frontend/assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{config('app_url')}}/Frontend/assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{config('app_url')}}/Frontend/assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
        <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-package"></i>
          <h4>Real-Time Inventory Tracking</h4>
          <p>Monitor stock levels in real-time to ensure you always have the right amount of inventory on hand.</p>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-refresh"></i>
          <h4>Automated Restocking</h4>
          <p>Set up automated reorder points to avoid stockouts and overstocking, keeping your inventory optimized.</p>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-bar-chart"></i>
          <h4>Comprehensive Reporting</h4>
          <p>Generate detailed reports to analyze sales trends, inventory turnover, and forecast future inventory needs.</p>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-user-check"></i>
          <h4>Supplier Management</h4>
          <p>Manage supplier information, track orders, and ensure timely procurement of inventory items.</p>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Features Section -->


   <!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Services</h2>
      <p>Check Our Inventory Management Services</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-package"></i></div>
          <h4><a href="">Inventory Tracking</a></h4>
          <p>Keep track of your inventory levels in real-time to ensure you never run out of stock.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-refresh"></i></div>
          <h4><a href="">Automated Restocking</a></h4>
          <p>Automate your restocking process to maintain optimal inventory levels effortlessly.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-bar-chart"></i></div>
          <h4><a href="">Analytics & Reporting</a></h4>
          <p>Generate detailed reports and analytics to make informed decisions about your inventory.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-user-check"></i></div>
          <h4><a href="">Supplier Management</a></h4>
          <p>Manage your suppliers and procurement process to ensure timely delivery of inventory.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-money"></i></div>
          <h4><a href="">Cost Management</a></h4>
          <p>Control and optimize your inventory costs to maximize your profit margins.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-check-shield"></i></div>
          <h4><a href="">Quality Assurance</a></h4>
          <p>Ensure the quality of your inventory with our comprehensive quality assurance services.</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->


   <!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
  <div class="container" data-aos="zoom-in">

    <div class="text-center">
      <h3>Streamline Your Inventory Management</h3>
      <p>Enhance your business efficiency with our comprehensive inventory management solutions. Reduce costs, optimize stock levels, and ensure smooth operations.</p>
      <a class="cta-btn" href="tel:+01885375802">Contact Us: 01885-375802</a>
    </div>

  </div>
</section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Check our Product</p>
        </div>


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($getProduct as $item)
              
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('upload/product/'.$getProductImage->where('product_id',$item->id)->first()->image_name) }}" class="img-fluid" alt="" style="height:300px;width:300px;">
              <div class="portfolio-info">
                <h4>{{$item->title}}</h4>
                <p>{{$item->price}} Tk</p>
                <div class="portfolio-links">
                  <a href="{{config('app_url')}}/Frontend/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  
                </div>

              </div>
            </div>
          </div>
          @endforeach


        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
  <div class="container" data-aos="fade-up">

    <div class="row no-gutters">
      <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
        <div class="content d-flex flex-column justify-content-center">
          <h3>Our Achievements in Inventory Management</h3>
          <p>
            We pride ourselves on delivering top-notch inventory management solutions that drive efficiency and optimize operations for our clients.
          </p>
          <div class="row">
            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-emoji-smile"></i>
                <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="2" class="purecounter"></span>
                <p><strong>Happy Clients</strong> who have streamlined their inventory processes with us.</p>
              </div>
            </div>

            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-journal-richtext"></i>
                <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="2" class="purecounter"></span>
                <p><strong>Projects Completed</strong> successfully, delivering effective inventory solutions.</p>
              </div>
            </div>

            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-clock"></i>
                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="4" class="purecounter"></span>
                <p><strong>Years of Experience</strong> in providing inventory management services.</p>
              </div>
            </div>

            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-award"></i>
                <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="4" class="purecounter"></span>
                <p><strong>Awards</strong> received for excellence in inventory management.</p>
              </div>
            </div>
          </div>
        </div><!-- End .content-->
      </div>
    </div>

  </div>
</section><!-- End Counts Section -->


  

    <!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
  <div class="container" data-aos="zoom-in">

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>Azhard Uddin</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Implementing their inventory management solution transformed our operations. We significantly reduced costs and improved stock accuracy.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>Marufa</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Their system streamlined our inventory processes, allowing us to focus more on design and creativity. Highly recommended!
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>Azhar</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Managing inventory has never been easier. Their tools are intuitive and incredibly effective.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>Kundu</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              As a freelancer, keeping track of supplies was a challenge. Their inventory management system simplified everything.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>Mahir</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Their comprehensive approach to inventory management has been a game-changer for our business.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->
<!-- ======= Team Section ======= -->
<section id="team" class="team">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2 style="color: #ff6f61;">Our Team</h2>
      <p style="color: #555;">Meet the dedicated team members behind our success</p>
    </div>

    <div class="row">
      @foreach ($getEmp as $item)
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-4">
        <div class="member" data-aos="fade-up" data-aos-delay="100" style="background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%); border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
          <div class="member-img" style="position: relative; overflow: hidden; border-top-left-radius: 15px; border-top-right-radius: 15px;">
            <img src="{{ asset('uploads/photos/'.$item->image) }}" style="width: 100%; height: 230px; object-fit: cover; border-radius: 50%; margin-top: 15px;" class="img-fluid" alt="">
            <div class="social" style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); display: flex; gap: 10px;">
              <a href="" style="color: #555; font-size: 1.2em;"><i class="bi bi-twitter"></i></a>
              <a href="" style="color: #555; font-size: 1.2em;"><i class="bi bi-facebook"></i></a>
              <a href="" style="color: #555; font-size: 1.2em;"><i class="bi bi-instagram"></i></a>
              <a href="" style="color: #555; font-size: 1.2em;"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info" style="text-align: center; padding: 20px; background: #fff; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
            <h4 style="color: #333;">{{$item->name}}</h4>
            <span style="color: #777;">{{$item->address}}</span>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section><!-- End Team Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;"  src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7350.849528727769!2d89.5049624996854!3d22.897698632084744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1716105726174!5m2!1sen!2sbd" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Teligati</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>jos@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>01822 91 31 16</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{url('/admin/contact/add')}}" method="post" role="form" class="form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="number" class="form-control" name="w" id="phone" placeholder="phone" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="status" id="phone" placeholder="status" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="description" rows="5" placeholder="Description" required></textarea>
              </div>
              <div class="text-center">
                <input type="submit" value="Submit"/>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color: #f8f9fa; padding: 60px 0;">
    <div class="footer-top">
      <div class="container">
        <div class="row">
  
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3 style="color: #343a40;">Inventory<span>.</span></h3>
              <p style="color: #6c757d;">
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong style="color: #343a40;">Phone:</strong> 01`885375802<br>
                <strong style="color: #343a40;">Email:</strong> jos@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter" style="color: #052949;"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook" style="color: #052949;"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram" style="color: #052949;"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin" style="color: #052949;"></i></a>
              </div>
            </div>
          </div>
  
          <div class="col-lg-2 col-md-6 footer-links">
            <h4 style="color: #343a40;">Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #052949;">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #052949;">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #052949;">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #052949;">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #052949;">Privacy policy</a></li>
            </ul>
          </div>
  
          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="color: #343a40;">Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #052949;">Inventory Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #052949;">Stock Control</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #052949;">Order Tracking</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #052949;">Warehouse Solutions</a></li>
            </ul>
          </div>
  
  
        </div>
      </div>
    </div>
  </footer>
  

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Inv</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{config('app_url')}}/Frontend/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{config('app_url')}}/Frontend/assets/vendor/aos/aos.js"></script>
  <script src="{{config('app_url')}}/Frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{config('app_url')}}/Frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{config('app_url')}}/Frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{config('app_url')}}/Frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{config('app_url')}}/Frontend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{config('app_url')}}/Frontend/assets/js/main.js"></script>

  <script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>

</body>

</html>