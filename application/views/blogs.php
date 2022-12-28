<title>Blogs</title>
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
    .fun-fact{
        padding: 70px 0;
    }
    label {
        font-size: 14px !important;
    }
    input{
        font-size: 14px !important;
    }
    ::placeholder {
        font-size:14px;
    }
    .fa-file-pdf-o:before {
        content: "\f1c1";
        font-size: 20px;
        color: #606060;
    }
    .welcome-content p{
        font-size: 20px;
        color: #ED1E28;
    }
    .welcome-content p a{
        color: #606060;
    }
    .breadcrumbs {
        background: url(<?php echo base_url() ?>assests/images/sub_banners/blogs.jpg) no-repeat scroll center center / cover;
        padding: 159px 0 0px 0px;
    }
    .overlay-black:before{
        background: rgba(0, 0, 0, 0.6) !imporatnt;
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
                                <h1>Blogs</h1>
                            </div>
                            <div class="breadcrumbs-menu">
                                <ul>
                                    <li><a href="<?php echo base_url() ?>index">Home /</a></li>
                                    <li>Blogs</li>
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
                    
                    <div class="col-lg-6 col-12 fadeInLeft wow welcome-pd" data-wow-delay="0.2s">
                        <div class="welcome-title">
                            <h3 class="title-1">Blogs</h3>
                        </div>
                        <div class="welcome-content">
                            <p>Blogs will be updated soon....</p>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--Welcome Haven section end-->





<?php require_once "footer.php"; ?>