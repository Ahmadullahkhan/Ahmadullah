<?php
include('../connection.php');
include('../session_check.php');
include('session_admin.php');
include('pagination.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="pagination.css"/>
<title>UPDATE</title>
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
 
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="8" height="179"><img src="image/blue_color_02.gif" alt="" width="8" height="450" /></td>
        <td width="996">
        <table align="center">
<tr align="center"><td>
<h4>Update The Following<br />
</h4>

<?php
include"../connection.php";
if(isset($_GET['cid'])){
	$id = $_GET['cid'];
	$table = $_GET['update'];
	switch($table){
		case "child":
			try{
				$select = "SELECT * FROM emp_children WHERE child_id=?";
				$q=$connect->prepare($select);
				$q->execute(array($id));
				$result = $q->fetch();
				echo "<form method='post' action=''><table border='1' align='center'><td>Name</td><td><input type='text' name='name' value='".$result['child_name']."'/></td></tr>
				<tr><td>D.O.B</td><td><input type='text' name='dob' value='".$result['date_of_birth']."'/></td></tr>
				<tr><td><input type='hidden' name='update_child' value='true'/><input type='submit' value='Save'/>
				<input type='hidden' name='child_id' value='".$id."'/></td></tr></table></form>";
			}catch(PDOException $e){
				$e->getMessage();	
			}
		break;	
	}
}
if(isset($_POST['update_child'])){
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$child_id = $_POST['child_id'];
	try{
		$update = "UPDATE emp_children SET child_name=?, date_of_birth=? WHERE child_id=?";
		$q = $connect->prepare($update);
		if($q->execute(array($name,$dob,$child_id))){
		header('location: childs.php');
		}
	}catch(PDOException $e){
		echo $e->getMessage();	
	}

}
///////////////////////////////////////////////////////////////////
if(isset($_GET['ftid'])){
	$id = $_GET['ftid'];
	$table = $_GET['update'];
	switch($table){
		case "formal":
			try{
				$select = "SELECT * FROM emp_formal_traning WHERE traning_id=?";
				$q=$connect->prepare($select);
				$q->execute(array($id));
				$result = $q->fetch();
				echo "<form method='post' action=''><table border='1' align='center'>
				<td>Name Of Institute</td><td><input type='text' name='name' value='".$result['institute']."'/></td></tr>
				<td>Type Of Traning</td><td><input type='text' name='traning' value='".$result['type_of_traning']."'/></td></tr>
				<td>Period From</td><td><input type='text' name='pfrom' value='".$result['period_from']."'/></td></tr>
				<tr><td>Period To</td><td><input type='text' name='pto' value='".$result['period_to']."'/></td></tr>
				<tr><td>Certificate Or Diploma</td><td><input type='text' name='diploma' value='".$result['certificate_diploma']."'/></td></tr>
				<tr><td><input type='hidden' name='update_formal' value='true'/><input type='submit' value='Save'/>
				<input type='hidden' name='traning_id' value='".$id."'/></td></tr></table></form>";
			}catch(PDOException $e){
				$e->getMessage();	
			}
		break;	
	}
}
if(isset($_POST['update_formal'])){
	$name = $_POST['name'];
	$type_traning = $_POST['traning'];
	$pfrom = $_POST['pfrom'];
	$pto = $_POST['pto'];
	$diploma = $_POST['diploma'];
	$traning_id = $_POST['traning_id'];
	try{
		$update = "UPDATE emp_formal_traning SET 	institute=?, type_of_traning=?,	period_from=?,	period_to=?,certificate_diploma	=? WHERE traning_id=?";
		$q = $connect->prepare($update);
		if($q->execute(array($name,$type_traning,$pfrom,$pto,$diploma,$traning_id))){
		header('location: formal_traning.php');
		}
	}catch(PDOException $e){
		echo $e->getMessage();	
	}

}

///////////////////////////////////////////////////////////////////
if(isset($_GET['lid'])){
	$id = $_GET['lid'];
	$table = $_GET['update'];
	switch($table){
		case "leave":
			try{
				$select = "SELECT * FROM emp_leave WHERE leave_id=?";
				$q=$connect->prepare($select);
				$q->execute(array($id));
				$result = $q->fetch();
				echo "<form method='post' action=''><table border='1' align='center'>
				<td>Date Of Leave</td><td><input type='text' name='dol' value='".$result['date_of_leave']."'/></td>
				<tr><td>Purpose Of Leave</td><td><input type='text' name='pol' value='".$result['purpose_of_leave']."'/></tr></td>
				<tr><td>Date Of Arrival</td><td><input type='text' name='doa' value='".$result['exp_date_of_arrival']."'/><tr></td>
				<tr><td>Leave</td><td><input type='text' name='leave' value='".$result['paid_unpaid']."'/></tr></td>
				<tr><td><input type='hidden' name='update_leave' value='true'/><input type='submit' value='Save'/>
				<input type='hidden' name='leave_id' value='".$id."'/></td></tr></table></form>";
			}catch(PDOException $e){
				$e->getMessage();	
			}
		break;	
	}
}

if(isset($_POST['update_leave'])){
	$dol = $_POST['dol'];
	$pol = $_POST['pol'];
	$doa = $_POST['doa'];
	$leave = $_POST['leave'];
	$leave_id = $_POST['leave_id'];
	try{
		$update = "UPDATE emp_leave SET date_of_leave=?, purpose_of_leave=?,exp_date_of_arrival=?,paid_unpaid=? WHERE leave_id=?";
		$q = $connect->prepare($update);
		if($q->execute(array($dol,$pol,$doa,$leave,$leave_id))){
		header('location: leaves.php');
		}
	}catch(PDOException $e){
		echo $e->getMessage();	
	}

}
////////////////////////////////////////////////////////////////////////
if(isset($_GET['acid'])){
	$id = $_GET['acid'];
	$table = $_GET['update'];
	switch($table){
		case "education":
			try{
				$select = "SELECT * FROM acadamic_records WHERE acadamic_id=?";
				$q=$connect->prepare($select);
				$q->execute(array($id));
				$result = $q->fetch();
				echo "<form method='post' action=''><table border='1' align='center'>
				<td>Exam</td><td><input type='text' name='exam' value='".$result['exam']."'/></td>
				<tr><td>Subject</td><td><input type='text' name='subject' value='".$result['subject']."'/></tr></td>
				<tr><td>Year Of Passing</td><td><input type='text' name='year_of_passing' value='".$result['year_of_passing']."'/><tr></td>
				<tr><td>Division</td><td><input type='text' name='divi_grade_gpa' value='".$result['divi_grade_gpa']."'/></tr></td>
				<tr><td>Obtained Marks</td><td><input type='text' name='marks_obtain' value='".$result['marks_obtain']."'/></tr></td>
				<tr><td>Total Marks</td><td><input type='text' name='total_marks' value='".$result['total_marks']."'/></tr></td>
				<tr><td><input type='hidden' name='update_education' value='true'/><input type='submit' value='Save'/>
				<input type='hidden' name='acadamic_id' value='".$id."'/></td></tr></table></form>";
			}catch(PDOException $e){
				$e->getMessage();	
			}
		break;	
	}
}

if(isset($_POST['update_education'])){
	$exam = $_POST['exam'];
	$subject = $_POST['subject'];
	$year_of_passing = $_POST['year_of_passing'];
	$divi_grade_gpa = $_POST['divi_grade_gpa'];
	$marks_obtain = $_POST['marks_obtain'];
	$total_marks = $_POST['total_marks'];
	$acadamic_id = $_POST['acadamic_id'];
	try{
		$update = "UPDATE acadamic_records SET exam=?, subject=?,year_of_passing=?,divi_grade_gpa=?,marks_obtain=?,total_marks=? WHERE acadamic_id=?";
		$q = $connect->prepare($update);
		if($q->execute(array($exam,$subject,$year_of_passing,$divi_grade_gpa,$marks_obtain,$total_marks,$acadamic_id))){
		header('location: emp_education.php');
		}
	}catch(PDOException $e){
		echo $e->getMessage();	
	}

}


////////////////////////////////////////////////////////////////////////
if(isset($_GET['sid'])){
	$id = $_GET['sid'];
	$table = $_GET['update'];
	switch($table){
		case "scholar":
			try{
				$select = "SELECT * FROM emp_scholarships WHERE scholar_id=?";
				$q=$connect->prepare($select);
				$q->execute(array($id));
				$result = $q->fetch();
				echo "<form method='post' action=''><table border='1' align='center'>
				<td>Scholarship Marks</td><td><input type='text' name='marks' value='".$result['marks']."'/></td>
				<tr><td>Scholarship Refrence</td><td><input type='text' name='referee' value='".$result['referee']."'/></tr></td>
				<tr><td>Scholarship Title</td><td><input type='text' name='scholar' value='".$result['scholarship_title']."'/><tr></td>
				
				<tr><td><input type='hidden' name='update_scholar' value='true'/><input type='submit' value='Save'/>
				<input type='hidden' name='scholar_id' value='".$id."'/></td></tr></table></form>";
			}catch(PDOException $e){
				$e->getMessage();	
			}
		break;	
	}
}
if(isset($_POST['update_scholar'])){
	$marks = $_POST['marks'];
	$referee = $_POST['referee'];
	$scholarship_title = $_POST['scholar'];
	
	$scholar_id = $_POST['scholar_id'];
	try{
		$update = "UPDATE emp_scholarships SET marks=?, referee=?,scholarship_title=? WHERE scholar_id=?";
		$q = $connect->prepare($update);
		if($q->execute(array($marks,$referee,$scholarship_title,$scholar_id))){
		header('location: Scholarships.php');
		}
	}catch(PDOException $e){
		echo $e->getMessage();	
	}

}
//////////////////////////////////////////////////////
if(isset($_GET['eid'])){
	$id = $_GET['eid'];
	$table = $_GET['update'];
	switch($table){
		case "employee":
			try{
				$select = "SELECT * FROM emp_personal WHERE emp_id=?";
				$q=$connect->prepare($select);
				$q->execute(array($id));
				$result = $q->fetch();
				echo "<form method='post' action=''><table border='1' align='center'>
				<td>Name</td><td><input type='text' name='name' value='".$result['name']."'/></td></tr>
				<td>Father Name</td><td><input type='text' name='fname' value='".$result['f_name']."'/></td></tr>
				<td>Address</td><td><input type='text' name='address' value='".$result['address']."'/></td></tr>
				<td>Date of Birth</td><td><input type='text' name='dob' value='".$result['date_of_birth']."'/></td></tr>
				<td>Mobile Number</td><td><input type='text' name='mno' value='".$result['contact']."'/></td></tr>
				
				<tr><td><input type='hidden' name='update_employee' value='true'/><input type='submit' value='Save'/>
				<input type='hidden' name='emp_id' value='".$id."'/></td></tr></table></form>";
			}catch(PDOException $e){
				$e->getMessage();	
			}
		break;	
	}
}
if(isset($_POST['update_employee'])){
	$name = $_POST['name'];
	$fname = $_POST['fname'];
	$address = $_POST['address'];
	$dob = $_POST['dob'];
	$mno = $_POST['mno'];
	
	$emp_id = $_POST['emp_id'];
	try{
		$update = "UPDATE emp_personal SET name=?, f_name=?, address=? ,date_of_birth=?, contact=? WHERE emp_id=?";
		$q = $connect->prepare($update);
		if($q->execute(array($name,$fname,$address,$dob,$mno,$emp_id))){
		header('location: emp_pers.php');
		}
	}catch(PDOException $e){
		echo $e->getMessage();	
	}

}
//////////////////////////////////////////////////////

if(isset($_GET['memid'])){
	$id = $_GET['memid'];
	$table = $_GET['update'];
	switch($table){
		case "member":
			try{
				$select = "SELECT * FROM emp_memberships WHERE membership_id=?";
				$q=$connect->prepare($select);
				$q->execute(array($id));
				$result = $q->fetch();
				echo "<form method='post' action=''><table border='1' align='center'>
				<td>Societie Name</td><td><input type='text' name='societie_name' value='".$result['societie_name']."'/></td></tr>
				<td>Type Of Membership</td><td><input type='text' name='type_of_membership' value='".$result['type_of_membership']."'/></td></tr>
				<td>Start Date</td><td><input type='text' name='start_date' value='".$result['start_date']."'/></td></tr>
				<td>End Date</td><td><input type='text' name='end_date' value='".$result['end_date']."'/></td></tr>
				
				
				<tr><td><input type='hidden' name='update_member' value='true'/><input type='submit' value='Save'/>
				<input type='hidden' name='membership_id' value='".$id."'/></td></tr></table></form>";
			}catch(PDOException $e){
				$e->getMessage();	
			}
		break;	
	}
}
if(isset($_POST['update_member'])){
	$societie_name= $_POST['societie_name'];
	$type_of_membership = $_POST['type_of_membership'];
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	
	$membership_id = $_POST['membership_id'];
	try{
		$update = "UPDATE emp_memberships SET societie_name=?, type_of_membership=?, start_date=? ,end_date=? WHERE membership_id=?";
		$q = $connect->prepare($update);
		if($q->execute(array($societie_name,$type_of_membership ,$start_date,$end_date,$membership_id))){
		header('location: memberships.php');
		}
	}catch(PDOException $e){
		echo $e->getMessage();	
	}

}


//////////////////////////////////////////////////////
if(isset($_GET['resid'])){
	$id = $_GET['resid'];
	$table = $_GET['update'];
	switch($table){
		case "research":
			try{
				$select = "SELECT * FROM emp_researchs WHERE research_id=?";
				$q=$connect->prepare($select);
				$q->execute(array($id));
				$result = $q->fetch();
				echo "<form method='post' action=''><table border='1' align='center'>
				<td>Nature Of Research</td><td><input type='text' name='nature_of_research' value='".$result['nature_of_research']."'/></td></tr>
				<td>Name Of Institute</td><td><input type='text' name='name_of_institute' value='".$result['name_of_institute']."'/></td></tr>
				<td>Name Of Professor</td><td><input type='text' name='name_of_professor' value='".$result['name_of_professor']."'/></td></tr>
				<tr><td><input type='hidden' name='update_research' value='true'/><input type='submit' value='Save'/>
				<input type='hidden' name='research_id' value='".$id."'/></td></tr></table></form>";
			}catch(PDOException $e){
				$e->getMessage();	
			}
		break;	
	}
}
if(isset($_POST['update_research'])){
	$nature_of_research = $_POST['nature_of_research'];
	$name_of_institute= $_POST['name_of_institute'];
	$name_of_professor = $_POST['name_of_professor'];
	$research_id = $_POST['research_id'];
	try{
		$update = "UPDATE emp_researchs SET nature_of_research=?, name_of_institute=?, name_of_professor=?  WHERE research_id=?";
		$q = $connect->prepare($update);
		if($q->execute(array($nature_of_research,$name_of_institute,$name_of_professor,$research_id))){
		header('location: emp_researches.php');
		}
	}catch(PDOException $e){
		echo $e->getMessage();	
	}

}
//////////////////////////////////////////////////////
if(isset($_GET['visid'])){
	$id = $_GET['visid'];
	$table = $_GET['update'];
	switch($table){
		case "visited":
			try{
				$select = "SELECT * FROM emp_country_visited WHERE visited_id=?";
				$q=$connect->prepare($select);
				$q->execute(array($id));
				$result = $q->fetch();
				echo "<form method='post' action=''><table border='1' align='center'>
				<td>Country Visited</td><td><input type='text' name='name_of_country' value='".$result['name_of_country']."'/></td></tr>
				<td>Duration</td><td><input type='text' name='duration' value='".$result['duration']."'/></td></tr>
				<td>Purpose</td><td><input type='text' name='purpose' value='".$result['purpose']."'/></td></tr>
				<tr><td><input type='hidden' name='update_visited' value='true'/><input type='submit' value='Save'/>
				<input type='hidden' name='visited_id' value='".$id."'/></td></tr></table></form>";
			}catch(PDOException $e){
				$e->getMessage();	
			}
		break;	
	}
}
if(isset($_POST['update_visited'])){
	$country_name = $_POST['name_of_country'];
	$duration= $_POST['duration'];
	$purpose = $_POST['purpose'];
	$visited_id = $_POST['visited_id'];
	try{
		$update = "UPDATE emp_country_visited SET name_of_country	=?, duration=?, purpose=?  WHERE visited_id=?";
		$q = $connect->prepare($update);
		if($q->execute(array($country_name,$duration,$purpose,$visited_id))){
		header('location: country_visited.php');
		}
	}catch(PDOException $e){
		echo $e->getMessage();	
	}

}


//////////////////////////////////////////////////////

if(isset($_GET['pid'])){
	$id = $_GET['pid'];
	$table = $_GET['update'];
	switch($table){
		case "publication":
			try{
				$select = "SELECT * FROM emp_publication WHERE publication_id=?";
				$q=$connect->prepare($select);
				$q->execute(array($id));
				$result = $q->fetch();
				echo "<form method='post' action=''><table border='1' align='center'>
				<td>Title</td><td><input type='text' name='title' value='".$result['title']."'/></td></tr>
				<tr><td>Year</td><td><input type='text' name='year' value='".$result['year']."'/></td></tr>
				<tr><td>Volume Number</td><td><input type='text' name='vol_number' value='".$result['vol_number']."'/></td><tr>
				<tr><td>Pages</td><td><input type='text' name='pages' value='".$result['pages']."'/></td></tr>
				<tr><td align='center'><input type='hidden' name='update_publication' value='true'/><input type='submit' value='Save'/>
				<input type='hidden' name='publication_id' value='".$id."'/></td></tr></table></form>";
			}catch(PDOException $e){
				$e->getMessage();	
			}
		break;	
	}
}

if(isset($_POST['update_publication'])){
	$title = $_POST['title'];
	$year = $_POST['year'];
	$vol_number = $_POST['vol_number'];
	$pages = $_POST['pages'];
	$publication_id = $_POST['publication_id'];
	try{
		$update = "UPDATE emp_publication SET title=?, year=?,vol_number=?,pages=? WHERE publication_id=?";
		$q = $connect->prepare($update);
		if($q->execute(array($title,$year,$vol_number,$pages,$publication_id))){
		header('location: publication.php');
		}
	}catch(PDOException $e){
		echo $e->getMessage();	
	}

}


?>
       
</table>

        
        </td>
        <td width="10"><img src="image/blue_color_04.gif" alt="" width="10" height="450" /></td>
      </tr>
      <tr>
        <td height="10" colspan="3"><img src="image/blue_color_05.gif" alt="" width="1014" height="10" /></td>
      </tr>
</table>
<?php require_once("footer2.php");?>
  </body>
</html>