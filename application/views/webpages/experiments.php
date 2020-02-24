<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section class="xtra-pad-s">
    <div class="container text-center">
        <h2 class="display-3 font-weight-bold mob-font-30">Experiments</h2>
        <p class="big text-muted mt-4 mb-5">
        <!-- An effort to collectively put together creative ideas for designers and developers. -->
        A collection of creative ideas for designers and developers.
    </p>
        <div class="row flex-center mb-4">
            <ul class="nav" role="tablist">
                <li class="nav-item">
                    <a href="#ui-design" id="ui-design-tab" class="nav-link active btn btn-outline-dark mx-2"
                        data-toggle="pill" aria-controls="ui-design" aria-selected="true">UI Designs</a>
                </li>
                <li class="nav-item">
                    <a href="#component" id="component-tab" class="nav-link btn btn-outline-dark mx-2"
                        data-toggle="pill" aria-controls="component" aria-selected="false">Components</a>
                </li>
            </ul>
        </div>
        <a href="#experiments_library">
        <figure>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 50 50"
                style=" fill:#000000;text-align:center;margin-top:1em;">
                <path
                    d="M 25 2 C 12.309295 2 2 12.309295 2 25 C 2 37.690705 12.309295 48 25 48 C 37.690705 48 48 37.690705 48 25 C 48 12.309295 37.690705 2 25 2 z M 25 4 C 36.609824 4 46 13.390176 46 25 C 46 36.609824 36.609824 46 25 46 C 13.390176 46 4 36.609824 4 25 C 4 13.390176 13.390176 4 25 4 z M 24 14 L 24 33.585938 L 16.707031 26.292969 L 15.292969 27.707031 L 25 37.414062 L 34.707031 27.707031 L 33.292969 26.292969 L 26 33.585938 L 26 14 L 24 14 z">
                </path>
            </svg>
        </figure>
        </a>
    </div>
</section>

<div id="experiments_library" class="tab-content">
    <!-- UI Design Tab -->
    <div class="tab-pane fade show active" id="ui-design" role="tabpanel" aria-labelledby="ui-design-tab">

        <section class="bg-white pt-0">
            <div class="container">
                <div class="row">
                    <div class="u-cubeportfolio">
                        <!-- Filter -->
                        <ul id="filterControls" class="list-inline cbp-l-filters-alignRight text-center">
                            <li class="list-inline-item cbp-filter-item cbp-filter-item-active u-cubeportfolio__item"
                                data-filter="*">All</li>
                            <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".web-ui">
                                Web UI</li>
                            <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".mobile-ui">
                                Mobile UI</li>
                            <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".branding">
                                Branding</li>
                            <li class="list-inline-item cbp-filter-item u-cubeportfolio__item"
                                data-filter=".illustration">Illustration</li>
                        </ul>
                        <!-- End Filter -->

                        <!-- Content -->
                        <div class="cbp mt-5 gallery" data-layout="grid" data-controls="#filterControls"
                            data-animation="quicksand" data-x-gap="32" data-y-gap="32"
                            data-media-queries='[{"width": 1500, "cols": 4},{"width": 1100, "cols": 4},{"width": 800, "cols": 3},{"width": 480, "cols": 2},{"width": 300, "cols": 1}]'>
                            
                            <!-- Item -->
                            <div class="cbp-item border rounded mobile-ui">
                                <div class="cbp-item-wrapper">
                                    <a class="cbp-caption" href="<?= base_url();?>assets/img/experiments-ui/ambient-display.jpg">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="<?= base_url();?>assets/img/experiments-ui/ambient-display-thumb.jpg"
                                                alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap bg-dark">
                                            <div class="px-4 py-3">
                                                <div class="cbp-l-caption-body">
                                                    <h4 class="h6 text-white mb-0">Android Ambient Screen</h4>
                                                    <p class="small text-light mb-0">
                                                       #GoogleAssistant
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="cbp-item border rounded mobile-ui">
                                <div class="cbp-item-wrapper">
                                    <a class="cbp-caption" href="<?= base_url();?>assets/img/experiments-ui/group-pay-wf.jpg">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="<?= base_url();?>assets/img/experiments-ui/group-pay-wf-thumb.jpg"
                                                alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap bg-dark">
                                            <div class="px-4 py-3">
                                                <div class="cbp-l-caption-body">
                                                    <h4 class="h6 text-white mb-0">Group Payment App</h4>
                                                    <p class="small text-light mb-0">
                                                       #Wireframe
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="cbp-item border rounded web-ui">
                                <div class="cbp-item-wrapper">
                                    <a class="cbp-caption" href="<?= base_url();?>assets/img/experiments-ui/Macbook-Long-Scroll-Mockup.jpg">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="<?= base_url();?>assets/img/experiments-ui/Macbook-Long-Scroll-Mockup-thumb.jpg"
                                                alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap bg-dark">
                                            <div class="px-4 py-3">
                                                <div class="cbp-l-caption-body">
                                                    <h4 class="h6 text-white mb-0">Cat Machine Web UI</h4>
                                                    <p class="small text-light mb-0">
                                                       #webUI #mockup
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="cbp-item border rounded mobile-ui">
                                <div class="cbp-item-wrapper">
                                    <a class="cbp-caption" href="<?= base_url();?>assets/img/experiments-ui/video-stream.jpg">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="<?= base_url();?>assets/img/experiments-ui/video-stream-thumb.jpg"
                                                alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap bg-dark">
                                            <div class="px-4 py-3">
                                                <div class="cbp-l-caption-body">
                                                    <h4 class="h6 text-white mb-0">Video Streaming App</h4>
                                                    <p class="small text-light mb-0">
                                                       #mobileUI
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Item -->
                            
                            <!-- Item -->
                            <div class="cbp-item border rounded web-ui">
                                <div class="cbp-item-wrapper">
                                    <a class="cbp-caption" href="<?= base_url();?>assets/img/experiments-ui/website-coming-soon.jpg">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="<?= base_url();?>assets/img/experiments-ui/website-coming-soon.jpg"
                                                alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap bg-dark">
                                            <div class="px-4 py-3">
                                                <div class="cbp-l-caption-body">
                                                    <h4 class="h6 text-white mb-0">Launching Soon Web UI</h4>
                                                    <p class="small text-light mb-0">
                                                        #WebUI
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="cbp-item border rounded illustration branding">
                                <div class="cbp-item-wrapper">
                                    <a class="cbp-caption" href="<?= base_url();?>assets/img/experiments-ui/grapp-social-media.jpg">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="<?= base_url();?>assets/img/experiments-ui/grapp-social-media.jpg"
                                                alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap bg-dark">
                                            <div class="px-4 py-3">
                                                <div class="cbp-l-caption-body">
                                                    <h4 class="h6 text-white mb-0">Group Payment App</h4>
                                                    <p class="small text-light mb-0">
                                                        #facebook #socialMedia
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="cbp-item border rounded branding illustration">
                                <div class="cbp-item-wrapper">
                                    <a class="cbp-caption" href="<?= base_url();?>assets/img/experiments-ui/hiring-econz.jpg">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="<?= base_url();?>assets/img/experiments-ui/hiring-econz.jpg"
                                                alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap bg-dark">
                                            <div class="px-4 py-3">
                                                <div class="cbp-l-caption-body">
                                                    <h4 class="h6 text-white mb-0">Employee Hiring</h4>
                                                    <p class="small text-light mb-0">
                                                        #socialMedia #Hiring
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="cbp-item border rounded web-ui">
                                <div class="cbp-item-wrapper">
                                    <a class="cbp-caption" href="<?= base_url();?>assets/img/experiments-ui/tours-travel.jpg">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="<?= base_url();?>assets/img/experiments-ui/tours-travel-thumb.jpg"
                                                alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap bg-dark">
                                            <div class="px-4 py-3">
                                                <div class="cbp-l-caption-body">
                                                    <h4 class="h6 text-white mb-0">Tours & Travel</h4>
                                                    <p class="small text-light mb-0">
                                                        #travel #touring
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="cbp-item border rounded illustration branding">
                                <div class="cbp-item-wrapper">
                                    <a class="cbp-caption" href="<?= base_url();?>assets/img/experiments-ui/marketing-econz.jpg">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="<?= base_url();?>assets/img/experiments-ui/marketing-econz.jpg"
                                                alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap bg-dark">
                                            <div class="px-4 py-3">
                                                <div class="cbp-l-caption-body">
                                                    <h4 class="h6 text-white mb-0">Hiring Ad</h4>
                                                    <p class="small text-light mb-0">
                                                       #socialMedia
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Item -->

                            
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Components Tab -->
    <div class="tab-pane fade" id="component" role="tabpanel" aria-labelledby="component-tab">
        <section class="bg-white pt-0">
            <div class="container">
                <div class="row flex-center">
                    <div class="col-md-6 order-md-last">
                        <div class="flex-center">
                            <img class="img-fluid" src="<?= base_url(); ?>assets/img/coming-soon.png"
                                alt="page not found">
                        </div>
                    </div>
                    <div class="col-md-6 order-md-first">
                        <h1 class="font-weight-bold mt-4 mob-font-26">Coming Soon! Stay updated</h1>
                        <p class="big mt-4 text-muted lh-1">A library of accessible, progressively enhanced, HTML, CSS, JS components.</p>
                        <p class="big mt-4 text-muted lh-1">Ready to use in any web project.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>