<!DOCTYPE html>
<html>
<body>

<?php
$data = "!mlealfM&";
//$new_data = str_replace  ("'", "", $data);
// $new_data = preg_replace ('/[^\p{L}\p{N}]/u', '/', $data);
echo preg_replace('/([^A-Za-z0-9\s])/', '\\\\$1', $address);
echo $new_data;
?>

</body>
</html>
