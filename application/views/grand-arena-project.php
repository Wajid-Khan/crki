<title>
    Grand Arena Project
</title>
<?php require_once "header.php"; ?>
<style>
.breadcrumbs{
    background-image: url(<?php echo base_url() ; ?>assests/img/common/breadcrumbs.jpg);
}
.aside-title {
    margin-bottom: 20px;
}
.sidebar aside.single-side-box {
    margin-bottom: 0px;
}
.feature {
    position: relative;
     padding-left: 0px; 
}
.video-sidebar::before{
    z-index: -9;
}
.amenities-list{
    height:auto;
}
.amenities-list ul li {
    width: 100%;
}
.sidebar.right-side {
    padding-left: 0px;
}
.welcome-content p{
    font-size: 18px;
    color: #ED1E28;
}
.welcome-content p a{
    color: #606060;
}
.feature::before {
    position: absolute;
    content: "";
     background: rgba(251,170,85, 0); 
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}
</style>
<!--Breadcrumbs start-->
        <div class="breadcrumbs overlay-black">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumbs-title text-center">
                                <h1>GRAND ARENA PROJECT</h1>
                            </div>
                            <div class="breadcrumbs-menu">
                                <ul>
                                    <li><a href="index">Home /</a></li>
                                    <li>Grand Arena Project</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumbs end-->

        <!--Feature property section-->
        <div class="feature-property properties-list pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 ">
                        <div class="single-property-details">
                            <div class="single-property-area">
                                <div class="single-property-tab-content tab-content">
                                    <div class="tab-pane fade show active" id="image-1" role="tabpanel"
                                        aria-labelledby="image-1-tab">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide1.jpeg" alt="play area" title="Play Area">
                                    </div>
                                    <div class="tab-pane fade" id="image-2" role="tabpanel"
                                        aria-labelledby="image-1-tab">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide2.jpeg" alt="swimming pool" title="swimming pool">
                                    </div>
                                    <div class="tab-pane fade" id="image-3" role="tabpanel"
                                        aria-labelledby="image-1-tab">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide3.jpeg" alt="mini stadium" title="Mini Stadium">
                                    </div>
                                    <div class="tab-pane fade" id="image-4" role="tabpanel"
                                        aria-labelledby="image-1-tab">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide4.jpeg" alt="skating Area" title="Skating Area">
                                    </div>
                                    <div class="tab-pane fade" id="image-5" role="tabpanel"
                                        aria-labelledby="image-1-tab">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide5.jpeg" alt="mini Theater"title="Mini Theater">
                                    </div>
                                    <div class="tab-pane fade" id="image-6" role="tabpanel"
                                        aria-labelledby="image-1-tab">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide6.jpeg" alt="Game view" title="Game view Area">
                                    </div>
                                    <div class="tab-pane fade" id="image-7" role="tabpanel"
                                        aria-labelledby="image-1-tab">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide7.jpeg" alt="snooker point" title="Snooker Point">
                                    </div>
                                    <div class="tab-pane fade" id="image-8" role="tabpanel"
                                        aria-labelledby="image-1-tab">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide8.jpeg" alt="indoor Play" title="Indoor Play Station">
                                    </div>
                                    <div class="tab-pane fade" id="image-9" role="tabpanel"
                                        aria-labelledby="image-1-tab">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/slide9.jpeg" alt="Cottages" title="Cottages">
                                    </div>
                                    <div class="tab-pane fade" id="image-10" role="tabpanel"
                                        aria-labelledby="image-1-tab">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/photo10.jpg" alt="Cottages" title="Cottages">
                                    </div>
                                    <div class="tab-pane fade" id="image-11" role="tabpanel"
                                        aria-labelledby="image-1-tab">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/photo11.jpg" alt="Cottages" title="Cottages">
                                    </div>
                                    <div class="tab-pane fade" id="image-12" role="tabpanel"
                                        aria-labelledby="image-1-tab">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/photo12.jpg" alt="Cottages" title="Cottages">
                                    </div>
                                    <div class="tab-pane fade" id="image-13" role="tabpanel"
                                        aria-labelledby="image-1-tab">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/photo13.jpg" alt="Cottages" title="Cottages">
                                    </div>
                                    <div class="tab-pane fade" id="image-14" role="tabpanel"
                                        aria-labelledby="image-1-tab">
                                        <img src="<?php echo base_url() ?>assests/images/grand-arena/photo14.jpg" alt="Cottages" title="Cottages">
                                    </div>
                                    
                                </div>
                                <div class="nav single-property-tab-slider owl-carousel indicator-style2 mt-20">
                                    <div class="nav-item"><a class="nav-link" href="#image-1" id="image-1-tab"
                                            data-toggle="tab" role="tab" aria-controls="image-1"
                                            aria-selected="true"><img src="<?php echo base_url() ?>assests/images/grand-arena/slide1-small.jpg"
                                                alt="" /></a></div>
                                    <div class="nav-item"><a class="nav-link" href="#image-2" id="image-2-tab"
                                            data-toggle="tab" role="tab" aria-controls="image-2"
                                            aria-selected="true"><img src="<?php echo base_url() ?>assests/images/grand-arena/slide2-small.jpg"
                                                alt="" /></a></div>
                                    <div class="nav-item"><a class="nav-link" href="#image-3" id="image-3-tab"
                                            data-toggle="tab" role="tab" aria-controls="image-3"
                                            aria-selected="true"><img src="<?php echo base_url() ?>assests/images/grand-arena/slide3-small.jpg"
                                                alt="" /></a></div>
                                    <div class="nav-item"><a class="nav-link" href="#image-4" id="image-4-tab"
                                            data-toggle="tab" role="tab" aria-controls="image-4"
                                            aria-selected="true"><img src="<?php echo base_url() ?>assests/images/grand-arena/slide4-small.jpg"
                                                alt="" /></a></div>
                                    <div class="nav-item"><a class="nav-link" href="#image-5" id="image-5-tab"
                                            data-toggle="tab" role="tab" aria-controls="image-5"
                                            aria-selected="true"><img src="<?php echo base_url() ?>assests/images/grand-arena/slide5-small.jpg"
                                                alt="" /></a></div>
                                    <div class="nav-item"><a class="nav-link" href="#image-6" id="image-6-tab"
                                            data-toggle="tab" role="tab" aria-controls="image-6"
                                            aria-selected="true"><img src="<?php echo base_url() ?>assests/images/grand-arena/slide6-small.jpg"
                                                alt="" /></a></div>
                                    <div class="nav-item"><a class="nav-link" href="#image-7" id="image-7-tab"
                                            data-toggle="tab" role="tab" aria-controls="image-7"
                                            aria-selected="true"><img src="<?php echo base_url() ?>assests/images/grand-arena/slide7-small.jpg"
                                                alt="" /></a></div>
                                    <div class="nav-item"><a class="nav-link" href="#image-8" id="image-8-tab"
                                            data-toggle="tab" role="tab" aria-controls="image-8"
                                            aria-selected="true"><img src="<?php echo base_url() ?>assests/images/grand-arena/slide8-small.jpg"
                                                alt="" /></a></div>
                                    <div class="nav-item"><a class="nav-link" href="#image-9" id="image-9-tab"
                                            data-toggle="tab" role="tab" aria-controls="image-9"
                                            aria-selected="true"><img src="<?php echo base_url() ?>assests/images/grand-arena/slide9-small.jpg"
                                                alt="" /></a></div>
                                    <div class="nav-item"><a class="nav-link" href="#image-10" id="image-10-tab"
                                            data-toggle="tab" role="tab" aria-controls="image-10"
                                            aria-selected="true"><img src="<?php echo base_url() ?>assests/images/grand-arena/photo10-small.jpg"
                                                alt="" /></a></div>
                                    <div class="nav-item"><a class="nav-link" href="#image-11" id="image-11-tab"
                                            data-toggle="tab" role="tab" aria-controls="image-11"
                                            aria-selected="true"><img src="<?php echo base_url() ?>assests/images/grand-arena/photo11-small.jpg"
                                                alt="" /></a></div>
                                    <div class="nav-item"><a class="nav-link" href="#image-12" id="image-12-tab"
                                            data-toggle="tab" role="tab" aria-controls="image-12"
                                            aria-selected="true"><img src="<?php echo base_url() ?>assests/images/grand-arena/photo12-small.jpg"
                                                alt="" /></a></div>
                                    <div class="nav-item"><a class="nav-link" href="#image-13" id="image-13-tab"
                                            data-toggle="tab" role="tab" aria-controls="image-13"
                                            aria-selected="true"><img src="<?php echo base_url() ?>assests/images/grand-arena/photo13-small.jpg"
                                                alt="" /></a></div>
                                    <div class="nav-item"><a class="nav-link" href="#image-14" id="image-14-tab"
                                            data-toggle="tab" role="tab" aria-controls="image-14"
                                            aria-selected="true"><img src="<?php echo base_url() ?>assests/images/grand-arena/photo14-small.jpg"
                                                alt="" /></a></div>
                                </div>
                            </div>
                            <div class="single-property-description">
                                <div class="desc-title">
                                    <h5>Description</h5>
                                </div>
                                <div class="description-inner">
                                    <!--<p class="text-1"> <span>Hyderabad</span> is a major center for the technology industry generating new job opportunities in the city. This directly impacts the real estate of Hyderabad as it witnesses demands especially in the residential sector. Although, the market caters to every segment in the residential as well as commercial real estate market. </p>-->
                                    <!--<p class="text-2">Hyderabad has a positive outlook after the formation of Telangana in 2014. This can be attributed to reasons like aggressive infrastructure projects, relatively low rents, and good job opportunities.</p>-->
                                    <p class="text-1">Our Project <span>Grand Arena</span> is situated in prime locations near Shamshabad, away from congested traffic and pollution, eco-friendly, bio-diversified, surrounded by beautiful and natural surroundings, and surrounded by all advancements, infrastructure, TSIIC, and IT Developments. Offering the best land value at an affordable price to help our customers accomplish their dream of owning and building their own DREAM HOME/VILLA with a small investment and high returns. </p>
                                    <p class="text-2">Buyers will get a one-stop-shop for potential, affordable, and healthy land investments with 100 percent protection and maintenance. Assisting and meeting consumer needs, as well as offering high-quality land options for those who deserve their own dream home.</p>
                                </div>
                            </div>
                            <div class="condition-amenities">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="amenities pb-5">
                                            <div class="amenities-title">
                                                <h5>Facilities</h5>
                                            </div>
                                            <div class="amenities-list">
                                                <ul>
                                                    <li><i class="fa fa-check-square-o"></i><span>Proposed HMDA Layout </span></li>
                                                    <li><i class="fa fa-check-square-o"></i><span>100% Vaastu </span></li>
                                                    <li><i class="fa fa-check-square-o"></i><span>150’, 60’, 40’, and 30’, Feet Black Top Roads</span></li>
                                                    <li><i class="fa fa-check-square-o"></i><span>Underground Drainage System</span></li>
                                                    <li><i class="fa fa-check-square-o"></i><span>Parks with Landscaping </span></li>
                                                    <li><i class="fa fa-check-square-o"></i><span>Modern Modular Street Lights</span></li>
                                                    <li><i class="fa fa-check-square-o"></i><span>Water Harvesting Pits </span></li>
                                                    <li><i class="fa fa-check-square-o"></i><span>Bank Loan facility available </span></li>
                                                    <li><i class="fa fa-check-square-o"></i><span>Entire layout surrounded by compound wall with Elegant entrance arch</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="amenities">
                                            <div class="amenities-title">
                                                <h5>Location Highlights</h5>
                                            </div>
                                            <div class="amenities-list">
                                                <ul>
                                                    <li><i class="fa fa-check-square-o"></i> <span>Beside Electronics Hardware Technology Park </span></li>
                                                    <li><i class="fa fa-check-square-o"></i> <span>15 KM from Shamshabad, Peeda Golconda Exit. </span></li>
                                                    <li><i class="fa fa-check-square-o"></i> <span>12 KM from JIMS & Ramanuja Statue and Swarna Bharthi Trust</span></li>
                                                    <li><i class="fa fa-check-square-o"></i> <span>18 KM TATA Aerospace Hub, TCS & Wonderla </span></li>
                                                    <li><i class="fa fa-check-square-o"></i> <span>22 KM from IMARAT (RCI), DRDO, Agakhan Academy </span></li>
                                                    <li><i class="fa fa-check-square-o"></i> <span>11 KM HCL & Videocon </span></li>
                                                    <li><i class="fa fa-check-square-o"></i> <span>KM from HYD & Bangalore Highway at Tummalur.</span></li>
                                                    <li><i class="fa fa-check-square-o"></i> <span>ESEZ Maheshwaram – Home to companies manufacturing electronic goods like Samsung Electronics, WIPRO, PR Defence Equipment & Astra Rafael Communications System </span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="planning pb-5">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="plan-title">
                                            <h5>Project Layout</h5>
                                        </div>
                                        <div class="plan-map welcome-content">
                                            <img src="images/ga-layout_new.png" class="img-thumbnail" alt="">
                                            <br>
                                            <p style="margin-top:15px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <a href="brochures/grand-arena.pdf" download>Grand Arena Brochure <i class="fa fa-download"></i></a> </p>
                                            <p style=""><i class="fa fa-image" aria-hidden="true"></i> <a href="<?php echo base_url() ?>assests/images/ga-layout_new.png" download>Project Layout <i class="fa fa-download"></i></a> </p>
                                        </div>
                                    </div>
            
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12">
                        <div class="sidebar right-side">
                            <aside class="single-side-box video mt-1 mb-3">
                                <div class="aside-title">
                                    <h5>Overview of Grand Arena</h5>
                                </div>
                                <div class="video-sidebar">
                                    <video width="100%" height="auto" controls="" muted="">
                                      <source src="<?php echo base_url() ?>assests/video2.mp4" type="video/mp4">
                                      <source src="<?php echo base_url() ?>assests/video2.ogg" type="video/ogg">
                                      Your browser does not support the video tag.
                                    </video>
                                </div>
                            </aside>
                            <aside class="single-side-box search-property">
                                <div class="aside-title">
                                    <h5>Ongoing Project</h5>
                                </div>
                            </aside>
                            <aside class="single-side-box feature">
                                <div class="feature-property">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-12" style="padding: 7px;">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="<?php echo base_url() ?>ramchandra-divine-county">
                                                        <img src="<?php echo base_url(); ?>assests/images/ramchandra/feature-image.png" alt="" width="100%">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="<?php echo base_url(); ?>ramchandra-divine-county">Ramchandra Divine County</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <aside class="single-side-box feature">
                                <div class="feature-property">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-12" style="padding: 7px;">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="<?php echo base_url() ?>haritha-vanam-project">
                                                        <img src="<?php echo base_url() ?>assests/images/layout1.jpg" alt="" width="100%">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="<?php echo base_url() ?>haritha-vanam-project">Haritha Vanam</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            
                            <aside class="single-side-box search-property">
                                <div class="aside-title">
                                    <h5>Completed Project</h5>
                                </div>
                            </aside>
                            <aside class="single-side-box feature">
                                <div class="feature-property">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-12" style="padding: 0 5px;">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="<?php echo base_url() ?>fortune-height-project">
                                                        <img src="<?php echo base_url() ?>assests/images/fh-layout.jpeg" alt="" width="100%">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="<?php echo base_url() ?>fortune-height-project">Fortune Heights</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <!--<aside class="single-side-box feature">-->
                            <!--    <div class="feature-property">-->
                            <!--        <div class="row">-->
                            <!--            <div class="col-lg-12 col-md-12 col-12" style="padding: 0 5px;">-->
                            <!--                <div class="single-property">-->
                            <!--                    <div class="property-img">-->
                            <!--                        <a href="jp-dargah-venture-project.php">-->
                            <!--                            <img src="images/jp-dargah/photo1.jpeg" alt="" width="100%">-->
                            <!--                        </a>-->
                            <!--                    </div>-->
                            <!--                    <div class="property-desc text-center">-->
                            <!--                        <div class="property-desc-top">-->
                            <!--                            <h6><a href="jp-dargah-venture-project.php">JP Dargah Venture</a>-->
                            <!--                            </h6>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</aside>-->
                            
                        </div>
                    </div>
                </div> <!-- row -->
            </div><!-- container -->
        </div>
        <!--Feature property section end-->

<?php require_once "footer.php"; ?>
<!-- -->