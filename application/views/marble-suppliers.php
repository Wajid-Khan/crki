<title>
    Marble Suppliers | CRK Infra Projects
</title>
<?php require_once "header.php"; ?>

<style>
.breadcrumbs {
    background: url(<?php echo base_url() ?>assests/images/marbles/marble_banner.jpg)no-repeat scroll center center / cover;
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
                                <h1>Marble Suppliers</h1>
                            </div>
                            <div class="breadcrumbs-menu">
                                <ul>
                                    <li><a href="<?php echo base_url() ?>index">Home /</a></li>
                                    <li>Marble Suppliers</li>
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
                        <h3>CRK Marbles</h3>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="content">
                            <p>CRK Infra Projects is well known for being an extremely high-quality marble supplier in India. We have been generating and offering high-quality marble and granite in India. We offer roughly 500 different marble and granite styles, as per customer satisfaction. CRK Infra is one of the best wholesale marble supplier in India. We deal in granite as well as other natural stones. Our unique approach is to be specialised in the quality, quantity, and finishing of marble stone at affordable prices.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="gallery">
                                    <a class="thumbnail" href="#" data-image-id="1" data-toggle="modal" data-title="" data-caption="" data-image="images/marbles/marble1.jpg" data-target="#image-gallery">
                                        <img src="<?php echo base_url() ?>assests/images/marbles/marble1.jpg" alt="CRK Interiors">    
                                    </a>
                                </div>
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="gallery">
                                    <a class="thumbnail" href="#" data-image-id="2" data-toggle="modal" data-title="" data-caption="" data-image="images/marbles/marble2.jpg" data-target="#image-gallery">
                                        <img src="<?php echo base_url() ?>assests/images/marbles/marble2.jpg" alt="CRK Interiors">    
                                    </a>
                                </div>
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="gallery">
                                    <a class="thumbnail" href="#" data-image-id="3" data-toggle="modal" data-title="" data-caption="" data-image="images/marbles/marble3.jpg" data-target="#image-gallery">
                                        <img src="<?php echo base_url() ?>assests/images/marbles/marble3.jpg" alt="CRK Interiors">    
                                    </a>
                                </div>
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="gallery">
                                    <a class="thumbnail" href="#" data-image-id="4" data-toggle="modal" data-title="" data-caption="" data-image="images/marbles/marble4.jpg" data-target="#image-gallery">
                                        <img src="<?php echo base_url() ?>assests/images/marbles/marble4.jpg" alt="CRK Interiors">    
                                    </a>
                                </div>
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="gallery">
                                    <a class="thumbnail" href="#" data-image-id="5" data-toggle="modal" data-title="" data-caption="" data-image="images/marbles/marble5.jpg" data-target="#image-gallery">
                                        <img src="<?php echo base_url() ?>assests/images/marbles/marble5.jpg" alt="CRK Interiors">    
                                    </a>
                                </div>
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="gallery">
                                    <a class="thumbnail" href="#" data-image-id="6" data-toggle="modal" data-title="" data-caption="" data-image="images/marbles/marble6.jpg" data-target="#image-gallery">
                                        <img src="<?php echo base_url() ?>assests/images/marbles/marble6.jpg" alt="CRK Interiors">    
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