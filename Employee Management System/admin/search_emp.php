
<?PHP
include('../connection.php');
include('../functions.php');
include('session_admin.php');
include("pagination.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="pagination.css"/>
<title>SEARCH EMPLOYEE</title>
<style type="text/css">
body {
	background-image: url(image/BG_Img_1.png);
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>

<body>
<table width="1014" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><table width="1000" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3"><img src="image/blue_color_01.gif" alt="" width="1014" height="10" /></td>
      </tr>
      <tr>
        <td width="8"><img src="image/blue_color_02.gif" alt="" width="8" height="170" /></td>
        <td width="988" align="center"><img src="image/Capture.jpg" alt="" width="996" height="170" /></td>
        <td width="10"><img src="image/blue_color_04.gif" alt="" width="10" height="170" /></td>
      </tr>
      <tr>
        <td colspan="3"><img src="image/blue_color_05.gif" alt="" width="1014" height="10" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" >

    <table width="1014" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
      
        <td  valign="top"><img src="image/blue_color_02.gif" alt="" width="9" height="450" /></td>
        <td width="997"  align="center">
        <form method="post" action="">
        
     <table align="center" cellspacing="5"><tr><td align="left">SELECT DEPARTMENT</td>
<td>
<select name="department" id="department">
<option value="">All Employees</option>
                    <?php 
								$depts = get_dept();
							for($i=0;$i<count($depts[0]);$i++)
								echo "<option value='".$depts[0][$i]."'>".$depts[1][$i]."</option>";
						?>
                </select>

</td><td align="center"><input type="hidden" name="search" value="true"/><input type="submit" value="Search"/></td>
</form>
</tr>
<?php
	if(isset($_POST['department'])){
		
		$dept_id = $_POST['department'];
	}
	if($dept_id == ''){
$page = 1;
  $limit = 5;
  $start =0;
 if(isset($_GET['page'])){
	 $page=$_GET['page'];
 }
  	$start = ($page-1)*$limit;
	  $total_rocords = search_emp($start,$limit,$dept_id);
	  echo pagination($limit,$page,'search_emp.php?page=',$total_rocords);
	}else{
		search_emp('','',$dept_id);	
	}
 
?>

  
     
   </td>
   
    
   </table><br />

   <form method="post" action="reports.php"><a href="reports.php"><input type="submit" name="button" id="button" value="BACK" /></a></form>
        <td width="9"><img src="image/blue_color_04.gif" alt="" width="9" height="450" /></td>
  </tr>
      <tr>
      <td colspan="3" valign="top"><img src="image/blue_color_05.gif" alt="" width="1014" height="14" /></td></tr>
     
</table>
<?php require_once("footer2.php");?>
</td></tr>
</body>
</html>