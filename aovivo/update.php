<?php
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
$link = mysqli_connect("livesrrec.mysql.uhserver.com", "livesrrec", "W7bfirolho@", "livesrrec");
$sql =  "Select * from evento_liga where id = 1";
$result = mysqli_query($link, $sql);
$data = mysqli_fetch_array($result);
echo $data['finalizado'];
?>