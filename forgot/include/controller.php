<?php
session_start();
error_reporting(E_ALL & ~ E_NOTICE);
require ('textlocal.class.php');

class Controller
{
    function __construct() {
        $this->processMobileVerification();
    }
    function processMobileVerification()
    {
        switch ($_POST["action"]) {
            case "send_otp":
                // echo "hi";

                $mobile_number = $_POST['mobile_number'];
                $mobile = $_POST['mobile_number'];
                $_SESSION['mobile'] =$mobile;

                $conn = mysqli_connect("localhost","root","","login") or die("connection failed");
                $sql1 ="SELECT * FROM `login` WHERE mobile ='$mobile'";
                $result = mysqli_query($conn, $sql1);
                if($result->num_rows == 0) {
                echo "number not found";
                // require_once ("location: http://localhost/forgot/login-forget/not.php");
                header("location: http://localhost/forgot/include/not.php");

                }else {



                $apiKey = urlencode('YOUR_API_KEY');
                $Textlocal = new Textlocal(false, false, $apiKey);

                $numbers = array(
                    $mobile_number
                );
                $sender = 'PHPPOT';
                $otp = rand(100000, 999999);
                $_SESSION['session_otp'] = $otp;
                $_SESSION['mobile'] =$mobile;
                require_once ("verification-form.php");
                // header("verification-form.php");
                echo $otp;
                // $message = "Your One Time Password is " . $otp;

                // try{
                //     $response = $Textlocal->sendSms($numbers, $message, $sender);
                //     require_once ("verification-form.php");
                //     exit();
                // }catch(Exception $e){
                //     die('Error: '.$e->getMessage());
                // }
                }
                break;

            case "verify_otp":
                $otp = $_POST['otp'];

                if ($otp == $_SESSION['session_otp']) {
                    unset($_SESSION['session_otp']);
                    echo json_encode(array("type"=>"success", "message"=>"Your mobile number is verified!"));
                } else {
                    echo json_encode(array("type"=>"error", "message"=>"Mobile number verification failed"));
                }
                break;
        }
    }
}
$controller = new Controller();
?>
