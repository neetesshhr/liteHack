<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function Password_enc($password){
    $BlowFish_Hash_Format="$2y$10$";
    $Salt="Wearecodersandworkinginastartupproject";
    $Formatting_Blowfish_With_Salt=$BlowFish_Hash_Format.$Salt;
    $Hash=crypt($password,$Formatting_Blowfish_With_Salt);
    return $Hash;
}

function ShowOrganizationList($name,$phone,$address,$uid){
	?>
	<form action="helpOrganization.php" method="POST">
		<div class="card w-75 container my-4">
		  <div class="card-body">
		    <h5 class="card-title breadcrumb"><?php echo $name; ?></h5>
		    <p class="card-text"><?php echo $address; ?></p>
		    <p class="card-text"><?php echo $phone; ?></p>
		    <button type="submit" class="btn btn-primary">Click to help <?php echo $name; ?></button>
		  </div>
		</div>
		<input type="hidden" value="<?php echo $uid; ?>" name="userid">
	</form>
	

	<?php

}


function send_email($sub,$body,$email){
require '../vendor/autoload.php';


 $mail = new PHPMailer(true);

   try{
   $mail->SMTPDebug = 1;       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';  
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'dreamprojects360@gmail.com';                     
    $mail->Password   = 'Wearecoders_kamal_pawan';                               
    $mail->SMTPSecure = 'ssl';                                  
    $mail->Port       = 465;                                    
    $mail->setFrom("dreamprojects360@gmail.com","Pawan Acharya");
    $mail->addAddress($email);
    $mail->Subject = $sub;
    $mail->Body    = $body;
    $mail->send();
return true;
} catch (Exception $e) {
    return false;
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}




 ?>