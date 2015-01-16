<?php
// ini tempat URL FEED RSS yang mau anda tampilkan
$feed = curl_init('http://blog.mercubuana-yogya.ac.id/feed/');
curl_setopt($feed, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($feed, CURLOPT_HEADER, 0);
$xml = simplexml_load_string(curl_exec($feed));
curl_close($feed);
//jika feed ada maka ini akan dilajutkan...
if ($xml!=''){
foreach ($xml->channel->item as $item){
// membuat variabel dari judul dan deskripsi (bisa juga menggunakan gambar)
$title = $item->title;
$description = $item->description;
// menapilkan deskripsi dan judul pada browser Anda
echo '<p><b>'.$title.'</b><br />'.$description.'</p>';
}}
?>