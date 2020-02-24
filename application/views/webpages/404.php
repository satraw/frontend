<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section class="xtra-pad-s">
    <div class="container">
        <div class="row flex-center">
            <div class="col-md-6 order-last order-md-first">
                <div class="d-block text-center text-md-left">
                    <h2 class="mt-5">Uh-oh!</h2>
                    <h1 class="display-4 font-weight-bold mob-font-26">Page Not Found</h1>
                    <a href="<?= site_url();?>" class="nav-link btn btn-outline-dark mt-4">Go Home</a>
                </div>
            </div>
            <div class="col-md-6 order-first order-md-last">
                <img class="img-fluid" src="<?= base_url(); ?>assets/img/404.png" alt="page not found">
            </div>
        </div>
    </div>
</section>