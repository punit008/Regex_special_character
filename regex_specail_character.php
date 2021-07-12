<!DOCTYPE html>
<html>
<body>

<?php
$data = "!mlealfM&";
//$new_data = str_replace  ("'", "", $data);
$new_data = preg_replace ('/[^\p{L}\p{N}]/u', '/', $data);
echo $new_data;
?>

</body>
</html>
