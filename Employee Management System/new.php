<?PHP
include('connection.php');
include('functions.php');
include('session_deo.php');


if(isset($_POST['Submit']))
{
	$filename= $_FILES['image']['name'];
	$filesize= $_FILES['image']['size'];
	$filetype= $_FILES['image']['type'];
	$filetmp= $_FILES['image']['tmp_name'];
	move_uploaded_file($filetmp,"uploaded/".$filename);
	
		$insert="INSERT INTO emp_personal (`emp_id`, `name`, `f_name`, `for_correspondence`, `address`, `date_of_birth`, `domicle`, `metrial_status`, `contact`, `nic`, `fax`, `email`, `Emer_contact`,`pic`) VALUES('','".$_POST['name']."','".$_POST['fname']."','".$_POST['interview']."','".$_POST['per_address']."','".$_POST['orderdate1']."','".$_POST['domicile']."','".$_POST['select']."','".$_POST['contact']."','".$_POST['nic']."','".$_POST['fax']."','".$_POST['email']."','".$_POST['emergency_contact']."','$filename')";
	$query_insert=mysql_query($insert) or die(mysql_error());
	if($query_insert)
	{
		$msg2= "record inserted successfully";
	}
	else
	{
	
		$msg2= "Data not inserted";
	}
	$select="select * from emp_personal order by emp_id desc";
 $query=mysql_query($select);
 $reader=mysql_fetch_array($query);
 if($reader)
 {
	 echo $_SESSION['id']=$reader['emp_id'];
 }
	
	
	//for more calendars go to www.dynamicdrive.com.......hahahahahaha
       $insert="INSERT INTO `applyment` (`id`,`emp_id`,`post_id`, `dept_id`, `job_status`,  `newspaper_id`, `dated`) VALUES ('','".$_SESSION['id']."','".$_POST['applied']."','".$_POST['department']."','".$_POST['job_status']."','".$_POST['news']."','".$_POST['orderdate']."')";
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>HRM (ICUP)</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="calendarDateInput.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="main.css" rel="stylesheet" type="text/css" />
<link href="footer.css" rel="stylesheet" type="text/css">
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
<table width="1308" height="177" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><img src="image/blue_color_01.gif" alt="" width="1308" height="11" /></td>
  </tr>
  <tr>
    <td width="8" height="154"><img src="image/blue_color_02.gif" alt="" width="8" height="155" /></td>
    <td width="1298" align="center"><img src="image/Capture.jpg" width="1290" height="155" /></td>
    <td width="10"><img src="image/blue_color_04.gif" alt="" width="10" height="155" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="image/blue_color_05.gif" alt="" width="1308" height="11" /></td>
  </tr>
</table>
<table width="1310" height="36" border="0" align="center">
  <tr>
    <td width="1317" height="32" align="center" bgcolor="#FFFFFF"><a href="new.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11','','image/1_01.gif',1)"><img src="image/Untitled-1_01_01.gif" name="Image11" width="219" height="30" border="0" id="Image11" /></a><a href="form2.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image12','','image/1_02.gif',1)"><img src="image/Untitled-1_01_02.gif" name="Image12" width="258" height="30" border="0" id="Image12" /></a><a href="logout.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image13','','image/1_03.gif',1)"><img src="image/Untitled-1_01_03.gif" name="Image13" width="214" height="30" border="0" id="Image13" /></a></td>
  </tr>
</table>
<table width="1307" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top">
    <div id="TabbedPanels1" class="TabbedPanels">
<form action="new.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <div id="TabbedPanels2" class="TabbedPanels">
    <ul class="TabbedPanelsTabGroup">
      <li class="TabbedPanelsTab" tabindex="0">Applyment &amp; personal</li>
      <li class="TabbedPanelsTab" tabindex="0">Education &amp; Emloyment Record</li>
      <li class="TabbedPanelsTab" tabindex="0">Formal Training &amp; Researches</li>
      <li class="TabbedPanelsTab" tabindex="0">Publications &amp; Memberships</li>
      <li class="TabbedPanelsTab" tabindex="0">Country Visited  &  List of Documents Attached</li>
      <li class="TabbedPanelsTab" tabindex="0">For Office Use &amp; Scrutiny Committee</li>
    </ul>
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent"> <br />
        <table width="815" border="0" align="center">
          <tr>
            <td width="722" align="left"><strong>APPLYMENT</strong></td>
          </tr>
        </table>
        <table width="822" border="1"  align="center">
          <tr>
            <td height="21"><table width="100%" border="0" align="center" cellpadding="3">
              <tr>
                <td width="159" align="right">Post Applied for :</td>
                <td width="266"><select name="applied" id="applied">
                  <?php 
	                        $posts = get_posts();
							for($i=0;$i<count($posts[0]);$i++)
								echo "<option value='".$posts[0][$i]."'>".$posts[1][$i]."</option>";	
						?>
                </select></td>
                <td width="164" align="right">Advertized in Daily :</td>
                <td width="189"><select name="news" id="news">
                  <?php 
	                        $news = get_news();
							for($i=0;$i<count($news[0]);$i++)
								echo "<option value='".$news[0][$i]."'>".$news[1][$i]."</option>";	
						?>
                </select></td>
              </tr>
              <tr>
                <td align="right">Department :</td>
                <td><label for="textfield22">
                  <select name="department" id="department">
                    <?php 
								$depts = get_dept();
							for($i=0;$i<count($depts[0]);$i++)
								echo "<option value='".$depts[0][$i]."'>".$depts[1][$i]."</option>";
						?>
                  </select>
                </label></td>
                <td align="right">Dated :</td>
                <td><script>DateInput('orderdate','true','YYYY-MM-DD')</script></td>
              </tr>
              <tr>
                <td align="right">Job Status:</td>
                <td><input name="job_status" id="radio" value="permanent" type="radio" />
                  Permanent
                  <label for="job_status"></label>
                  <input name="job_status" id="radio2" value="contract" type="radio" />
                  <label for="job_status">Contract</label></td>
                <td colspan="2" rowspan="2" align="right">&nbsp;</td>
              </tr>
              <tr>
                <td align="right">&nbsp;</td>
                <td><label for="checkbox4"></label></td>
              </tr>
            </table></td>
          </tr>
        </table>
<br />
       <?PHP echo $msg2 ?>
       <table width="1200" border="0" align="center">
         <tr>
           <td align="center">*****************************************************************************************************************************************************</td>
         </tr>
       </table>
       <br />
        <table width="1050" border="0" align="center">
          <tr>
            <td align="left"><strong>PERSONAL</strong></td>
          </tr>
        </table>

        <table width="1050" border="1" align="center">
          <tr>
            <td align="right" valign="top"><table width="449" border="0">
              <tr>
                <td>Attach Employee pic</td>
          <td align="right"><p>
            <input type="file" name="image" id="image" />
            <br />
          </p></td>
              </tr>
            </table>
              <br />
              <table width="100%" border="0" align="center" cellpadding="3">
                <tr>
                  <td width="257" align="right">Name:</td>
                  <td width="298"><span id="sprytextfield5"><span class="textfieldRequiredMsg">A value is required.</span><span id="sprytextfield9">
                  <input type="text" name="name" id="name"  required="required"/>
                  <span class="textfieldRequiredMsg"> Required.</span></span></span></td>
                  <td width="159" align="right">Marital Status :</td>
                  <td width="292"><label for="textfield27"></label>
                    <span id="sprytextfield7">
                      <label for="text7"></label>
                    <select name="select" id="select">
                      <option selected="selected">Single</option>
                      <option>Married</option>
                    </select>
                  </span></td>
                </tr>
                <tr>
                  <td align="right">Father's Name :</td>
                  <td><label for="textfield28"><span id="sprytextfield6"><span id="sprytextfield6"><span class="textfieldRequiredMsg">A value is required.</span></span><span class="textfieldRequiredMsg">A value is required.</span><span id="sprytextfield10">
                    <input type="text" name="fname" id="fname" />
                  <span class="textfieldRequiredMsg">Required.</span></span></span></label></td>
                  <td align="right">Contact :</td>
                  <td><label for="textfield29"></label>
                    <span id="sprytextfield13">
                    <input type="text" name="contact" id="contact" />
                    <span class="textfieldMaxCharsMsg">Exceeded .</span><span class="textfieldRequiredMsg">Required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
                </tr>
                <tr>
                  <td align="right">For correspondence (Calling Address) :</td>
                  <td><input type="text" name="interview" id="textfield13" /></td>
                  <td align="right">N.I.C :</td>
                  <td><label for="textfield30"></label>
                    <span id="sprytextfield14">
                    <input type="text" name="nic" id="nic" />
                    <span class="textfieldMaxCharsMsg">Exceeded</span><span class="textfieldRequiredMsg">Required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
                </tr>
                <tr>
                  <td align="right">Permanent Home Address
                    <label for="textfield27"> :</label></td>
                  <td><span id="sprytextfield11">
                    <input type="text" name="per_address" id="per_address" />
                  <span class="textfieldRequiredMsg">Required.</span></span></td>
                  <td align="right">Fax:</td>
                  <td><label for="textfield31"></label>
                    <input type="text" name="fax" id="textfield31" /></td>
                </tr>
                <tr>
                  <td align="right">Date of Birth  :</td>
                  <td><label for="textfield30"></label>
                    <script>DateInput('orderdate1','true','YYYY-MM-DD')</script>
                  <td align="right">E-mail :</td>
                  <td><label for="textfield32"></label>
                    <span id="sprytextfield8">
                      <label for="email"></label>
                      <span id="sprytextfield8"><span id="sprytextfield4">
                      <input type="text" name="email" id="email" />
                      <span class="textfieldRequiredMsg">Required</span><span class="textfieldRequiredMsg">.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><span class="textfieldRequiredMsg">A value is required.</span></span> <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
                </tr>
                <tr>
                  <td align="right">Nationality &amp; Province of Domicile</td>
                  <td><label for="select"></label>
                    <span id="sprytextfield12">
                    <input type="text" name="domicile" id="domicile" />
                    <span class="textfieldRequiredMsg">Required.</span></span></td>
                  <td align="right">Emergency Contact</td>
                  <td><span id="sprytextfield15">
                  <input type="text" name="emergency_contact" id="emergency_contact" />
                  <span class="textfieldRequiredMsg">Required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
                </tr>
        </table></td>
          </tr>
        </table>
        <p><?PHP echo $msg2 ?></p>
      </div>
      <div class="TabbedPanelsContent">
        <table width="946" border="0">
          <tr>
            <td><strong>EDUCATION</strong></td>
          </tr>
        </table>
        <table border="1">
          <tr>
            <th>Exam</th>
            <th>Subject</th>
            <th>Year Of Passing<br />
              (yyyy)</th>
            <th>Grade/Division/GPA</th>
            <th>Attempts</th>
            <th>Obtained Marks</th>
            <th>Totle Marks</th>
          </tr>
       <?php
	   
    // function to do insertion to the data base
    function insert_educations($input){
		 
        global $connect;
        try{
             $query = "INSERT INTO acadamic_records (`emp_id`, `exam`, `subject`, `year_of_passing`, `divi_grade_gpa`, `attempts`, `marks_obtain`, `total_marks`) VALUES(?,?,?,?,?,?,?,?)";
            $q = $connect->prepare($query);
            if($q->execute(array($_SESSION['id'],$input[0],$input[1],$input[2],$input[3],$input[4],$input[5],$input[6]))){
                $msg= "data inserted";
               echo $msg;
            }
        }catch(PDOException $e){
            echo $e->getMessage();
            //echo "An error occured";
        }
    }
    //function to process arrays
    function process_educations($array){
		
        $m = 0;
        for ($k = 0; $k < sizeof($array); $k++){
            $i = 0;
           if(@$array[$i][$m] != '' && $array[$i+1][$m] != '' && $array[$i+2][$m] != '' && $array[$i+3][$m] != '' && $array[$i+4][$m]!='' && $array[$i+5][$m]!='' && $array[$i+6][$m]!='' ){
                insert_educations(array($array[$i][$m],$array[$i+1][$m],$array[$i+2][$m],$array[$i+3][$m],$array[$i+4][$m],$array[$i+5][$m],$array[$i+6][$m]));
           }
           $m++; 
        }
    }
    // form printing stuffs
    $exam_names = array('SSC','HSSC','BA/BSc','Master','MPhil','Phd'); // array for printing serial no, index starts from 1
    $exam = $subject = $year_of_passing = $grade = $attempts = $marks_obtained = $total_marks =array(); // initialize arrays
    for($i = 0; $i <= 6; $i++){ // assign values to each array
        $exam[] = 'exam'.$i;
        $subject[] = 'subject'.$i;
		$year_of_passing[] = 'year_of_passing'.$i;
        $grade[] = 'grade'.$i;
        $attempts[] = 'attempts'.$i;
        $marks_obtained[] = 'marks_obtained'.$i;
		$total_marks[] = 'total_marks'.$i;
    }
for($m = 0;$m <= 5; $m++){ // print HTML form input fields
        ?>
               
            <tr>
            <td><?php echo $exam_names[$m] ?><input type="hidden" name="<?php echo $exam[$m] ?>" value="<?php echo $exam_names[$m] ?>"/></td>
            <td><input type="text" name="<?php echo $subject[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $year_of_passing[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $grade[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $attempts[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $marks_obtained[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $total_marks[$m] ?>"/></td><tr>
             
            
    
    <?php
    }
    
    ?>
    </table>
              
    <?php
    // get form input values
    if(isset($_POST['Submit'])){
        unset($exam,$subject,$year_of_passing,$grade,$attempts,$marks_obtained,$total_marks); // unset all the arrays
        for($m = 0; $m <= 5; $m++){
			$passing_year[] = $_POST['year_of_passing'.($m)];
        $exam[] = $_POST['exam'.($m)];
        $subject[] = $_POST['subject'.($m)];
		
		$grade[] = $_POST['grade'.($m)];
        $attempts[] = $_POST['attempts'.($m)];
        $marks_obtained[] = $_POST['marks_obtained'.($m)];
        $total_marks[] = $_POST['total_marks'.($m)];
        }

    // process form input values    
    process_educations(array($exam,$subject,$passing_year,$grade,$attempts,$marks_obtained,$total_marks));
    }
    ?>
        <table width="1200" border="0" align="center">



          <tr>
            <td align="center">
            **************************************************************************************************************************************************** 
            </td>
          </tr>
      </table>
        <table width="1128" border="0">
          <tr>
            <td><strong>EMPLOYEE RECORD</strong></td>
          </tr>
        </table>
        <table border="1"><tr>
          <th>Serial No:</th>
        <th>Name of institute:</th>
        <th>Period from:<br />
          (yyyy-mm-dd)</th>
        <th>Period to:<br />
          (yyyy-mm-dd)</th>
        <th>Designation:</th>
        <th>Pay scale:</th>
        <th>Job Status:</th>
        <th>Nature Of Job:</th>
    </tr>
    <?php
    // function to do insertion to the data base
    function insert_data($input){
        global $connect;
        try{
            $query = "INSERT INTO emp_records (sno,emp_id,org,p_from,p_to,desig,pay,job_status,job_nature) VALUES(?,?,?,?,?,?,?,?,?)";
            $q = $connect->prepare($query);
            if($q->execute(array($input[0],$_SESSION['id'],$input[1],$input[2],$input[3],$input[4],$input[5],$input[6],$input[7]))){
                $msg= "data inserted";
               echo $msg;
            }
        }catch(PDOException $e){
            //echo $e->getMessage();
            echo "An error occured";
        }
    }
    //function to process arrays
    function process_array($array){
        $m = 0;
        for($k = 0; $k < sizeof($array); $k++){
            $i = 0;
           if(@$array[$i][$m] != '' && $array[$i+1][$m] != '' && $array[$i+2][$m] != '' && $array[$i+3][$m] != '' && $array[$i+4][$m]!='' && $array[$i+5][$m]!='' && $array[$i+6][$m]!='' && $array[$i+7][$m]!=''){
                insert_data(array($array[$i][$m],$array[$i+1][$m],$array[$i+2][$m],$array[$i+3][$m],$array[$i+4][$m],$array[$i+5][$m],$array[$i+6][$m],$array[$i+7][$m]));
           }
           $m++; 
        }
    }
    // form printing stuffs
    $array_s_no = array(1=>1,2,3,4,5); // array for printing serial no, index starts from 1
    $org = $p_from = $p_to = $designation = $pay_scale = $serial = $job_status =$job_nature = array(); // initialize arrays
    for($i = 0; $i <= 5; $i++){ // assign values to each array
        $org[] = 'org'.$i;
        $serial[] = 'sno'.$i;
        $p_from[] = 'p_from'.$i;
        $p_to[] = 'p_to'.$i;
        $designation[] = 'desig'.$i;
        $pay_scale[] = 'pay_scale'.$i;
		$job_status[] = 'job_status'.$i;
		$job_nature[] = 'job_nature'.$i;
    }
    for($m = 1;$m <= 5; $m++){ // print HTML form input fields
        
    ?>
            <tr>
            <td><?php echo $m ?><input type="hidden" name="<?php echo $serial[$m] ?>" value="<?php echo $array_s_no[$m] ?>"/></td>
            <td><input type="text" name="<?php echo $org[$m] ?>"/></td>
             <td><input name="<?php echo $p_from[$m] ?>" type="text"/></td>
             <td><input type="text" name="<?php echo $p_to[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $designation[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $pay_scale[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $job_status[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $job_nature[$m] ?>"/></td></tr>
             
            
    
    <?php
    }
    
    ?>
    </table>
    <?php
    // get form input values
    if(isset($_POST['Submit'])){
        unset($array_s_no, $org,$p_from, $p_to, $designation, $pay_scale,$job_status,$job_nature); // unset all the arrays
        for($m = 1; $m <= 5; $m++){
        $array_s_no[] = $_POST['sno'.($m)];
        $org[] = $_POST['org'.($m)];
        $p_from[] = $_POST['p_from'.($m)];
        $p_to[] = $_POST['p_to'.($m)];
        $designation[] = $_POST['desig'.($m)];
        $pay_scale[] = $_POST['pay_scale'.($m)];
		$job_status[] = $_POST['job_status'.($m)];
		$job_nature[] = $_POST['job_nature'.($m)];
        }
    // process form input values    
    process_array(array($array_s_no,$org,$p_from,$p_to,$designation,$pay_scale,$job_status,$job_nature));
    }
    ?>
<br />
      </div>
      <div class="TabbedPanelsContent">
        <table width="825" border="0">
          <tr>
            <td><strong>FORMAL TRAININGS</strong></td>
          </tr>
        </table>
        <table border="1">
          <tr>
            <th>Serial No:</th>
            <th>Name of Institution <br />
              / Organization:</th>
            <th>Type of Training:</th>
            <th>Period From:<br />
              (yyyy-mm-dd)</th>
            <th>Period From:<br />
              (yyyy-mm-dd)</th>
            <th>Certificate or<br />
              Diploma obtained:</th>
          </tr>
          <?php

	
    // function to do insertion to the data base
    function insertf_data($input){
        global $connect;
        try{
            $query = "INSERT INTO emp_formal_traning (emp_id,serial_no,institute,type_of_traning,period_from,period_to,certificate_diploma) VALUES(?,?,?,?,?,?,?)";
            $q = $connect->prepare($query);
            if($q->execute(array($_SESSION['id'],$input[0],$input[1],$input[2],$input[3],$input[4],$input[5]))){
                $msg2= "data inserted";
              echo $msg2;
            }
        }catch(PDOException $e){
            //echo $e->getMessage();
            echo "An error occured";
        }
    }
    //function to process arrays
    function proces_array($array){
        $m = 0;
        for($k = 0; $k < sizeof($array); $k++){
            $i = 0;
           if(@$array[$i][$m] != '' && $array[$i+1][$m] != '' && $array[$i+2][$m] != '' && $array[$i+3][$m] != '' && $array[$i+4][$m]!='' && $array[$i+5][$m]!='' ){
                insertf_data(array($array[$i][$m],$array[$i+1][$m],$array[$i+2][$m],$array[$i+3][$m],$array[$i+4][$m],$array[$i+5][$m]));
           }
           $m++; 
        }
    }
    // form printing stuffs
    $array_s_no = array(1=>1,2,3,4,5); // array for printing serial no, index starts from 1
    $institute = $p_from = $p_to = $traning_type = $certificate_diploma = $serial = array(); // initialize arrays
    for($i = 0; $i <= 5; $i++){ // assign values to each array
        $institute[] = 'institute'.$i;
        $serial[] = 'serial_no'.$i;
		$traning_type[] = 'type_of_traning'.$i;
        $p_from[] = 'period_from'.$i;
        $p_to[] = 'period_to'.$i;
        $certificate_diploma[] = 'certificate_diploma'.$i;
       
		
    }
    for($m = 1;$m <= 5; $m++){ // print HTML form input fields
        ?>
            <tr>
            <td><?php echo $m ?><input type="hidden" name="<?php echo $serial[$m] ?>" value="<?php echo $array_s_no[$m] ?>"/></td>
            <td><input type="text" name="<?php echo $institute[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $traning_type[$m] ?>"/></td>
             <td><input name="<?php echo $p_from[$m] ?>" type="text"/></td>
             <td><input type="text" name="<?php echo $p_to[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $certificate_diploma[$m] ?>"/></td>
            
         
             
            
    
    <?php
    }
    
    ?> 
          <tr>
            
        
        </table>         
        <?php
    // get form input values
    if(isset($_POST['Submit'])){
        unset($array_s_no, $institute,$traning_type,$p_from, $p_to, $certificate_diploma); // unset all the arrays
        for($m = 1; $m <= 5; $m++){
        $array_s_no[] = $_POST['serial_no'.($m)];
        $institute[] = $_POST['institute'.($m)];
		$traning_type[] = $_POST['type_of_traning'.($m)];
        $p_from[] = $_POST['period_from'.($m)];
        $p_to[] = $_POST['period_to'.($m)];
        $certificate_diploma[] = $_POST['certificate_diploma'.($m)];
		
        }
    // process form input values    
    proces_array(array($array_s_no, $institute,$traning_type,$p_from, $p_to, $certificate_diploma));
    }
    ?>
    
 
<br />

        <table width="200" border="0" align="center">
          <tr>
            <td>*****************************************************************************************************************************************************</td>
          </tr>
        </table>
        <table width="521" border="0">
          <tr>
            <td><strong>RESEARCHES</strong></td>
          </tr>
      </table>
        <table border="1">
          <tr>
            <th>Serial No</th>
            <th>Nature Of Research </th>
            <th>Name Of Institute</th>
            <th>Name Of Professor</th></tr>
          <?php

	
    // function to do insertion to the data base
    function insertr_data($input){
        global $connect;
        try{
            $query = "INSERT INTO emp_researchs (emp_id,serial_no,nature_of_research,name_of_institute,name_of_professor) VALUES(?,?,?,?,?)";
            $q = $connect->prepare($query);
            if($q->execute(array($_SESSION['id'],$input[0],$input[1],$input[2],$input[3]))){
                $msg2= "data inserted";
              echo $msg2;
            }
        }catch(PDOException $e){
            //echo $e->getMessage();
            echo "An error occured";
        }
    }
    //function to process arrays
    function processr_array($array){
        $m = 0;
        for($k = 0; $k < sizeof($array); $k++){
            $i = 0;
           if(@$array[$i][$m] != '' && $array[$i+1][$m] != '' && $array[$i+2][$m] != '' && $array[$i+3][$m] != '' ){
                insertr_data(array($array[$i][$m],$array[$i+1][$m],$array[$i+2][$m],$array[$i+3][$m]));
           }
           $m++; 
        }
    }
    // form printing stuffs
    $array_s_no = array(1=>1,2,3,4,5); // array for printing serial no, index starts from 1
    $institute_name = $prof_name = $research_nature = $serial = array(); // initialize arrays
    for($i = 0; $i <= 5; $i++){ // assign values to each array
        $research_nature[] = 'nature_of_research'.$i;
        $serial[] = 'serial_no'.$i;
		$institute_name[] = 'name_of_institute'.$i;
        $prof_name[] = 'name_of_professor'.$i;
       
       
		
    }
    for($m = 1;$m <= 5; $m++){ // print HTML form input fields
        ?>
            <tr>
            <td><?php echo $m ?><input type="hidden" name="<?php echo $serial[$m] ?>" value="<?php echo $array_s_no[$m] ?>"/></td>
            <td><input type="text" name="<?php echo $research_nature[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $institute_name[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $prof_name[$m] ?>"/></td>
             
     <?php
    }
    
    ?> 
          <tr>
            
        
        </table>         
        <?php
    // get form input values
    if(isset($_POST['Submit'])){
        unset($array_s_no, $research_nature,$institute_name,$prof_name); // unset all the arrays
        for($m = 1; $m <= 5; $m++){
        $array_s_no[] = $_POST['serial_no'.($m)];
        $research_nature[] = $_POST['nature_of_research'.($m)];
		$institute_name[] = $_POST['name_of_institute'.($m)];
        $prof_name[] = $_POST['name_of_professor'.($m)];
		
        }
    // process form input values    
    processr_array(array($array_s_no, $research_nature,$institute_name,$prof_name));
    }
    ?>
      </div>
      <div class="TabbedPanelsContent">
        <table width="677" border="0">
                <tr>
                  <td><strong>PUBLICATION</strong></td>
                </tr>
              </table>
              <table border="1">
                <tr>
            <th>Serial No:</th>
            <th>Title :</th>
            <th>Year:</th>
            <th>Vol Number:</th>
            <th>Pages:</th></tr>
          <?php

	
    // function to do insertion to the data base
    function insertp_data($input){
        global $connect;
        try{
            $query = "INSERT INTO emp_publication (emp_id,serial_no,title,year,vol_number,pages) VALUES(?,?,?,?,?,?)";
            $q = $connect->prepare($query);
            if($q->execute(array($_SESSION['id'],$input[0],$input[1],$input[2],$input[3],$input[4]))){
                $msg2= "data inserted";
              echo $msg2;
            }
        }catch(PDOException $e){
            //echo $e->getMessage();
            echo "An error occured";
        }
    }
    //function to process arrays
    function processp_array($array){
        $m = 0;
        for($k = 0; $k < sizeof($array); $k++){
            $i = 0;
           if(@$array[$i][$m] != '' && $array[$i+1][$m] != '' && $array[$i+2][$m] != '' && $array[$i+3][$m] != '' && $array[$i+4][$m] != '' ){
                insertp_data(array($array[$i][$m],$array[$i+1][$m],$array[$i+2][$m],$array[$i+3][$m],$array[$i+4][$m]));
           }
           $m++; 
        }
    }
    // form printing stuffs
    $array_s_no = array(1=>1,2,3,4,5); // array for printing serial no, index starts from 1
    $title = $year = $vol_number = $pages = $serial = array(); // initialize arrays
    for($i = 0; $i <= 5; $i++){ // assign values to each array
        $serial[] = 'serial_no'.$i;
		$title[] = 'title'.$i;
        $year[] = 'year'.$i;
        $vol_number[] = 'vol_number'.$i;
		$pages[] = 'pages'.$i;
       
       
		
    }
    for($m = 1;$m <= 5; $m++){ // print HTML form input fields
        ?>
            <tr>
            <td><?php echo $m ?><input type="hidden" name="<?php echo $serial[$m] ?>" value="<?php echo $array_s_no[$m] ?>"/></td>
            <td><input type="text" name="<?php echo $title[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $year[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $vol_number[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $pages[$m] ?>"/></td>
             
     <?php
    }
    
    ?> 
          <tr>
            
        
        </table>         
        <?php
    // get form input values
    if(isset($_POST['Submit'])){
        unset($array_s_no, $title,$year,$vol_number,$pages); // unset all the arrays
        for($m = 1; $m <= 5; $m++){
        $array_s_no[] = $_POST['serial_no'.($m)];
        $title[] = $_POST['title'.($m)];
		$year[] = $_POST['year'.($m)];
        $vol_number[] = $_POST['vol_number'.($m)];
		$pages[] = $_POST['pages'.($m)];
		
        }
    // process form input values    
    processp_array(array($array_s_no, $title,$year,$vol_number,$pages));
    }
    ?>
        <table width="1200" border="0" align="center">
          <tr>
            <td align="center">*****************************************************************************************************************************************************</td>
          </tr>
        </table>
        <table width="676" border="0">
                <tr>
                         <td><strong>MEMBERSHIPS</strong></td>
                </tr>
              </table>
                     <table border="1">
                       <tr>
            <th>Serial No:</th>
            <th>Name of Societie:</th>
            <th>Type of Membership:</th>
            <th>Start Date:<br />
              (yyyy-mm-dd)</th>
            <th>End Date:<br />
              (yyyy-mm-dd)</th></tr>
          <?php

	
    // function to do insertion to the data base
    function insertm_data($input){
        global $connect;
        try{
            $query = "INSERT INTO emp_memberships (emp_id,serial_no,societie_name,type_of_membership,start_date,end_date) VALUES(?,?,?,?,?,?)";
            $q = $connect->prepare($query);
            if($q->execute(array($_SESSION['id'],$input[0],$input[1],$input[2],$input[3],$input[4]))){
                $msg2= "data inserted";
              echo $msg2;
            }
        }catch(PDOException $e){
            //echo $e->getMessage();
            echo "An error occured";
        }
    }
    //function to process arrays
    function processm_array($array){
        $m = 0;
        for($k = 0; $k < sizeof($array); $k++){
            $i = 0;
           if(@$array[$i][$m] != '' && $array[$i+1][$m] != '' && $array[$i+2][$m] != '' && $array[$i+3][$m] != '' && $array[$i+4][$m] != '' ){
                insertm_data(array($array[$i][$m],$array[$i+1][$m],$array[$i+2][$m],$array[$i+3][$m],$array[$i+4][$m]));
           }
           $m++; 
        }
    }
    // form printing stuffs
    $array_s_no = array(1=>1,2,3,4,5); // array for printing serial no, index starts from 1
    $soci_name = $member_type = $s_date = $e_date = $serial = array(); // initialize arrays
    for($i = 0; $i <= 5; $i++){ // assign values to each array
        $serial[] = 'serial_no'.$i;
		$soci_name[] = 'societie_name'.$i;
        $member_type[] = 'type_of_membership'.$i;
        $s_date[] = 'start_date'.$i;
		$e_date[] = 'end_date'.$i;
       
       
		
    }
    for($m = 1;$m <= 5; $m++){ // print HTML form input fields
        ?>
            <tr>
            <td><?php echo $m ?><input type="hidden" name="<?php echo $serial[$m] ?>" value="<?php echo $array_s_no[$m] ?>"/></td>
            <td><input type="text" name="<?php echo $soci_name[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $member_type[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $s_date[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $e_date[$m] ?>"/></td>
             
     <?php
    }
    
    ?> 
          <tr>
            
        
        </table>         
        <?php
    // get form input values
    if(isset($_POST['Submit'])){
        unset($array_s_no, $soci_name,$member_type,$s_date,$e_date); // unset all the arrays
        for($m = 1; $m <= 5; $m++){
        $array_s_no[] = $_POST['serial_no'.($m)];
        $soci_name[] = $_POST['societie_name'.($m)];
		$member_type[] = $_POST['type_of_membership'.($m)];
        $s_date[] = $_POST['start_date'.($m)];
		$e_date[] = $_POST['end_date'.($m)];
		
        }
    // process form input values    
    processm_array(array($array_s_no, $soci_name,$member_type,$s_date,$e_date));
    }
    ?>
      </div>
      <div class="TabbedPanelsContent">
                           <br />
                           <table width="546" border="1">
                             <tr>
                               <td bgcolor="#FFFFFF"><strong>COUNTRY VISITED</strong></td>
                             </tr>
                           </table>
                           <table border="1">
                             <tr>
            <th>Serial No:</th>
            <th>Name of Country:</th>
            <th>Duration:</th>
            <th>Purpose:</th>
            </tr>
          <?php

	
    // function to do insertion to the data base
    function insertc_data($input){
        global $connect;
        try{
            $query = "INSERT INTO emp_country_visited (emp_id,serial_no,name_of_country,duration,purpose) VALUES(?,?,?,?,?)";
            $q = $connect->prepare($query);
            if($q->execute(array($_SESSION['id'],$input[0],$input[1],$input[2],$input[3]))){
                $msg2= "data inserted";
              echo $msg2;
            }
        }catch(PDOException $e){
            //echo $e->getMessage();
            echo "An error occured";
        }
    }
    //function to process arrays
    function processc_array($array){
        $m = 0;
        for($k = 0; $k < sizeof($array); $k++){
            $i = 0;
           if(@$array[$i][$m] != '' && $array[$i+1][$m] != '' && $array[$i+2][$m] != '' && $array[$i+3][$m] != ''  ){
                insertc_data(array($array[$i][$m],$array[$i+1][$m],$array[$i+2][$m],$array[$i+3][$m]));
           }
           $m++; 
        }
    }
    // form printing stuffs
    $array_s_no = array(1=>1,2,3,4,5); // array for printing serial no, index starts from 1
    $country_name = $duration = $purpose = $serial = array(); // initialize arrays
    for($i = 0; $i <= 5; $i++){ // assign values to each array
        $serial[] = 'serial_no'.$i;
		$country_name[] = 'name_of_country'.$i;
        $duration[] = 'duration'.$i;
        $purpose[] = 'purpose'.$i;
		
       
       
		
    }
    for($m = 1;$m <= 5; $m++){ // print HTML form input fields
        ?>
            <tr>
            <td><?php echo $m ?><input type="hidden" name="<?php echo $serial[$m] ?>" value="<?php echo $array_s_no[$m] ?>"/></td>
            <td><input type="text" name="<?php echo $country_name[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $duration[$m] ?>"/></td>
             <td><input type="text" name="<?php echo $purpose[$m] ?>"/></td>
             
             
     <?php
    }
    
    ?> 
          <tr>
            
        
        </table>         
        <?php
    // get form input values
    if(isset($_POST['Submit'])){
        unset($array_s_no, $country_name,$duration,$purpose); // unset all the arrays
        for($m = 1; $m <= 5; $m++){
        $array_s_no[] = $_POST['serial_no'.($m)];
        $country_name[] = $_POST['name_of_country'.($m)];
		$duration[] = $_POST['duration'.($m)];
        $purpose[] = $_POST['purpose'.($m)];
		
		
        }
    // process form input values    
    processc_array(array($array_s_no, $country_name,$duration,$purpose));
    }
    ?>
      <br />
        <table width="1200" border="0" align="center">
          <tr>
            <td align="center">*****************************************************************************************************************************************************</td>
          </tr>
        </table>
        <table width="576" border="1" align="center">
          <tr>
            <td bgcolor="#FFFFFF">LIST OF DOCUMENTS ATTACHED</td>
          </tr>
      </table>
        <table width="577" border="1" align="center">
          <tr>
            <td bgcolor=""><table width="100%" border="0" align="center" cellpadding="3" cellspacing="0">
              <tr>
                <td width="28" align="center" bgcolor="#999999">1</td>
                <td width="261" align="right">N.I.C</td>
                <td width="283" align="left"><input name="checkbox" type="checkbox" id="checkbox" value="nic" />
                  <label for="checkbox1"></label></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#999999">2</td>
                <td align="right">SSC</td>
                <td align="left"><input name="checkbox1" type="checkbox" id="checkbox1" value="ssc" />
                  <label for="checkbox1"></label></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#999999">3</td>
                <td align="right">FA/F.Sc</td>
                <td align="left"><input name="checkbox2" type="checkbox" id="checkbox2" value="FA/F.Sc" />
                  <label for="checkbox1"></label></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#999999">4</td>
                <td align="right">BA/B.Sc</td>
                <td align="left"><input name="checkbox3" type="checkbox" id="checkbox3" value="BA/B.Sc" />
                  <label for="checkbox1"></label></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#999999">5</td>
                <td align="right">MA/M.Sc</td>
                <td align="left"><input name="checkbox4" type="checkbox" id="checkbox4" value="MA/M.Sc" />
                  <label for="checkbox1"></label></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#999999">6</td>
                <td align="right">M.Phil</td>
                <td align="left"><input name="checkbox5" type="checkbox" id="checkbox5" value="M.Phil" />
                  <label for="checkbox1"></label></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#999999">7</td>
                <td align="right">Ph.D</td>
                <td align="left"><input name="checkbox6" type="checkbox" id="checkbox6" value="Ph.D" />
                  <label for="checkbox1"></label></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#999999">8</td>
                <td align="right">List of Publications / research papers</td>
                <td align="left"><input name="checkbox7" type="checkbox" id="checkbox7" value="List of Publications / research papers" />
                  <label for="checkbox1"></label></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#999999">9</td>
                <td align="right">Other formal training certificate</td>
                <td align="left"><input name="checkbox8" type="checkbox" id="checkbox8" value="Other formal training certificate" />
                  <label for="checkbox1"></label></td>
              </tr>
            </table></td>
          </tr>
        </table>
        <?php 
        if(isset($_POST['Submit']))
	               {
		
		$sql = "INSERT INTO  `attachment` (`attac_id`, `emp_id`, `nic`, `ssc`, `fa/fsc`, `ba/bsc`, `ma/msc`, `mphil`, `phd`, `publication/research`, `other_formal`) VALUES (NULL,'".$_SESSION['id']."','".$_POST['checkbox']."','".$_POST['checkbox1']."','".$_POST['checkbox2']."','".$_POST['checkbox3']."','".$_POST['checkbox4']."','".$_POST['checkbox5']."','".$_POST['checkbox6']."','".$_POST['checkbox7']."','".$_POST['checkbox8']."')";
	
	$query_insert=mysql_query($sql);
	
	if($query_insert)
	{
		$msg2= "record inserted successfully";
	}
	else
	{
	
		$msg2= "Data not inserted";
	}
	$select="select * from emp_personal order by emp_id desc";
 $query=mysql_query($select);
 $reader=mysql_fetch_array($query);
 if($reader)
 {
	 echo $_SESSION['id']=$reader['emp_id'];
 }
	
}
?>
<?php echo $msg2 ?>
        <br />
<p></p>
      </div>
      <div class="TabbedPanelsContent">
    <?php 
      if(isset($_POST['Submit']))
{
	
		 $insert="INSERT INTO `emp_offices` (`office_id`, `emp_id`, `academic_marks`, `distinction_marks`, `experience_marks`, `add_high_quali_marks`, `publication_marks`) VALUES('','".$_SESSION['id']."','".$_POST['acdmarks']."','".$_POST['dstmarks']."','".$_POST['expmarks']."','".$_POST['adhqmarks']."','".$_POST['pubmarks']."')";
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
        <table width="600" border="1" align="center">
          <tr>
            <td bgcolor="#FFFFFF">FOR OFFICE USE </td>
          </tr>
      </table>
        <table width="600" border="1" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor=""><table width="100%" border="0" cellspacing="0" cellpadding="3">
              <tr>
                <td width="45%" align="right">Academic Marks:</td>
                <td width="55%" align="left"><span id="sprytextfield1">
                <label for="acdmarks"></label>
                <input type="text" name="acdmarks" id="acdmarks" />
                <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
              </tr>
              <tr>
                <td align="right">Distinction Marks:</td>
                <td align="left"><span id="sprytextfield2">
                <input type="text" name="dstmarks" id="dstmarks" />
                <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
              </tr>
              <tr>
                <td align="right">Experience Marks:</td>
                <td align="left"><span id="sprytextfield3">
                <label for="expmarks"></label>
                <input type="text" name="expmarks" id="expmarks" />
                <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
              </tr>
              <tr>
                <td align="right">Additional Higher Qualification Marks:</td>
                <td align="left"><span id="sprytextfield16">
                <label for="adhqmarks"></label>
                <input type="text" name="adhqmarks" id="adhqmarks" />
                <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
              </tr>
              <tr>
                <td align="right">Publications Marks:</td>
                <td align="left"><span id="sprytextfield17">
                <label for="pubmarks"></label>
                <input type="text" name="pubmarks" id="pubmarks" />
                <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
              </tr>
            </table></td>
          </tr>
        </table>
       <?php echo $msg2?>
        <table width="1200" border="0" align="center">
          <tr>
            <td align="center">*****************************************************************************************************************************************************</td>
          </tr>
        </table>
       <?php 
      if(isset($_POST['Submit']))
{
	
		 $insert="INSERT INTO `scrutiny_committee` (`commite_id`, `members_name`, `member_name2`, `member_name3`, `member_name4`, `member_name5`, `emp_id`) VALUES('','".$_POST['textfield']."','".$_POST['textfield2']."','".$_POST['textfield3']."','".$_POST['textfield4']."','".$_POST['textfield5']."','".$_SESSION['id']."')";
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
        <table width="371" border="1" align="center">
          <tr>
            <td bgcolor="#FFFFFF">SCRUTINY COMMITTEE </td>
          </tr>
    </table>
        <table width="371" border="1" align="center">
          <tr>
            <td width="638" bgcolor=""><table width="101%" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td width="27%" align="center">Serial No:</td>
                <td width="73%" align="center">Members Name</td>
              </tr>
              <tr>
                <td align="center">1</td>
                <td width="73%" align="center"><input name="textfield" type="text" id="textfield" size="40" /></td>
              </tr>
              <tr>
                <td align="center">2</td>
                <td align="center"><input name="textfield2" type="text" id="textfield2" size="40" /></td>
              </tr>
              <tr>
                <td align="center">3</td>
                <td align="center"><input name="textfield3" type="text" id="textfield3" size="40" /></td>
              </tr>
              <tr>
                <td align="center">4</td>
                <td align="center"><input name="textfield4" type="text" id="textfield4" size="40" /></td>
              </tr>
              <tr>
                <td align="center">5</td>
                <td align="center"><input name="textfield5" type="text" id="textfield5" size="40" /></td>
              </tr>
            </table></td>
          </tr>
        </table>
        <br />
        <input type="submit" name="Submit" id="Submit" value="Submit" />
        <p><?PHP echo $msg2  ?></p>
      </div>
    </div>
  </div>
  </form>
    </td>
  </tr>
</table>


<table width="1314" border="0" align="center">
  <tr>
    <td align="center"><?php require_once("footer.php");?></td>
  </tr>
</table>
<br />
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "email");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "none");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");
var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytextfield12");
var sprytextfield13 = new Spry.Widget.ValidationTextField("sprytextfield13", "phone_number", {format:"phone_custom", pattern:"0000-0000000", hint:"0333-9879876", useCharacterMasking:true, validateOn:["blur"]});
var sprytextfield14 = new Spry.Widget.ValidationTextField("sprytextfield14", "custom", {hint:"16102-7575595-3", useCharacterMasking:true, pattern:"00000-0000000-0", validateOn:["blur"]});
var sprytextfield15 = new Spry.Widget.ValidationTextField("sprytextfield15", "phone_number", {format:"phone_custom", pattern:"0000-0000000", hint:"0332-5341447", useCharacterMasking:true, validateOn:["blur"]});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "phone_number", {format:"phone_custom", pattern:"000", hint:"000", useCharacterMasking:true});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "phone_number", {format:"phone_custom", pattern:"000", hint:"000", useCharacterMasking:true});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "phone_number", {format:"phone_custom", pattern:"000", hint:"000", useCharacterMasking:true});
var sprytextfield16 = new Spry.Widget.ValidationTextField("sprytextfield16", "phone_number", {format:"phone_custom", pattern:"000", hint:"000", useCharacterMasking:true});
var sprytextfield17 = new Spry.Widget.ValidationTextField("sprytextfield17", "phone_number", {format:"phone_custom", pattern:"000", hint:"000", useCharacterMasking:true});
</script>
</body>
</html>