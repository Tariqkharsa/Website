<p>hello</p>
<?php
echo "this is php";
$dbServername = "team12.copftkcel1k2.us-east-1.rds.amazonaws.com";
$dbUser = "admin";
$dbPass = "Group12,museum";
$dbName = "FinalTeam12";

$connect = mysqli_connect($dbServername, $dbUser, $dbPass, $dbName) or die("Unable to Connect to '$dbServername'");
// mysqli_select_db($connect, $dbName) or die("Could not open the db '$dbName'");
if($connect->connect_error) {
    die('Bad connection'. $connect->connect_error);
}

session_start();
// $customer_id = $_SESSION['customer']
?>
<?php
  $result = $connect->query("select * from Museum");
  $res = $result->fetch_all();
  print_r($res);
  $connect->close();
?>
<div class='footer'>
    <div class='row'>
        <div class='column'>
                    <div style='padding-left:30%; padding-right: 20px; padding-top:0px; margin:32px;'>
                        <h3 style='margin-bottom: 6px;'>Museum</h3>
                        <p style='padding:0;'>Museum is a fictional company conceived for the purpose of a database class project.</p>
                    </div>
        </div>
                <div class='column' style='flex:25%'>
                    <div style='padding-left: 20px; padding-right: 30%; padding-top:0px; margin:32px; text-align:left;'>
                        <p>
                            <a href="index.php">Home</a> 
                        </p>
                    </div>
                </div>
    </div>
</div>
