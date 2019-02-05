<?php  
	include('session_admin.php');
include('../connection.php');
include('../functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EMP PROFILES</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(image/BG_Img_1.png);
}
</style>
</head>

<body>
<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	try{
		$query = "SELECT * FROM emp_personal WHERE emp_id = ?";
		$q = $connect->prepare($query);
		$q->execute(array($id));
		$result = $q->fetch();
	}catch(PDOException $e){
	echo $e->getMessage();
		
	}

?>
<table width="1145" height="177" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><img src="image/blue_color_01.gif" alt="" width="1145" height="11" /></td>
  </tr>
  <tr>
    <td width="8" height="154" align="center"><img src="image/blue_color_02.gif" alt="" width="8" height="155" /></td>
    <td width="1128" align="center"><img src="image/Capture.jpg" alt="" width="1127" height="155" /></td>
    <td width="10" align="center"><img src="image/blue_color_04.gif" alt="" width="10" height="155" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="image/blue_color_05.gif" alt="" width="1145" height="11" /></td>
  </tr>
</table>

<table width="1145" border="1" align="center" bordercolor="#000000">
  <tr>
    <td><table width="100%" height="642" border="0" align="center">
      <tr>
        <td colspan="4" align="center" valign="top" bgcolor="#CCFFFF"><a href="emp_pers.php"></a><img src="../uploaded/<?php echo $result['pic']?> " alt="" width="100" height="100" /></td>
      </tr>
      <tr>
        <td  colspan="4" align="center" valign="top" bgcolor="#CCFFFF" style="font-size:30px"><?php echo $result['name']?></td>
      </tr>
      <tr>
        <td width="563" height="248" align="center" valign="top" bgcolor="#CCFFFF"><h3>Basic Info </h3>
          <table width="537" border="1" cellpadding="5">
            <tr>
              <td width="96" bgcolor="#99CCCC">Father Name</td>
              <td width="153" bgcolor="#FFFFFF"><?php echo $result['f_name']?></td>
              <td width="118" bgcolor="#99CCCC">Home Address</td>
              <td width="110" bgcolor="#FFFFFF"><?php echo $result['address']?></td>
              </tr>
            <tr>
              <td bgcolor="#99CCCC">Date Of Birth</td>
              <td bgcolor="#FFFFFF"><?php echo $result['date_of_birth']?></td>
              <td bgcolor="#99CCCC">Domicile</td>
              <td bgcolor="#FFFFFF"><?php echo $result['domicle']?></td>
              </tr>
            <tr>
              <td bgcolor="#99CCCC">NIC</td>
              <td bgcolor="#FFFFFF"><?php echo $result['nic']?></td>
              <td bgcolor="#99CCCC">Contact Number</td>
              <td bgcolor="#FFFFFF"><?php echo $result['contact']?></td>
              <?php
			  	try{
					$query = "SELECT applyment.*, emp_posts.post_name FROM applyment JOIN emp_posts ON applyment.post_id = emp_posts.post_id WHERE applyment.emp_id = ?";
					$q = $connect->prepare($query);
					$q->execute(array($id));
					$result = $q->fetch();
				}catch(PDOException $e){
					echo $e->getMessage();
				}
			  
			  ?>
              </tr>
            <tr>
              <td bgcolor="#99CCCC">Post</td>
              <td bgcolor="#FFFFFF"><?php echo $result['post_name']?></td>
              <?php
			  	try{
					$query = "SELECT applyment.*, departments.dept_name FROM applyment JOIN departments ON applyment.dept_id = departments.dept_id WHERE applyment.emp_id = ?";
					$q = $connect->prepare($query);
					$q->execute(array($id));
					$result = $q->fetch();
				}catch(PDOException $e){
					echo $e->getMessage();
				}
			  
			  ?>
              
              <td bgcolor="#99CCCC">Department</td>
              <td bgcolor="#FFFFFF"><?php echo $result['dept_name']  ?></td>
              </tr>
            <tr>
              <td bgcolor="#99CCCC">Job Status</td>
              <td bgcolor="#FFFFFF"><?php echo $result['job_status']  ?></td>
              <td colspan="2">&nbsp;</td>
              </tr>
            </table></td>
        <td width="562" align="center" valign="top" bgcolor="#CCFFFF"><h3>Education History </h3>
          <?php
			  	try{
					$query = "SELECT * FROM acadamic_records WHERE emp_id = ?";
					$q = $connect->prepare($query);
					$q->execute(array($id));
					
				?>
          <table width="488" border="1" cellpadding="5">
            <tr>
              <td width="61" bgcolor="#99CCCC">Exam</td>
              <td width="99" bgcolor="#99CCCC">Subject</td>
              <td width="55" bgcolor="#99CCCC">Year Of Passing</td>
              <td width="83" bgcolor="#99CCCC"> Grade/<br />
                Division/GPA</td>
              <td width="60" bgcolor="#99CCCC">Obtained Marks</td>
              <td width="42" bgcolor="#99CCCC">Totle Marks</td>
              </tr>
            <?php
			while($result=$q->fetch(PDO::FETCH_ASSOC)){
			echo "<tr>
              <td width='67' bgcolor='#FFFFFF'>".$result['exam']."</td>
              <td width='67' bgcolor='#FFFFFF'>".$result['subject']."</td>
              <td width='67' bgcolor='#FFFFFF'>".$result['year_of_passing']."</td>
              <td width='108' bgcolor='#FFFFFF'>".$result['divi_grade_gpa']."</td>
              <td width='67' bgcolor='#FFFFFF'>".$result['marks_obtain']."</td>
              <td width='74' bgcolor='#FFFFFF'>".$result['total_marks']."</td>
            </tr>";
			}
			}catch(PDOException $e){
					echo $e->getMessage();
				}
			  
			  ?>
            </table>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td align="center" valign="top" bgcolor="#CCFFFF"><h3>Research History
          <?php
			  	try{
					$query = "SELECT * FROM emp_researchs WHERE emp_id = ?";
					$q = $connect->prepare($query);
					$q->execute(array($id));
					
				?>
        </h3>
          <table width="530" border="1" cellpadding="5">
            <tr>
              <td width="157" bgcolor="#99CCCC">Nature Of Research</td>
              <td width="197" bgcolor="#99CCCC">Name Of Institute</td>
              <td width="130" bgcolor="#99CCCC">Name Of Professor</td>
            </tr>
            <?php
			while($result=$q->fetch(PDO::FETCH_ASSOC)){
			echo "<tr>
              <td width='67' bgcolor='#FFFFFF'>".$result['nature_of_research']."</td>
              <td width='67' bgcolor='#FFFFFF'>".$result['name_of_institute']."</td>
              <td width='67' bgcolor='#FFFFFF'>".$result['name_of_professor']."</td>

            </tr>";
			}
			}catch(PDOException $e){
					echo $e->getMessage();
				}
			  
			  ?>
        </table>
          <p>&nbsp;</p></td>
        <td align="center" valign="top" bgcolor="#CCFFFF"><h3>Publications
          <?php
			  	try{
					$query = "SELECT * FROM emp_publication WHERE emp_id = ?";
					$q = $connect->prepare($query);
					$q->execute(array($id));
					
				?>
          </h3>
          <table width="488" border="1" cellpadding="5">
            <tr>
              <td width="222" bgcolor="#99CCCC">Title</td>
              <td width="65" bgcolor="#99CCCC">Year</td>
              <td width="97" bgcolor="#99CCCC">Volume No</td>
              <td width="56" bgcolor="#99CCCC">Pages</td>
              </tr>
            <?php
			while($result=$q->fetch(PDO::FETCH_ASSOC)){
			echo "<tr>
              <td width='67' bgcolor='#FFFFFF'>".$result['title']."</td>
              <td width='67' bgcolor='#FFFFFF'>".$result['year']."</td>
              <td width='67' bgcolor='#FFFFFF'>".$result['vol_number']."</td>
              <td width='108' bgcolor='#FFFFFF'>".$result['pages']."</td>

            </tr>";
			}
			}catch(PDOException $e){
					echo $e->getMessage();
				}
			  
			  ?>
            </table>
          <p><br />
          </p></td>
      </tr>
      <tr>
        <td align="center" valign="top" bgcolor="#CCFFFF"><h3>Country Visited 
          <?php
			  	try{
					$query = "SELECT * FROM emp_country_visited WHERE emp_id = ?";
					$q = $connect->prepare($query);
					$q->execute(array($id));
					
				?>
        </h3>
          <table width="529" border="1" cellpadding="5">
            <tr>
              <td width="213" bgcolor="#99CCCC">Name Of Country</td>
              <td width="97" bgcolor="#99CCCC">Duration</td>
              <td width="144" bgcolor="#99CCCC">Purpose</td>
            </tr>
            <?php
			while($result=$q->fetch(PDO::FETCH_ASSOC)){
			echo "<tr>
              <td width='67' bgcolor='#FFFFFF'>".$result['name_of_country']."</td>
              <td width='67' bgcolor='#FFFFFF'>".$result['duration']."</td>
              <td width='67' bgcolor='#FFFFFF'>".$result['purpose']."</td>
             

            </tr>";
			}
			}catch(PDOException $e){
					echo $e->getMessage();
				}
			  
			  ?>
          </table></td>
        <td align="center" valign="top" bgcolor="#CCFFFF"><h3>Scrutiny Committee
          <?php
			  	try{
					$query = "SELECT * FROM scrutiny_committee WHERE emp_id = ?";
					$q = $connect->prepare($query);
					$q->execute(array($id));
					
				?>
          </h3>
          <table width="487" border="1" cellpadding="5">
            <tr>
              <td colspan="2" align="center" bgcolor="#99CCCC">Members Name</td>
              </tr>
            <?php
			while($result=$q->fetch(PDO::FETCH_ASSOC)){
			echo "<tr>
              <td width='67' bgcolor='#FFFFFF' align='center'>".$result['members_name']."</td></tr>
			 <tr> <td width='67' bgcolor='#FFFFFF' align='center'>".$result['member_name2']."</td></tr>
			  <tr><td width='67' bgcolor='#FFFFFF' align='center'>".$result['member_name3']."</td></tr>
			 <tr> <td width='67' bgcolor='#FFFFFF' align='center'>".$result['member_name4']."</td></tr>
			 <tr> <td width='67' bgcolor='#FFFFFF' align='center'>".$result['member_name5']."</td>
			  </tr>";
			}
			}catch(PDOException $e){
					echo $e->getMessage();
				}
			  
			  ?>
          </table>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td align="right" valign="top" bgcolor="#CCFFFF"><form id="form1" name="form1" method="post" action="">
          <a href="emp_pers.php"><input type="button" name="Button" id="button" value="BACK" /></a>
          
        </form></td>
        <td align="left" valign="top" bgcolor="#CCFFFF"><input  onclick="window.print(); " type="submit" name="button2" id="button2" value="PRINT" /></td>
        </tr>
    </table></td>
  </tr>
</table>
<?php require_once("footer.php");?>
<br />
<br />
<br />
<?php
}
?>
</body>
</html>