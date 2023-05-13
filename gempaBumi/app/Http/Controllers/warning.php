<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Toolkito\Larasap\SendTo;
use GuzzleHttp\Client;
use Telegram\Bot\Api;
use Telegram\Bot\FileUpload\InputFile;
use App\Http\Traits\GlobalTrait;
use Illuminate\Support\Facades\Storage;


class warning extends Controller
{
    function index(){
     
       $id = $this->cek()[0]; 
       $count = count( $id);

     

        $url = "https://data.bmkg.go.id/DataMKG/TEWS/autogempa.json";
        $json = json_decode(file_get_contents($url), true);
        $img = "https://data.bmkg.go.id/DataMKG/TEWS/".$json['Infogempa']['gempa']['Shakemap'];
        $real=  $json['Infogempa']['gempa']['Magnitude'];
        $potensi = $json['Infogempa']['gempa']['Potensi'];
        $kedalaman = $json['Infogempa']['gempa']['Kedalaman'];
        $wilayah = $json['Infogempa']['gempa']['Wilayah'];
        $dirasakan = $json['Infogempa']['gempa']['Dirasakan'];
       
        //Storage::disk('local')->put('file.txt', 9);
        $file = fopen(storage_path("app/file.txt"), "r");
        $temp = fgets($file);
        fclose($file);
   

        if($temp != $real){
            $telegram = new Api('6055537452:AAGEX7C1jQ0hZBKLMJMbDUFKs8tFH52jb8k');

         
           
            for($i=0; $i<$count; $i++){
                $response = $telegram->sendPhoto([
                    'chat_id' => $id[$i], 
                    'photo' => InputFile::create($img, "test"),
                    
                    'caption' => "Status Gempa saat ini :" . "\n". 
                    "Besar magnitudo: ".$real. ', dengan kedalaman '.$kedalaman.
                    ".".$wilayah.". ".$potensi." ".$dirasakan ,
                ]);
            }
        
            Storage::disk('local')->put('file.txt', $real);
            
        }

               
    }
    private function cek(){
        $rest = new Api ("6055537452:AAGEX7C1jQ0hZBKLMJMbDUFKs8tFH52jb8k");
        $res =  $rest->getUpdates();

        //dd($res['0']['message']['from']['id']);
        $count = count($res);
        $tempData = [] ;
        $data = count ($tempData);
        for($i = 0; $i<=$count-1; $i++){
           
           $tempData [$i] = $res[$i]['message']['from']['id'] ;
                       
        }
        $unique = array_unique($tempData);
        $unique = array_values($unique);
   
        return array ($unique);
        
        

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.telegram.org/bot6055537452:AAGEX7C1jQ0hZBKLMJMbDUFKs8tFH52jb8k/setWebhook?remove",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_TIMEOUT => 30000,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => array(
            // Set Here Your Requesred Headers
            'Content-Type: application/json',
        ),
        ));
    $response = curl_exec($curl);
    curl_close($curl);
    }

}





