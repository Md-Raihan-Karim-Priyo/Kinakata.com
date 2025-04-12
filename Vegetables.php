<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetables Section</title>
    <link rel="icon" type="image/x-icon" href="images/logo1.jpg">
<!-- ................................................................................. -->

<!-- links part -->



<!-- bootstrap cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--External css-->
  <link href="MenuItem.css" rel="stylesheet">
<!-- ................................................................................. -->
</head>
<body style="background-color: #E5E3E0">
    <div class="container">
        <!-- Header starts here -->
        <header>
            <!-- Navigation bar starts here -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="#navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Logo of kinakata.com -->
          <a href="index.html" class="navbar-brand">
                  <img class="rounded-circle"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR70YABR-NUTfoGsqF_WSIBT7tGlfgjC4qEnw&usqp=CAU"
                    alt="Kinakata.com logo" style=" width:50px;">
                  kinakata.com
                </a>
            <!-- navbar menu starts here -->
          <div class="collapse navbar-collapse d-lg-flex justify-content-end  " id="navbarTogglerDemo03">
            <ul class="navbar-nav ">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
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
            <!-- Navigation bar ends here -->

        </header>
         <!-- Header ends here -->
         <!-- ................................................................................................................  -->
         <!-- Main starts here -->
         <main >
             <!-- menu starts here -->
        <div class="mymenu mt-2 mb-3">
        <div class="bg-light">
          <div class="title text-center md-3">
            <h3 class="font-weight-bolder">Menu</h3>
          </div>
          <div class="row p-3">
            <div class=" col-12 col-md-12 col-lg-4">
              <a href="Fish.html"class="btn w-100 btn-outline-dark mb-3">Fish</a>
              <a href="Meat.html"class="btn w-100 btn-outline-dark mb-3">Meat</a>
              <a href="Vegetables.html"class="btn w-100 btn-outline-dark mb-3 active">Vegetables</a>
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
             <!-- menu ends here-->
             <!--....................................................-->
        <!--Banner section starts here-->
        <div class="My-banner container col-lg-12 " style="background-image: url(images/VegePotato.jpg);">
          <p class="pStyle">Get the greatest deals available!!!!</p>
          <p class="pStyle">All Vegetables 20% discount</p>
        </div>
        <!--Banner section ends here-->
    <!--....................................................-->
    <!-- Cards section starts here  -->
    <div class="MyCardContainer mt-5">
      <div class="row mb-5">
        <!-- Card No.1 -->
        <div class="col-12 col-md-12 col-lg-4 mb-5">
          <div class="card text-center  border border-dark" style="width: 18rem;">
            <img src="images/VegeDherosh.jpg" style="max-height: 18 rem;"class="card-img-top"  alt="Ladies Finger">
            <div class="card-body">
              <h5 class="card-title">Ladies Finger </h5>
              <p class="card-text">30Tk Per Kg</p>
              <a href="#" class="btn btn-dark">Add to My Cart</a>
            </div>
          </div>
        </div>
        <!-- Card No.2 -->
        <div class="col-12 col-md-12 col-lg-4 mb-5">
          <div class="card text-center  border border-dark" style="width: 18rem;">
            <img src="images/VegeEggplant.jpg" class="card-img-top"style="min-height: 12rem;"" alt="Eggplant">
            <div class="card-body">
              <h5 class="card-title">Eggplant </h5>
              <p class="card-text">40 Tk Per Kg</p>
              <a href="#" class="btn btn-dark">Add to My Cart</a>
            </div>
          </div>
        </div>
         <!-- Card No.3   -->
         <div class="col-12 col-md-12 col-lg-4 mb-5">
          <div class="card text-center  border border-dark" style="width: 18rem;">
            <img src="images/VegeGarlic.jpg" class="card-img-top" alt="Garlic">
            <div class="card-body">
              <h5 class="card-title">Garlic </h5>
              <p class="card-text">60 Tk Per Kg</p>
              <a href="#" class="btn btn-dark">Add to My Cart</a>
            </div>
          </div>
        </div>

      </div>
      <!-- 2nd row -->
      <div class="row mb-5">
        <!-- Card No.4-->
        <div class="col-12 col-md-12 col-lg-4 mb-5">
          <div class="card text-center  border border-dark" style="width: 18rem;">
            <img src="images/VegeOnion.jpg" class="card-img-top" alt="Onion">
            <div class="card-body">
              <h5 class="card-title">Onion</h5>
              <p class="card-text">40 Tk Per Kg</p>
              <a href="#" class="btn btn-dark">Add to My Cart</a>
            </div>
          </div>
        </div>
        <!-- Card No.5 -->
        <div class="col-12 col-md-12 col-lg-4 mb-5">
          <div class="card text-center  border border-dark" style="width: 18rem;">
            <img src="images/VegePotato.jpg" class="card-img-top" style="min-height: 18rem;" alt="Potato">
            <div class="card-body">
              <h5 class="card-title">Potato</h5>
              <p class="card-text">20 Tk Per Kg</p>
              <a href="#" class="btn btn-dark">Add to My Cart</a>
            </div>
          </div>
        </div>
         <!-- Card No.6   -->
         <div class="col-12 col-md-12 col-lg-4 pl-sm-5 mb-5">
          <div class="card text-center  border border-dark" style="width: 18rem;">
            <img src="images/Carrots.jpg" class="card-img-top" style="min-height: 18rem;"alt="Carrots">
            <div class="card-body">
              <h5 class="card-title">Carrots</h5>
              <p class="card-text">50 Tk Per Kg</p>
              <a href="#" class="btn btn-dark">Add to My Cart</a>
            </div>
          </div>
        </div>

      </div>
      <!-- 3rd row -->
      <div class="row mb-5">
        <!-- Card No.7-->
        <div class="col-12 col-md-12 col-lg-4 mb-5 ">
          <div class="card text-center border border-dark" style="width: 18rem;">
            <img src="images/Tomato.jpg" class="card-img-top" style="min-height: 18rem;" alt="Tomato">
            <div class="card-body">
              <h5 class="card-title">Tomato </h5>
              <p class="card-text">30 Tk Per Kg</p>
              <a href="#" class="btn btn-dark">Add to My Cart</a>
            </div>
          </div>
        </div>
        <!-- Card No.8 -->
        <div class="col-12 col-md-12 col-lg-4 mb-5">
          <div class="card text-center  border border-dark" style="width: 18rem;">
            <img src="images/VegeCabage.jpg" class="card-img-top" style="min-height: 18rem;"alt="Cabage">
            <div class="card-body">
              <h5 class="card-title">Cabage</h5>
              <p class="card-text">40 Tk Per Kg</p>
              <a href="#" class="btn btn-dark">Add to My Cart</a>
            </div>
          </div>
        </div>
         <!-- Card No.9  -->
         <div class="col-12 col-md-12 col-lg-4 mb-5">
          <div class="card text-center  border border-dark" style="width: 18rem;">
            <img src="images/VegePumkin.jpg" class="card-img-top" style="min-height: 18rem;" alt="Pumkin">
            <div class="card-body">
              <h5 class="card-title">Pumkin</h5>
              <p class="card-text">200 Tk Per piece</p>
              <a href="#" class="btn btn-dark">Add to My Cart</a>
            </div>
          </div>
        </div>

      </div>
    </div>
     <!-- Cards section ends here  -->
     <!--....................................................-->
        </main>
         <!-- Main ends here -->
         <!-- ................................................................................................................  -->
         <!-- footer starts here -->
        
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
                <h5 style="font-weight: bolder;color:mediumturquoise;">Links</h5>
                <ul class="list-unstyled">
                  <li class="mb-2"><a href="index.html" style="text-decoration: none;color:#F9FBF6;">Home</a></li>
                  <li class="mb-2"><a href="Login&signup.html" style="text-decoration: none;color:#F9FBF6;">Login</a></li>
                  <li class="mb-2"><a href="Login&signup2.html" style="text-decoration: none;color:#F9FBF6;">Sign Up</a></li>
                  <li class="mb-2"><a href="AboutUS.html" style="text-decoration: none;color:#F9FBF6;">About Us</a></li>
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
                <h5 style="font-weight: bolder;color:mediumturquoise;">Read</h5>
                <ul class="list-unstyled">
                  <li class="mb-2"><a href="CustomerReview.html" style="text-decoration: none;color:#F9FBF6;"> Customer Reviews</a></li>
                  <li class="mb-2"><a href="OwnersInfo.html" style="text-decoration: none;color:#F9FBF6;">Owners Info</a></li>
                  <li class="mb-2"><a href="#" style="text-decoration: none;color:#F9FBF6;">Blogs</a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
         <!-- footer ends here -->
    </div>
    
<!-- ................................................................................................................  -->
    <!-- Bootstrap javascript links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>