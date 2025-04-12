<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="icon" type="image/x-icon" href="images/logo1.jpg">
<!-- ................................................................................ -->

<!-- Links part -->
 <!-- bootstrap cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!--External css-->
  <link href="style.css" rel="stylesheet">
<!-- ................................................................................ -->

</head>

<body>
  <div class="container">
    <!-- .................................................................................................... -->
    <!--Header starts here-->
    <header>
      <!-- Navigation bar starts here -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="#navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Logo of kinakata.com -->
          <a href="index.html" class="navbar-brand">
            <img class="rounded-circle "
            src="images/logo1.jpg"
            alt="Logo" style=" width:80px;">
                  kinakata.com
                </a>
            <!-- navbar menu starts here -->
          <div class="collapse navbar-collapse d-lg-flex justify-content-end  " id="navbarTogglerDemo03">
            <ul class="navbar-nav ">
                    <li class="nav-item "><a class="nav-link active" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="Login&signup.html">Log In</a></li>
                    <li class="nav-item"><a class="nav-link" href="Login&signup2.html">Sign Up</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">MyCart</a></li>
                    <li class="nav-item"><a class="nav-link" href="AboutUS.html">About Us</a></li>
              
            </ul>
            <!-- navbar menu ends here -->


                 <!-- search box starts here -->
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
                 <!-- search box ends here -->
          </div>
        </div>
      </nav>
      <!-- navigation bar ends here -->
    </header>
    <!--Header ends here-->
<!-- .................................................................................... -->
    <!--Main starts here-->
    <main>
      <!-- Menu starts here -->
      <div class="mymenu mt-2 mb-3">
        <div class="bg-light">
          <div class="title text-center md-3">
            <h3 class="font-weight-bolder">Menu</h3>
          </div>
          <div class="row p-3">
            <div class=" col-12 col-md-12 col-lg-4">
              <a href="Fish.html"class="btn w-100 btn-outline-dark mb-3">Fish</a>
              <a href="Meat.html"class="btn w-100 btn-outline-dark mb-3">Meat</a>
              <a href="Vegetables.html"class="btn w-100 btn-outline-dark mb-3">Vegetables</a>
              <a href="Fruits.html"class="btn w-100 btn-outline-dark mb-3">Fruits</a>

            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <a href="DryFood.html"class="btn w-100 btn-outline-dark mb-3">Dry Food</a>
              <a href="Pet.html"class="btn w-100 btn-outline-dark mb-3">Pet</a>
              <a href="Clothing.html"class="btn w-100  btn-outline-dark mb-3">Clothing</a>
              <a href="Accecories.html"class="btn w-100  btn-outline-dark mb-3">Accessories</a>

            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <a href="BabyGoods.html"class="btn w-100  btn-outline-dark mb-3">Baby Goods</a>
              <a href="KitchenGoods.html"class="btn w-100  btn-outline-dark mb-3">Kitchen Goods</a>
              <a href="BeautyGoods.html"class="btn w-100  btn-outline-dark mb-3">Beauty Goods</a>
              <a href="HomeGoods.html"class="btn w-100  btn-outline-dark mb-3">Home Goods</a>

            </div>
          </div>

        </div>

      </div>
      <!-- Menu ends -->
      <!-- ......................................................-->
      <!-- Slider Starts -->
      <div class="container text-white bg-dark">
        <section id="mySlider">
          <div class="section-title">
            <h3 class=" text-center ">Get the best goods at reasonable price</h3>
            <hr class="hr-style">
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                    aria-label="Slide 7"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"
                    aria-label="Slide 8"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="w-80 h-80 "
                      src="https://images.pexels.com/photos/4054850/pexels-photo-4054850.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                      alt="VegeImage">
                  </div>
                  <div class="carousel-item">
                    <img class="w-80 h-80"
                      src="https://images.pexels.com/photos/46174/strawberries-berries-fruit-freshness-46174.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                      alt="Fruits Image">
                  </div>
                  <div class="carousel-item">
                    <img class="w-80 h-80"
                      src="https://images.pexels.com/photos/207085/pexels-photo-207085.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                      alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="w-80 h-80"
                      src="https://images.pexels.com/photos/709817/pexels-photo-709817.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                      alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="w-80 h-80"
                      src="https://images.pexels.com/photos/1508666/pexels-photo-1508666.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                      alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="w-80 h-80"
                      src="https://images.pexels.com/photos/5242824/pexels-photo-5242824.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                      alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="w-80 h-80"
                      src="https://images.pexels.com/photos/1336873/pexels-photo-1336873.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                      alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="w-80 h-80"
                      src="https://images.pexels.com/photos/1599791/pexels-photo-1599791.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                      alt="">
                  </div>

                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
        </section>
      </div>
      <!-- Slider ends -->
<!-- .................................................................... -->
      <!-- Sales section starts here -->
      <div class=" My-card bg-light mt-3 mb-3 p-3 d-sm-flex flex-column">
        <div class="title text-center mb-3">
          <h3 class="font-weight-bolder">Best Sales of the month </h3>
        </div>
        <!-- 1st row -->
        <div class="row mb-3">
          <!-- card no 1  Soy bean -->
          <div class="col-sm-12 mb-2 ml-auto mr-auto col-md-6 col-lg-3">
            <div class="card text-center border border-dark d-sm-flex align-items-center">
              <img class="card-img-top"
                src="images/SoyBeanOil.jpg" style="max-height: 12rem; max-width: 18rem;"
                alt="Soy Bean">
              <div class="card-body">
                <h4 class="card-title">Soy Bean Oil</h4>
                <p class="card-text">285 TK per 2 litres.</p>
                <button class="btn btn-dark">Add to MyCart</button>
              </div>
            </div>
          </div>
          <!-- card no 2  Red lentils-->
          <div class="col-sm-12  mb-2 col-md-6  col-lg-3">
            <div class="card text-center border border-dark d-sm-flex align-items-center ">
              <img class="card-img-top "
                src="images/RedLentil.jpg" style="max-height: 12rem; max-width: 18rem;"
                alt="Red lentils">
              <div class="card-body">
                <h4 class="card-title">Red Lentils</h4>
                <p class="card-text">90 TK per Kg.</p>
                <button class="btn btn-dark">Add to MyCart</button>
              </div>
            </div>
          </div>
          <!-- card no 3 Tomato -->
          <div class=" col-sm-12 mb-2 col-md-6 col-lg-3 ">
            <div class="card text-center border border-dark">
              <img  class="card-img-top" 
                src="images/Tomato.jpg" style="min-height: 12rem;  min-width: 12rem;"
                alt="Tomato">
              <div class="card-body">
                <h4 class="card-title">Tomato</h4>
                <p class="card-text">70 TK per Kg</p>
                <button class="btn btn-dark">Add to MyCart</button>
              </div>
            </div>
          </div>
          <!-- card no 4 -->
          <div class="col-sm-12  mb-2 col-md-6 col-lg-3 ">
            <div class="card text-center border border-dark">
              <img class="card-img-top"
                src="images/Apples.jpg"style="min-height: 12rem;  min-width: 12rem;"
                alt="Apple">
              <div class="card-body">
                <h4 class="card-title">Apple</h4>
                <p class="card-text">160 TK per Kg</p>
                <button class="btn btn-dark">Add to MyCart</button>
              </div>
            </div>
          </div>
        </div>
        <!-- 2nd row -->
        <div class="row mb-3">
          <!-- card no 5 -->
          <div class=" col-sm-12  mb-2 col-md-6 col-lg-3 ">
            <div class="card text-center border border-dark">
              <div class="card-body">
                <img class="card-img-top"
                  src="images/Carrots.jpg" style="min-height: 12rem; max-width: 18rem;"
                  alt="Carrot">
                <h4 class="card-title">Carrot</h4>
                <p class="card-text">80 TK per Kg</p>
                <button class="btn btn-dark">Add to MyCart</button>
              </div>
            </div>
          </div>
          <!-- card no 6 -->
          <div class="col-sm-12  mb-2 col-md-6 col-lg-3 ">
            <div class="card text-center border border-dark d-sm-flex align-items-center">
              <img class="card-img-top "
                src="images/Chicken.jpg" style="min-height: 12rem; max-width: 18rem;"
                alt="Chicken">
              <div class="card-body">
                <h4 class="card-title">Chicken</h4>
                <p class="card-text">140  TK per Chicken</p>
                <button class="btn btn-dark">Add to MyCart</button>
              </div>
            </div>
          </div>
          <!-- card no 7 -->
          <div class="col-sm-12  mb-2 col-md-6 col-lg-3 ">
            <div class="card text-center border border-dark d-sm-flex align-items-center">
              <img class="card-img-top" style="min-height: 12rem; max-width: 18rem;"
                src="images/Mutton.jpg" alt="Mutton image">
              <div class="card-body">
                <h4 class="card-title">Mutton</h4>
                <p class="card-text">900 TK per Kg</p>
                <button class="btn btn-dark">Add to MyCart</button>
              </div>
            </div>
          </div>
          <!-- Card no 8 -->
          <div class="col-sm-12  mb-2 col-md-6 col-lg-3 ">
            <div class="card text-center border border-dark">
              <img class="card-img-top "
                src="images/Jeans.jpg" style="max-height: 12rem; min-width: 15.5rem;"
                alt="Jeans">
              <div class="card-body">
                <h4 class="card-title">Jeans</h4>
                <p class="card-text">1800 TK per pair</p>
                <button class="btn btn-dark">Add to MyCart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Sales section ends here-->

      <hr style="border:5px solid gray;">
<!-- .................................................................-->
      <!-- Customer Reviews section starts here -->
      <div class="container customer-review bg-dark p-3">
        <div class="title text-center md-3 text-white">
          <h3 class="font-weight-bolder">Customer Reviews</h3>
        </div>
        <div class="row ">
            <div class=" col-sm-12 col-md-12 col-lg-4 ">"
              <div class="card" style="width: 18rem;">
                <img src="images/Roy.jpg" class="card-img-top"style="min-height: 21.5rem;" alt="Digonta">
                <div class="card-body">
                  <h5 class="card-title">Digonta Roy</h5>
                  <p class="card-text">Great Service.On time delivery.Good products.I always use their services and recommed my friends and family to use their service.</p>
                </div>
              </div>
          </div>
          <div class=" col-sm-12 col-md-12 col-lg-4">"
          <div class="card" style="width: 18rem;">
            <img src="images/Mow.jpg" class="card-img-top" alt="Mow">
            <div class="card-body">
              <h5 class="card-title">Momtaj Hossain Mow</h5>
              <p class="card-text">Love the products.Love the services.Always in need of their services.My friends also use this website.</p>
            </div>
          </div>
          </div>
          <div class=" col-sm-12 col-md-12 col-lg-4">"
            <div class="card" style="width: 18rem;">
              <img src="images/Billal.jpg" class="card-img-top" alt="Billal">
              <div class="card-body">
                <h5 class="card-title">Billal Ahmed Akhash</h5>
                <p class="card-text">I am a student.I am always on the go.So, this website is a great help.The goods are always good and price is reasonable.I recommed this website. </p>
              </div>
            </div>
            </div>
        </div>
        <div class="row mt-3 mb-3">
        <div class="btn-group ">
          <a href="CustomerReview.html" class="btn btn-outline-light">Read more reviews</a>
          <a href="CustomerReview.html" class="btn btn-outline-light">Leave a review</a>
        </div>
      </div>
      <br>
    </div>
      <!-- Customer Reviews section ends here -->
     <!-- ...........................................................-->
      <!-- Owners info starts here -->
      <div class="container bg-light">
        <div class=" title text-center my-3">
          <hr style="border: 3px solid black; width: 100%;">
          <h3  class="text-dark">Owners info</h3>
          <hr style="border: 3px solid black; width: 100%;">
        </div>
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Md.Raihan Karim Priyo</h3>
              <strong class="d-inline-block mb-2 text-dark">CEO & Founder</strong>
              <p class="card-text mb-auto">Md.Raihan Karim Priyo, a student of computer science and engineering department of jagannath university, founded kinakata.com on 19 nov 2019.It is now one of the greatest e-commerce website in Bangladesh.It is growing rapidly.The bussiness is on the rise.</p>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img  class=" img-fluid bd-placeholder-img" width="200" height="250"src="images/priyo.jpg" alt="Priyo">
    
            </div>
          </div>
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Md Khairul Islam</h3>
              <strong class="d-inline-block mb-2 text-dark">CEO & Founder</strong>
              <p class="card-text mb-auto">Md Khairul Islam, a student of computer science and engineering department of jagannath university, founded kinakata.com on 19 nov 2019.It is now one of the greatest e-commerce website in Bangladesh.It is growing rapidly.The bussiness is on the rise.</p>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img  class=" img-fluid bd-placeholder-img" width="200" height="250"src="images/Khairul.jpg" alt="Khairul">
    
            </div>
            </div>
            <div class=" my-3">
              <a href="OwnersInfo.html" class="text-dark">Want to learn more?</a>

            </div>

      </div>
      <!-- Owners info ends here -->
      <!-- ......................................................-->
    </main>
    <!--Main ends here-->
    <!-- .............................................................................................................................-->
    <!--Footer starts here-->
    <footer class="bd-footer py-5 mt-5 bg-dark text-light">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-3 mb-3">
              <a href="index.html" class="navbar-brand" style="font-weight: bolder;color:mediumturquoise;">
                <img class="rounded-circle"
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR70YABR-NUTfoGsqF_WSIBT7tGlfgjC4qEnw&usqp=CAU"
                  alt="Logo" style=" width:50px;">
                kinakata.com
              </a>
            <ul class="list-unstyled small text-muted">
              <li class="mb-2">Designed and built with all the love in the world by the <a href="index.html"style="text-decoration: none;color:#F9FBF6;">kinakata.com</a> with the help of <a href="#"style="text-decoration: none;color:#F9FBF6;">our contributors</a>.
            </ul>
          </div>
          <div class="col-6 col-lg-2 offset-lg-1 mb-3">
            <h5  style="font-weight: bolder;color:mediumturquoise;">Links</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="index.html" style="text-decoration: none;color:aquamarine;">Home</a></li>
              <li class="mb-2"><a href="Login&signup.html" style="text-decoration: none;color:#F9FBF6;">Login</a></li>
              <li class="mb-2"><a href="Login&signup2.html" style="text-decoration: none;color:#F9FBF6;">Sign Up</a></li>
              <li class="mb-2"><a href="AboutUS.html" style="text-decoration: none;color:#e1f1c8;">About Us</a></li>
              <li class="mb-2"><a href="ContactUs.html" style="text-decoration: none;color:#F9FBF6;">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2 mb-3 ">
            <h5 style="font-weight: bolder;color:mediumturquoise;">Follow Us At</h5>
            <ul class="list-unstyled" >
              <li class="mb-2"><a href="https://www.facebook.com" style="text-decoration: none;color:#F9FBF6;">Facebook</a></li>
              <li class="mb-2"><a href="https://www.instagram.com/?hl=en" style="text-decoration: none;color:#F9FBF6;">Instragram</a></li>
              <li class="mb-2"><a href="https://www.linkedin.com/login" style="text-decoration: none;color:#F9FBF6;">LinkedIn</a></li>
              <li class="mb-2"><a href="https://www.whatsapp.com/" style="text-decoration: none;color:#F9FBF6;">WhatsApp</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2 mb-3">
            <h5  style="font-weight: bolder;color :mediumturquoise;">Read</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="CustomerReview.html" style="text-decoration: none;color:#F9FBF6;"> Customer Reviews</a></li>
              <li class="mb-2"><a href="OwnersInfo.html" style="text-decoration: none;color:#F9FBF6;">Owners Info</a></li>
              <li class="mb-2"><a href="#" style="text-decoration: none;color:#F9FBF6;">Blogs</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!--Footer ends here-->
  </div>

  <!-- ....................................................................................................................-->



  <!--Bootstrap,Jquery,JS,Popper-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>