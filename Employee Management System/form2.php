<?php
include('session_deo.php');
include('connection.php');
include('functions.php');



if(isset($_POST['Submit1']))
{	
	
	//for more calendars go to www.dynamicdrive.com.......hahahahahaha
       $insert="INSERT INTO `emp_leave` (`leave_id`, `emp_id`, `date_of_leave`, `purpose_of_leave`, `exp_date_of_arrival`, `paid_unpaid`) VALUES ('','".$_POST['lid']."','".$_POST['orderdate']."','".$_POST['purpose']."','".$_POST['orderdate1']."','".$_POST['paid/unpaid']."')";
	$query_insert=mysql_query($insert);
	if($query_insert)
	{
		$msg1= "record inserted successfully";
	}
	else
	{
	
		$msg1= "Data not inserted";
	}
	
	
}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>HRM (ICUP)</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script src="calendarDateInput.js" type="text/javascript"></script>
<link href="main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
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

<body onload="MM_preloadImages('image/1_01.gif','image/1_02.gif','image/1_03.gif')">
<table width="1309" height="177" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><img src="image/blue_color_01.gif" alt="" width="1308" height="11" /></td>
  </tr>
  <tr>
    <td width="8" height="154"><img src="image/blue_color_02.gif" alt="" width="8" height="155" /></td>
    <td width="1290" align="center"><img src="image/Capture.jpg" alt="" width="1290" height="155" /></td>
    <td width="11"><img src="image/blue_color_04.gif" alt="" width="10" height="155" /></td>
  </tr>
  <tr>
    <td height="11" colspan="3"><img src="image/blue_color_05.gif" alt="" width="1308" height="11" /></td>
  </tr>
</table>
<table width="1310" height="36" border="0" align="center">
  <tr>
    <td width="1317" height="32" align="center" bgcolor="#FFFFFF"><a href="new.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','image/1_01.gif',1)"><img src="image/Untitled-1_01_01.gif" alt="" name="Image1" width="219" height="30" border="0" id="Image1" /></a><a href="form2.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image21','','image/1_02.gif',1)"><img src="image/Untitled-1_01_02.gif" alt="" name="Image21" width="258" height="30" border="0" id="Image21" /></a><a href="logout.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image31','','image/1_03.gif',1)"><img src="image/Untitled-1_01_03.gif" alt="" name="Image31" width="214" height="30" border="0" id="Image31" /></a></td>
  </tr>
</table>
<table width="1307" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="" height="" align="center"><form id="form1" name="form1" method="post" action="form2.php">
      <div id="TabbedPanels1" class="TabbedPanels">
    <ul class="TabbedPanelsTabGroup">
      <li class="TabbedPanelsTab" tabindex="0">EMPLOYEE LEAVE &amp; WORK LOAD</li>
      <li class="TabbedPanelsTab" tabindex="0">EMPLOYEE CHILDRENS &amp; CANDIDATE</li>
      <li class="TabbedPanelsTab" tabindex="0">EMPLOYEE SCHOLARSHIPS &amp; TERMINATION</li>
      <li class="TabbedPanelsTab" tabindex="0">ADDITIONAL CHARGE</li></ul>
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent">
      
        
        <br />
        Select Employee ID
<select name="lid" id="lid">
                <?php 
								$id = get_emp_id();
							for($i=0;$i<count($id[0]);$i++)
								echo "<option value='".$id[0][$i]."'>".$id[0][$i]."</option>";
						?>
              </select>
        <br />
        <table width="381" border="1">
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">EMPLOYEE LEAVE</td>
            </tr>
          <tr>
            <td width="157" bgcolor="#3AA33C">Date Of Leave</td>
            <td width="208" bgcolor="#3AA33C"><script>DateInput('orderdate','true','YYYY-MM-DD')</script></td>
            </tr>
          <tr>
            <td bgcolor="#3AA33C"><label for="">Purpose Of Leave</label></td>
            <td bgcolor="#3AA33C"><label for="purpose"></label>
              <input type="text" name="purpose" id="purpose" />              
              <label for=""></label></td>
            </tr>
          <tr>
            <td bgcolor="#3AA33C">Expect Date Of Arrival</td>
            <td bgcolor="#3AA33C"><script>DateInput('orderdate1','true','YYYY-MM-DD')</script></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bgcolor="#3AA33C"><label for="paid/unpaid">Leave<br />
</label></td>
            <td align="center" valign="middle" bgcolor="#3AA33C">Paid
              <input type="radio" name="paid/unpaid" id="radio" value="paid" />
Unpaid
<label for="paid/unpaid">
  <input type="radio" name="paid/unpaid" id="radio2" value="unpaid" />
</label></td>
            </tr>
        </table>
        <br />
        <input type="submit" name="Submit1" id="Submit1" value="Submit" />
        <?php echo $msg1 ?><br />
        <table width="200" border="0" align="center">
          <tr>
            <td>************************************************************************************************************************</td>
          </tr>
        </table>
        <br />
        <?php
        if(isset($_POST['Submit2']))
{	
	
	//for more calendars go to www.dynamicdrive.com.......hahahahahaha
       $insert="INSERT INTO `emp_extra_work_load` (`shift_id`, `emp_id`, `work_name`, `hours_per_day`, `pay_per_day`) VALUES ('','".$_POST['wid']."','".$_POST['work_name']."','".$_POST['hours_per_day']."','".$_POST['pay_per_day']."')";
	$query_insert=mysql_query($insert);
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
        Select Employee ID
                          <select name="wid" id="wid">
                    <?php 
								$wid = get_emp_id();
							for($i=0;$i<count($wid[0]);$i++)
								echo "<option value='".$wid[0][$i]."'>".$wid[0][$i]."</option>";
						?>
                  </select>
        <table width="371" border="1">
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">WORK LOAD</td>
          </tr>
          <tr>
            <td width="197" bgcolor="#3AA33C">Work Name</td>
            <td width="158" bgcolor="#3AA33C"><span id="sprytextfield3">
              <label for="work_name"></label>
              <input type="text" name="work_name" id="work_name" />
            </span></td>
          </tr>
          <tr>
            <td bgcolor="#3AA33C">Hours Per Day</td>
            <td bgcolor="#3AA33C"><label for="label"></label>
              <span id="sprytextfield4">
                <label for="text1"></label>
                <input type="text" name="hours_per_day" id="text1" />
              </span></td>
          </tr>
          <tr>
            <td bgcolor="#3AA33C">Pay Per Day</td>
            <td bgcolor="#3AA33C"><label for="pay_per_day"></label>
              <input type="text" name="pay_per_day" id="pay_per_day" /></td>
          </tr>
          </table>
        <br />
        <input type="submit" name="Submit2" id="Submit2" value="Submit" />
        <?php echo $msg2 ?></div>
      <div class="TabbedPanelsContent">
        <br />
                Select Employee ID
                          <select name="cid" id="cid">
                    <?php 
								$cid = get_emp_id();
							for($i=0;$i<count($cid[0]);$i++)
								echo "<option value='".$cid[0][$i]."'>".$cid[0][$i]."</option>";
						?>
                  </select>
        <?php
		
		if(isset($_POST['Submit3']))
{	
	
	//for more calendars go to www.dynamicdrive.com.......hahahahahaha
       $insert="INSERT INTO `emp_children` (`child_id`, `emp_id`, `child_name`, `date_of_birth`) VALUES ('','".$_POST['cid']."','".$_POST['cname']."','".$_POST['orderdate2']."')";
	$query_insert=mysql_query($insert);
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
        <table width="388" border="1" align="center" bgcolor="#999933">
          <tr>
            <td  colspan='4'  bgcolor='#CCCCCC'>EMPLOYEE CHILDRENS</td>
          </tr>
          <br/>
          <tr bgcolor="#999933">
            <td width="155"  align='center' valign='bottom' bgcolor="#999933">Child Name</td>
            <td width="217" valign='bottom'><label for="cname"></label>
              <input type="text" name="cname" id="cname" /></td>
          </tr>
          <tr bgcolor="#999933">
            <td  align='center' valign='bottom' bgcolor="#999933">Date Of Birth</td>
            <td > <script>DateInput('orderdate2','true','YYYY-MM-DD')</script></td>
          </tr>
         
        </table>
        <br />
        <input type="submit" name="Submit3" id="Submit3" value="Submit" />
        <?php echo $msg3 ?><br />
        <br />
        <table width="200" border="0" align="center">
          <tr>
            <td>************************************************************************************************************************</td>
          </tr>
      </table>
        <br />
                Select Employee ID
                          <select name="canid" id="canid">
                    <?php 
								$canid = get_emp_id();
							for($i=0;$i<count($canid[0]);$i++)
								echo "<option value='".$canid[0][$i]."'>".$canid[0][$i]."</option>";
						?>
                  </select>
        <?php
		
		if(isset($_POST['Submit4']))
{	
	
	//for more calendars go to www.dynamicdrive.com.......hahahahahaha
       $insert="INSERT INTO `emp_candidate` (`candidate_id`, `emp_id`, `marks`, `award_title`) VALUES ('','".$_POST['canid']."','".$_POST['marks']."','".$_POST['award']."')";
	$query_insert=mysql_query($insert);
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
        <table width="388" border="1" align="center" bgcolor="#999933">
          <tr>
            <td  colspan='4'  bgcolor='#CCCCCC'>EMPLOYEE CANDIDATE</td>
          </tr>
          <br/>
          <tr bgcolor="#999933">
            <td width="187"  align='center' valign='bottom' bgcolor="#999933">Marks</td>
            <td width="185" valign='bottom'><label for="cname"></label>
              <input type="text" name="marks" id="cname" /></td>
          </tr>
          <tr bgcolor="#999933">
            <td  align='center' valign='bottom' bgcolor="#999933">Award Title</td>
            <td width="185" valign='bottom'><label for="award"></label>
              <input type="text" name="award" id="award" />              
              <label for="textfield2"></label></td>
          </tr>
          
        </table>
        <p>
          <input type="submit" name="Submit4" id="Submit4" value="Submit" />
          <?php echo $msg4 ?></p>
      </div>
      <div class="TabbedPanelsContent">
              <br />
              Select Employee ID
<select name="schid" id="schid">
                <?php 
								$schid = get_emp_id();
							for($i=0;$i<count($schid[0]);$i++)
								echo "<option value='".$schid[0][$i]."'>".$schid[0][$i]."</option>";
						?>
                </select>
        <?php
		
		if(isset($_POST['Submit5']))
{	
	
	//for more calendars go to www.dynamicdrive.com.......hahahahahaha
       $insert="INSERT INTO `emp_scholarships` (`scholar_id`, `emp_id`, `marks`, `referee`, `scholarship_title`) VALUES ('','".$_POST['schid']."','".$_POST['smarks']."','".$_POST['refer']."','".$_POST['stitle']."')";
	$query_insert=mysql_query($insert);
	if($query_insert)
	{
		$msg5= "record inserted successfully";
	}
	else
	{
	
		$msg5= "Data not inserted";
	}
	
	
}

		?>
        <br />
        <table width="388" border="1" align="center" bgcolor="#999933">
          <tr>
            <td  colspan='4'  bgcolor='#CCCCCC'>EMPLOYEE SCHOLARSHIPS</td>
          </tr>
          <br/>
          <tr bgcolor="#999933">
            <td width="187"  align='center' valign='bottom' bgcolor="#999933">Marks</td>
            <td width="185" valign='bottom'><label for="cname"></label>
              <input type="text" name="smarks" id="cname" /></td>
          </tr>
          <tr bgcolor="#999933">
            <td  align='center' valign='bottom' bgcolor="#999933">Reference</td>
            <td width="185" valign='bottom'><label for="award"></label>
              <input type="text" name="refer" id="award" />
              <label for="textfield2"></label></td>
          </tr>
          <tr bgcolor="#999933">
            <td  align='center' valign='bottom' bgcolor="#999933">Scholarship Title</td>
            <td width="185" valign='bottom'><label for="stitle"></label>
              <input type="text" name="stitle" id="stitle" /></td>
          </tr>
        </table>
        <p>
          <input type="submit" name="Submit5" id="Submit5" value="Submit" />
          <?php echo $msg5 ?></p>
        <table width="200" border="0" align="center">
          <tr>
            <td>************************************************************************************************************************</td>
          </tr>
        </table>
                Select Employee ID
                          <select name="terid" id="id">
                    <?php 
								$terid = get_emp_id();
							for($i=0;$i<count($terid[0]);$i++)
								echo "<option value='".$terid[0][$i]."'>".$terid[0][$i]."</option>";
						?>
                  </select>
        <?php
		
		if(isset($_POST['Submit6']))
{	
	
	//for more calendars go to www.dynamicdrive.com.......hahahahahaha
       $insert="INSERT INTO `emp_termination` (`termination_id`, `emp_id`, `termination_date`, `reason`, `status`) VALUES ('','".$_POST['terid']."','".$_POST['orderdate3']."','".$_POST['reason']."','".$_POST['termination_status']."')";
	$query_insert=mysql_query($insert);
	if($query_insert)
	{
		$msg6= "record inserted successfully";
	}
	else
	{
	
		$msg6= "Data not inserted";
	}
	
	
}

		?>
        <br />
        <table width="349" height="137" border="1" align="center" bgcolor="#999933">
          <tr>
            <td  colspan='4'  bgcolor='#CCCCCC'>EMPLOYEE TERMINATION</td>
          </tr>
          <br/>
          <tr bgcolor="#999933">
            <td width="132"  align='center' valign='bottom' bgcolor="#999933">Termination Date</td>
            <td><script>DateInput('orderdate3','true','YYYY-MM-DD')</script> </td>
          </tr>
          <tr bgcolor="#999933">
            <td  align='center' valign='middle' bgcolor="#999933">Reason</td>
            <td width="201" valign='bottom'><label for="award"></label>
              <label for="reason"></label>
              <textarea name="reason" id="reason" rows="3"></textarea>
              <label for="textfield2"></label></td>
          </tr>
          <tr bgcolor="#999933">
            <td  align='center' valign='bottom' bgcolor="#999933">Termination Status</td>
            <td width="201" valign='bottom'> Permanent
              <label for="termination_status"></label>
              <input name="termination_status" id="radio3" value="permanent" type="radio" />
              Contract   
<input name="termination_status" id="radio4" value="contract" type="radio" /></td>
          </tr>
        </table>
        <p>
          <input type="submit" name="Submit6" id="Submit6" value="Submit" />
          <?php echo $msg6 ?></p>
      </div>
      <div class="TabbedPanelsContent">
              <br />
              Select Employee ID
<select name="addid" id="addid">
                <?php 
								$addid = get_emp_id();
							for($i=0;$i<count($addid[0]);$i++)
								echo "<option value='".$addid[0][$i]."'>".$addid[0][$i]."</option>";
						?>
                </select>
        <?php
		
		if(isset($_POST['Submit7']))
{	
	
	//for more calendars go to www.dynamicdrive.com.......hahahahahaha
       $insert="INSERT INTO `additional_charges` (`charge_id` , `emp_id`, `charge_title`, `date`, `dept_id`) VALUES ('','".$_POST['addid']."','".$_POST['chargetitle']."','".$_POST['orderdate4']."','".$_POST['department']."')";
	$query_insert=mysql_query($insert);
	if($query_insert)
	{
		$msg7= "record inserted successfully";
	}
	else
	{
	
		$msg7= "Data not inserted";
	}
	
	
}

		?><br />
        <table width="388" border="1" align="center" bgcolor="#999933">
          <tr>
            <td  colspan='4'  bgcolor='#CCCCCC'>ADDITIONAL CHARGES</td>
          </tr>
          <br/>
          <tr bgcolor="#999933">
            <td width="162"  align='center' valign='bottom' bgcolor="#999933">Charge Title</td>
            <td width="210" valign='bottom'><label for="cname"></label>
              <input type="text" name="chargetitle" id="cname" /></td>
          </tr>
          <tr bgcolor="#999933">
            <td  align='center' valign='bottom' bgcolor="#999933">Date</td>
            <td><script>DateInput('orderdate4','true','YYYY-MM-DD')</script></td>
          </tr>
          <tr bgcolor="#999933">
            <td  align='center' valign='bottom' bgcolor="#999933">Department</td>
            <td><select name="department" id="department">
                    <?php 
								$depts = get_dept();
							for($i=0;$i<count($depts[0]);$i++)
								echo "<option value='".$depts[0][$i]."'>".$depts[1][$i]."</option>";
						?>
                  </select>
               </td>
          </tr>
          </table>
        <br />
        <input type="submit" name="Submit7" id="Submit7" value="Submit" />
        <?php echo $msg7 ?><br />
        <p>          <br />
      </p>
      </div>
    </div>
  </div>
    </form>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
    
    </td>
  </tr>
</table>
<table width="1314" border="0" align="center">
  <tr>
    <td align="center"><?php require_once("footer.php");?></td>
  </tr>
</table>
<br />
</body>
</html>