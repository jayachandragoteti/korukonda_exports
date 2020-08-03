<?PHP 

if (isset($_POST['Enquiry_Now'])) {
        $name=$_POST['name'];
        $Company=$_POST['Company'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $requirements=$_POST['requirements'];
        $content=$_POST['content'];
  //--------------------- Mail -------------------  
  $to ='korukondaexports@gmail.com';
  $from =$email;
  $message = " Hi  this is ". $Name." from ".$Company." my contact details are ".$phone." ,".$email.". My requirement is ".$requirements.",".$content."";
  $headers = "From:" . $from;
  if (mail($to, $subject,$message,$headers)){
        echo "<script>alert('Request submitted successfully')</script>";
        echo "<script>window.location='idex.html';</script>";
  }else{
          echo "<script>alert(' Failed try again!')</script>";
          echo "<script>window.location='idex.html';</script>";
  }
 //--------------------- /Mail -------------------
       

}

?>