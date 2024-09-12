
      <footer class="footer-section footer" style="background-image: url(images/backgrounds/footer-bg.png);">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
        <!-- logo -->
        <!-- <a href="index.html">
          <img class="img-fluid" src="images/logo.png" alt="logo">
        </a> -->
      </div>
      <!-- footer menu -->
      <nav class="col-lg-10 align-self-center mb-5">
        <ul class="list-inline text-lg-right text-center footer-menu">
          <li class="list-inline-item active"><a href="Terms-&-Conditions.php">Terms & Conditions</a></li>
          <li class="list-inline-item"><a class="page-scroll" href="Privacy.php">Privacy</a></li>
          <li class="list-inline-item"><a href="contact.php">Contact Us</a></li>
          <li class="list-inline-item"><a class="page-scroll" href="Pricing.php">Pricing</a></li>
          <li class="list-inline-item"><a class="page-scroll" href="Refund-&-Cancellation.php">Refund & Cancellation</a></li>
          <!-- <li class="list-inline-item"><a href="Refund-&-Cancellation.php">Refund & Cancellation</a></li> -->
        </ul>
      </nav>
      <p class="legal">© Copyright 2024 <span style="color: #ff33a3;font-weight:600;">The Syntra</span>&nbsp;All Rights Reserved.</p>
      <!-- footer social icon -->
      <!-- <nav class="col-12">
        <ul class="list-inline text-lg-right text-center social-icon">
          <li class="list-inline-item">
            <a class="facebook" href="#"><i class="ti-facebook"></i></a>
          </li>
          <li class="list-inline-item">
            <a class="twitter" href="#"><i class="ti-twitter-alt"></i></a>
          </li>
          <li class="list-inline-item">
            <a class="linkedin" href="#"><i class="ti-linkedin"></i></a>
          </li>
          <li class="list-inline-item">
            <a class="black" href="#"><i class="ti-github"></i></a>
          </li>
        </ul>
      </nav> -->
    </div>
  </div>
</footer>
  
      <!-- jQuery -->
      <script src="plugins/jQuery/jquery.min.js"></script>
      <!-- Bootstrap JS -->
      <script src="plugins/bootstrap/bootstrap.min.js"></script>
      <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
      <!-- slick slider -->
      <script src="plugins/slick/slick.min.js"></script>
      <!-- venobox -->
      <script src="plugins/Venobox/venobox.min.js"></script>
      <!-- aos -->
      <script src="plugins/aos/aos.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- Main Script -->
      <script src="js/script.js?v=099099"></script>
      <script src="js/pop-video.js"></script>
      <script src="js/googlesheet.js"></script>


      <script>
        AOS.init();
      </script>
      <script>
        (function () {
          // Add event listener
          document.addEventListener("mousemove", parallax);
          const elem = document.querySelector("#parallax");
          // Magic happens here
          function parallax(e) {
            let _w = window.innerWidth / 2;
            let _h = window.innerHeight / 2;
            let _mouseX = e.clientX;
            let _mouseY = e.clientY;
            let _depth1 = `${50 - (_mouseX - _w) * 0.01}% ${50 - (_mouseY - _h) * 0.01}%`;
            let _depth2 = `${50 - (_mouseX - _w) * 0.02}% ${50 - (_mouseY - _h) * 0.02}%`;
            let _depth3 = `${50 - (_mouseX - _w) * 0.06}% ${50 - (_mouseY - _h) * 0.06}%`;
            let x = `${_depth3}, ${_depth2}, ${_depth1}`;
            console.log(x);
            elem.style.backgroundPosition = x;
          }

        })();
      </script>
      <script>
       
       <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <script src="https://kit.fontawesome.com/266dcfee24.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/Venobox/venobox.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
</body>

</html>