<?php
session_start();
if(!isset($_SESSION['ordinary'])){
header('Location: ../');
exit();	
}
?>