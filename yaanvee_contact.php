<?PHP 

if (isset($_POST['send'])) {
        $message=$_POST['message'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
  //--------------------- Mail -------------------  
  $to ='yaanvetechnologies@gmail.com';
  $from =$email;
  $headers = "From:" . $from;
  if (mail($to, $subject,$message,$headers)){
            //--------------------- Mail -------------------  
            $to1 =$email;
            $from1 ='yaanvetechnologies@gmail.com';
            $subject1='Response from Yaanve Technologies';
            $message1 = "Mr/Ms.".$name."
            
            Thank you! Your request mail submitted successfully.
            Our marketing team will contact you soon.
            
            Team Yaanve Technologies.
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