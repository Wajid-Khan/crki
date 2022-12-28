<title>Contact Us</title>
<?php require_once "header.php"; ?>
<style>
    .breadcrumbs {
        background: url(<?php echo base_url() ?>assests/images/sub_banners/contact1.jpeg) no-repeat scroll center center / cover;
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
                                <h1>Contact</h1>
                            </div>
                            <div class="breadcrumbs-menu">
                                <ul>
                                    <li><a href="<?php echo base_url() ?>index">Home /</a></li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumbs end-->

        <!--Contact page start-->
        <div class="contact-page pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="map-area">
                            <div class="place-map-inner">
                                <!-- <div id="googleMap-2"></div> -->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15221.263675424192!2d78.4059276!3d17.4924264!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdcd14412a1ec2167!2sCRK%20Infra%20Projects!5e0!3m2!1sen!2sin!4v1619008285835!5m2!1sen!2sin" width="100%" height="365" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-12">
                                <div class="contact-list-inner">
                                    <div class="row">
                                        <div class="col-md-5 col-12">
                                            <div class="single-contact_list">
                                                <div class="single-contact-icon">
                                                    <img src="<?php echo base_url() ?>assests/img/icon/c-4.png" alt="">
                                                </div>
                                                <div class="single-contact-desc">
                                                    <p>Flat No.207, Chayamina Enclave, KPHB,</p>
                                                    <p> Kukatpally, Beside Nexa Showroom, Hyderabad 5000072</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12 ">
                                            <div class="single-contact_list">
                                                <div class="single-contact-icon" style="top:0px;">
                                                    <img src="<?php echo base_url() ?>assests/img/icon/c-5.png" alt="">
                                                </div>
                                                <div class="single-contact-desc">
                                                    <p>Telephone : +91 9912168992</p>
                                                    <!-- <p>Telephone : +012 345 678 102</p> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="single-contact_list">
                                                <div class="single-contact-icon">
                                                    <img src="<?php echo base_url() ?>assests/img/icon/c-6.png" alt="">
                                                </div>
                                                <div class="single-contact-desc">
                                                    <p>Email : contact@crkinfraprojects.com</p>
                                                    <p>Web : www.crkinfraprojects.com/</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="leave-message">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-12">
                                    <div class="contact-form-inner">
                                        <div class="contact-form-title">
                                            <h5>Leave a Message</h5>
                                        </div>
                                        <form id="contactForm">
                                            <input name="name" type="text" placeholder="Your Name" id="name" required>
                                            <input  name="email" type="email" placeholder="Email here" id="email" required>
                                            <textarea name="message" placeholder="Write here" id="message" required></textarea>
                                            <div class="form-submit">
                                                <button type="button" id="btn_submit">Submit</button>
                                            </div>
                                            <p class="form-messege"></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Contact page end-->
<!--<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>-->
<?php require_once "footer.php"; ?>
<script>
    $(document).ready(function(){
        $('#btn_submit').click(function(){
           
            var name = $('#name').val();
            var email = $('#email').val();
            // var number = $('#phone').val();
            var message = $('#message').val();

            if(name != '' || email != '' || message != '')
            {
                if(name == '')
                {
                    alert('Please enter your name');
                    $('#name').focus();
                    return false;
                }
                if(email == '')
                {
                    alert('Please enter your email');
                    $('#email').focus();
                    return false;
                }
                if(email != '')
                {
                    var email_resp1 = validateEmail(email);
                    if(email_resp1 == false)
                    {
                        alert('Please enter the valid email address');
                        $('#email').focus();
                        return false;
                    }
                }
    
                if(message == '')
                {
                    alert('Please enter the message');
                    $('#message').focus();
                    return false;
                }
                    if(window.XDomainRequest) {
                    contentType = "text/plain";
                   }
                var contentType ="application/x-www-form-urlencoded; charset=utf-8";
                $.ajax({
                    url :    'https://venusdigitalmarketing.in/emails/email_crkinfra.php',
                    type:    'POST',
                    data:    {name:name, email:email, message:message},
                    dataType: 'json',
                    contentType: contentType,
                    success:function(data){
                        alert(JSON.stringify(data.text))
                        $('#contactForm').trigger("reset");
                    },
                    error:function(jqXHR, textStatus, errorThrown){
                        alert("You can not send Cross Domain AJAX requests : "+errorThrown);
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
