<title>Careers</title>
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
    .form-control{
        border-color:#ced4da !important;
    }
    .breadcrumbs {
        background: url(<?php echo base_url() ?>assests/images/sub_banners/careers.jpeg) no-repeat scroll center center / cover;
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
    #loader {
        position:fixed;
        top:50%;
        left:50%;
        transform:translate(-50%, -50%);
        z-index:999;
        display:none;
    }
    #loader img {
        width:50%;
    }
</style>
<div id="loader">
    <img src="images/spinner.gif" >
</div>
<!--Breadcrumbs start-->
        <div class="breadcrumbs overlay-black">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumbs-title text-center">
                                <h1>Careers</h1>
                            </div>
                            <div class="breadcrumbs-menu">
                                <ul>
                                    <li><a href="<?php echo base_url() ?>index">Home /</a></li>
                                    <li>Careers</li>
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
                            <h3 class="title-1">Careers</h3>
                        </div>
                        <div class="welcome-content">
                            <p>Fill up the below form</p>
                            <form action="<?php echo base_url() ?>career_email" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                <label>Full Name: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter " id="full_name" name="full_name" required>
                              </div>
                              <div class="form-group">
                                <label>Email address: <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" placeholder="Enter " id="email" name="email" required>
                              </div>
                              <div class="form-group">
                                <label>Phone Number: <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" placeholder="Enter " id="phone" name="phone" required>
                              </div>
                              <div class="form-group">
                                <label>Message: <span class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="Enter" id="msg" name="msg" required></textarea>
                              </div>
                              <div class="form-group">
                                <label>Upload CV: <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="attachment" name="attachment" required></textarea>
                              </div>
                              <button type="submit" id="btn_submit" class="btn btn-primary btn-lg">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mt-3">
                        <div class="welcome-haven-img fadeInRight wow" data-wow-delay="0.2s">
                            <img src="<?php echo base_url() ?>assests/images/career.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Welcome Haven section end-->





<?php require_once "footer.php"; ?>
<script>
    $(document).ready(function(){
        $('#btn_submit').on("click", function(){
            var name = $('#full_name').val();
            var email = $('#email').val();
            var number = $('#phone').val();
            var message = $('#msg').val();
            var attachment = $('#attachment').val();
            var fileExtension = ['pdf', 'docx'];
            $('#loader').css('display', 'block');

            if(name != '' || email != '' || phone != '' || message != '' || attachment != '' )
            {
                if(name == '')
                {
                    $('#loader').css('display', 'none');
                    alert('Please enter the full name');
                    return false;
                    
                }
                else if(email == '')
                {
                    $('#loader').css('display', 'none');
                    alert('Please enter the email');
                    return false;
                    
                }
                else if(phone == '')
                {
                    $('#loader').css('display', 'none');
                    alert('Please enter the phone number');
                    return false;
                }
                else if(message == '')
                {
                    $('#loader').css('display', 'none');
                    alert('Please enter the message');
                    return false;
                }
                else if(attachment == '')
                {
                    $('#loader').css('display', 'none');
                    alert('Please attach your CV');
                    return false;
                }
                else if(attachment != '')
                {
                    if ($.inArray(attachment.split('.').pop().toLowerCase(), fileExtension) == -1) {
                        $('#loader').css('display', 'none');
                        alert("CV format should be : "+fileExtension.join(', '));
                        return false;
                    }
                }
                else
                {
                    return true;
                    // $.ajax({
                    //     url : 'career_email.php',
                    //     type : 'POST',
                    //     data : {full_name:name, email:email, phone:number, message:message, attach:attachment},
                    //     success : function(data){
                    //         alert(data);
                    //         $('#full_name').val('');
                    //         $('#email').val('');
                    //         $('#phone').val('');
                    //         $('#msg').val('');
                    //     }
                    // });
                }
            }
            else
            {
                $('#loader').css('display', 'none');
                alert('Please fill the form...');
                return false;
            }
            
        });
    });
</script>

