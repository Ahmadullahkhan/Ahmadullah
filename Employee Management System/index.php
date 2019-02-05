<?PHP
include('connection.php');
include('functions.php');

if(isset($_POST['LogIn']))
{
$usergroup = $_POST['users'];
 $select="select * from users where name='".$_POST['textfield']."' and
 passward='".$_POST['password1']."'";

 $query=mysql_query($select);

 $fetch=mysql_fetch_assoc($query);

 if($fetch)
 {
	if($fetch['user_group_id'] == $usergroup){
		if($usergroup == '1'){
			$_SESSION['admin'] = $fetch['name'];
			header('Location: admin/reports.php');
		}elseif($usergroup == '2'){
			$_SESSION['ordinary'] = $fetch['name'];
			header('Location: ordinary/reports.php');
		}elseif($usergroup == '3'){
			$_SESSION['deo'] = $fetch['name'];
			header('Location: new.php');
		}else{
			//
		}
	}
 }
 else
 {
	 $msg= "invalid username or password";
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
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="1014" align="center">
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
      <td align="center"><?PHP 
	if(!$_SESSION['users'])
	{
	?>
	  <table width="1015" border="0" align="center" cellpadding="0" cellspacing="0">
	    <tr>
	      <td width="10" valign="top"><img src="image/blue_color_02.gif" width="10" height="320" /></td>
	      <td width="997"><table width="622" height="268" border="0" align="center" class="table">
	        <tr>
	          <td width="271" height="263">&nbsp;</td>
	          <td width="341" align="left"><table width="87%" border="0" align="left">
	            <tr>
	              <td height="64" colspan="2">&nbsp;</td>
	              </tr>
	            <tr>
	              <td height="70" colspan="2" valign="middle"><label for="textfield4"></label>
	                <label for="textfield7"></label>
	                <input type="text" name="textfield" id="textfield7" />
	                <label for="textfield3"><br />
	                  </label></td>
	              </tr>
	            <tr>
	              <td height="30" colspan="2" valign="middle"><label for="textfield5"></label>
	                <span id="sprypassword1">
	                  <label for="password1"></label>
	                  <input type="password" name="password1" id="password1"  />
	                  </span></td>
	              </tr>
	            <tr>
	              <td width="31%" height="59" align="left"><p>
	                <label for="select"></label>
	                <select name="users" id="users">
	                  <?php 
								$users = get_usergroup();
							for($i=0;$i<count($users[0]);$i++)
								echo "<option value='".$users[0][$i]."'>".$users[1][$i]."</option>";
						?>
	                  </select>
	                  <br />
	                  <input name="LogIn" type="submit" id="LogIn" value="LOG IN" />
	              </p>
<p>&nbsp;</p></td>
	              <td width="69%" height="59" align="left"><?PHP echo $msg  ?></td>
	              </tr>
	            </table></tr>
	        <tr>
	          <td width="271" align="center"><table width="100%" border="0" align="center">
	            <tr> </tr>
	            </table></td>
	          </tr>
	        <tr>
	          <td width="271" align="center"><table width="100%" border="0" align="center">
	            <tr> </tr>
	            </table></td>
	          </tr>
	        <tr>
	          <td width="271" align="center"><table width="100%" border="0" align="center">
	            <tr> </tr>
	            </table></td>
	          </tr>
	        </table></td>
	      <td width="10"><img src="image/blue_color_04.gif" width="10" height="320" /></td>
	      </tr>
	    <tr>
	      <td colspan="3" valign="top"><img src="image/blue_color_05.gif" width="1015" height="14" /></td>
	      </tr>
	    </table>
	  <table width="1015" border="0" cellpadding="0" cellspacing="0">
	    <tr>
	      <td width="997" align="center"><table width="1314" border="0" align="center">
	        <tr>
	          <td align="center"><?php require_once("footer2.php");?></td>
	          </tr>
	        </table>	        <p>&nbsp;</p></td>
	      </tr>
    </table></td>
    </tr>
    <?PHP } ?>
  </table>
  <br />
</form>
<script type="text/javascript">;
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</body>
</html>