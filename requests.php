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
  $subject='Order for '.$content.'';
  $message = " Hi  this is ".$name." from ".$Company.".
  
    My requirement is ".$requirements.",".$content.".

    Contact details :
    Phone : ".$phone.",
    Email : ".$email.".
    ";
  $headers = "From:" . $from;
  if (mail($to, $subject,$message,$headers)){
            //--------------------- Mail -------------------  
            $to1 =$email;
            $from1 ='korukondaexports@gmail.com';
            $subject1='Order Placed Successfully';
            $message1 = "Mr/Ms.".$name."
            
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
                  echo "<script>alert('Request submitted successfully')</script>";
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