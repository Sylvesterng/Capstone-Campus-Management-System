<?php
if ($_SERVER["REQUEST_METHOD"] != "POST" 
    || !isset($_POST["court"]) 
    || !isset($_POST["timeslot"]) 
    || !isset($_POST["date"])) {
    header("Location: ChooseBookingType.php");
    exit();
}

$court = htmlspecialchars($_POST["court"]);
$timeslot = htmlspecialchars($_POST["timeslot"]);
$date = htmlspecialchars($_POST["date"]);
echo "$court";
echo "<br>";
echo "$timeslot";
echo "<br>";
echo "$date";

?>