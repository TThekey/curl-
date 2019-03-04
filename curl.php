<?php
/**
 * Created by PhpStorm.
 * User: GYW
 * Date: 2019/3/1
 * Time: 20:15
 */


$data='{"name":"Lei","msg":"Are you OK?"}';


$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "localhost/Learn/111.php");

curl_setopt($ch, CURLOPT_POST, 1);
//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
//curl_setopt($ch, CURLOPT_POSTFIELDS , http_build_query($data)); //通过数组形式
// $output contains the output string


curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length:' . strlen($data)));
curl_setopt($ch, CURLOPT_POSTFIELDS , $data);//通过json形式
$output = curl_exec($ch);


$info = curl_getinfo($ch);
 var_dump($info);
echo '<br/>';

//echo output
echo $output;

// close curl resource to free up system resources
curl_close($ch);
