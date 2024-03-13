<?php
/**
 * Template Name: Splash Page Template
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
            
            <div class="header-para-container"><p class="header-paragraph"> We're going through a redesign at the moment - So watch this space! </p></div>
            <div class="contact-area">
            <ul>
                <li>
                    <p id="contact-header">📧 Email Me </p>
                    <a href="mailto:haydn@searchstack.co.uk"><p>haydn@searchstack.co.uk</p></a>
                </li>
            </ul>
            </div>
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
