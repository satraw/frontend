<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section class="xtra-pad-s pl-4 pl-md-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="hola mb-3">H<span class="wave"> <img src="<?= base_url();?>assets/img/waving-hand.png" alt=""> </span>la!</h1>
                <h1 class="cd-headline slide">
                    <span>I'm <a class="about-link" href="<?= site_url();?>/about">Satyam</a>,<br class="mob"></span>
                    <span class="cd-words-wrapper">
                        <b class="is-visible">an Experience<br class="mob"> Designer</b>
                        <b>a Visual Designer</b>
                        <b>a UI Developer</b>
                    </span>
                </h1>
                <h3 class="mt-3 text-muted lh-1 mob-font-14">I enjoy creating user-centric, delightful, and human
                    experiences.
                </h3>
            </div>
        </div>
    </div>
</section>

<section class="bg-light pb-0">
    <div class="container">
        <h5 class="text-uppercase mb-5 text-space">Featured Case Studies</h5>
        <!-- Row -->
        <div class="row">
            <div class="col-md-8">
                <p class="h3 text-muted mb-4 mb-md-5">I help businesses bring ideas to life in the digital world, by designing
                    the technology tools that they need to grow.</p>
            </div>
            <div class="col-md-4 d-md-flex justify-content-end align-items-start mb-4 mb-md-5">
                <a href="<?= site_url();?>/case_study" class="nav-link btn btn-outline-dark mx-2">View All</a>
            </div>
        </div>
    </div>
</section>

<section class="bg-light px-0 pt-4">
     <div class="container px-0 px-md-3">
         <!-- Flickity HTML init -->
 <div class="gallery-flickity d-md-flex js-flickity" data-flickity-options='{ "freeScroll": false, "wrapAround": false }' data-flickity='{ "watchCSS": true, "prevNextButtons": false, "pageDots": false }'>
    <div class="gallery-cell">
        <div class="col-md-12 card-shadow card-radius" style="background-color: #ffd842;">
            <div class="card-cs py-5 px-4 px-md-5">
                <h1 class="font-weight-bold">CAT Machines: Caterpillar India</h1>
                <p class="text-dark my-4">A platform to explore the products and find a suitable one, integrated with a
                    quick inquiry system.</p>
                <a class="link-button" href="<?= site_url();?>/coming_soon">View Case
                    <span class="arrow-right">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16"
                            viewBox="0 0 16 16" style=" fill:#000000;">
                            <path
                                d="M 11.734375 4.03125 L 11.015625 4.71875 L 13.210938 7.007813 L 2 7.007813 L 2 8.007813 L 13.191406 8.007813 L 11.015625 10.28125 L 11.734375 10.96875 L 15.066406 7.5 Z">
                            </path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="gallery-cell">
        <div class="col-md-12 card-shadow card-radius" style="background-color: #aedfec;">
            <div class="card-cs py-5 px-4 px-md-5">
                <h1 class="font-weight-bold">Grapp: Group Payment App</h1>
                <p class="text-dark my-4">A mobile app to make group payment process swift, smooth & hassle-free.
                    Bundled up with many other useful features.</p>
                <a class="link-button" href="<?= site_url();?>/coming_soon">View Case
                    <span class="arrow-right">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16"
                            viewBox="0 0 16 16" style=" fill:#000000;">
                            <path
                                d="M 11.734375 4.03125 L 11.015625 4.71875 L 13.210938 7.007813 L 2 7.007813 L 2 8.007813 L 13.191406 8.007813 L 11.015625 10.28125 L 11.734375 10.96875 L 15.066406 7.5 Z">
                            </path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
     </div>
</section>

<section class="bg-light pt-0 pb-2 pt-md-5">
    <div class="container">
        <div class="row horizontal-center">
            <div class="col-md-6 order-last order-md-last">
                <h5 class="text-uppercase mb-4 mb-md-5 text-space">Experiments</h5>
                <h1 class="font-weight-bold mb-3">UI Designs</h1>
                <p class="big mt-4 text-muted lh-1">Appealing design ideas for web & mobile to energize the creative
                    workflow.</p>
                <a href="<?= site_url();?>/experiments" class="nav-link btn btn-outline-dark mt-2">Explore More</a>
            </div>
            <div class="col-md-6 order-first order-md-first text-left text-md-center px-5">
                <img class="img-fluid mb-5 mb-md-0" src="<?= base_url();?>assets/img/ui-design.svg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="container">
        <div class="row horizontal-center">
            <div class="col-md-6 order-last order-md-first">
                <h5 class="text-uppercase mb-4 mb-md-5 text-space">Experiments</h5>
                <h1 class="font-weight-bold mb-3">UI Components</h1>
                <p class="big mt-4 text-muted lh-1">A library of accessible, progressively enhanced, HTML, CSS, JS
                    components. Ready to use in any web project.</p>
                <h4>Coming soon! Stay updated.</h4>
                <!-- <a href="<?= site_url();?>/experiments#component" class="nav-link btn btn-outline-dark mt-3">Explore More</a> -->
            </div>
            <div class="col-md-6 order-first order-md-last text-left text-md-center px-5">
                <img class="img-fluid mb-5 mb-md-0" src="<?= base_url();?>assets/img/components.svg" alt="">
            </div>
        </div>
    </div>
</section>