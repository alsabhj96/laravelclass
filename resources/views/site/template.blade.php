<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="{{asset('Site/bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('Site/style.css')}}">
  <scrpit src="{{asset('Site/bootstrap/js/bootstrap.js')}}"> </script>
  <link rel="stylesheet" href="{{asset('Site/fontawesome')}}">
  <!-- <script src="https://kit.fontawesome.com/4238f96e7f.js" crossorigin="anonymous"></script> -->
  <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
</head>
<body>
  <section id="topheader">
    <div class="container">
      <div class="row">
        <div class="col-md-6 callus">
        <i class="fa-solid fa-square-phone"></i>  
        9861967695
        </div>

        <div class="col-md-2 socialmedia facebook">
        <i class="fa-brands fa-facebook"></i>
        <a href="https://www.facebook.com/profile.php?id=100008824663474" target="_blank">Facebook</a>
        </div>

        <div class="col-md-2 socialmedia instagram">
        <i class="fa-brands fa-instagram"></i>
        instagram
        </div>

        <div class="col-md-2 socialmedia twitter">
        <i class="fa-brands fa-twitter"></i>
        <a href="https://twitter.com/alishabhj04" target="_blank">Twitter</a>
        </div>
      </div>
   
    </div>
  </section>

  <section id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-3 logo">
          <img src="{{asset('Site/image/logo.jpg')}}" alt="logo" width=100px;>
        </div>

        <div class="col-md-3 contact">
          <small>hotline</small>
          <i class="fa-solid fa-phone"></i>
          9861967695
        </div>

        <div class="col-md-4 email">
         <small>Email</small>
         <i class="fa-solid fa-envelope"></i>
         alishabhujel2017@gmail.com
         

        </div>

        <div class="col-md-2 address">
        <small>Address</small>
        <i class="fa-solid fa-house"></i>
        Ratnachowk

        </div>
      </div>
    </div>
  </section>

  <section id="mainmenu">
    <div class="container">
      <div class="row">
        <ul>
          <li> <a href="{{route('gethome')}}">Home</a> </li>

          <li>
            <a href="{{route('getabout')}}">About Us</a>
          </li>
  
          <li>
            <a href="{{route('getrestaurants')}}">Restaurants</a>
          </li>

          <li>
            <a href="{{route('getcontactus')}}">Contact us </a>
          </li>

          <li>
            <a href="{{route('signupandlogin')}}">Login/Signup </a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  @yield('meropage')
  @yield('aboutpage')
  @yield('resturantspage')
  @yield('contactuspage')
  @yield('signupandloginpage')

  <!-- ---------------FOOTER SECTION------------- -->

<footer class="footer">
  <div class="footer-container">
    <div class="footer-row">
      <div class="footer-col">
        <h4>company</h4>
        <ul>
          <li> <a href="#">about us</a></li>
          <li> <a href="#">our services</a></li>
          <li> <a href="#">privacy policy</a></li>
          <li> <a href="#">affiliate program</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>get help</h4>
        <ul>
          <li> <a href="#">FAQ</a></li>
          <li> <a href="#">shipping</a></li>
          <li> <a href="#">returns</a></li>
          <li> <a href="#">order status</a></li>
          <li> <a href="#">payment option</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>online shop</h4>
        <ul>
          <li> <a href="#">burger</a></li>
          <li> <a href="#">pizza</a></li>
          <li> <a href="#">momo</a></li>
          <li> <a href="#">cold drinks</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>follow us</h4>
        <div class="social-links">
          <ul>
            <a href="#"><i class="fab fa-facebook-f"> </i></a>
            <a href="#"><i class="fab fa-twitter"> </i></a>
            <a href="#"><i class="fab fa-instagram"> </i></a>
            <a href="#"><i class="fab fa-linkedin-in"> </i></a>
          </ul>
        </div>
      </div>

    </div>
  </div>
</footer>
</body>


</html>