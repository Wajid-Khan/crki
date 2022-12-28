<title>CRK Infra Projects</title>
<?php $this->load->view('header'); ?>
<style>
.slide1-text .contact-us a {
    background: #FBAB55 none repeat scroll 0 0;
}
.property .property__inner .property__info li 
{
    list-style: disc;
    padding: 5px 0;
}
.property .property__inner .property__info ul
{
    margin-left: 15px;
}
.property .property__inner .property__info h5
{
    font-size: 16px;
}
.feature{
    padding: 10px 10px 30px 10px;
}
.feature h3{
    color: #111;
    font-size: 26px;
    line-height: 20px;
    margin-bottom: 18px;
    /*text-shadow: 1px 1px 3px #ED1E28;*/
}
.archive .archive-list ul li{
    list-style: disc;
    margin-left: 15px;
}
.categories-list ul li, .archive-list li{
    border-bottom: none;
}
.fun-fact{
    padding: 70px 0;
}
.amenities .amenities-list li{
    width: 100%;
    color: #111;
    /*text-shadow: 1px 1px 3px #ED1E28;*/
}

.amenities-list {
     height: auto; 
     background: transparent;;
    overflow: hidden;
    padding-bottom: 10px;
    padding-left: 20px;
    padding-top: 0px;
}
.overlay-blue:before{
    position: absolute;
    content: "";
    background: rgba(237,30,40, .8);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}
.feature::before{
    position: absolute;
    content: "";
    background: rgba(251,170,85, 1);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}
.pt-90{
    padding-top:90px;
}
.pb-70{
    padding-bottom: 70px;
}
.welcome-haven-img h3 {
    color: #ED1E28;
}
.welcome-pd a, .welcome-haven-img a {
    color: #ED1E28;
}
.overlay-orange{
    position:relative;
    background:url(https://wallpaperaccess.com/full/1899342.jpg);
    background-size: cover;
}
.overlay-orange:before {
    position: absolute;
    content: "";
    background: rgba(255,255,255, .9);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}
.project-overlay{
    position:relative;
    background:url(https://wallpaperaccess.com/full/1899342.jpg);
    background-size: cover;
    background-attachment:fixed;
}
.project-overlay:before {
    position: absolute;
    content: "";
    background: rgba(255,255,255, .9);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}
</style>


        <!--slider section start-->
        <div class="slider-container overlay">
            <!-- Slider Image -->
            <div id="mainSlider" class="nivoSlider slider-image">
                <img src="<?php echo base_url() ?>assests/images/slide2.jpeg" alt="Grand Arena" title="#htmlcaption1" />
                <img src="<?php echo base_url() ?>assests/images/slide1.jpeg" alt="Grand Arena" title="#htmlcaption2" />
                <img src="<?php echo base_url() ?>assests/images/slide3.jpeg" alt="Grand Arena" title="#htmlcaption4" />
                <img src="<?php echo base_url() ?>assests/img/slider/1.jpg" alt="Haritha Vanam" title="#htmlcaption3" />
                <!-- <img src="img/slider/3.jpg" alt="" title="#htmlcaption6" /> -->
                <img src="<?php echo base_url() ?>assests/img/slider/3.jpg" alt="Fortune heights" title="#htmlcaption5" />
            </div>

            <!-- Slider Caption 1 -->
            <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                <div class="display-table">
                    <div class="display-tablecell">
                        <div class="container ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slide1-text">
                                        <div class="middle-text">
                                            <div class="title-1 wow fadeUp" data-wow-duration="1.2s"
                                                data-wow-delay="0.1s">
                                                <h3>CRK INFRA PROJECTS</h3>
                                            </div>
                                            <div class="title-2 wow fadeUp" data-wow-duration="1.3s"
                                                data-wow-delay="0.2s">
                                                <!-- <h1><span>CRK</span> INFRA PPROJECTS</h1> -->
                                                <h1><span>GRAND</span> ARENA PROJECT</h1>
                                            </div>
                                            <div class="desc wow fadeUp" data-wow-duration="1.4s" data-wow-delay="0.4s">
                                            </div>
                                            <div class="contact-us wow fadeUp" data-wow-duration="1.5s"
                                                data-wow-delay=".5s">
                                                <a href="<?php echo base_url() ?>contact-us">CONTACT US</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Caption 1 -->
            <!-- Slider Caption 2 -->
            <!-- <div id="htmlcaption2" class="nivo-html-caption slider-caption-1">
                <div class="display-table">
                    <div class="display-tablecell">
                        <div class="container ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slide1-text">
                                        <div class="middle-text">
                                            <div class="title-1 wow fadeUp" data-wow-duration="1.2s"
                                                data-wow-delay="0.1s">
                                                <!-- <h3>CRK INFRA PPROJECTS</h3> -->
                                            </div>
                                            <div class="title-2 wow fadeUp" data-wow-duration="1.3s"
                                                data-wow-delay="0.2s">
                                                <!-- <h1><span>CRK</span> CRK INFRA PPROJECTS</h1> -->
                                            </div>
                                            <div class="desc wow fadeUp" data-wow-duration="1.4s" data-wow-delay="0.4s">
                                                <!-- <p>Lorem consectetur adipiscing elit, sed do eiusmod tempor dolor sit
                                                    amet<br> contetur adipiscing elit, sed do eiusmod tempor incididunt
                                                </p> -->
                                            </div>
                                            <div class="contact-us wow fadeUp" data-wow-duration="1.5s"
                                                data-wow-delay=".5s">
                                                <!-- <a href="contact-us.php">CONTACT US</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Slider Caption 2 -->
            <!-- Slider Caption 3 -->
            <div id="htmlcaption3" class="nivo-html-caption slider-caption-1" >
                <div class="display-table">
                    <div class="display-tablecell">
                        <div class="container ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slide1-text">
                                        <div class="middle-text">
                                            <div class="title-1 wow fadeUp" data-wow-duration="1.2s"
                                                data-wow-delay="0.1s">
                                                <h3>CRK INFRA PROJECTS</h3>
                                            </div>
                                            <div class="title-2 wow fadeUp" data-wow-duration="1.3s"
                                                data-wow-delay="0.2s">
                                                <h1><span>HARITHA</span> VANAM</h1>
                                            </div>
                                            <div class="desc wow fadeUp" data-wow-duration="1.4s" data-wow-delay="0.4s">
                                            </div>
                                            <div class="contact-us wow fadeUp" data-wow-duration="1.5s"
                                                data-wow-delay=".5s">
                                                <a href="<?php echo base_url() ?>contact-us">CONTACT US</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--slider section end-->
            <!-- Slider Caption 3 -->
            <div id="htmlcaption4" class="nivo-html-caption slider-caption-1" >
                <div class="display-table">
                    <div class="display-tablecell">
                        <div class="container ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slide1-text">
                                        <div class="middle-text">
                                            <div class="title-1 wow fadeUp" data-wow-duration="1.2s"
                                                data-wow-delay="0.1s">
                                                <!-- <h3>CRK INFRA PPROJECTS</h3> -->
                                            </div>
                                            <div class="title-2 wow fadeUp" data-wow-duration="1.3s"
                                                data-wow-delay="0.2s">
                                                <!-- <h1><span>Fortune</span> Height</h1> -->
                                            </div>
                                            <div class="desc wow fadeUp" data-wow-duration="1.4s" data-wow-delay="0.4s">
                                            </div>
                                            <div class="contact-us wow fadeUp" data-wow-duration="1.5s"
                                                data-wow-delay=".5s">
                                                <!-- <a href="contact-us.php">CONTACT US</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--slider section end-->
            <!-- Slider Caption 3 -->
            <div id="htmlcaption5" class="nivo-html-caption slider-caption-1" >
                <div class="display-table">
                    <div class="display-tablecell">
                        <div class="container ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slide1-text">
                                        <div class="middle-text">
                                            <div class="title-1 wow fadeUp" data-wow-duration="1.2s"
                                                data-wow-delay="0.1s">
                                                <h3>CRK INFRA PROJECTS</h3>
                                            </div>
                                            <div class="title-2 wow fadeUp" data-wow-duration="1.3s"
                                                data-wow-delay="0.2s">
                                                <h1><span>FORTUNE</span> HEIGHTS</h1>
                                            </div>
                                            <div class="desc wow fadeUp" data-wow-duration="1.4s" data-wow-delay="0.4s">
                                            </div>
                                            <div class="contact-us wow fadeUp" data-wow-duration="1.5s"
                                                data-wow-delay=".5s">
                                                <a href="<?php echo base_url() ?>contact-us">CONTACT US</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--slider section end-->
            <!-- Slider Caption 3 -->
            <div id="htmlcaption6" class="nivo-html-caption slider-caption-1" >
                <div class="display-table">
                    <div class="display-tablecell">
                        <div class="container ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slide1-text">
                                        <div class="middle-text">
                                            <div class="title-1 wow fadeUp" data-wow-duration="1.2s"
                                                data-wow-delay="0.1s">
                                                <!-- <h3>CRK INFRA PPROJECTS</h3> -->
                                            </div>
                                            <div class="title-2 wow fadeUp" data-wow-duration="1.3s"
                                                data-wow-delay="0.2s">
                                                <!-- <h1><span>Fortune</span> Height</h1> -->
                                            </div>
                                            <div class="desc wow fadeUp" data-wow-duration="1.4s" data-wow-delay="0.4s">
                                            </div>
                                            <div class="contact-us wow fadeUp" data-wow-duration="1.5s"
                                                data-wow-delay=".5s">
                                                <!-- <a href="contact-us.php">CONTACT US</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--slider section end-->

        <!--Welcome Haven section-->
        <div class="welcome-haven bg-1 overlay-orange" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 fadeInLeft wow welcome-pd mb-3" data-wow-delay="0.2s">
                        <div class="welcome-title">
                            <h3 class="title-1">WELCOME TO <span>CRK INFRA PROJECTS</span></h3>
                        </div>
                        <div class="welcome-content">
                        	<P><span>CRK</span> Infra Projects is one of the well-known real estate developers in Telangana (T.S) and Andhra Pradesh (A.P). We have 20+ years of significant business experience in real estate.</P>
                        	<p>We have started working from the scratch, we know in and out about the real estate industry. We are the most trusted real estate professionals for customers in for over 20 years.</p>
                        </div>
                        <a href="<?php echo base_url() ?>about-us">Read More <i class="fa fa-angle-double-right"></i></a>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <div class="welcome-haven-img fadeInRight wow text-left" data-wow-delay="0.2s">
                            <img src="<?php echo base_url() ?>assests/images/vision_no_transparent.png" alt="Vision" style="width: 45%;margin-bottom: 15px;">
                            <h3>Vision</h3>
                            <!-- <p>To provide the highest level of quality construction services to our customers at fair and reasonable prices.</p> -->
                            <p>We strive for the highest degree of professionalism and transparency in our dealings with vendors, subcontractors and consumers to provide an honest and helpful working environment for our employees.</p>
                            <a href="<?php echo base_url() ?>about-us">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="welcome-haven-img fadeInRight wow text-left" data-wow-delay="0.2s">
                            <img src="<?php echo base_url() ?>assests/images/mission.png" alt="Mission" style="width: 40%;margin-bottom: 15px;">
                            <h3>Mission</h3>
                            <p>To offer the best value for money to prospective customers by leading them to the most valuable property while maintaining transparency, fairness, and quality.</p>
                            <a href="<?php echo base_url() ?>about-us">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Welcome Haven section end-->

        <!-- Property for sale section start -->
        <!-- <div class="home-10-property-area fadeInUp wow mb-88 mb-lg-68 mb-md-48 mb-sm-18" data-wow-delay="0.2s"> -->
        <div class="home-10-property-area pt-90" >
            <div class="container">
                <div class="row mb-30">
                    <div class="col-12">
                        <div class="section-title-2">
                            <h3>
                                <span class="active-title wow fadeInDown" data-wow-delay="0.2s">CRK Infra</span> <span class="inactive-title" style="color: #F9C322">Projects</span>
                                <!-- <span class="separator">/</span>
                                <span class="inactive-title">Property for rent</span> -->
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="property wow fadeInDown" data-wow-delay="0.2s">
                            <div class="property__inner">
                                <figure class="property__image">
                                    <a href="<?php echo base_url() ?>grand-arena-project" class="d-block" title="GRAND ARENA LAYOUT">
                                        <img src="<?php echo base_url() ?>assests/images/ga-layout_new.png" alt="GRAND ARENA LAYOUT" title="GRAND ARENA LAYOUT" class="w-100" style="height: 194.5px;">
                                    </a>
                                </figure>
                                <div class="property__info text-left">
                                    <h3 class="property__title text-center">GRAND ARENA</h3>
                                    <div class="contact-us">
                                        <a href="<?php echo base_url() ?>grand-arena-project"  class="btn btn-warning btn-sm text-white" title="GRAND ARENA">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="property wow fadeInDown" data-wow-delay="0.3s">
                            <div class="property__inner">
                                <figure class="property__image">
                                    <a href="<?php echo base_url() ?>haritha-vanam-project" class="d-block" title="HARITHA VANAM LAYOUT">
                                        <img src="<?php echo base_url() ?>assests/images/layout1.jpg" alt="HARITHA VANAM LAYOUT" title="HARITHA VANAM LAYOUT" class="w-100">
                                    </a>
                                </figure>
                                <div class="property__info text-left">
                                    <h3 class="property__title text-center">HARITHA VANAM</h3>
                                    <div class="contact-us">
                                        <a href="<?php echo base_url() ?>haritha-vanam-project"  class="btn btn-warning btn-sm text-white" title="HARITHA VANAM">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="property wow fadeInDown" data-wow-delay="0.4s">
                            <div class="property__inner">
                                <figure class="property__image">
                                    <a href="<?php echo base_url() ?>fortune-height-project" class="d-block" title="FORTUNE HEIGHTS LAYOUT">
                                        <img src="<?php echo base_url() ?>assests/images/fh-layout.jpeg" alt="FORTUNE HEIGHTS LAYOUT" title="FORTUNE HEIGHTS LAYOUT" class="w-75" style="display: block;margin: auto;height: 194.5px;">
                                    </a>
                                </figure>
                                <div class="property__info text-left">
                                    <h3 class="property__title text-center">FORTUNE HEIGHTS</h3>
                                    <div class="contact-us">
                                        <a href="<?php echo base_url() ?>fortune-height-project"  class="btn btn-warning btn-sm text-white" title="FORTUNE HEIGHTS">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="property wow fadeInDown" data-wow-delay="0.4s">
                            <div class="property__inner">
                                <figure class="property__image">
                                    <a href="<?php echo base_url() ?>ramchandra-divine-county" class="d-block" title="JP DARGAH VENTURE">
                                        <img src="<?php echo base_url() ?>assests/images/ramchandra/feature-image.png" alt="JP DARGAH VENTURE" title="RAMCHANDRA DIVINE COUNTY LAYOUT" class="w-100" style="width:100%">
                                    </a>
                                </figure>
                                <div class="property__info text-left">
                                    <h3 class="property__title text-center">RAMCHANDRA DIVINE COUNTYE</h3>
                                    <div class="contact-us">
                                        <a href="<?php echo base_url() ?>ramchandra-divine-county"  class="btn btn-warning btn-sm text-white" title="RAMCHANDRA DIVINE COUNTY">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property for sale section end -->

        <!-- Featured Property section start -->
        <section class="featured-section pt-90 pb-70 ">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="featured-property h-100 wow fadeInLeft" data-wow-delay="0.9s">
                            <div class="featured-property__details">
                                <h2 class="featured-property__title">Grand Arena Project</h2>
                                <address class="featured-property__address py-3">A Premium Gated Community Open Plots @Maheshwaram (Beside Electronic City)</address>
                            </div><br><br>
                            <div class="featured-property__tab" data-wow-delay="0.9s">
                                <ul class="nav nav-tabs justify-content-center" id="featuredProTab" role="tablist">
                                    <li class="nav-item wow fadeInLeft" style="margin-bottom: 10px;">
                                        <a class="nav-link active" id="featured-tab-1" data-toggle="tab"
                                            href="#featured-1" role="tab" aria-controls="featured-1"
                                            aria-selected="true" title="Swimming Pool">
                                            <img src="<?php echo base_url() ?>assests/images/grand-arena/slide2-small.jpg" alt="Swimming Pool" title="Swimming Pool" >
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInUp" style="margin-bottom: 10px;">
                                        <a class="nav-link" id="featured-tab-2" data-toggle="tab" href="#featured-2"
                                            role="tab" aria-controls="featured-2" aria-selected="false" title="Tennis Court">
                                            <img src="<?php echo base_url() ?>assests/images/grand-arena/slide1-small.jpg" alt="Tennis Court">
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInRight" style="margin-bottom: 10px;">
                                        <a class="nav-link" id="featured-tab-3" data-toggle="tab" href="#featured-3"
                                            role="tab" aria-controls="featured-3" aria-selected="false" title="Cricket Stadium">
                                            <img src="<?php echo base_url() ?>assests/images/grand-arena/slide3-small.jpg" alt="Cricket Stadium">
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInRight" style="margin-bottom: 10px;">
                                        <a class="nav-link" id="featured-tab-4" data-toggle="tab" href="#featured-4"
                                            role="tab" aria-controls="featured-4" aria-selected="false" title="Cottages">
                                            <img src="<?php echo base_url() ?>assests/images/grand-arena/slide4-small.jpg" alt="Cottages" >
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInRight" style="margin-bottom: 10px;">
                                        <a class="nav-link" id="featured-tab-5" data-toggle="tab" href="#featured-5"
                                            role="tab" aria-controls="featured-5" aria-selected="false" title="Conference Area">
                                            <img src="<?php echo base_url() ?>assests/images/grand-arena/slide5-small.jpg" alt="Conference Area" >
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInRight" style="margin-bottom: 10px;">
                                        <a class="nav-link" id="featured-tab-6" data-toggle="tab" href="#featured-6"
                                            role="tab" aria-controls="featured-6" aria-selected="false" title="Stadium Sitting Area">
                                            <img src="<?php echo base_url() ?>assests/images/grand-arena/slide6-small.jpg" alt="Stadium Sitting Area" >
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInRight" style="margin-bottom: 10px;">
                                        <a class="nav-link" id="featured-tab-7" data-toggle="tab" href="#featured-7"
                                            role="tab" aria-controls="featured-7" aria-selected="false" title="Billiards">
                                            <img src="<?php echo base_url() ?>assests/images/grand-arena/slide7-small.jpg" alt="Billiards" >
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInRight" style="margin-bottom: 10px;">
                                        <a class="nav-link" id="featured-tab-8" data-toggle="tab" href="#featured-8"
                                            role="tab" aria-controls="featured-8" aria-selected="false" title="Indoor Game Area">
                                            <img src="<?php echo base_url() ?>assests/images/grand-arena/slide8-small.jpg" alt="Indoor Game Area" >
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInRight" style="margin-bottom: 10px;">
                                        <a class="nav-link" id="featured-tab-9" data-toggle="tab" href="#featured-9"
                                            role="tab" aria-controls="featured-9" aria-selected="false" title="Cottages Bed Room">
                                            <img src="<?php echo base_url() ?>assests/images/grand-arena/slide9-small.jpg" alt="Cottages Bed Room" >
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInRight" style="margin-bottom: 10px;">
                                        <a class="nav-link" id="featured-tab-10" data-toggle="tab" href="#featured-10"
                                            role="tab" aria-controls="featured-10" aria-selected="false" title="Cottages Bed Room">
                                            <img src="<?php echo base_url() ?>assests/images/grand-arena/photo14-small.jpg" alt="Cottages Bed Room" >
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-property__content h-100 wow fadeInRight" data-wow-delay="0.9s">
                            <div class="tab-content" id="featuredProTabContent">
                                <div class="tab-pane fade show active" id="featured-1" role="tabpanel"
                                    aria-labelledby="featured-tab-1">
                                    <figure class="featured-property__image">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide2.jpeg" alt="Swimming Pool">
                                        <figcaption class="featured-property__caption">Swimming Pool
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-pane fade" id="featured-2" role="tabpanel"
                                    aria-labelledby="featured-tab-2">
                                    <figure class="featured-property__image">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide1.jpeg" alt="Tennis Court">
                                        <figcaption class="featured-property__caption">Tennis Court
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-pane fade" id="featured-3" role="tabpanel"
                                    aria-labelledby="featured-tab-3">
                                    <figure class="featured-property__image">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide3.jpeg" alt="Hyderabad Cricket Club">
                                        <figcaption class="featured-property__caption">Hyderabad Cricket Club (HCC)
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-pane fade" id="featured-4" role="tabpanel"
                                    aria-labelledby="featured-tab-4">
                                    <figure class="featured-property__image">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide4.jpeg" alt="Cottages">
                                        <figcaption class="featured-property__caption">Cottages
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-pane fade" id="featured-5" role="tabpanel"
                                    aria-labelledby="featured-tab-5">
                                    <figure class="featured-property__image">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide5.jpeg" alt="Conference Area">
                                        <figcaption class="featured-property__caption">Conference Area
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-pane fade" id="featured-6" role="tabpanel"
                                    aria-labelledby="featured-tab-6">
                                    <figure class="featured-property__image">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide6.jpeg" alt="Stadium Sitting Area">
                                        <figcaption class="featured-property__caption">Stadium Sitting Area
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-pane fade" id="featured-7" role="tabpanel"
                                    aria-labelledby="featured-tab-7">
                                    <figure class="featured-property__image">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide7.jpeg" alt="Billiards">
                                        <figcaption class="featured-property__caption">Billiards
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-pane fade" id="featured-8" role="tabpanel"
                                    aria-labelledby="featured-tab-8">
                                    <figure class="featured-property__image">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide8.jpeg" alt="Indoor Game Area">
                                        <figcaption class="featured-property__caption">Indoor Game Area
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-pane fade" id="featured-9" role="tabpanel"
                                    aria-labelledby="featured-tab-9">
                                    <figure class="featured-property__image">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide9.jpeg" alt="Cottage Bed Room">
                                        <figcaption class="featured-property__caption">Cottage Bed Room
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-pane fade" id="featured-10" role="tabpanel"
                                    aria-labelledby="featured-tab-10">
                                    <figure class="featured-property__image">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/photo14.jpg" alt="Clubhouse Entrance">
                                        <figcaption class="featured-property__caption">Clubhouse Entrance
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Property section end -->

        <!--Fun fact area start-->
        <div class="fun-fact project-overlay feature pt-90" style="padding-bottom: 40px;">
            <div class="container">
                <div class="row">
                    <div class="col-12 pb-5">
                        <h3 class="text-center wow fadeInUp" data-wow-delay="0.1s" style="color: #ED1E28">PROJECT FACILITIES</h3>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">&nbsp;</div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="amenities">
                            <div class="amenities-list">
                                <ul>
                                    <li class="wow fadeInLeft" data-wow-delay="0.1s"><i class="fa fa-check-square-o"></i><span>Proposed HMDA Layout</span></li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.2s"><i class="fa fa-check-square-o"></i><span>100% Vaastu</span></li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-check-square-o"></i><span>150’, 60’, 40’, and 30’, Feet Black Top Roads</span></li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.4s"><i class="fa fa-check-square-o"></i><span>Underground Drainage System</span></li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.5s"><i class="fa fa-check-square-o"></i><span>Parks with Landscaping</span></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="images/hr-layout-transparent.png" alt="" width="450" style="display: block;margin: auto;">
                    </div> -->
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="amenities">
                            <div class="amenities-list">
                                <ul>
                                    <li class="wow fadeInRight" data-wow-delay="0.1s"><i class="fa fa-check-square-o"></i> Modern Modular Street Lights<span></span></li>
                                    <li class="wow fadeInRight" data-wow-delay="0.2s"><i class="fa fa-check-square-o"></i> Water Harvesting Pits<span></span></li>
                                    <li class="wow fadeInRight" data-wow-delay="0.3s"><i class="fa fa-check-square-o"></i> Bank Loan facility available<span></span></li>
                                    <li class="wow fadeInRight" data-wow-delay="0.4"><i class="fa fa-check-square-o"></i> Entire layout surrounded by compound wall with Elegant entrance arch<span></span></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Fun fact area end-->

        <!--Fun fact area start-->
        <div class="fun-fact overlay-blue">
            <div class="container">
                <div class="row" style="width: 70%;margin: auto;">
                    <div class="col-md-4 col-12">
                        <div class="singe-fun-fact  f-left">
                            <div class="fun-head">
                                <div class="fun-icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="fun-count">
                                    <h3 class="counter">
                                        99
                                    </h3>
                                </div>
                            </div>
                            <div class="fun-text">
                                <p>Complete Project</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="singe-fun-fact middle">
                            <div class="fun-head">
                                <div class="fun-icon">
                                    <i class="fa fa-key"></i>
                                </div>
                                <div class="fun-count">
                                    <h3 class="counter">
                                        1999
                                    </h3>
                                </div>
                            </div>
                            <div class="fun-text">
                                <p>Plots Sold</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="singe-fun-fact text-center middle-2">
                            <div class="fun-head">
                                <div class="fun-icon">
                                    <i class="zmdi zmdi-mood"></i>
                                </div>
                                <div class="fun-count">
                                    <h3 class="counter">
                                        1899    
                                    </h3>
                                </div>
                            </div>
                            <div class="fun-text">
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Fun fact area end-->

        <!--Happy client section start-->
        <div class="happy-client pt-90 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <h3>HERE IS THE REVIEW OF OUR HAPPY CLIENTS</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="happy-client-list owl-carousel">
                            <div class="item">
                                <div class="client-reveiw">
                                    <div class="review-quote">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="review-desc">
                                        <p>Bought a plot from CRK infra, within just one and half year sold the property for double amount. Great value and excellent service.</p>
                                    </div>
                                    <div class="happy-client-name">
                                        <h6>Mukesh</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-reveiw">
                                    <div class="review-quote">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="review-desc">
                                        <p>Good deals here, got my investment doubled in the span of 2 years, great follow up by agents.</p>
                                    </div>
                                    <div class="happy-client-name">
                                        <h6>Anil Singh</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-reveiw">
                                    <div class="review-quote">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="review-desc">
                                        <p>I have purchased an open plot @CRK Infra and had a good experience with team, they are very reliable and trustworthy developers. the complete venture located with greenery and good living conditions.</p>
                                    </div>
                                    <div class="happy-client-name">
                                        <h6>Balraj</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-reveiw">
                                    <div class="review-quote">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="review-desc">
                                        <p>I was surprised to find that my money grew at such a fast rate by property in a year.</p>
                                    </div>
                                    <div class="happy-client-name">
                                        <h6>Vamshi</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-reveiw">
                                    <div class="review-quote">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="review-desc">
                                        <p>Best deals here, I bought a plot through CRK, now I got my investment doubled in the 2 years, Very good service.</p>
                                    </div>
                                    <div class="happy-client-name">
                                        <h6>Sai Kiran</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-reveiw">
                                    <div class="review-quote">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="review-desc">
                                        <p>Professional people, liked the frankness.</p>
                                    </div>
                                    <div class="happy-client-name">
                                        <h6>Prasand</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-reveiw">
                                    <div class="review-quote">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="review-desc">
                                        <p>Good place to invest.</p>
                                    </div>
                                    <div class="happy-client-name">
                                        <h6>Mallikarjuna</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-reveiw">
                                    <div class="review-quote">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="review-desc">
                                        <p>Perfect Venture to buy a Dream Home</p>
                                    </div>
                                    <div class="happy-client-name">
                                        <h6>Manish</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
        <!--Happy client section end-->

    

       
<!-- Enquery Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="quick-view" style="padding-right:0px">
        <div class="modal-dialog" role="document" style="width:auto;">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="register-page-form">
                        <div data-dismiss="modal" class="modal-header">
                            <span>x</span>
                        </div>
                        <div class="account-title">
                            <h5>Enquiry Now</h5>
                        </div>
                        <form id="contact_form" class="contact-form" method="post" onSubmit="return_false">
                            <div>
                                <input type="text" class="form-control" placeholder="Full Name" id="name" name="name">
                            </div>
                            <div>
                                <input type="text" class="form-control" placeholder="Email" id="email" name="email">
                            </div>
                            <div>
                                <input type="text" maxlength="10" class="form-control" onkeypress="return isNumberKey(event)" placeholder="Phone Number" id="phone" name="phone">
                            </div>
                            <div>
                                <!--<input type="password" placeholder="Password">-->
                                <textarea class="form-control" placeholder="Message" id="message" name="message"></textarea>
                            </div>
                            <div class="login">
                                <button type="button" id="btn_submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('footer'); ?>
    <script>
$(document).ready(function(){
    $('#btn_submit').on("click", function(){
        var user_name = $('#name').val();
        var user_email = $('#email').val();
        var user_number = $('#phone').val();
        var user_message = $('#message').val();
       
        if(user_name != '' || user_email != '' || user_number != '' || user_message != '')
        {
            if(user_name == '')
            {
                alert('Please enter your name');
                $('#name').focus();
                return false;
            }
            if(user_email == '')
            {
                alert('Please enter your email');
                $('#email').focus();
                return false;
            }
            if(user_email != '')
            {
                var email_resp1 = validateEmail(user_email);
                if(email_resp1 == false)
                {
                    alert('Please enter the valid email address');
                    $('#email').focus();
                    return false;
                }
            }
            if(user_number == '')
            {
                alert('Please enter the phone number');
                $('#phone').focus();
                return false;
            }
            if(user_number.length != 10)
            {
                alert('Please enter the valid phone number');
                $('#phone').focus();
                return false;
            }

            if(user_message == '')
            {
                alert('Please enter the message');
                $('#message').focus();
                return false;
            }
                $.ajax({
                    url : '<?php echo base_url() ?>home/send_mail',
                    type : 'POST',
                    data : {name:user_name, email:user_email, phone:user_number, message:user_message},
                    datatype: 'html',
                    success : function(data){
                        alert(data);
                        $('#name').val('');
                        $('#email').val('');
                        $('#phone').val('');
                        $('#message').val('');
                    
                    }
                });
            
        }
        else
        {
            alert('Please fill the form...');
            $('#name').focus();
            return false;
        }
        
    });
});
    
function validateEmail(email){ 
    var re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
    return re.test(email); 
}
    
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
    <!-- Enquery Modal -->

