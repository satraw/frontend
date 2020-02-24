<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

 <section class="xtra-pad-s">
        <div class="container">
            <div class="row horizontal-center">
                <div class="col-md-6 order-last order-md-first">
                    <h1 class="page-title mb-3">Contact.</h1>
                    <h1 class="font-weight-bold">Communication is everything</h1>
                    <p class="big mt-4 text-muted lh-1">So what's on your mind? I would love to hear from you or just say a
                        friendly hello 😛</p>
                </div>
                <div class="col-md-6 order-first order-md-last text-center px-5 mob-pad-l">
                    <img class="img-fluid" src="<?= base_url();?>assets/img/communication.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="mb-4 font-weight-bold text-center lh-1 mob-text-left">Kindly leave your message here or send it to <a
                            href="mailto:satyamrawat03@gmail.com"><span
                                class="text-primary font-mail">satyamrawat03@gmail.com</span></a></h2>
                    <form id="contact_form" class="needs-validation" autocomplete="off" novalidate>
                        <div class="row">
                            <!-- Input -->
                            <div class="col-sm-6 mb-5">
                                <div class="js-form-message">
                                    <label class="form-label">
                                        Your name
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input id="form_name" type="text" class="form-control" name="Name" placeholder="Jack Wayley" required>
                                    <div class="invalid-feedback">Please enter your name.</div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-5">
                                <div class="js-form-message">
                                    <label class="form-label">
                                        Your email address
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input type="email" class="form-control" name="Email" placeholder="jackwayley@gmail.com" required>
                                    <div class="invalid-feedback">Please enter a valid email address.</div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-12 mb-5">
                                <div class="js-form-message">
                                    <label class="form-label">
                                        Subject
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" class="form-control" name="Subject" placeholder="Web design" maxlength="40" required>
                                    <div class="invalid-feedback">Please enter the subject line.</div>
                                </div>
                            </div>
                            <!-- End Input -->
                        </div>

                        <!-- Input -->
                        <div class="mb-5">
                            <label class="form-label">
                                How can I help you?
                            </label>

                            <div class="input-group">
                                <textarea class="form-control" rows="4" name="Message"
                                    placeholder="Hi there, I would like to ..." maxlength="80"></textarea>
                            </div>
                        </div>
                        <!-- End Input -->

                        <div class="text-center">
                            <button type="submit"
                                class="btn btn-primary btn-wide transition-3d-hover mb-4">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>