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
        <div class="bg-frame"><img src="http://searchstack.co.uk/wp-content/uploads/2019/09/Layer-2.svg"></div>
            <h1 class="block-reveal"> <span style="--delay: 1.0">Own</span> 
                <div class="shape-inline-header">
                <img class="shape-actual" src="http://searchstack.co.uk/wp-content/uploads/2019/09/splat.png">
                    <span style="--delay: 1.1" class="text-layer">Your</span></div>
                 <span style="--delay: 1.2">Space</span> </h1>
            
            <div class="header-para-container"><p class="header-paragraph"> We help you build a web presence you can be proud of. </p></div>
    </div>
    <div class="service-content-block">
        <div class="s-c-header-block">
            <h2> Win Customers, get found and look good in the process.                
            </h2>
            <p> We take the time to understand your needs, style and direction. Bringing together a wealth of knowledge, experience and skills SearchStack helps you stand out from the competition.  </p>
        </div>
        <div class="service-block-flex">
            <div class="service-block">
                <div class="service-block-header"><img src="https://searchstack.co.uk/wp-content/uploads/2019/11/Code-Icon-Searchstack.svg"><h3> Web Design </h3></div>
                <p> Your digital presence needs to stand out, run fast, look great and be all about the experience. Making an affordable but awesome site for you is our mission. </p>
            </div>
            <div class="service-block">
            <div class="service-block-header"><img src="https://searchstack.co.uk/wp-content/uploads/2019/11/Ciode-Icon-Searchstack.svg"><h3> SEO </h3></div>
                <p> With years of experience in technical SEO, we can help you beat out the competition with a consistent SEO plan. Get found on Google. </p>
            </div>
            <div class="service-block">
            <div class="service-block-header"><img src="https://searchstack.co.uk/wp-content/uploads/2019/11/Marketing-Icon-Searchstack.svg"><h3> Marketing </h3></div>
                <p> Modern day marketing needs the assistance of a professional who can help you navigate the ever changing landscape, we can help you in whatever channels you're looking to sell in. </p>
            </div>
        </div>
    </div>

    <div class="content-block">
    <a id="web-design"></a>
            <div class="content-block-image" style="background-image: url('https://searchstack.co.uk/wp-content/uploads/2019/11/design-svg.svg')">
            </div>
            <div class="content-block-text">
                <div class="text-inner">
                <h3> A Beautiful Website <span class="shape-inline copy-shape">
                <img class="shape-actual" src="http://searchstack.co.uk/wp-content/uploads/2019/09/splat.png">
                    <span class="text-layer">Shouldn't</span></span> Cost a Fortune. </h3>
                <p>Get the high-end look and functionality of a big fancy agency website for a fraction of the cost. We cater to the local business who needs a website which'll make them stand out, but also becomes one of their greatest assets.</p>

            </div>
            </div>
    </div>
    <div class="content-block">
    <a id="seo"></a>
            <div class="content-block-image" style="background-image: url('https://searchstack.co.uk/wp-content/uploads/2019/11/SEO-svg.svg')">
            </div>
            <div class="content-block-text">
                <div class="text-inner">
                <h3> Get <span class="shape-inline copy-shape" id="seo">
                <img class="shape-actual" src="http://searchstack.co.uk/wp-content/uploads/2019/09/splat.png">
                    <span class="text-layer">Found</span></span> on Google. </h3>
                <p>All site projects come with a complimentary month of SEO where we get your site completely optimised for Google Search rankings. We then also offer monthly retainers to help build and grow your search presence to outperform your direct competitors. </p>

            </div>
            </div>
    </div>
    <div class="content-block">
    <a id="digital-marketing"></a>
            <div class="content-block-image" style="background-image: url('https://searchstack.co.uk/wp-content/uploads/2019/11/Marketing-svg.svg')">
            </div>
            <div class="content-block-text">
                <div class="text-inner">
                <h3> Digital Marketing. </h3>
                <p>Implement the expertise and experience of a Digital Marketing Manager within your business. Whether you want to bring in more sales or build your social media presence, we can work together to implement market leading strategies to corner your market. </p>
 
            </div>
            </div>
    </div>
<!--
    <div class="recent-projects">
        <div class="projects-flex">
            <div class="project-box">
                <div class="project-image" style="background-image: url('https://significa.co/static/aaa2c913dab48a62a42fb9360999bf27/26cc2/fdd761b36ae2d318783cd098283af32949d8235d_vetbase-cover.webp')"></div>
                <div class="project-text">
                    <h3> Example Project </h3>
                    <p> A recent website design for a apartment complex in Cyprus </p>
                    <div class="category-block">
                        <ul>
                            <li> Web Design </li>
                            <li> SEO </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
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
