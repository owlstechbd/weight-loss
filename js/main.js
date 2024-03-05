



//offer-news
const swiper = new Swiper('.news-container', {
  loop: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  speed: 15000,
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 992px (desktop)
    992: {
      slidesPerView: 4,
    },
    // when window width is < 992px (mobile)
    0: {
      slidesPerView: 1.2,
    },
  },
});


// Add the hover effect immediately
swiper.slides.forEach((slide, index) => {
  slide.addEventListener('mouseenter', () => {
    swiper.autoplay.stop();
    slide.classList.add('hovered');
  });

  slide.addEventListener('mouseleave', () => {
    swiper.autoplay.start();
    slide.classList.remove('hovered');
  });
});



//popup
// Get all buttons with the "openPopup" class
var openButtons = document.getElementsByClassName('openPopup');

// Add click event listeners to each button
for (var i = 0; i < openButtons.length; i++) {
  openButtons[i].addEventListener('click', togglePopup);
}

// Function to toggle the popup's visibility
function togglePopup() {
  var overlay = document.getElementById('overlay');
  var popup = document.getElementById('popup');

  // Toggle the display of the overlay and popup
  overlay.style.display = overlay.style.display === 'block' ? 'none' : 'block';
  popup.style.display = popup.style.display === 'block' ? 'none' : 'block';
};



$(function(){
  3
    jQuery('[data-vbg]').youtube_background();
  4
    // OPTIONAL
  5
    const videoBackgrounds = VIDEO_BACKGROUNDS;
  6
  });



  $('.navbar-nav a[href^="#"]').click(function(e) {
		e.preventDefault();
		var target = this.hash;
		$('html, body').animate({
			scrollTop: $(target).offset().top -0
		},500);
	});







  

  



//faq
$(document).ready(function () {
  $('.card-header').click(function () {
      $(this).find('i').toggleClass('fa-chevron-down fa-chevron-up');
      $(this).closest('.card').siblings().find('.card-header i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
      $(this).closest('.card').siblings().find('.card-header').removeClass('active-faq');
      $(this).toggleClass('active-faq');
  });
});


$(document).ready(function() {
  $('.testmonail-all').owlCarousel({
    items: 3,
    loop: true,
    autoplay: true, 
    autoplayTimeout: 3000, 
    autoplayHoverPause: true,
    margin: 30,
    dots: true,  // Add this line for dots navigation
    responsive: {
      0: {
        items: 1.2
      },
      480: {
        items: 2
      },
      768: {
        items: 1.2
      },
      992: {
        items: 4
      }
    }
  });


});



$(document).ready(function() {
  $('.owl-carousel').owlCarousel({
      items: 2,
      loop: true,
      autoplay: true,
      autoplayTimeout: 4000, // 3 seconds
      autoplayHoverPause: true,
      nav: false,
      margin: 30,
      responsive: {
          0: { items: 1 },
          480: { items: 1 },
          768: { items: 1 },
          992: { items: 1.8 }
      },
      smartSpeed: 800, // Adjust the speed of the slide transition
      fluidSpeed: 800
  });

  $('.custom-nav .prev').click(function() {
      $('.owl-carousel').trigger('prev.owl.carousel');
  });

  $('.custom-nav .next').click(function() {
      $('.owl-carousel').trigger('next.owl.carousel');
  });
});




const phoneInputField = document.querySelector("#phone");
const phoneInput = window.intlTelInput(phoneInputField, {
  utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  initialCountry: "ae", // Set UAE as the default country
}
);
var iti = phoneInput

//filter
function filterItems(category) {
  var items = document.querySelectorAll('.item');

  items.forEach(function(item) {
      if (category === 'all' || item.classList.contains(category)) {
          item.classList.remove('hidden');
      } else {
          item.classList.add('hidden');
      }
  });
}



//hover effect
document.getElementById('box2').addEventListener('mouseover', function() {
  document.getElementById('box1').classList.add('hovered');
});

document.getElementById('box2').addEventListener('mouseout', function() {
  document.getElementById('box1').classList.remove('hovered');
});

document.getElementById('box3').addEventListener('mouseover', function() {
  document.getElementById('box1').classList.add('hovered');
});

document.getElementById('box3').addEventListener('mouseout', function() {
  document.getElementById('box1').classList.remove('hovered');
});

document.getElementById('box4').addEventListener('mouseover', function() {
  document.getElementById('box1').classList.add('hovered');
});

document.getElementById('box4').addEventListener('mouseout', function() {
  document.getElementById('box1').classList.remove('hovered');
});






// animation

  new WOW().init();