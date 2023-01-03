<?php

$conn= mysqli_connect('localhost','root','','bank') or die("database not connect");

if (isset($_POST['submit'])){


    
    

     if( (empty ( $_POST['fname'])) || (empty( $_POST['email'])) || 
     (empty( $_POST['pass'])) || (empty( $_POST['mob'])) || (empty( $_POST['mob1']))      )
    {
    ?>
    <script> window.alert("Enter All please ..");</script>

    <?php
}

  

else{

$email=$_POST['email'];
$pass=$_POST['pass'];
$fname=$_POST['fname'];
$address=$_POST['address'];
$mob=$_POST['mob'];
$mob1=$_POST['mob1'];
$gender=$_POST['gender'];
$year=$_POST['year'];
$university=$_POST['university'];
$uni=$_POST['uni'];
$econdition= $_POST['econdition'];
$econ= $_POST['econ'];
$lcondition= $_POST['lcondition'];
$lcon= $_POST['lcon'];
$gyear= $_POST['gyear'];
$gpa= $_POST['gpa'];
$tcondition= $_POST['tcondition'];
$tcon= $_POST['tcon'];




$query=mysqli_query($conn, "insert into enat(email,pass,fname,address,mob,mob1,gender,year,university,uni,econdition,econ,lcondition,lcon,gyear,gpa,tcondition,tcon) 
 values('$email','$pass','$fname','$address','$mob','$mob1','$gender', '$year' , '$university' , '$uni' , '$econdition', '$econ' , '$lcondition', '$lcon', '$gyear' , '$gpa' , '$tcondition' , '$tcon')")
or die("qurey error");
?>
<script>

if (window.confirm('Apply successfully ምዝገባው በስርአት ተጠናቆል') ) 
{
window.location.href='./bank.html';
};

</script>

<?php

}

}

?>