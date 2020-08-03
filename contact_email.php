<?PHP 
if(isset($_POST['submit'])){
 $Name=$_POST['Name'];
 $email=$_POST['email'];
 $subject=$_POST['subject'];
 $massage=$_POST['massage'];
  //--------------------- Mail -------------------  
 $to ='korukondaexports@gmail.com';
 $from =$email;
 $message = " Hi  this is ". $Name.".
 ". $massage." 
 ";
 $headers = "From:" . $from;
 if (mail($to, $subject,$message,$headers)){
         echo "<script>alert('Request submitted successfully')</script>";
         echo "<script>window.location='contact.html';</script>";
 }else{
         echo "<script>alert(' Failed try again!')</script>";
         echo "<script>window.location='contact.html';</script>";
 }
//--------------------- /Mail -------------------
}
if (isset($_POST['Enquiry_Now'])) {
        $name=$_POST['name'];
        $Company=$_POST['Company'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $requirements=$_POST['requirements'];
        $content=$_POST['content'];
        echo "<script>alert('Request submitted successfully')</script>";
         echo "<script>window.location='idex.html';</script>";

}

?>