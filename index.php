<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>KeepCut Studio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:wght@400;500;600&family=Petit+Formal+Script&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/stylee.css" rel="stylesheet" />
  </head>

  <body data-bs-spy="scroll" data-bs-target="#navBar" id="KeepcutHome">
    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar start -->
    <div class="container-fluid sticky-top px-0">
      <div class="container-fluid">
        <div class="container px-0">
          <nav class="navbar navbar-light navbar-expand-xl" id="navBar">
            <a href="index.html" class="navbar-brand">
              <img src="img/logokeepcutland.png" alt="Logo" width="50" height="50" />
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
              <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse py-3" id="navbarCollapse">
              <div class="navbar-nav mx-auto border-top">
                <a href="#KeepcutHome" class="nav-item nav-link active">Home</a>
                <a href="#KeepcutServices" class="nav-item nav-link">Services</a>
                <a href="#KeepcutAbout" class="nav-item nav-link">About</a>
                <a href="#KeepcutGallery" class="nav-item nav-link">Gallery</a>
                
                <a href="#KeepcutContacts" class="nav-item nav-link">Contact</a>
              </div>
              <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                <a href="sign_in.php" class="btn btn-primary btn-primary-outline-0 py-2 px-4 ms-4">Sign In</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid carousel-header px-0">
      <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img src="img/background.png" class="img-fluid" alt="Image" />
            <div class="carousel-caption">
                
              <div class="p-3 mx-auto animated zoomIn" style="max-width: 900px">
                <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-4" style="border-style: double">
                  <h4 class="text-white mb-0" >Hello Dear, Welcome<br> The KeepCut Studio website provides comprehensive information about its barbershop services.<br />
                    Through this platform, customers can easily schedule appointments with the available barbers
                    for a hair-cutting experience tailored to their desired style and preferences.
                    This ensures a top-notch grooming experience, so you can look and feel your best.
                    Join us today and book your appointment for a fresh new look!
                </div>
                
                <div class="d-flex align-items-center justify-content-center">
                  <a class="btn btn-primary btn-primary-outline-0 py-3 px-5" href="sign_up.php">Register</a>
                </div>
              </div>
            </div>
          </div>
         
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- Hello! Start -->
    <div class="container-fluid position-relative py-5" id="KeepcutServices">
            <div class="container">
              <h2 class="section-title-service">Services</h2>
              <p class="services-description">Here are some of the services we offer:</p>
      
              <div class="image-links">
                <a href="link_ke_halaman1.html"><img src="img/haircut.png" alt="Gambar 1" width="200" height="200" /></a>
                <a href="link_ke_halaman2.html"><img src="img/coloring.png" alt="Gambar 2" width="200" height="200" /></a>
                <a href="link_ke_halaman3.html"><img src="img/perm.png" alt="Gambar 3" width="200" height="200" /></a>
              </div>
      
              <div class="image-links">
                <a href="link_ke_halaman4.html"><img src="img/smoothing.png" alt="Gambar 4" width="200" height="200" /></a>
                <a href="link_ke_halaman5.html"><img src="img/others.png" alt="Gambar 5" width="200" height="200" /></a>
              </div>
            </div>
          </section>
    </div>
    <!-- Hello! End -->

   

    <!-- Story Start -->
    <div class="container-fluid story position-relative py-5" id="KeepcutAbout">
     
        <h2 class="section-title-about" style="text-align: center;">About Us</h2>
        

            
            <div class="description-about">
              <p>
                KEEPCUT STUDIO, established in 2023, is a one-of-a-kind hair cutting establishment. Our studio seamlessly blends the charm of a barbershop with the elegance of a salon. We're committed to delivering top-tier hair cutting
                services to our valued customers. At KEEPCUT STUDIO, each strand of hair is our canvas, and every cut is a masterpiece. Our passion for hairstyling shines through every scissor snip and razor trim. Experience the art of hair
                transformation at KEEPCUT STUDIO.
              </p>
              <img src="img/toko.png" alt="Deskripsi Gambar" />
            </div>
          </div>
      
    </div>
    <!-- Story End -->

   
 

    <!-- Gallery Start -->
    <div class="container-fluid gallery position-relative py-5" id="KeepcutGallery">
   
      <div class="container position-relative py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px">
          <h1 class="display-2 text-dark">Keepcut Gallery</h1>
          <p class="fs-5 text-dark">How pretty they are</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
            <div class="gallery-item">
              <div class="gallery-img">
                <img class="img-fluid w-100" src="img/model (1).png" alt="" />
                <div class="hover-style"></div>
                <div class="search-icon">
                  <a href="img/model (1).png" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                </div>
              </div>
              <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double">
                <h5>Jack</h5>
                <p class="text-dark mb-0">Singer</p>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
            <div class="gallery-item">
              <div class="gallery-img">
                <img class="img-fluid w-100" src="img/model (2).png" alt="" />
                <div class="hover-style"></div>
                <div class="search-icon">
                  <a href="img/model (2).png" data-lightbox="Gallery-2" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                </div>
              </div>
              <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double">
                <h5>Rocky</h5>
                <p class="text-dark mb-0">Artist</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
            <div class="gallery-item">
              <div class="gallery-img">
                <img class="img-fluid w-100" src="img/model (3).png" alt="" />
                <div class="hover-style"></div>
                <div class="search-icon">
                  <a href="img/model (3).png" data-lightbox="Gallery-3" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                </div>
              </div>
              <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double">
                <h5>Cila</h5>
                <p class="text-dark mb-0">Model</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
            <div class="gallery-item">
              <div class="gallery-img">
                <img class="img-fluid w-100" src="img/model (4).png" alt="" />
                <div class="hover-style"></div>
                <div class="search-icon">
                  <a href="img/model (4).png" data-lightbox="Gallery-4" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                </div>
              </div>
              <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double">
                <h5>Kevin</h5>
                <p class="text-dark mb-0">Caffe Owner</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
            <div class="gallery-item">
              <div class="gallery-img">
                <img class="img-fluid w-100" src="img/model (5).png" alt="" />
                <div class="hover-style"></div>
                <div class="search-icon">
                  <a href="img/model (5).png" data-lightbox="Gallery-5" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                </div>
              </div>
              <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double">
                <h5>Biru</h5>
                <p class="text-dark mb-0">Idol</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
            <div class="gallery-item">
              <div class="gallery-img">
                <img class="img-fluid w-100" src="img/model (6).png" alt="" />
                <div class="hover-style"></div>
                <div class="search-icon">
                  <a href="img/model (6).png" data-lightbox="Gallery-6" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                </div>
              </div>
              <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double">
                <h5>Irish</h5>
                <p class="text-dark mb-0">Influencer</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
            <div class="gallery-item">
              <div class="gallery-img">
                <img class="img-fluid w-100" src="img/model (7).png" alt="" />
                <div class="hover-style"></div>
                <div class="search-icon">
                  <a href="img/model (7).png" data-lightbox="Gallery-7" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                </div>
              </div>
              <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double">
                <h5>Larissa</h5>
                <p class="text-dark mb-0">Chef</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
            <div class="gallery-item">
              <div class="gallery-img">
                <img class="img-fluid w-100" src="img/model.png" alt="" />
                <div class="hover-style"></div>
                <div class="search-icon">
                  <a href="img/model.png" data-lightbox="Gallery-8" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                </div>
              </div>
              <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double">
                <h5>Ebra</h5>
                <p class="text-dark mb-0">Runner</p>
              </div>
            </div>
          </div>
          <div class="col-12 text-center wow fadeIn" data-wow-delay="0.2s">
            <a class="btn btn-primary btn-primary-outline-0 py-3 px-5 me-2" href="#">View All <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Gallery end -->

    

    <!-- RSVP Form Start -->
    <div class="container-fluid RSVP-form py-5" id="KeepcutContacts">
      
         
          <div class="container-contact">
            <h2 class="section-title-contact">Contact Us</h2>
            <form method="POST" action="process_contact.php">
              <div class="login">
                <input type="text" placeholder="Your Name" class="input" name="name" />
                <input type="text" placeholder="Your Email Address" class="input" name="email" />
              </div>
    
              <div class="subject">
                <input type="text" placeholder="Subject" class="input" name="subject" />
              </div>
    
              <div class="msg">
                <textarea class="area" placeholder="Leave a Message" name="message"></textarea>
              </div>
    
              <button type="submit" class="btn-contact" name="submit">Send</button>
            </form>
          </div>
    
          
     
    </div>
    <!-- RSVP Form End -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s"></div>
      <div class="container py-5">
        <div class="row g-5 justify-content-center">
         
          <div class="col-lg-4 text-center">
            <div class="footer-item" >
              <h4 class="mb-4 text-black-50 ">KeepCut<strong class="text-primary"></strong>Studio</h4>
              <p class="text-black-50">
                The combination of salon elegance and barbershop charm creates a unique ambiance that we wholeheartedly offer to you. From personalized haircuts to styles tailored to your desires, KEEPCUT STUDIO is ready to provide the finest hair care experience that will make you feel and look stunning. Embrace the opportunity today to transform your appearance into a fresh and new look!
              </p>
              <div class="btn-link d-flex justify-content-center">
                <a href="https://www.instagram.com/elmijjj/" class="btn btn-md-square btn-light btn-light-outline-0 me-2"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/elmijjj/" class="btn btn-md-square btn-light btn-light-outline-0 me-2"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/elmijjj/" class="btn btn-md-square btn-light btn-light-outline-0 me-2"><i class="fab fa-instagram"></i></a>
                <a href="https://www.instagram.com/elmijjj/" class="btn btn-md-square btn-light btn-light-outline-0 me-0"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-md-6 text-center text-md-start mb-md-0">
            <span class="text-light"
              ><a href="#"><i class="fas fa-copyright text-light me-2"></i>Keepcut Studio</a>, All right reserved.</span
            >
          </div>
          <div class="col-md-6 text-center text-md-end text-white">
            <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
            <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
            <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
            Designed By <a class="border-bottom" href="https://www.instagram.com/elmijjj/">Elmi Wahyu</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
