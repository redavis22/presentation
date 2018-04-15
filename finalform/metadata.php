<?php
$instance_id = @file_get_contents("http://instance-data/latest/meta-data/instance-id");
?>
<html>
<br><br><br><br><br><br>
<h1><?php echo $instance_id; ?></h1>
</html> 
