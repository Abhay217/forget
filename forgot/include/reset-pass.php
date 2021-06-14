<?php
session_start();
$conn = mysqli_connect("localhost","root","","login") or die("connection failed");

$mobile = $_SESSION['mobile'];
// print_r($mobile);
if (isset($_POST['password']))
{
$password =$_POST['password'];
$sql ="UPDATE `login` SET `password`='$password' WHERE mobile ='$mobile'";
//   $sql = "UPDATE `login` SET password= '$password' WHERE mobile = '$mobile'";
  print_r($sql);
  echo "<pre>";
  print_r($mobile);


  if(!mysqli_query($conn,$sql)>1)
{
echo "not updatedate";
}else {
sleep(1);
// print_r($password);
$sql1 ="SELECT * FROM `login` WHERE mobile ='$mobile'";
$result = mysqli_query($conn, $sql1);
if($result->num_rows == 0) {
    echo "number not found";
    header("location: http://localhost/forgot/include/not.php");
    
} else {
    echo "updatedate";
    header("location: http://localhost/forgot/include/done.php");
}



}

}

?>
<h2>Reset Your Account Password</h2>
<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
<div class="container">
    <div class="regisFrm">
        <form action="" method="post">
            <input type="password" name="password" placeholder="PASSWORD" required="">
            <input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required="">
            <div class="send-button">

                <input type="submit" name="resetSubmit" value="RESET PASSWORD">
            </div>
        </form>
    </div>
</div>