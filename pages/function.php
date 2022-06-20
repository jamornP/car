<?php
 function datethai($date){
    $da=explode("-",$date);

    $d=$da[2];
    $m=$da[1];
    $y=$da[0];
    $month=month($date); 
    $year=year($date);   
    $data =intval($d)." ".$month." ".$year;
    return  $data;

}
 function month($date){
    $da=explode("-",$date);
    $d=$da[2];
    $m=$da[1];
    $y=$da[0];
    switch ($m){
        case "01":
            $month="ม.ค.";
            break;
        case "02":
            $month="ก.พ.";
            break;
        case "03":
            $month="มี.ค.";
            break;
        case "04":
            $month="เม.ย.";
            break;
        case "05":
            $month="พ.ค.";
            break;
        case "06":
            $month="มิ.ย.";
            break;
        case "07":
            $month="ก.ค.";
            break;
        case "08":
            $month="ส.ค.";
            break;
        case "09":
            $month="ก.ย.";
            break;
        case "10":
            $month="ต.ค.";
            break;
        case "11":
            $month="พ.ย.";
            break;
        case "12":
            $month="ธ.ค.";
            break;
        
    }
    return $month;
}
 function day($date){
    $da=explode("-",$date);
    $d=$da[2];
    $m=$da[1];
    $y=$da[0];    
    return  intval($d);

}
 function year($date){
    $da=explode("-",$date);
    $d=$da[2];
    $m=$da[1];
    $y=$da[0];    
    return  $y+543;

}
// function SentLine($dataCount) {
 
//     $data="\nขอใช้รถ/ขออนุมัติสถาบัน =: ".$dataCount[0]."/".$dataCount[1]."\nขอใช้รถ/อนุมัติ:ไม่อนุมัติ =: ".$dataCount[0]."/".$dataCount[2].":".$dataCount[3]."\nLink : http://161.246.23.21/car/" ;
//         ini_set('display_errors', 1);
//         ini_set('display_startup_errors', 1);
//         error_reporting(E_ALL);
//         date_default_timezone_set("Asia/Bangkok");

//         $sToken = "NEBJNOEsOZKaHi0CtH5DxutkPV9HNGinPgxZTEsrY1W";
//         $sMessage = "$data";


//         $chOne = curl_init(); 
//         curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
//         curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
//         curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
//         curl_setopt( $chOne, CURLOPT_POST, 1); 
//         curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
//         $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
//         curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
//         curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
//         $result = curl_exec( $chOne ); 

//         //Result error 
//         if(curl_error($chOne)) 
//         { 
//             echo 'error:' . curl_error($chOne); 
//         } 
//         else { 
//             $result_ = json_decode($result, true); 
//             // echo "status : ".$result_['status']; echo "message : ". $result_['message'];
//         } 
//         curl_close( $chOne );  
// }
?>