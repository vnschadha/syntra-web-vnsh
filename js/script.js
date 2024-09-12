(function ($) {
  'use strict';

  // Sticky Menu
  $(window).scroll(function () {
    if ($('.navigation').offset().top > 100) {
      $('.navigation').addClass('nav-bg');
    } else {
      $('.navigation').removeClass('nav-bg');
    }
  });

  // team slider
  $('.team-slider').slick({
    dots: false,
    infinite: false,
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: '<button type=\'button\' class=\'prevArrow\'><i class=\'ti-arrow-left\'></i></button>',
    nextArrow: '<button type=\'button\' class=\'nextArrow\'><i class=\'ti-arrow-right\'></i></button>',
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  // clients logo slider
  $('.client-logo-slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    dots: false,
    arrows: false,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  // about video popup
  $(document).ready(function () {
    $('.venobox').venobox();
  });

  // animation scroll js
  var html_body = $('html, body');
  $('.page-scroll').on('click', function () { //use page-scroll class in any HTML tag for scrolling
    if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        html_body.animate({
          scrollTop: target.offset().top - 50
        }, 1500, 'easeInOutExpo');
        return false;
      }
    }
  });

  // easeInOutExpo Declaration
  jQuery.extend(jQuery.easing, {
    easeInOutExpo: function (x, t, b, c, d) {
      if (t === 0) {
        return b;
      }
      if (t === d) {
        return b + c;
      }
      if ((t /= d / 2) < 1) {
        return c / 2 * Math.pow(2, 10 * (t - 1));
      } + b;
      return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
    }
  });

  
})(jQuery);

$('.navTrigger').click(function () {
  $(this).toggleClass('active');
  $("#mainListDiv").toggleClass("show_list");
  $("#mainListDiv").fadeIn();
});

$(document).ready(function(){
  $('.responsive-hamburger-shell').click(function(){
    $('#responsive-menu').slideToggle(300);
    $('.top').toggleClass('rotate');
    $('.middle').toggleClass('rotate-back');
    $('.responsive-bg-cover').toggleClass('reveal');
  });

  $('.responsive-bg-cover').click(function(){
    $('#responsive-menu').slideToggle(300);
    $('.top').toggleClass('rotate');
    $('.middle').toggleClass('rotate-back');
    $('.responsive-bg-cover').toggleClass('reveal');
  });

  $('#responsive-menu a').click(function(){
    if ($(window).width() <= 999) {
      $('#responsive-menu').slideUp(300);
      $('.top').removeClass('rotate');
      $('.middle').removeClass('rotate-back');
      $('.responsive-bg-cover').removeClass('reveal');
    }
  });
});

//Click the hamburger menu to see the animation
//You can click the X to close or click anywhere outside the menu

$(document).ready(function() {
  // Toggle menu and animations when the hamburger shell is clicked
  $('.hamburger-shell').click(function() {
      $('#menu').slideToggle(150); // Toggle the menu
      $('.top').toggleClass('rotate'); // Rotate the top part of the hamburger icon
      $('.middle').toggleClass('rotate-back'); // Rotate the middle part of the hamburger icon
      $('.bg-cover').toggleClass('reveal'); // Toggle the background overlay
  });

  // Close the menu when clicking outside of it (on bg-cover)
  $('.bg-cover').click(function() {
      if ($('#menu').is(':visible')) {
          $('#menu').slideUp(350); // Close the menu
          $('.top').removeClass('rotate'); // Reset the top part of the hamburger icon
          $('.middle').removeClass('rotate-back'); // Reset the middle part of the hamburger icon
          $('.bg-cover').removeClass('reveal'); // Remove the background overlay
      }
  });

  // Close the menu when clicking on a menu item (navigating to a section)
  $('#menu a').click(function() {
      if ($('#menu').is(':visible')) {
          $('#menu').slideUp(350); // Close the menu
          $('.top').removeClass('rotate'); // Reset the top part of the hamburger icon
          $('.middle').removeClass('rotate-back'); // Reset the middle part of the hamburger icon
          $('.bg-cover').removeClass('reveal'); // Remove the background overlay
      }
  });
});

//Click the hamburger menu to see the animation
//You can click the X to close or click anywhere outside the menu




$(document).ready(function(){
  $('.client-slider').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 900,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, 
    {
      breakpoint: 520,
      settings: {
        slidesToShow: 3
      }
    }]
  });
});

document.querySelectorAll('.circle').forEach(circle => {
  const backButton = circle.querySelector('.back-button');

  circle.addEventListener('click', () => {
      // Toggle the clicked circle to fullscreen
      if (!circle.classList.contains('expanded')) {
          // Close any other expanded videos
          document.querySelectorAll('.circle.expanded').forEach(expandedCircle => {
              expandedCircle.classList.remove('expanded');
              expandedCircle.querySelector('video').pause();
          });
          circle.classList.add('expanded');
          circle.querySelector('video').play();
      }
  });

  // Back button functionality
  backButton.addEventListener('click', (e) => {
      e.stopPropagation(); // Prevent the click from toggling fullscreen again
      circle.classList.remove('expanded');
      const videoElement = circle.querySelector('video');
      videoElement.pause();
      videoElement.currentTime = 0; // Reset video to start
  });
});


$(document).ready(function () {
  $(".modal-open").click(function () {
    var modalId = $(this).attr("data-modal");
    $(".modal").removeClass("active");
    $(".overlay").addClass("active");
    $("#"+modalId).addClass("active");
  });

  $(".modal-close").click(function () {
    $(".overlay").removeClass("active");
    $(".modal").removeClass("active");
  });
});

const modal = document.getElementById('simpleModal');
// All page modals
var modals = document.querySelectorAll('.modal');
// Get open modal button
const modalBtn = document.getElementsByClassName('modal-btn');
// Get close button
const closeBtn = document.getElementsByClassName('closeBtn')[0];

console.log(modalBtn);
for(var i=0; i < modalBtn.length; i++){

    modalBtn[i].addEventListener("click", openModal);


}
// Listen for OPEN Click
//modalBtn.addEventListener('click', openModal);
// Listen for CLOSE Click
closeBtn.addEventListener('click', closeModal);
// Listen for OUTSIDE Click
window.addEventListener('click', outsideClick);

// Function to OPEN modal
function openModal() {
  modal.style.display = "block";
}

// Function to CLOSE modal
function closeModal() {
  modal.style.display = "none";
}
// Function to CLOSE modal
function outsideClick(e) {
  if(e.target == modal) {
    modal.style.display = "none";
  }
}
function openModal() {
  document.querySelector('.overlay').classList.add('active');
  document.getElementById('modal-1').classList.add('active');
  document.body.style.overflow = 'hidden'; // Disable body scroll
}

function closeModal() {
  document.querySelector('.overlay').classList.remove('active');
  document.getElementById('modal-1').classList.remove('active');
  document.body.style.overflow = 'auto'; // Re-enable body scroll
}

 

var videoElement = document.getElementById('videoPlayer');
  var sourceElement = document.createElement('source');

  if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
    // Safari detected, use MP4 with HEVC
    sourceElement.src = 'images/syntra-web-video/FINAL-HD CUBE.mp4';
    sourceElement.type = 'video/mp4';
  } else {
    // Use WebM for Chrome, Firefox, and others
    sourceElement.src = 'images/syntra-web-video/CUBE_ALPHA.webm';
    sourceElement.type = 'video/webm';
  }

  if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
    // Safari detected, use MP4 with HEVC
    sourceElement.src = 'images/syntra-web-video/BALLOONS HD.mp4';
    sourceElement.type = 'video/mp4';
  } else {
    // Use WebM for Chrome, Firefox, and others
    sourceElement.src = 'images/syntra-web-video/Balloons_ALPHA.webm';
    sourceElement.type = 'video/webm';
  }

 


  videoElement.appendChild(sourceElement);
  videoElement.load();

  

  var videoElement = document.getElementById('videoPlayer');
  var sourceElement = document.createElement('source');

  if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
    // Safari detected, use MP4 with HEVC
    sourceElement.src = 'images/syntra-web-video/START LOGO ANI_NEW TAG_16-9.mp4';
    sourceElement.type = 'video/mp4';
  } else {
    // Use WebM for Chrome, Firefox, and others
    sourceElement.src = 'images/syntra-web-video/START-LOGO-ALPHA-NEW.webm';
    sourceElement.type = 'video/webm';
  }
  videoElement.appendChild(sourceElement);
  videoElement.load();
