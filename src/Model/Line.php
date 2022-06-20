<?php
namespace App\Model;
use App\Database\Db;
class Line extends Db {

    public function CountStatus1(){
        $sql[]="
            SELECT count(*) 
            FROM `tb_bs` 
            WHERE s_id = 1
        ";
        $sql[]="
            SELECT count(*) 
            FROM `tb_bs` 
            WHERE s_id = 2
        ";
        $sql[]="
            SELECT count(*) 
            FROM `tb_bs` 
            WHERE s_id = 3
        ";
        $sql[]="
            SELECT count(*) 
            FROM `tb_bs` 
            WHERE s_id = 4
        ";
        $i=0;
        foreach($sql as $da){
            $stmt = $this->pdo->query($da);
            $data[$i] = $stmt->fetchColumn();
            $i++;
        }
        return $data;

    }
    public function SentLine() {
        $dataCount = $this->CountStatus1();
        $data="\nขอใช้รถสถาบัน/ขออนุมัติสถาบัน =: ".$dataCount[0]."/".$dataCount[1]."\nขอใช้รถสถาบัน/สถาบันอนุมัติ:ไม่อนุมัติ =: ".$dataCount[0]."/".$dataCount[2].":".$dataCount[3]."\nLink : http://161.246.23.21/car/" ;
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            date_default_timezone_set("Asia/Bangkok");
    
            $sToken = "NEBJNOEsOZKaHi0CtH5DxutkPV9HNGinPgxZTEsrY1W";
            $sMessage = "$data";
    
    
            $chOne = curl_init(); 
            curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
            curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
            curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
            curl_setopt( $chOne, CURLOPT_POST, 1); 
            curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
            $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
            curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
            curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
            $result = curl_exec( $chOne ); 
    
            //Result error 
            if(curl_error($chOne)) 
            { 
                echo 'error:' . curl_error($chOne); 
            } 
            else { 
                $result_ = json_decode($result, true); 
                // echo "status : ".$result_['status']; echo "message : ". $result_['message'];
            } 
            curl_close( $chOne );  
    }
}
