<title>
    Modern Interiors | CRK Infra Projects
</title>
<?php require_once "header.php"; ?>

<style>
.breadcrumbs {
    background: url(<?php echo base_url() ?>assests/images/interiors/interiors-banner.jpg)no-repeat scroll center center / cover;
    padding: 176px 0 19px;
    position: relative;
}
.p-90{
    padding:90px 0;
}
.content p{
    text-align:justify;
}
.gallery img{
    width:100%;
    margin-bottom:30px;
    border-radius:5px;
    box-shadow:0 0 5px #000;
}
@media (min-width:768px)
{
    .modal-dialog{
        width:700px;
    }
}
@media (max-width:767.98px)
{
    .modal-dialog{
        width:100%;
    }
}
@media (max-width:576.98px)
{
    .modal-open .modal {
        width: 98%;
    }
}
.modal-footer{
    justify-content: center;
    padding: 0.4rem 1rem;
}

</style>
<!--Breadcrumbs start-->
        <div class="breadcrumbs overlay-black">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumbs-title text-center">
                                <h1>Modern Interiors</h1>
                            </div>
                            <div class="breadcrumbs-menu">
                                <ul>
                                    <li><a href="<?php echo base_url() ?>index">Home /</a></li>
                                    <li>Modern Interiors</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumbs end-->

        <!--Feature property section-->
        <div class="feature-property p-90">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h3>CRK Interior Designers and Decorators</h3>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="content">
                            <p>Our interior designers and architects use next-gen Design, Technology, skilled work force & Implementation methods, to solve not just today’s Home Interiors needs, but even the ones you don’t foresee for tomorrow. With our specialized interior design  capabilities, we have been the Best Interior Designers in Hyderabad since last 5 years.Our architectural design guidelines helps you create outstanding interior experiences to your home within the comitted timelines.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="gallery">
                                    <a class="thumbnail" href="#" data-image-id="1" data-toggle="modal" data-title="" data-caption="" data-image="images/interiors/img1.jpg" data-target="#image-gallery">
                                        <img src="<?php echo base_url() ?>assests/images/interiors/img1.jpg" alt="CRK Interiors">    
                                    </a>
                                </div>
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="gallery">
                                    <a class="thumbnail" href="#" data-image-id="2" data-toggle="modal" data-title="" data-caption="" data-image="images/interiors/img2.jpg" data-target="#image-gallery">
                                        <img src="<?php echo base_url() ?>assests/images/interiors/img2.jpg" alt="CRK Interiors">    
                                    </a>
                                </div>
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="gallery">
                                    <a class="thumbnail" href="#" data-image-id="3" data-toggle="modal" data-title="" data-caption="" data-image="images/interiors/img3.jpg" data-target="#image-gallery">
                                        <img src="<?php echo base_url() ?>assests/images/interiors/img3.jpg" alt="CRK Interiors">    
                                    </a>
                                </div>
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="gallery">
                                    <a class="thumbnail" href="#" data-image-id="4" data-toggle="modal" data-title="" data-caption="" data-image="images/interiors/img4.jpg" data-target="#image-gallery">
                                        <img src="<?php echo base_url() ?>assests/images/interiors/img4.jpg" alt="CRK Interiors">    
                                    </a>
                                </div>
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="gallery">
                                    <a class="thumbnail" href="#" data-image-id="5" data-toggle="modal" data-title="" data-caption="" data-image="images/interiors/img5.jpg" data-target="#image-gallery">
                                        <img src="<?php echo base_url() ?>assests/images/interiors/img5.jpg" alt="CRK Interiors">    
                                    </a>
                                </div>
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="gallery">
                                    <a class="thumbnail" href="#" data-image-id="6" data-toggle="modal" data-title="" data-caption="" data-image="images/interiors/img6.jpg" data-target="#image-gallery">
                                        <img src="<?php echo base_url() ?>assests/images/interiors/img6.jpg" alt="CRK Interiors">    
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Feature property section end-->

<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title" id="image-gallery-title">asdasdsad</h4>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="">
            </div>
            <div class="modal-footer">
                 <div class="btn-group">
                    <button class="btn btn-primary" id="show-previous-image">Previous</button>
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" id="show-next-image">Next</button>
                </div>
            </div>
        
    </div>
</div>
</div>
 
<?php require_once "footer.php"; ?>
<script>
$(document).ready(function(){

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }
});
</script>
?>
<!-- -->