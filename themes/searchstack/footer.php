<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package searchstack
 */

?>

	</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="ss-f-frow">
		<div class="fr-left">
			<a href="https://searchstack.co.uk/" data-aos="fade-up" data-aos-delay="100">Home</a>
			<a href="/about/" data-aos="fade-up" data-aos-delay="200">About</a>
			<a href="/work/" data-aos="fade-up" data-aos-delay="300">Work</a>
			<a href="/insights/" data-aos="fade-up" data-aos-delay="400">Insights</a>
		</div>
		<div class="fr-right">
			<a data-aos="fade-up" data-aos-delay="300" href="https://www.linkedin.com/company/search-stack-web-agency/" title="LinkedIn"  target="_blank"><img src="/wp-content/uploads/2021/08/icons8-instagram-logo.svg"></a>
			<a data-aos="fade-up" data-aos-delay="400" href="https://www.instagram.com/searchstack/" title="LinkedIn"  target="_blank"><img src="/wp-content/uploads/2021/08/icons8-linkedin-3.svg"></a>
			<a data-aos="fade-up" data-aos-delay="500" href="https://www.facebook.com/SearchStack" title="LinkedIn"  target="_blank"><img src="/wp-content/uploads/2021/08/icons8-facebook-logo-1.svg"></a>
		</div>
	</div>
	<div class="ss-b-row">
		<div class="sr-left">
			<img src="/wp-content/uploads/2019/09/search-stack-light.png" class="ss-footer-logo">
			<a  href="mailto:hello@searchstack.co.uk" class="ss-con-link">hello@searchstack.co.uk</a>
			<a href="tel:07738687108" class="ss-con-link">07738687108</a>
			<a  href="/contact/" class="ss-con-link">Contact</a>
		</div>
		<div class="sr-right" >
			<p class="sr-title">Let's build something remarkable.</p>
			<a href="https://calendly.com/haydn-searchstack/website-meeting" target="_blank" class="book-call-link">
			<button class="book-call-button"><span class="bc-p">Book a call</span>
				<span class="bcb-icon-block"><img src="/wp-content/uploads/2021/05/white-arrow.svg" alt="" class="icon-block"></span>
			</button>
			</a>
			<a href="https://searchstack.co.uk/weve-signed-up-ecologi/" title="Ecologi" class="ecol-link">
				<img src="/wp-content/uploads/2021/12/ecologi-white.svg" alt="Ecologi" class="ecologi-icon">
				<p class="ecoligi-text">Proud to support Ecologi</p>

			</a>
		</div>
	</div>
	<div class="footer-third-row" >
		<div class="ftr-left">
			© Copyright 2023 Search Stack. All rights reserved.
		</div>
		<div class="ftr-right">
			<a href="https://searchstack.co.uk/privacy-policy/">Privacy</a>
			<a href="https://searchstack.co.uk/sitemap_index.xml">Sitemap</a>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<script src="/wp-content/themes/searchstack/js/aos-master/dist/aos.js"></script>
<script type="text/javascript" src="/wp-content/themes/searchstack/js/slick-1.8.1/slick-1.8.1/slick/slick.min.js"></script>

<script>
  AOS.init();
</script>

<script>
function openTab(evt, cityName) {
// Declare all variables
var i, tabcontent, tablinks;

// Get all elements with class="tabcontent" and hide them
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
tabcontent[i].style.display = "none";
}

// Get all elements with class="tablinks" and remove the class "active"
tablinks = document.getElementsByClassName("tablinks");
for (i = 0; i < tablinks.length; i++) {
tablinks[i].className = tablinks[i].className.replace(" active", "");
}

// Show the current tab, and add an "active" class to the button that opened the tab
document.getElementById(cityName).style.display = "block";
evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();

</script>

<script>
  window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("masthead").style.backgroundColor = "#01010E";
  } else {
    document.getElementById("masthead").style.backgroundColor = "transparent";
  }
}
</script>
<script>
function openNav() {
    var sidenav = document.getElementById("myNav"),
    main = document.getElementById("#primary-menu");
    sidenav.style.right = sidenav.style.right === "0px" ? '-900px' : '0px';
	main.style.opacity = main.style.opacity === "0" ? '100%' :  '0';

}
// Look for .hamburger
var hamburger = document.querySelector(".hamburger");
// On click
hamburger.addEventListener("click", function() {
// Toggle class "is-active"
hamburger.classList.toggle("is-active");
// Do something else, like open/close menu
});
</script>

<script>
$('.testimonial-slider').slick({
slidesToShow: 1,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 5000,
});
</script>

<?php wp_footer(); ?>

</body>
</html>
