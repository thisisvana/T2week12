
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

// function mobileMenu() {
//     document.getElementsByClassName('main-menu')[0].classList.toggle("mobile-menu");
// }

var time;
var slideIndex = 0;
var slides = document.getElementsByClassName("slide-box");
var dots = document.getElementsByClassName("dot");
var dots;
showSlides();

function showSlides() {
    var i;
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1;}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" dots-active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " dots-active";
    time = setTimeout(showSlides, 4000);
};

function moveSlide(n) {
    clearTimeout(time);
    var i;
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex += n;
    if (slideIndex > slides.length) {slideIndex = 1;}
    if (slideIndex <= 0 ) {slideIndex = slides.length;}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" dots-active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " dots-active";
    time = setTimeout(showSlides, 4000);
}




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
