<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Review</title>
    <link rel="icon" type="image/x-icon" href="images/logo1.jpg">


    <!-- ........................................................................... -->
    <!-- Links part -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--External css-->
    <!-- ............................................................................ -->
</head>
<body style="background-color: rgb(133, 133, 133);">
    <div class="container text-light">
    <!-- ................................................................................ -->
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
              <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
                 <!-- search box ends here -->
          </div>
        </div>
      </nav>
            <!-- Navigation bar ends here -->
    </header>
    <!-- Header ends here -->
    <!-- ................................................................................ -->
    <!-- main starts here -->
    <main class="mb-0">
      <hr style="border:5px solid white ; border-bottom: none;">
      <hr style="border:5px solid white ; border-bottom: none;">
      <div class="leaveReview bg-dark mt-0 mb-0">
        <!-- Title of Leave a  Review Section -->
        <div class="CustomerReviewTitle" >
          <hr style="border:5px solid aqua ; border-bottom: none;">
          <p ><h1 style="text-align: center; font-weight:bolder;font-family: 'Handlee', cursive;">Make a review</h1></p>
          <hr style="border:5px solid aqua ; border-bottom: none;">
      </div>
      <!-- Review Form -->
      <div class="row p-3">
        <div class="col-lg-12 ">
          <form action="mailto:raihanpriyo473@gmail.com" method="post" enctype="text/plain">
            <!-- Full name -->
            <div class="form-group mb-4">
              <label for="fullname" class="mb-2" style="font-weight:bolder;font-family: 'Handlee', cursive;">Full Name :</label>
              <input type="text" class="form-control" name="fullname" required>
            </div>
            <!-- email -->
            <div class="form-group mb-4">
              <label for="email" class="mb-2" style="font-weight:bolder;font-family: 'Handlee', cursive;">Email :</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <!-- Review message -->
            <div class="form-group mb-4">
              <label for="message" class="mb-2" style="font-weight:bolder;font-family: 'Handlee', cursive;">Review :</label>
             <textarea style="resize: none;"class="form-control" name="" id="" cols="30" rows="5"></textarea>
            </div>
            <!-- buttons -->
            <div class="form-group text-center mb-4">
              <input type="submit" class="btn btn-outline-light mr-3"style="font-family: 'Handlee', cursive; "name=""id="" value="submit">
              <input type="reset" class="btn btn-outline-light" style="font-family: 'Handlee', cursive;" name="" id="" value="reset">
             </div>
          </form>

        </div>      

      </div>
       
      </div>
      <hr style="border:5px solid white ; border-bottom: none;">
      <hr style="border:5px solid white ; border-bottom: none;">
        <div class="bg-dark">
            <!-- ................................................ -->
            <!-- Title of customer Review Section -->
            <div class="CustomerReviewTitle" >
                <hr style="border:5px solid aqua ; border-bottom: none;">
                <p ><h1 style="text-align: center; font-weight:bolder;font-family: 'Handlee', cursive;">Customer Reviews</h1></p>
                <hr style="border:5px solid aqua ; border-bottom: none;">
            </div>
            <!-- post section -->
            <!-- 1st post -->
            <div class="customerReviewBody p-3" id="Review">
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-2 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static" style="border:2px solid aqua ;">
                      <h3 class="mb-0">Digonta Roy</h3>
                      <strong class="d-inline-block mb-2">roy_diaganto</strong>
                      <p class="card-text mb-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, nesciunt expedita voluptate perferendis nemo
                         laudantium adipisci cupiditate est sed reprehenderit? Fugiat tempora deserunt, qui sint sed omnis velit autem ipsum?</p>
                    </div>
                    <div class="col-auto d-none d-lg-block" style="border:2px solid aqua ;">
                      <img  class=" img-fluid bd-placeholder-img" width="200" height="250"src="images/Roy.jpg" alt="Roy">
            
                    </div>
                  </div>
                  <!-- 2nd post -->
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-2 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static" style="border:2px solid aqua ;">
                      <h3 class="mb-0">Khairul Islam</h3>
                      <strong class="d-inline-block mb-2">raju_khairul</strong>
                      <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, quisquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, nesciunt expedita voluptate perferendis nemo
                         laudantium adipisci cupiditate est sed reprehenderit? Fugiat tempora deserunt, qui sint sed omnis velit autem ipsum?</p>
                    </div>
                    <div class="col-auto d-none d-lg-block" style="border:2px solid aqua ;">
                      <img  class=" img-fluid bd-placeholder-img" width="200" height="250"src="images/Khairul.jpg" alt="Khairul">
            
                    </div>
                  </div>
                  <!-- 3rd post -->
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-2 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static" style="border:2px solid aqua ;">
                      <h3 class="mb-0">Md.Raihan Karim Priyo</h3>
                      <strong class="d-inline-block mb-2">priyo_raihan</strong>
                      <p class="card-text mb-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, dolorum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, nesciunt expedita voluptate perferendis nemo
                         laudantium adipisci cupiditate est sed reprehenderit? Fugiat tempora deserunt, qui sint sed omnis velit autem ipsum?</p>
                    </div>
                    <div class="col-auto d-none d-lg-block" style="border:2px solid aqua ;">
                      <img  class=" img-fluid bd-placeholder-img" width="200" height="250"src="images/Priyo.jpg" alt="Priyo">
            
                    </div>
                  </div>
                  <!-- 4th post -->
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-2 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static" style="border:2px solid aqua ;">
                      <h3 class="mb-0">Billal Ahmed Akash</h3>
                      <strong class="d-inline-block mb-2">billal_akash</strong>
                      <p class="card-text mb-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, laboriosam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, nesciunt expedita voluptate perferendis nemo
                         laudantium adipisci cupiditate est sed reprehenderit? Fugiat tempora deserunt, qui sint sed omnis velit autem ipsum?</p>
                    </div>
                    <div class="col-auto d-none d-lg-block" style="border:2px solid aqua ;">
                      <img  class=" img-fluid bd-placeholder-img" width="200" height="250"src="images/Billal.jpg" alt="Roy">
            
                    </div>
                  </div>
                  <!-- 5th post -->
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-2 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static" style="border:2px solid aqua ;">
                      <h3 class="mb-0">Momtaj Hosssain Mow</h3>
                      <strong class="d-inline-block mb-2">mow_momtaj</strong>
                      <p class="card-text mb-auto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, iste? Lorem ipsum dolor sit amet 
                         consectetur adipisicing elit. Dignissimos, nesciunt expedita voluptate perferendis nemo
                         laudantium adipisci cupiditate est sed reprehenderit? Fugiat tempora deserunt, qui sint sed omnis velit autem ipsum?</p>
                    </div>
                    <div class="col-auto d-none d-lg-block" style="border:2px solid aqua ;">
                      <img  class=" img-fluid bd-placeholder-img" width="200" height="250"src="images/Mow.jpg" alt="Mow">
            
                    </div>
                  </div>

                </div>
             
        </div>
        <!-- Customer Reviews ends here -->
        <!-- ................................................ -->

    </main>
    <hr style="border:5px solid white ; border-bottom: none;">
    <!-- main ends here -->
    <!-- ................................................................................ -->
    <!-- footer starts here -->
    <hr style="border:5px solid white ; border-bottom: none;">
      <footer class="bd-footer py-5 mt-0 bg-dark text-light">
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
                <li class="mb-2"><a href="CustomerReview.html" style="text-decoration: none;color:aquamarine;"> Customer Reviews</a></li>
                <li class="mb-2"><a href="OwnersInfo.html" style="text-decoration: none;color:#F9FBF6;">Owners Info</a></li>
                <li class="mb-2"><a href="#" style="text-decoration: none;color:#F9FBF6;">Blogs</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

    <!-- footer ends here -->
     <!-- ................................................................................ -->
    </div>
   
    <!-- ................................................................................................................  -->
    <!-- Bootstrap javascript links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>