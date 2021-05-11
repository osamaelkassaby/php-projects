<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-color: #939598;
    }
    table{
        background-color: #BCBEC0;
    }
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}



#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: red;
  color: white;
  font-size: 25px;
}td{
    font-size: 20px;
}.sts{
    color: #45D09E;
    background-color: #6D6E71;
}.stsof{
    color: red;
    background-color: #414042;
}.ds{
    background-color: #AFCFEA;
}.ip{
    background-color: #7AB1FF;
    color: #242240;
    font-size: 22px;
}
</style>
</head>
<body>
<br>
<br>

</head>
<body>

<table id="customers">
  <tr>
    <th> number </th>
    <th>IP/URL</th>
    <th> status </th>
    <th>Descripiton</th>
    <th> Notice </th>
  </tr>
<?php
// $time =  date("h:i:sa");
// $date = date("y-m-d");
// $myfile = fopen("online.txt", "a") or die ("Error");

$iplist = array
(
    array("192.168.1.1","Router we"),
    array("192.168.1.2","Router tp-link"),
    array("192.168.1.18","kail linux"),
    array("8.8.8.8","dns-google "),
    array("192.168.1.3","mobile"),
    array("osama.com","test"),
    array("192.168.1.4","salma"),
    array("192.168.1.100","nana"),
    array("192.168.1.5","malak"),
    array("192.168.1.10","yahia"),
    array("192.168.1.19","khalto")


);

$i = count($iplist);
$results = [];
for($j=0;$j<$i;$j++){
    $ip = $iplist[$j][0];
    $ping = exec("ping -n 1 $ip",$output,$status);
    $results[] = $status;

}



foreach($results as $item =>$k){
 echo '<tr>';
 echo '<td>'.$item.'</td>';
 echo '<td class="ip">'.$iplist[$item][0].'</td>';
//  echo '<td>'.$results[$item].'</td>';


// echo $item;
// echo $iplist[$item][0];
// echo $results[$item];}
// echo $iplist[$item][1];

 if($results[$item] ==0){
     echo'<td class="sts"> Online </td>';
 }else if($results[$item] == 1){
    echo'<td class="stsof"> Offline </td>';

 }

 echo'<td class="ds">'.$iplist[$item][1].'</td>';
// $txt = $time ." => ". $date." => ".$iplist[$item][1];
// fwrite($myfile, $txt);
//  echo'</tr>';
}
echo'</table>';


echo header("refresh:5");
// echo $item;
// echo $iplist[$item][1];
// echo $results[$item];

?>
<!-- <video src="2021 LG OLED 8K l  Redwoods 8K HDR 60fps.mp4" controls></video> -->
</table>

</body>
</html>
