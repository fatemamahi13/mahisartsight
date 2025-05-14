<?php 
include "header.php";
?>

  
  <section class="hero">
  <div class="hero-overlay">
</div>
  <div class="hero-content container " data-aos="zoom-in-up"  data-aos-delay="50" data-aos-duration="1000"  data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false"
    data-aos-anchor-placement="top-center" >
    <h1 class="display-4 fw-bold">Welcome to Mahis Artsight</h1>
    <p class="lead">Discover the beauty of calligraphy, abstract art, and nature-inspired creations.
    Here you will find perfectly crafted calligraphy & paintings which you can afford easily.Our quality is best & we believe quality is the best business plan.. 
Grab your ones from us 🤍
& stay with us</p>
    <a href="#category" class="btn btn-warning btn-lg mt-3">Learn More</a>
  </div>
</section>
<!-- hero section -->
 <section>
<div class="b-example-divider"></div>

<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5 ">
    <div class="col-10 col-sm-8 col-lg-6 float-right"data-aos="fade-left"  data-aos-delay="50" data-aos-duration="1000"  data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false"
    data-aos-anchor-placement="top-center">
      <img src="images/collage.jpg" class="d-block mx-lg-auto img-fluid" alt="" width="100%" height="100%" loading="lazy">
    </div>
    <div class="col-lg-6 float-start" data-aos="fade-right"  data-aos-delay="50" data-aos-duration="1000"  data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false"
    data-aos-anchor-placement="top-center">
      <h1 class="display-5 fw-bold lh-1 mb-3"><i>Calligraphy</i></h1>
      <p class="lead">Arabic calligraphy, or khatt al-‘arabi, emerged as a profound response to the need for preserving and elevating the written word of the Quran. Its foundation lies in the harmonious blend of language, aesthetics, and devotion. Across centuries, calligraphy has evolved from simple inscriptions to intricate designs that have graced the walls of mosques, manuscripts, coins, and even modern art
        .</p>
    </div>
  </div>
</div> 
<!-- category section -->
        <!-- Page header with logo and tagline-->
        <section  id="category">
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
            <h1><center>category </center></h1>
            </div>
        </header>
        <!-- Page content-->
        <div class="container "data-aos="fade-up"  data-aos-delay="50" data-aos-duration="1000"  data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false"
        data-aos-anchor-placement="top-center">
        <div class="row ">
        <!-- Blog entries-->
                <div class="col-lg-12 ">
                    <div class="row justify-content-between">
                        
                            <!-- Blog post-->
                            <?php
                          
                            $sqlSelect = "SELECT * FROM category";
                            $result = mysqli_query($conn,$sqlSelect);
                            while ($data = mysqli_fetch_array($result)) {
                            ?>
                           
                            <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
                            <a href="#!"><img class="card-img-top" src="<?php echo $data['image']; ?>" alt="..." /></a>

  <div class="card-body">
    <h5 class="card-title"> <?php echo $data["name"]; ?></h5>
    <p class="card-text"><?php echo $data["summary"]; ?></p>
  
  </div>
</div>

                               <?php
                                    }
                            ?>
                       
                    </div>
                 
 

    <header id="about">

<div class="container my-5 col-12 "style="background-color: rgb(223, 247, 158);!important" >
  <div class="row flex-lg-row-reverse align-items-center   ">
    
    <div class="col-lg-6 float-start" data-aos="fade-left"  data-aos-delay="50" data-aos-duration="1000"  data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false"
    data-aos-anchor-placement="top-center">
      <h1 class="display-5 fw-bold lh-1 mb-3"><i>ABOUT</i></h1>
      <p class="lead text-sm-start text-dark">
      Assalamualaikum,
         Hi, I’m Mahi , an art and calligraphy enthusiast with a passion for turning ideas into visual stories I find joy in exploring different art mediums, experimenting with colors, and refining the delicate strokes of calligraphy. For me, art is not just a hobby but a form of self-expression that brings emotions and imagination to life. Calligraphy, on the other hand, lets me merge creativity with precision, turning simple words into stunning designs. I’m constantly inspired to learn, create, and share my work, hoping to connect with others who appreciate the beauty of handmade art.
        </p>
    </div>
    <div class=" col-lg-6 float-right"data-aos="fade-right"  data-aos-delay="50" data-aos-duration="1000"  data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false"
    data-aos-anchor-placement="top-center">
      <img src="images/about.png" class="d-block mx-lg-auto img-fluid" alt="" width="100%" height="100%" loading="lazy">
    </div>
</div></div>
                                  </header>
            
        </section >
        <!-- section -->
         <!-- all product section  -->
  
        <!-- Page header with logo and tagline-->
         <section id="product">
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">ALL PRODCUTS</h1>
                    
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container" data-aos="zoom-in"  data-aos-delay="50" data-aos-duration="1000"  data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false"
        data-aos-anchor-placement="top-center">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-12">
                    <div class="row">
                        
                            <!-- Blog post-->
                            <?php
                          
                            $sqlSelect = "SELECT * FROM data";
                            $result = mysqli_query($conn,$sqlSelect);
                            while ($data = mysqli_fetch_array($result)) {
                            ?>
                            <div class="col-lg-3">
                                <div class="card mb-4">
                                    <a href="#!"><img class="card-img-top" src="<?php echo $data['image']; ?>" alt="..." /></a>
                                    <div class="card-body">
                                        
                                        <h2 class="card-title h4"><?php echo $data["name"]; ?></h2>
                                        <p class="card-text"><?php echo $data["summary"]; ?></p>
                                       
                                        <div class="d-flex">
                                        <a class="btn btn-warning" href="view.php?id=<?php echo $data['id']; ?>">Read more →</a>

                                        <button class="btn btn-darkg flex-shrink-0" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover" onclick="addToCart()">
                                <i class="bi-cart-fill me-1" onclick="addToCart()"></i>
                                Add to cart
                            </button></div>
                                    </div>
                                </div>
                            </div>
                               <?php
                                    }
                            ?>
                       
                    </div>
   
                  
                    
                </div>
            </div>
                                  </div>
    
<!-- /Contact Section -->
<section id="contact" class="contact section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2 ><center>Contact </center></h2>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-6">
      <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
        <i class="bi bi-geo-alt"></i>
        <h3>Address</h3>
        <p>chowdury para  ,Katgor<br>  patenga chattogram.</p>

      </div>
    </div><!-- End Info Item -->

    <div class="col-lg-3 col-md-6">
      <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
        <i class="bi bi-telephone"></i>
        <h3>Call Us</h3>
        <p>+1 5589 55488 55</p>
      </div>
    </div><!-- End Info Item -->

    <div class="col-lg-3 col-md-6">
      <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
        <i class="bi bi-envelope"></i>
        <h3>Email Us</h3>
        <p>arsightmahis@gmail.com</p>

      </div>
    </div><!-- End Info Item -->

  </div>

  <div class="row gy-4 mt-1">
    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.6686739569827!2d91.80195239999999!3d22.252646499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acdfca331fd9b5%3A0x11c60c189842e6d5!2sMahi&#39;s%20Artsight!5e0!3m2!1sen!2sbd!4v1734097368797!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- End Google Maps -->

    <div class="col-lg-6">
      <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
          </div>

          <div class="col-md-6 ">
            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
          </div>

          <div class="col-md-12">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <button type=" submit" class="btn btn-warning">Send Message</button>
            </div>

        </div>
      </form>
    </div><!-- End Contact Form -->

  </div>

</div>
<div>

</section>
<!-- client section -->
<section id="gallery" class="gallery section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
<center> <h2>  Client Gallery</h2>
  <p>Some photos from Our clients</p> </center>
</div><!-- End Section Title -->

<div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

  <div class="row g-1">

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="images/client1.jpg" class="glightbox" data-gallery="images-gallery">
          <img src="images/client1.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="images/client 2.jpg" class="glightbox" data-gallery="images-gallery">
          <img src="images/client 2.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="images/client 3.jpg" class="glightbox" data-gallery="images-gallery">
          <img src="images/client 3.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="images/client 4.jpg" class="glightbox" data-gallery="images-gallery">
          <img src="images/client 4.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="images/client 5.jpg" class="glightbox" data-gallery="images-gallery">
          <img src="images/client 5.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="images/client 6.jpg" class="glightbox" data-gallery="images-gallery">
          <img src="images/client 6.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="images/client7.jpg" class="glightbox" data-gallery="images-gallery">
          <img src="images/client7.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="images/client8.jpg" class="glightbox" data-gallery="images-gallery">
          <img src="images/client8.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div><!-- End Gallery Item -->

  </div>

</div>

</section>
<!-- question section -->
<section>
<div class="container py-5 " data-aos="fade-up" data-aos-delay="100">

  <h1 class="me-5"><center> FREQUENTLY ASKED QUESTIONS</center></h1>
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        How can we confrim your orders?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">For confriming order you have to pay  us 50%  in advance .</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      Can you give us customize size for painting or frames?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"> yes! you can customize size or painting also .we will give our customer what they want & what they design .Every customer give us design first then we start our work</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Can we change the design of clothes?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">yes! you can the design of clothes and its materials .</div>
    </div>
  </div>
</div>
      </div>
</section>

    <?php 
    include 'footer.php';
    ?>


  