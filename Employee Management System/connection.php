<?PHP

error_reporting('e_all^e_notice');
session_start();
$connection=mysql_connect("localhost","root","") or die(mysql_error());

$db=mysql_select_db("hrm") or die(mysql_error());


 try{
        $connect = new PDO("mysql:host=localhost;dbname=hrm",'root',''); 
        $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
    }catch(PDOException $e){
        //echo $e->getMessage();
        echo "An error occured wile connecting to the d base";
    }
 ?>