<style type="text/css">
    .f-logo>a{
        height: 95px;
        line-height: 100px;
    }
    .contact-icon{
        top:3px;
    }
    .dropdown-toggle::after{
        display: none;
    }
    .footer-menu li div.dropdown-menu a{
        margin-left: 0px; 
        padding: 10px;
        color: #111;
        text-transform: capitalize;
        font-size: 13px;
    }
    .footer-menu li div.dropdown-menu a:first-child{
        border-bottom:1px solid #ddd;
    }
    .footer-menu li div.about-div a:last-child{
        border-top:1px solid #ddd;
    }
    .social-icons{
        border: 1px solid #fff;
        padding: 15px 0;
        display: flex;
        justify-content: space-between;
    }
    .social-icons i{
        color: #fff;
        font-size: 20px;
        padding: 0 30px;
    }
    textarea {
        background: #fff !important;
        border: 1px solid #dbdbdb !important;
        padding-left: 15px !important;
    }
    .register-page-form input{
        padding-left: 15px !important;
    }
    .footer-menu li a{
        margin-left: 15px;
    }

    .singe-footer-newsletter, .single-footer-contact{background:rgba(237,30,40, .8);}
</style>
<footer class="footer wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.5s">
            <div class="footer-top">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-12">
                            <div class="map-area">
                                <div id="contact-map" class="map-area">
                                    <div id="googleMa" style="width:100%;height:365px;">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15221.263675424192!2d78.4059276!3d17.4924264!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdcd14412a1ec2167!2sCRK%20Infra%20Projects!5e0!3m2!1sen!2sin!4v1619008285835!5m2!1sen!2sin" width="100%" height="365" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                                <!--Footer desc start-->
                                <div class="footer-desc">
                                    <div class="singe-footer-newsletter">
                                        <div class="footer-logo">
                                            <div class="f-logo">
                                                <a href="#"><img src="<?php echo base_url() ?>assests/images/logo/crk_logo.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="newsletter">
                                            <p>CRK Infra Projects is one of the well-known real estate developers in Telangana (T.S) and Andhra Pradesh (A.P). We have 20+ years of significant business experience in real estate.</p>
                                            <!--<div class="newsletter-form">
                                                <form action="#">
                                                    <input type="text" placeholder="Email for Newsletter">
                                                     <button type="submit"><i class="fa fa-paper-plane" ></i></button>
                                                </form>
                                            </div>-->
                                            <div class="newsletter-form">
                                                <div id="mc_embed_signup_scroll">
                                                    <div class="social-icons">
                                                        <a href="javascript:void(0)"><i class="fa fa-facebook-square"></i></a>
                                                        <a href="javascript:void(0)"><i class="fa fa-youtube-square"></i></a>
                                                        <a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
                                                        <a href="javascript:void(0)"><i class="fa fa-twitter-square"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="single-footer-contact">
                                        <div class="contact-head">
                                            <h2>CONTACT US</h2>
                                            <!-- <p>Haven the best theme for elit, sed <br>do eiusmod tempor dolor sit </p> --><br>
                                        </div>
                                        <div class="f-contact-details">
                                            <div class="single-contact-list">
                                                <div class="contact-icon">
                                                    <img src="<?php echo base_url() ?>assests/img/icon/c-1.png" alt="">
                                                </div>
                                                <div class="contact-text">
                                                    <p>Flat No.207,</p>
                                                    <p>Chayamina Enclave, </p>
                                                    <p>KPHB, Kukatpally,</p>
                                                    <p>Beside Nexa Showroom,</p>
                                                    <p>  Hyderabad 5000072</p>
                                                </div>
                                            </div>
                                            <div class="single-contact-list">
                                                <div class="contact-icon">
                                                    <img src="<?php echo base_url() ?>assests/img/icon/c-2.png" alt="">
                                                </div>
                                                <div class="contact-text">
                                                    <p>Telephone : +91 9912168992</p>
                                                    <!-- <p>Telephone : +012 745 674 152</p> -->
                                                </div>
                                            </div>
                                            <div class="single-contact-list">
                                                <div class="contact-icon">
                                                    <img src="<?php echo base_url() ?>assests/img/icon/c-3.png" alt="">
                                                </div>
                                                <div class="contact-text">
                                                    <p>Email : contact@crkinfraprojects.com</p>
                                                    <p>Web : www.crkinfraprojects.com/</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Footer desc end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer bottom start-->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="<?php echo base_url() ?>index">Home</a></li>
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        About Us <i class="fa fa-caret-up"></i>
                                      </a>
                                      <div class="dropdown-menu about-div">
                                        <a class="dropdown-item" href="<?php echo base_url() ?>about-us">Company Profile</a>
                                        <a class="dropdown-item" href="<?php echo base_url() ?>leadership">Leadership</a>
                                        <a class="dropdown-item" href="<?php echo base_url() ?>strengths-values">Strengths & Values</a>
                                      </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Projects <i class="fa fa-caret-up"></i>
                                      </a>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo base_url() ?>ongoing-project">Ongoing Projects</a>
                                        <a class="dropdown-item" href="<?php echo base_url() ?>completed-projects">Completed Projects</a>
                                        <a href="<?php echo base_url() ?>marble-suppliers">Marble Suppliers</a>
                                        <a href="<?php echo base_url() ?>modern-interiors">Modern Interiors</a>
                                      </div>
                                    </li>
                                    <!-- <li><a href="blog">BLog </a></li> -->
                                    <li><a href="<?php echo base_url() ?>gallery">Gallery </a></li>
                                    <li><a href="<?php echo base_url() ?>downloads">Downloads</a></li>
                                    <li><a href="<?php echo base_url() ?>careers"> Careers</a></li>
                                    <li><a href="<?php echo base_url() ?>blogs"> Blogs</a></li>
                                    <li><a href="<?php echo base_url() ?>contact-us">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="copyright">
                                <p>&copy; 
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> 
                                    <strong> CRK Infra Projects </strong></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer bottom end-->
        </footer>
    
    <!-- quick view start -->
    
    

    <!--=================================
         style-customizer start  -->

    <!--<div class="style-customizer closed" style="display: none;">-->

    <!--    <div class="buy-button">-->
    <!--        <a href="#" class="customizer-logo"><img src="<?php echo base_url() ?>assests/img/logo/logo.png" alt="Theme Logo"></a>-->
    <!--        <a class="opener" href="#"><i class="fa fa-cog fa-spin"></i></a>-->
    <!--        <div class="buy-now">-->
    <!--            <a class="button button-border" href="#">Buy now!</a>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="content-chooser">-->
    <!--        <h3>Layout Options</h3>-->
    <!--        <p>Which layout option you want to use?</p>-->
    <!--        <ul class="layoutstyle">-->
    <!--            <li class="wide-layout selected" data-style="wide" title="wide"> Wide </li>-->
    <!--            <li class="boxed-layout" data-style="boxed" title="boxed"> Boxed </li>-->
    <!--        </ul>-->
    <!--        <h3>Color Schemes</h3>-->
    <!--        <p>Which theme color you want to use? Select from here.</p>-->
    <!--        <ul class="styleChange">-->
    <!--            <li class="skin-default selected" title="skin-default" data-style="skin-default"></li>-->
    <!--            <li class="color-1" title="color-1" data-style="color-1"></li>-->
    <!--            <li class="color-2" title="color-2" data-style="color-2"></li>-->
    <!--            <li class="color-3" title="color-3" data-style="color-3"></li>-->
    <!--            <li class="color-4" title="color-4" data-style="color-4"></li>-->
    <!--            <li class="color-5" title="color-5" data-style="color-5"></li>-->
    <!--            <li class="color-6" title="color-6" data-style="color-6"></li>-->
    <!--            <li class="color-7" title="color-7" data-style="color-7"></li>-->
    <!--            <li class="color-8" title="color-8" data-style="color-8"></li>-->
    <!--            <li class="color-9" title="color-9" data-style="color-9"></li>-->
    <!--            <li class="color-10" title="color-10" data-style="color-10"></li>-->
    <!--            <li class="color-11" title="color-11" data-style="color-11"></li>-->
    <!--        </ul>-->

    <!--        <h3>Background Patterns</h3>-->
    <!--        <p>Which background pattern you want to use?</p>-->
    <!--        <ul class="patternChange clearfix">-->
    <!--            <li class="pattern-0" data-style="pattern-0" title="white background"></li>-->
    <!--            <li class="pattern-1" data-style="pattern-1" title="pattern-1"></li>-->
    <!--            <li class="pattern-2" data-style="pattern-2" title="pattern-2"></li>-->
    <!--            <li class="pattern-3" data-style="pattern-3" title="pattern-3"></li>-->
    <!--            <li class="pattern-4" data-style="pattern-4" title="pattern-4"></li>-->
    <!--            <li class="pattern-5" data-style="pattern-5" title="pattern-5"></li>-->
    <!--            <li class="pattern-6" data-style="pattern-6" title="pattern-6"></li>-->
    <!--            <li class="pattern-7" data-style="pattern-7" title="pattern-7"></li>-->
    <!--        </ul>-->
    <!--        <h3>Background img</h3>-->
    <!--        <p>Which background image you want to use?</p>-->
            
    <!--        <ul class="resetAll">-->
    <!--            <li><a class="button button-border button-reset" href="#">Reset All</a></li>-->
    <!--        </ul>-->
    <!--    </div>-->
    <!--</div>-->

    <!-- style-customizer End -->


    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- Map js code here -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj9b_nyz33KEaocu6ZOXRgqwwUZkDVEAw"></script>
    <script src="<?php echo base_url() ?>assests/js/map.js"></script>

    <!-- All jquery file included here -->
    <script src="<?php echo base_url() ?>assests/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="<?php echo base_url() ?>assests/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assests/js/jquery.nivo.slider.pack.js"></script>
    <script src="<?php echo base_url() ?>assests/js/waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>assests/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url() ?>assests/js/ajax-mail.js"></script>
    <script src="<?php echo base_url() ?>assests/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>assests/js/jquery.magnific-popup.js"></script>
    <script src="<?php echo base_url() ?>assests/js/style-customizer.js"></script>
    <script src="<?php echo base_url() ?>assests/js/plugins.js"></script>
    <script src="<?php echo base_url() ?>assests/js/main.js"></script>
   

  
</body>
</html>

