<?php

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('index');
    }

    public function about_us()
    {
        $this->load->view('about-us');
    }
    public function leadership()
    {
        $this->load->view('leadership');
    }
    public function strengths_value()
    {
        $this->load->view('strengths-values');
    }
    public function ongoing_project()
    {
        $this->load->view('ongoing-project');
    }
    public function completed_project()
    {
        $this->load->view('completed-projects');
    }
    public function marble_supplier()
    {
        $this->load->view('marble-suppliers');
    }
    public function modern_interior()
    {
        $this->load->view('modern-interiors');
    }
    public function gallery()
    {
        $this->load->view('gallery');
    }
    public function download()
    {
        $this->load->view('downloads');
    }
    public function career()
    {
        $this->load->view('careers');
    }
    public function blog()
    {
        $this->load->view('blogs');
    }
    public function contact_us()
    {
        $this->load->view('contact-us');
    }
    public function grand_arena_project()
    {
        $this->load->view('grand-arena-project');
    }
    public function haritha_vanam_project()
    {
        $this->load->view('haritha-vanam-project');
    }
    public function fortune_height_project()
    {
        $this->load->view('fortune-height-project');
    }
    public function ramchandra_divine_county()
    {
        $this->load->view('ramchandra-divine-county');
    }
    
	public function send_mail()
	{
	    require APPPATH . 'views/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        
        $name = $_POST['name'];
	    $email = $_POST['email'];
	    $phone = $_POST['phone'];
	    $msg = $_POST['message'];
	    $user_subject = 'Popup form enquiry';
        
        // $mail->Host = 'smtp.gmail.com';
        $mail->Host = 'mail.crkinfraprojects.com';
        $mail->port= 587;
        $mail->SMTPAuth= true;
        $mail->SMTPSecure= 'tls';
        $mail->Username='contact@crkinfraprojects.com';
        $mail->Password='CRKinfra@123#';
        $mail->SMTPDebug = 1;
        $mail->setFrom($email, $name);
        $mail->addAddress('contact@crkinfraprojects.com');
        $mail->addCC('wajid.developer1@gmail.com');
        
        
        $mail->isHTML(true);
        $mail->Subject=$user_subject;
        $mail->Body='<h3>Name : '.$name.'<br>Email : '.$email.'<br>Phone : '.$phone.'<br>Message : '.$msg.'</h3>';
        
        if(!$mail->send())
        {
            echo "Somethng went wrong. Please try again. Mailer error: " . $mail->ErrorInfo;
        }
        else
        {
            echo "Enquiry has been sent successfully...";
        }
	}
    
	public function send_mail2()
	{
	    require APPPATH . 'views/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        
        $name = $_POST['name'];
	    $email = $_POST['email'];
	    $msg = $_POST['message'];
	    $user_subject = 'Popup form enquiry';
        
        // $mail->Host = 'smtp.gmail.com';
        $mail->Host = 'mail.crkinfraprojects.com';
        $mail->port= 587;
        $mail->SMTPAuth= true;
        $mail->SMTPSecure= 'tls';
        $mail->Username='contact@crkinfraprojects.com';
        $mail->Password='CRKinfra@123#';
        $mail->SMTPDebug = 1;
        $mail->setFrom($email, $name);
        $mail->addAddress('contact@crkinfraprojects.com');
        $mail->addCC('wajid.developer1@gmail.com');
        
        
        $mail->isHTML(true);
        $mail->Subject=$user_subject;
        $mail->Body='<h3>Name : '.$name.'<br>Email : '.$email.'<br>Message : '.$msg.'</h3>';
        
        if(!$mail->send())
        {
            echo "Somethng went wrong. Please try again. Mailer error: " . $mail->ErrorInfo;
        }
        else
        {
            echo "Enquiry has been sent successfully...";
        }
	}
	
	public function send_my_mail()
	{
        $name = 'Wajid Khan';
        $email = 'wajid.developer1@gmail.com';
        $message= 'Testing now';
        $subject = "My Contact Form";
        $email_body = "The following prospectus has contacted you.<br>".
        "Name: $name. <br>".
        "Email: $email. <br>".
        "Message: $message. <br>";
        $to = "wajid@venusdm.in";
        $headers  = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: $name <$email> \r\n";
        $headers .= "Reply-To: $email \r\n";
        $mail = mail($to,$subject,$email_body,$headers);
        if($mail){
          echo "Email Sent Successfully";
        }
	}
	
	
}

