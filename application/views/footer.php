<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h1 class="font-weight-bold text-light my-4">Let's Connect</h1>
                <p class="text-light mb-4">Feel free to reach out for collaborations or just a friendly hello 😀</p>
                <a href="<?= site_url();?>/contact#form_name"
                    class="btn btn-outline-light mb-5">Contact</a>
                <div class="mb-5">
                    <ul class="flex-center">
                        <li><a href="https://www.facebook.com/satraw10" target="_blank"><img
                                    src="<?= base_url();?>assets/img/social/light/Facebook@1x.svg" alt=""></a></li>
                        <li><a href="https://twitter.com/im_satyamr" target="_blank"><img
                                    src="<?= base_url();?>assets/img/social/light/Twitter@2x.svg" alt=""></a></li>
                        <li><a href="https://www.instagram.com/sat_raw" target="_blank"><img
                                    src="<?= base_url();?>assets/img/social/light/Instagram@2x.svg" alt=""></a></li>
                        <li><a href="https://www.linkedin.com/in/satyam-rawat-a5385283" target="_blank"><img
                                    src="<?= base_url();?>assets/img/social/light/Linkedin@2x.svg" alt=""></a></li>
                        <li><a href="https://dribbble.com/satraw" target="_blank"><img
                                    src="<?= base_url();?>assets/img/social/light/Dribbble@2x.svg" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?= base_url();?>assets/js/vendor.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="<?= base_url();?>assets/js/hs.core.js"></script>
<script defer src="<?= base_url();?>assets/js/jquery.cubeportfolio.min.js"></script>
<script defer src="<?= base_url();?>assets/js/hs.cubeportfolio.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="<?= base_url();?>assets/js/theme.min.js"></script>
<script src="<?= base_url();?>assets/js/google-sheet.js"></script>
<script>
    $(document).on('ready', function () {
        // initialization of cubeportfolio
        $.HSCore.components.HSCubeportfolio.init('.cbp');
    });
</script>

<!-- JavaScript for disabling form submissions if there are invalid fields -->
<script>
        // Self-executing function
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>