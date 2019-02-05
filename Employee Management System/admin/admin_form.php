
<?php
include('../connection.php');
include('../functions.php');
include('session_admin.php');

if(isset($_POST['Submit1']))
{
	$insert="INSERT INTO emp_posts(`post_name`) VALUES('".$_POST['p_name']."')";
	$query_insert=mysql_query($insert) or die(mysql_error());
	if($query_insert)
	{
		$msg2= "record inserted successfully";
	}
	else
	{
	
		$msg2= "Data not inserted";
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>HRM (ICUP)</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
body {
	background-image: url(image/BG_Img_1.png);
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
<link href="main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onload="MM_preloadImages('image/1_01.gif','image/1_05.gif','image/1_04.gif','image/1_06.gif')">
<form id="form1" name="form1" method="post" action="">
  <table width="1014" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center"><table width="1000" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="3"><img src="image/blue_color_01.gif" width="1014" height="10" /></td>
          </tr>
        <tr>
          <td width="8"><img src="image/blue_color_02.gif" width="8" height="170" /></td>
          <td width="988" align="center"><img src="image/Capture.jpg" width="996" height="170" /></td>
          <td width="10"><img src="image/blue_color_04.gif" width="10" height="170" /></td>
        </tr>
        <tr>
          <td colspan="3"><img src="image/blue_color_05.gif" width="1014" height="10" /></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td align="center"><table width="1016" border="1" align="center">
        <tr>
          <td align="center" bgcolor="#FFFFFF"><a href="admin_form.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image26','','image/1_01.gif',1)"><img src="image/Untitled-1_01_01.gif" alt="" name="Image26" width="219" height="40" border="0" id="Image26" /></a><a href="reports.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image23','','image/1_05.gif',1)"><img src="image/Untitled-1_01_05.gif" alt="" name="Image23" width="204" height="40" border="0" id="Image23" /></a><a href="signup.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image24','','image/1_04.gif',1)"><img src="image/Untitled-1_01_04.gif" alt="" name="Image24" width="210" height="40" border="0" id="Image24" /></a><a href="../logout.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image25','','image/1_06.gif',1)"><img src="image/Untitled-1_01_06.gif" alt="" name="Image25" width="208" height="40" border="0" id="Image25" /></a></td>
        </tr>
      </table>
	  <table width="1015" border="0" align="center" cellpadding="0" cellspacing="0">
	    <tr>
	      <td width="10" align="center" valign="top"><img src="image/blue_color_02.gif" width="9" height="480" align="middle" /></td>
	      <td width="996" align="center"><table width="100%" height="476" border="0">
	        <tr>
	          <td align="center" bgcolor="#CCCCCC"><table width="405" border="1">
	            <tr>
	              <td align="center"><table width="371" border="0">
	                <tr>
	                  <td colspan="2" align="center">ADD POSTS</td>
	                  </tr>
	                <tr>
	                  <td width="155" align="right">POST NAME</td>
	                  <td width="200"><span id="sprytextfield3">
	                    <label for="post_name2"></label>
	                    <input type="text" name="p_name" id="post_name2" />
	                    </span></td>
	                  </tr>
	                </table></td>
	              </tr>
	            </table>
	            <input type="submit" name="Submit1" id="Submit1" value="Submit" />
	           <?php echo $msg2 ?>
	            <br />
	            <table width="481" border="0">
	              <tr>
	                <td width="526" align="center"><br />
	                  *************/////////////////////////////////////////////////////*************</td>
	                </tr>
	              </table>
                  <?php

if(isset($_POST['Submit2']))
{
	$insert="INSERT INTO departments(`dept_name`) VALUES('".$_POST['d_name']."')";
	$query_insert=mysql_query($insert) or die(mysql_error());
	if($query_insert)
	{
		$msg3= "record inserted successfully";
	}
	else
	{
	
		$msg3= "Data not inserted";
	}
}
?>
	            <table width="405" border="1">
	              <tr>
	                <td align="center"><table width="371" border="0">
	                  <tr>
	                    <td colspan="2" align="center">ADD DEPARTMENTS</td>
	                    </tr>
	                  <tr>
	                    <td width="197" align="right">DEPARTMENT NAME</td>
	                    <td width="158"><span id="sprytextfield">
	                      <label for="n_name"></label>
	                      <input type="text" name="d_name" id="department_name2" />
	                      </span></td>
	                    </tr>
	                  </table></td>
	                </tr>
	              </table>
	            <input type="submit" name="Submit2" id="Submit2" value="Submit" />
	          <?php echo $msg3 ?>
	            <br />
	            <table width="481" border="0">
	              <tr>
	                <td width="526" align="center"><br />
	                  *************/////////////////////////////////////////////////////*************</td>
	                </tr>
	              </table>
   <?php
if(isset($_POST['Submit3']))
{
	$insert="INSERT INTO newspaper(`newspaper_name`) VALUES('".$_POST['n_name']."')";
	$query_insert=mysql_query($insert) or die(mysql_error());
	if($query_insert)
	{
		$msg4= "record inserted successfully";
	}
	else
	{
	
		$msg4= "Data not inserted";
	}
}
?>
	            <table width="405" border="1">
	              <tr>
	                <td align="center"><table width="371" border="0">
	                  <tr>
	                    <td colspan="2" align="center">ADD NEWS PAPERS</td>
	                    </tr>
	                  <tr>
	                    <td width="197" align="right">NEWSPAPER NAME</td>
	                    <td width="158"><span id="sprytextfield2">
	                      <label for="department_name3"></label>
	                      <input type="text" name="n_name" id="department_name3" />
	                      </span></td>
	                    </tr>
	                  </table></td>
	                </tr>
	              </table>
	            <p>
	              <input type="submit" name="Submit3" id="Submit3" value="Submit" />
                  <?php echo $msg4 ?>
	              <br />
	            </p></td>
	          </tr>
	        </table></td>
	      <td width="9" align="center"><img src="image/blue_color_04.gif" width="9" height="480" /></td>
	      </tr>
	    <tr>
	      <td colspan="3" align="center" valign="top"><img src="image/blue_color_05.gif" width="1014" height="14" /></td>
	      </tr>
	    </table>

	</td>
    </tr>
    
  </table>
  <?php require_once("footer2.php");?>
</form>
<script type="text/javascript">;
</script>
</body>
</html>