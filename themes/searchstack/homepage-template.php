<?php
/**
 * Template Name: Landing Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>

<?php get_header(); ?>




<div class="page-content">
    <div class="space-block" id="back-test">
        <div class="header-opener">
        <div class="bg-frame"><img src="http://searchstack.co.uk/wp-content/uploads/2019/09/Layer-2.svg"></div>
            <h1 class="block-reveal"> <span style="--delay: 1.0">Own</span> 
                <div class="shape-inline-header">
                <img class="shape-actual" src="http://searchstack.co.uk/wp-content/uploads/2019/09/splat.png">
                    <span style="--delay: 1.1" class="text-layer">Your</span></div>
                 <span style="--delay: 1.2">Space</span> </h1>
            
        <div class="header-para-container"><p class="header-paragraph"> We help you build a web presence you can be proud of. </p></div>
        </div>
        <div class="header-service-container">
            <div class="hsc-head">
                <h2>A specialist Kent based digital agency that helps businesses do more with their digital presence. </h2>
                <p>We focus on helping businesses build high-performing, optimised and great looking websites. But, that's not all we do. We can help your business strategies and market your business effectivley with years of marketing experience to help you attract and close the right customers, fast. </p>
            </div>
            <div class="service-list">
                <div class="service-list-flex">
                    <div class="service-list-child">
                        <img src="" class="service-icon">
                        <h3>Performance Marketing</h3>
                        <p>Super charge your business marketing. Thrive with the expertise of a marketing department for less than the price of an apprentice. </p>
                        <ul>
                            <li><a href="#">Social Media Marketing</a></li>
                            <li><a href="#">Search Engine Optimisation (SEO)</a></li>
                            <li><a href="#">Paid Media Advertising</a></li>
                            <li><a href="#">Strategy & Consultancy</a></li>
                        </ul>
                    </div>
                    <div class="service-list-child">
                        <img src="" class="service-icon">
                        <h3>Web Design & Development</h3>
                        <p>Super charge your business marketing. Thrive with the expertise of a marketing department for less than the price of an apprentice. </p>
                        <ul>
                            <li><a href="#">Custom Web Design</a></li>
                            <li><a href="#">eCommerce</a></li>
                            <li><a href="#">Recruitment Websites</a></li>
                            <li><a href="#">Site Optimisation</a></li>
                        </ul>
                    </div>
                    <div class="service-list-child">
                        <img src="" class="service-icon">
                        <h3>Branding & Graphic Design</h3>
                        <p>Super charge your business marketing. Thrive with the expertise of a marketing department for less than the price of an apprentice. </p>
                        <ul>
                            <li><a href="#">Logo & Branding</a></li>
                            <li><a href="#">Print Design</a></li>
                            <li><a href="#">Digital & Graphic Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="latest-project-row">
        <div class="lpr-head">
            <h2>Latest Projects</h2>
            <p>See how we've helped some of our recent clients transform their digital presence and attract the right customers.</p>
        </div>
        <div class="lp-grid">
            <div class="lp-block lp-block-1">
                <div class="lp-text">
                    <div class="service-tag-area">
                        <a href="" title="" class="service-tag">Web Development</a>
                    </div>
                    <h4>The Recruitment Network</h4>
                    <p>A website redesign for a market leading consultancy network in the Recruitment industry.</p>
                    <a href="" title="">Read more</a>
                </div>
            </div>
            <div class="lp-block lp-block-2">
                <div class="lp-text">
                    <div class="service-tag-area">
                        <a href="" title="" class="service-tag">Web Development</a>
                    </div>
                    <h4>The Recruitment Network</h4>
                    <p>A website redesign for a market leading consultancy network in the Recruitment industry.</p>
                    <a href="" title="">Read more</a>
                </div>
            </div>
            <div class="lp-block lp-block-3">
                <div class="lp-text">
                    <div class="service-tag-area">
                        <a href="" title="" class="service-tag">Web Development</a>
                    </div>
                    <h4>The Recruitment Network</h4>
                    <p>A website redesign for a market leading consultancy network in the Recruitment industry.</p>
                    <a href="" title="">Read more</a>
                </div>
            </div>
        </div>
        <div class="lp-block-link">
            <a href="" title="View all projects">View all projects</a>
        </div>
    </div>

    <div class="process-block-row">
        
    </div>
    
    <a id="contact"></a>
    <div class="from-block" id="footer-block">
        <div class="form-area">   
            <h2>Let's talk</h2>
            <p class="contact-intro">If you'd like to discuss any work opportunities please submit this form and I'll get back to you. </p>
            <?php echo do_shortcode ( '[contact-form-7 id="9" title="Contact form 1"]' ) ?>
        </div>
        <div class="contact-area">
            <h2>Contact</h2>
            <p class="contact-intro"> If you'd prefer a different channel of communication then you can grab me on any of these below. </p>
            <ul>
                <li>
                    <p id="contact-header">🤙 Call Me </p>
                    <a href="tel:07738687108"><p>07738687108</p></a>
                </li>
                <li>
                    <p id="contact-header">📧 Email Me </p>
                    <a href="mailto:haydn@searchstack.co.uk"><p>haydn@searchstack.co.uk</p></a>
                </li>
                <li>
                    <p id="contact-header">👍 DM Me </p>
                    <a href="https://www.instagram.com/haydnmorgans/"><p>@haydnmorgans</p></a>
                </li>

            </ul>

        </div>
    </div>
    <script>
        VANTA.DOTS({
        el: "",
        color: 0x6549e8,
        color2: 0x40622,
        backgroundColor: 0x40622,
        size: 3.20,
        spacing: 35.00
        })
    </script>
    <script>
        VANTA.TOPOLOGY({
        el: "#back-test",
        color: 0x6549e8,
        backgroundColor: 0x40622
        })
        </script>
    <script>

        window.onscroll = function() {mouseScroll()};

        function mouseScroll() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("mouse-scroll").style.opacity = "0";
        } else {
            document.getElementById("mouse-scroll").style.opacity = "1";            
        }
        }

        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("masthead").style.background = "#05011e";
            document.getElementById("masthead").style.border = "none";
        } else {
            document.getElementById("masthead").style.background = "transparent";
            document.getElementById("masthead").style.borderBottom = "solid 1px rgb(255, 255, 255, 0.1)";
        }
        }


    </script>

</div>
