<?php
include('session_admin.php');
include('../connection.php');
include('../functions.php');
include('pagination.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="pagination.css"/>
<title>EMP LEAVES</title>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(../image/BG_Img_1.png);
	background-repeat: repeat;
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
    </table>
 
  <tr>
    <td align="center"><table width="1014" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td  valign="top"><img src="image/blue_color_02.gif" alt="" width="9" height="450" /></td>
        <td width="997"  align="center">

    <table width="500" border="0" align="center">
  <tr>
    <td align="center"><h1>EMPLOYEE LEAVES</h1></td>
  </tr>
</table>
<table border="1" align="center" cellpadding="5" cellspacing="1" id="report">
  <tr>
   
    <th align="center" bgcolor="#99FFCC">Employee ID</th>
    <th align="center" bgcolor="#99FFCC">Employee Name</th>
    <th align="center" bgcolor="#99FFCC">Date Of Leave</th>
    <th align="center" bgcolor="#99FFCC">Purpose Of Leave</th>
    <th align="center" bgcolor="#99FFCC">Expect Date Of Arrival</th>
    <th align="center" bgcolor="#99FFCC">leave</th>
    <th align="center" bgcolor="#99FFCC">Delete</th>
    <th align="center" bgcolor="#99FFCC">Update</th>
  </tr>
  <?php
  
  $page = 1;
  $limit = 5;
  $start =0;
 if(isset($_GET['page'])){
	 $page=$_GET['page'];
 }
  	$start = ($page-1)*$limit;
	  $total_rocords = getAllLEAVE($start,$limit);
	  $total_rocords = $total_rocords[6];
        $package = getAllLEAVE($start,$limit);
		$emp_id = $package[0];
		$leave_date = $package[1];
		$purpose= $package[2];
		$arrival_date = $package[3];
		$leave = $package[4];
		$leave_id = $package[5];
		
		for($i=0;$i<count($emp_id);$i++)
		{
			  echo "<tr>
			  		
					<td align='center' bgcolor='#FFFFFF'>".$emp_id[$i]."</td>
					<td align='center' bgcolor='#FFFFFF'>".get_emp_name($emp_id[$i])."</td>
					<td align='center' bgcolor='#FFFFFF'>".$leave_date[$i]."</td>
					<td align='center' bgcolor='#FFFFFF'>".$purpose[$i]."</td>
					<td align='center' bgcolor='#FFFFFF'>".$arrival_date[$i]."</td>
					<td align='center' bgcolor='#FFFFFF'>".$leave[$i]."</td>
					
					<td bgcolor='#FFFFFF'><a href='delete.php?lid=".$leave_id[$i]."'>Delete</a></td>
					<td bgcolor='#FFFFFF'><a href='update1.php?lid=".$leave_id[$i]."&update=leave'>Update</a></td>
				   </tr>";

		}
		echo "</table>";
		echo pagination($limit,$page,'leaves.php?page=',$total_rocords);
    
	?>
          <a href="reports.php"><input type="submit" name="button" id="button" value="BACK" /></a></td>
        <td width="9"><img src="image/blue_color_04.gif" alt="" width="9" height="450" /></td>
      </tr>
      <tr>
        <td colspan="3" valign="top"><img src="image/blue_color_05.gif" alt="" width="1014" height="14" /></td>
      </tr>
    </table></td>
  </tr>
</table>
    <?php require_once("footer2.php");?>
</body>
</html>