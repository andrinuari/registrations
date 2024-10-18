

        <!-- Popup Flash Message -->
        <?php if ($this->session->flashdata('message')): ?>
            <div id="flash-message" class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('message'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>


        <!-- Footer Start -->
        <footer class="footer" style="background-image: url('<?php echo base_url();?>assets/images/svg-map.svg'); background-repeat: no-repeat; background-position: center;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 py-lg-5">
                        <div class="footer-py-20 text-center">
                            <a href="#" class="logo-footer">
                                <img src="<?php echo base_url();?>assets/images/logo-light.svg" height="48" alt="">
                            </a>
                            <div class="row py-5">
                                <div class="col-md-4">
                                    <div class="card border-0 text-center features feature-primary feature-clean bg-transparent">
                                        <div class="icons text-center mx-auto">
                                            <i class="uil uil-phone d-block rounded h3 mb-0"></i>
                                        </div>
                                        <div class="content mt-4">
                                            <h5 class="footer-head">Phone</h5>
                                            <a href="tel:0822-9962-0101" class="text-foot">0822-9962-0101</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                        
                                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="card border-0 text-center features feature-primary feature-clean bg-transparent">
                                        <div class="icons text-center mx-auto">
                                            <i class="uil uil-envelope d-block rounded h3 mb-0"></i>
                                        </div>
                                        <div class="content mt-4">
                                            <h5 class="footer-head">Email</h5>
                                            <a href="mailto:new.andrinuari@gmail.com" class="text-foot">new.andrinuari@gmail.com</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                        
                                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="card border-0 text-center features feature-primary feature-clean bg-transparent">
                                        <div class="icons text-center mx-auto">
                                            <i class="uil uil-globe d-block rounded h3 mb-0"></i>
                                        </div>
                                        <div class="content mt-4">
                                            <h5 class="footer-head">Github</h5>
                                            <p class="text-muted"><a href="https://github.com/andrinuari/registrations" target="_blank">https://github.com/andrinuari/registrations</a></p>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->


                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="footer-py-30 footer-bar bg-footer">
                <div class="container text-center">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="text-center">
                                <p class="mb-0">© <?php echo date('Y');?>. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank" class="text-reset">Andri Nuari R</a>.</p>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->

        <!--Note: Cookies Js including in plugins.init.js (path like; js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
        <!-- Cookies End -->
        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up"
                class="fea icon-sm icons align-middle"></i></a>
        <!-- Back to top -->

        
        <!-- javascript -->
        <!-- JAVASCRIPT -->
        <script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- SLIDER -->
        <script src="<?php echo base_url();?>assets/libs/tiny-slider/min/tiny-slider.js"></script>
        <!-- Lightbox -->
        <script src="<?php echo base_url();?>assets/libs/tobii/js/tobii.min.js"></script>
        <!-- Parallax -->
        <script src="<?php echo base_url();?>assets/libs/jarallax/jarallax.min.js "></script>
        <script src="<?php echo base_url();?>assets/libs/wow.js/wow.min.js"></script>
        <!-- Main Js -->
        <script src="<?php echo base_url();?>assets/libs/feather-icons/feather.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/plugins.init.js"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="<?php echo base_url();?>assets/js/app.js"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    </body>
</html>