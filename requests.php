<?PHP 

if (isset($_POST['Enquiry_Now'])) {
        $name= strtoupper($_POST['neme']);
        $Company= strtoupper($_POST['Company']);
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $requirements=$_POST['requirements'];
        $content=$_POST['content'];
        $address=$_POST['address'];
        $quantity=$_POST['quantity'];

  //--------------------- Mail -------------------  
  $to ='aitamsac@gmail.com';
  $from =$email;
  $subject='Order for '.$content.'';
  $message = " I am ".$name.", from ".$Company." company request you to send ".$quantity." of ".$content." to ".$address.".
  Other Requirements are ".$requirements.".
  
  Please feel free to contact me if you experience any further problems - 
  ".$phone.".
  ".$Company."
    ";
  $headers = "From:" . $from;
  if (mail($to, $subject,$message,$headers)){
            //--------------------- Mail -------------------  
            $to1 =$email;
            $from1 ='aitamsac@gmail.com';
            $subject1='Order Placed Successfully';
            $message1 = "Mr/Ms.".$name.",
            
            Thank you! Your request is submitted successfully.
            Our marketing team will contact you soon with the package details.
            
            Happy Shopping,
            Team Korukonda Exports.
            ";
            $headers1 = "From:" . $from1;
            if(mail($to1, $subject1,$message1,$headers1)){
                  echo "<script>alert('Request submitted successfully')</script>";
                  echo "<script>window.location='index.html';</script>";
            }else{
                  echo "<script>alert('Request submitted successfully.')</script>";
                  echo "<script>window.location='index.html';</script>";
            }  
            //--------------------- Mail ------------------- 
  }else{
          echo "<script>alert(' Failed try again!')</script>";
          echo "<script>window.location='index.html';</script>";
  }
 //--------------------- /Mail -------------------
}

?>