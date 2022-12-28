<title>
    Strengths Values
</title>
<?php require_once "header.php"; ?>
<style>
    .pt-90{
        padding-top:90px;
    }
    .single-awesome-feature.four {
        left: 60px;
    }
    .single-awesome-feature.six {
        left: 60px;
    }
    strong{
        font-weight:600;
    }
    .ulli {
        margin: 10px 0px 0px 60px;
    }
    .ulli li {
        position: relative;
        padding: 4px 0px 6px 20px;
        font-size: 14px;
        color: #606060;
    }
    .ulli li:before {
        position: absolute;
        left: 0;
        content: '\f061';
        font-family: 'FontAwesome';
        color: #F38226;
        font-size: 14px;
        top: 6px;
    }
    .bg-1{
        background-color: #fff;
        background-image: url("data:image/svg+xml,%3Csvg width='42' height='44' viewBox='0 0 42 44' xmlns='http://www.w3.org/2000/svg'%3E%3Cg id='Page-1' fill='none' fill-rule='evenodd'%3E%3Cg id='brick-wall' fill='%23000000' fill-opacity='0.03'%3E%3Cpath d='M0 0h42v44H0V0zm1 1h40v20H1V1zM0 23h20v20H0V23zm22 0h20v20H22V23z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }
    @media (max-width:767.98px)
    {
        .ulli {
            margin: 10px 0px 0px 0px;
        }
        .image{
            display:block;
            margin:auto;
            margin-bottom:20px;
        }
    }
    .image1{
        margin-top:20px;
        width:120%;
        margin:20px auto 0 auto;
    }
    .breadcrumbs {
        background: url(<?php echo base_url() ?>assests/images/sub_banners/strengths.jpeg) no-repeat scroll center center / cover;
    }
    .overlay-black:before{
        background: rgba(0, 0, 0, 0.6) !imporatnt;
    }
    .breadcrumbs{
        padding: 159px 0 0px 0px;
    }
    .breadcrumbs-menu{
        position: relative;
        top: -10px;
    }
</style>

<!--Breadcrumbs start-->
        <div class="breadcrumbs overlay-black">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumbs-title text-center">
                                <h1>Strengths Values</h1>
                            </div>
                            <div class="breadcrumbs-menu">
                                <ul>
                                    <li><a href="<?php echo base_url() ?>index">Home /</a></li>
                                    <li>Strengths Values</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumbs end-->

        <!--Welcome Haven section-->
        <div class="welcome-haven bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 fadeInLeft wow welcome-pd mb-3" data-wow-delay="0.2s">
                        <div class="welcome-title">
                            <h3 class="title-1">Our <span>Principles</span></h3>
                        </div>
                        <div class="welcome-content">
                            <ul class="ulli">
                                <li><strong>Authenticity and integrity:</strong> Honesty and integrity towards our customers has been our top most priority.</li>
                                <li><strong>Systemized and organized:</strong> We have an energetic pack of architects and engineers which keep our team organized and perfectly dressed.</li>
                                <li><strong>Dependable and loyal:</strong> We have been in real estate & construction for 20 years with utmost loyalty to our customers.</li>
                                <li><strong>Safety and quality:</strong> we nevermore have been comprised with the safety and quality in our constructions and projects.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <img src="<?php echo base_url() ?>assests/images/principles.png" class="image" width="90%">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-12 fadeInLeft wow welcome-pd mt-3" data-wow-delay="0.2s">
                        <div class="welcome-title">
                            <h3 class="title-1">Strength<span></span></h3>
                        </div>
                        <div class="welcome-content">
                            <ul class="ulli">
                                <li><strong>Low cost: </strong> We provide very cost efficient services across Telangana and Andhra Pradesh.</li>
                                <li><strong>Good marketing: </strong> We have an excellent team of online marketing which include social media marketing & search engine optimization.</li>
                                <li><strong>Easy to find: </strong> We develop and market your project and we make sure that the project is easily accessible to the potential buyers.</li>
                                <li><strong>Reliable:</strong> From the past 20 years we have built our reputation on consumer trust and satisfaction from our services.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <img src="<?php echo base_url() ?>assests/images/streng.png" class="image1" width="">
                    </div>
                </div>
            </div>
        </div>
        <!--Welcome Haven section end-->


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




<?php require_once "footer.php"; ?>
<!-- -->