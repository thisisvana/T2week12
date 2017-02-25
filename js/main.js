
(function () {
    var myButton = document.querySelector('.mobile-menu');
    var myNav = document.querySelector('.main-menu');

    function toggle() {
        myNav.classList.toggle('show');
    };

    myButton.addEventListener("click", function (event) {
        event.preventDefault();//prevents default click behaviour
        toggle();
    });
})();

$(function(){
  var width = 100%;
  var animationSpeed = 3000;
  var pause = 3000;
  var current = 1;

  var $slider = $('.slider');
  var $slideContainer = $slider.find('.slides');
  var $slides = $slideContainer.find('.slide');
  var interval;

  function startSlider(){
    interval = setInterval(function(){
      $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, unction(){
        current++;
        if(current === $slides.length){
          current = 1;
          $slideContainer.css('margin-left', 0);
        }
      });
    }, pause);
  }

  function stopSlider(){
    clearInterval(interval);
  }
  $slider.on('mouseenter', stopSlider).on('mouseleave', startSlider);
  startSlider();
});

// function mobileMenu() {
//     document.getElementsByClassName('main-menu')[0].classList.toggle("mobile-menu");
// }
// var myButton = document.querySelector('.mobile-menu');
//             var myNav = document.getElementById('main-menu');
//             function toggle (event){
//                 myNav.classList.toggle('show');
//             };
//
//
//             //Slider for testimonilas start here
//
//             //Get an array of sliders
//             var slides = document.getElementsByClassName("testimonials-block");
//
//
//             //Hide all slides, except the first when the page is loaded
//             for (var i = 0; i < slides.length; i++) {
//                 if(i !== 0) {
//                 slides[i].style.display = "none";
//                 }
//             }
//
//
//             //Slide Function
//             var index = 0;
//             function showTestimonials(n) {
//
//                 index=index + n;
//
//                 if(index > slides.length - 1) {
//                     index = 0;
//                 }
//
//                 if(index < 0) {
//                     index = slides.length - 1;
//                 }
//
//                 for (var i = 0; i < slides.length; i++) {
//                     if (i === index) {
//                         slides[i].style.display = "block";
//                     }
//                     else {
//                         slides[i].style.display = "none";
//                     }
//                 }
//
//
//             } //Slider testimonilas ends here


            //Gallery slideshow code starts here

            // var slideIndex = 0;
            // var slideshow=setInterval(carousel, 3000);// Change image every 3 seconds
            // var images = document.getElementsByClassName("mySlides");
            // var i;
            //
            // for (i = 0; i < images.length; i++) {
            //       if(i === images.length -1) {
            //         images[i].style.display = "block"
            //       } else {
            //         images[i].style.display = "none";
            //       }
            //
            //
            // }
            //
            //
            // function carousel() {
            //     for (i = 0; i < images.length; i++) {
            //       images[i].style.display = "none";
            //     }
            //     slideIndex++;
            //     if (slideIndex > images.length) {
            //         slideIndex = 1
            //     }
            //     images[slideIndex-1].style.display = "block";
            //
            // }
            // function stopShow(){
            //     clearInterval(slideshow);
            // }
            // function runShow(){
            //     slideshow=setInterval(carousel, 3000);
            // }


            // //dellay for buttons
            // function delayer(){
            //
            //
            //
            //     function show() {
            //         document.getElementsByClassName("button-slide").style.display="block";
            //         setTimeout("hide()", 4000); // 4 seconds
            //     }
            //
            //     function hide() {
            //         document.getElementsByClassName("button-slide").style.display="none";
            //     }
            //
            // }


            //
            // //function for arrows
            // function showImg(n) {
            //
            //     clearInterval(slideshow);
            //     slideIndex += n;
            //
            //     if(slideIndex > images.length - 1) {
            //         slideIndex = 0;
            //     }
            //
            //     if(slideIndex < 0) {
            //         slideIndex = images.length - 1;
            //     }
            //
            //     for (var i = 0; i < images.length; i++) {
            //         if (i === slideIndex) {
            //             images[i].style.display = "block";
            //
            //         } else {
            //             images[i].style.display = "none";
            //         }
            //     }
            //     slideshow=setInterval(carousel, 3000);//restarting interval
            //
            // };





(function($){
	function floatLabel(inputType){
		$(inputType).each(function(){
			var $this = $(this);
			// on focus add cladd active to label
			$this.focus(function(){
				$this.next().addClass("active");
			});
			//on blur check field and remove class if needed
			$this.blur(function(){
				if($this.val() === '' || $this.val() === 'blank'){
					$this.next().removeClass();
				}
			});
		});
	}
	// just add a class of "floatLabel to the input field!"
	floatLabel(".floatLabel");
})(jQuery);

// var time;
// var slideIndex = 0;
// var slides = document.getElementsByClassName("slide-box");
// var dots = document.getElementsByClassName("dot");
// var dots;
// showSlides();
//
// function showSlides() {
//     var i;
//     for (i = 0; i < slides.length; i++) {
//        slides[i].style.display = "none";
//     }
//     slideIndex++;
//     if (slideIndex> slides.length) {slideIndex = 1;}
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" dots-active", "");
//     }
//     slides[slideIndex-1].style.display = "block";
//     dots[slideIndex-1].className += " dots-active";
//     time = setTimeout(showSlides, 4000);
// };
//
// function moveSlide(n) {
//     clearTimeout(time);
//     var i;
//     for (i = 0; i < slides.length; i++) {
//        slides[i].style.display = "none";
//     }
//     slideIndex += n;
//     if (slideIndex > slides.length) {slideIndex = 1;}
//     if (slideIndex <= 0 ) {slideIndex = slides.length;}
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" dots-active", "");
//     }
//     slides[slideIndex-1].style.display = "block";
//     dots[slideIndex-1].className += " dots-active";
//     time = setTimeout(showSlides, 4000);
// }
