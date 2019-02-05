<?PHP 
include('session_admin.php');
include('../connection.php');
include('../functions.php');



if($_GET['sid'])
{
$delete="DELETE FROM emp_scholarships WHERE scholar_id='".$_GET['sid']."'";
$query=mysql_query($delete)or die(mysql_error());
header('location:Scholarships.php');
}
if($_GET['cid'])
{

$delete="DELETE FROM emp_children WHERE child_id='".$_GET['cid']."'";
$query=mysql_query($delete)or die(mysql_error());
header('location:childs.php');
}
if($_GET['lid'])
{

$delete="DELETE FROM emp_leave WHERE leave_id='".$_GET['lid']."'";
$query=mysql_query($delete)or die(mysql_error());
header('location:leaves.php');
}

if($_GET['pid'])
{

$delete="DELETE FROM emp_publication WHERE publication_id='".$_GET['pid']."'";
$query=mysql_query($delete)or die(mysql_error());
header('location: publication.php');
}

if($_GET['eid'])
{

$delete="DELETE FROM emp_personal WHERE emp_id='".$_GET['eid']."'";
$query=mysql_query($delete)or die(mysql_error());
header('location: emp_pers.php');
}

if($_GET['acid'])
{

$delete="DELETE FROM acadamic_records WHERE acadamic_id='".$_GET['acid']."'";
$query=mysql_query($delete)or die(mysql_error());
header('location: emp_education.php');
}

if($_GET['ftid'])
{

$delete="DELETE FROM emp_formal_traning WHERE 	traning_id='".$_GET['ftid']."'";
$query=mysql_query($delete)or die(mysql_error());
header('location: formal_traning.php');
}

if($_GET['resid'])
{

$delete="DELETE FROM emp_researchs WHERE 	research_id='".$_GET['resid']."'";
$query=mysql_query($delete)or die(mysql_error());
header('location: emp_researches.php');
}

if($_GET['memid'])
{

$delete="DELETE FROM emp_memberships WHERE 	membership_id='".$_GET['memid']."'";
$query=mysql_query($delete)or die(mysql_error());
header('location: memberships.php');
}
?>