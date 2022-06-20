<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php
use App\Model\Line;
$lineObj = new Line;
$data = $lineObj->SentLine();
echo "<pre>"; 
print_r($data);
echo "</pre>";
// SentLine($data);
?>