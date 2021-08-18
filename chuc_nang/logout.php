<?php
session_start();
session_destroy();
echo"<script>
	var src='../index.php';
	window.location.href=src;
</script>";
?>