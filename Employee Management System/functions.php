<?php
	include("connection.php");
	
	function get_emp_name($emp_id)
	{
		$query = "SELECT name FROM emp_personal WHERE emp_id=".$emp_id;
		$rs = mysql_query($query);
		$name = "";
		while($data = mysql_fetch_assoc($rs))
		{
			$name = $data['name'];
		}
		
		return $name;
	}
	///////////////////////////////////////////////////////////////////////
		function get_emp_id()
	{
		$query = "SELECT * FROM emp_personal WHERE 1 ORDER BY emp_id ASC";
		$emp_id = array();
		$package = array();
		$rs = mysql_query($query);
		while($data = mysql_fetch_assoc($rs))
		{
			$emp_id[] = $data['emp_id'];
		}
		$package = array($emp_id);
		return $package;
	}
	////////////////////////////////////////////////////////////////////////

	function get_posts()
	{
		$query = "SELECT * FROM emp_posts WHERE 1 ORDER BY post_name ASC";
		$posts_name = array();
		$posts_id = array();
		$package = array();
		$rs = mysql_query($query);
		while($data = mysql_fetch_assoc($rs))
		{
			$posts_name[] = $data['post_name'];
			$posts_id[] = $data['post_id'];
		}
		$package = array($posts_id,$posts_name);
		return $package;
	}
	////////////////////////////////////////////////////////////////////////////////////////////
	function get_dept()
	{
		$query = "SELECT * FROM departments WHERE 1 ORDER BY dept_name ASC";
		$depts_name = array();
		$depts_id = array();
		$package = array();
		$rs = mysql_query($query);
		while($data = mysql_fetch_assoc($rs))
		{
			$depts_name[] = $data['dept_name'];
			$depts_id[] = $data['dept_id'];
		}
		$package = array($depts_id,$depts_name);
		return $package;
	}
	////////////////////////////////////////////////////////////////////////////
	function get_usergroup()
	{
		$query = "SELECT * FROM user_group WHERE 1 ORDER BY user_group ASC";
		$user_group = array();
		$user_group_id = array();
		$package = array();
		$rs = mysql_query($query);
		while($data = mysql_fetch_assoc($rs))
		{
			$user_group[] = $data['user_group'];
			$user_group_id[] = $data['user_group_id'];
		}
		$package = array($user_group_id,$user_group);
		return $package;
	}
	
	///////////////////////////////////////////////////////////////////////////
	function get_news()
	{
		$query = "SELECT * FROM newspaper WHERE 1 ORDER BY newspaper_name ASC";
		$newspaper_name = array();
		$newspaper_id = array();
		$package = array();
		$rs = mysql_query($query);
		while($data = mysql_fetch_assoc($rs))
		{
			$newspaper_name[] = $data['newspaper_name'];
			$newspaper_id[] = $data['newspaper_id'];
		}
		$package = array($newspaper_id,$newspaper_name);
		return $package;
	}
	/////////////////////////////////////////////////////////////////////
		
		/////////////////////////////////////////////////////////////////////////////
		function getAllSCHOLAR($start,$limit)
	{
		global $connect;
		$total_records="SELECT count(*) FROM emp_scholarships";
		$q=$connect->prepare($total_records);
		$q->execute();
		$total = $q->fetchColumn();
		$query = "SELECT * FROM emp_scholarships ORDER BY emp_id ASC LIMIT $start,$limit";
		$rs = mysql_query($query);
		$emp_id = array();
		$marks = array();
		$referee = array();
		$scholarship_title = array();
		$scholar_id = array();
		$i = 0;
		while($data = mysql_fetch_assoc($rs))
		{
			$emp_id[$i] = $data['emp_id'];
			$marks[$i] = $data['marks'];
			$referee[$i] = $data['referee'];
			$scholarship_title[$i] = $data['scholarship_title'];
			$scholar_id[$i] = $data['scholar_id'];
			$i++;
		}
		
		$package = array($emp_id,$marks,$referee,$scholarship_title,$scholar_id,$total);
		return $package;
	}
	/////////////////////////////////////////////////////////////////////
	function getformaltraning($start,$limit)
	{
		global $connect;
		$total_records="SELECT count(*) FROM emp_formal_traning";
		$q=$connect->prepare($total_records);
		$q->execute();
		$total = $q->fetchColumn();
		$query = "SELECT * FROM emp_formal_traning ORDER BY emp_id ASC LIMIT $start,$limit";
		$rs = mysql_query($query);
		$emp_id = array();
		$institute = array();
		$type_of_traning = array();
		$period_from = array();
		$period_to = array();
		$certificate_diploma = array();
		$traning_id = array();
		$i = 0;
		while($data = mysql_fetch_assoc($rs))
		{
			$emp_id[$i] = $data['emp_id'];
			$institute[$i] = $data['institute'];
			$type_of_traning[$i] = $data['type_of_traning'];
			$period_from[$i] = $data['period_from'];
			$period_to[$i] = $data['period_to'];
			$certificate_diploma[$i] = $data['certificate_diploma'];
			$traning_id[$i] = $data['traning_id'];
			$i++;
		}
		
		$package = array($emp_id,$institute,$type_of_traning,$period_from,$period_to,$certificate_diploma,$traning_id,$total);
		return $package;
	}
     ////////////////////////////////////////////////////////////////////
	 function memberships($start,$limit)
	{
		global $connect;
		$total_records="SELECT count(*) FROM emp_memberships";
		$q=$connect->prepare($total_records);
		$q->execute();
		$total = $q->fetchColumn();
		$query = "SELECT * FROM emp_memberships ORDER BY emp_id ASC LIMIT $start,$limit";
		$rs = mysql_query($query);
		$emp_id = array();
		$societie_name = array();
		$type_of_membership = array();
		$start_date = array();
		$end_date = array();
		$member_id = array();
		$i = 0;
		while($data = mysql_fetch_assoc($rs))
		{
			$emp_id[$i] = $data['emp_id'];
			$societie_name[$i] = $data['societie_name'];
			$type_of_membership[$i] = $data['type_of_membership'];
			$start_date[$i] = $data['start_date'];
			$end_date[$i] = $data['end_date'];
			$member_id[$i] = $data['membership_id'];
			$i++;
		}
		
		$package = array($emp_id,$societie_name,$type_of_membership,$start_date,$end_date,$member_id,$total);
		return $package;
	}


	/////////////////////////////////////////////////////////////////////
	
	
function getAllPUBLICATION($start,$limit)
	{
		global $connect;
		$total_records="SELECT count(*) FROM emp_publication";
		$q=$connect->prepare($total_records);
		$q->execute();
		$total = $q->fetchColumn();
		$query = "SELECT * FROM emp_publication ORDER BY emp_id ASC LIMIT $start,$limit";
		$rs = mysql_query($query);
		$emp_id = array();
		$title = array();
		$year = array();
		$vol_number = array();
		$pages = array();
		$publication_id = array();
		$i = 0;
		while($data = mysql_fetch_assoc($rs))
		{
			$emp_id[$i] = $data['emp_id'];
			$title[$i] = $data['title'];
			$year[$i] = $data['year'];
			$vol_number[$i] = $data['vol_number'];
			$pages[$i] = $data['pages'];
			$publication_id[$i] = $data['publication_id'];
			$i++;
		}
		
		$package = array($emp_id,$title,$year,$vol_number,$pages,$publication_id,$total);
		return $package;
	}

////////////////////////////////////////////////////////////////////////////


function getempeducation($start,$limit)
	{
		global $connect;
		$total_records="SELECT count(*) FROM acadamic_records";
		$q=$connect->prepare($total_records);
		$q->execute();
		$total = $q->fetchColumn();
		$query = "SELECT * FROM acadamic_records ORDER BY emp_id ASC LIMIT $start,$limit";
		$rs = mysql_query($query);
		$emp_id = array();
		$exam = array();
		$subject = array();
		$year = array();
		$division = array();
		$o_marks = array();
		$t_marks = array();
		$i = 0;
		while($data = mysql_fetch_assoc($rs))
		{
			$emp_id[$i] = $data['emp_id'];
			$exam[$i] = $data['exam'];
			$subject[$i] = $data['subject'];
			$year[$i] = $data['year_of_passing'];
			$division[$i] = $data['divi_grade_gpa'];
			$o_marks[$i] = $data['marks_obtain'];
			$t_marks[$i] = $data['total_marks'];
			$acadamic_id[$i] = $data['acadamic_id'];
			$i++;
		}
		
		$package = array($emp_id,$exam,$subject,$year,$division,$o_marks,$t_marks,$acadamic_id,$total);
		return $package;
	}




	
	////////////////////////////////////////////////////////////////////
	function getAllLEAVE($start,$limit)
	{
		global $connect;
		$total_records="SELECT count(*) FROM emp_leave ";
		$q=$connect->prepare($total_records);
		$q->execute();
		$total = $q->fetchColumn();
		$query = "SELECT * FROM emp_leave ORDER BY emp_id ASC LIMIT $start,$limit";
		$rs = mysql_query($query);
		$emp_id = array();
		$leave_date = array();
		$purpose = array();
		$arrival_date = array();
		$leave = array();
		$leave_id = array();
		$i = 0;
		while($data = mysql_fetch_assoc($rs))
		{
			$emp_id[$i] = $data['emp_id'];
			$leave_date[$i] = $data['date_of_leave'];
			$purpose[$i] = $data['purpose_of_leave'];
			$arrival_date[$i] = $data['exp_date_of_arrival'];
			$leave[$i] = $data['paid_unpaid'];
			$leave_id[$i] = $data['leave_id'];
			$i++;
		}
		
		$package = array($emp_id,$leave_date,$purpose,$arrival_date,$leave,$leave_id,$total);
		return $package;
	}
    ///////////////////////////////////////////////////////////
	
	function getAllresearches($start,$limit)
	{
		global $connect;
		$total_records="SELECT count(*) FROM emp_researchs ";
		$q=$connect->prepare($total_records);
		$q->execute();
		$total = $q->fetchColumn();
		$query = "SELECT * FROM emp_researchs ORDER BY emp_id ASC LIMIT $start,$limit";
		$rs = mysql_query($query);
		$emp_id = array();
		$nature_of_research = array();
		$name_of_institute = array();
		$name_of_professor = array();
		$research_id = array();
		$i = 0;
		while($data = mysql_fetch_assoc($rs))
		{
			$emp_id[$i] = $data['emp_id'];
			$nature_of_research[$i] = $data['nature_of_research'];
			$name_of_institute[$i] = $data['name_of_institute'];
			$name_of_professor[$i] = $data['name_of_professor'];
			$research_id[$i] = $data['research_id'];
			$i++;
		}
		
		$package = array($emp_id,$nature_of_research,$name_of_institute,$name_of_professor,$research_id,$total);
		return $package;
	}
     ///////////////////////////////////////////////////////////
	 
	 function getAllvisited($start,$limit)
	{
		global $connect;
		$total_records="SELECT count(*) FROM emp_country_visited ";
		$q=$connect->prepare($total_records);
		$q->execute();
		$total = $q->fetchColumn();
		$query = "SELECT * FROM emp_country_visited ORDER BY emp_id ASC LIMIT $start,$limit";
		$rs = mysql_query($query);
		$emp_id = array();
		$country_name = array();
		$duration = array();
		$purpose = array();
		$visited_id = array();
		$i = 0;
		while($data = mysql_fetch_assoc($rs))
		{
			$emp_id[$i] = $data['emp_id'];
			$country_name[$i] = $data['name_of_country'];
			$duration[$i] = $data['duration'];
			$purpose[$i] = $data['purpose'];
			$visited_id[$i] = $data['visited_id'];
			$i++;
		}
		
		$package = array($emp_id,$country_name,$duration,$purpose,$visited_id,$total);
		return $package;
	}

	///////////////////////////////////////////////////////////
	
	function getAllCHILD($start,$limit)
	{
		global $connect;
		$total_records="SELECT count(*) FROM emp_children";
		$q=$connect->prepare($total_records);
		$q->execute();
		$total = $q->fetchColumn();
		$query = "SELECT * FROM emp_children ORDER BY emp_id ASC LIMIT $start,$limit";
		$rs = mysql_query($query);
		$emp_id = array();
		$child_name = array();
		$dob = array();
		$child_id = array();
		
		$i = 0;
		while($data = mysql_fetch_assoc($rs))
		{
			$emp_id[$i] = $data['emp_id'];
			$child_name[$i] = $data['child_name'];
			$dob[$i] = $data['date_of_birth'];
			$child_id[$i] = $data['child_id'];
			
			$i++;
		}
		
		$package = array($emp_id,$child_name,$dob,$child_id,$total);
		return $package;
	}
	/////////////////////////////////////////////////////////////
	
	
	function getEMP($start,$limit)
	{
		global $connect;
		$total_records="SELECT count(*) FROM emp_personal";
		$q=$connect->prepare($total_records);
		$q->execute();
		$total = $q->fetchColumn();
		$query = "SELECT * FROM emp_personal ORDER BY emp_id ASC  LIMIT $start,$limit";
		$rs = mysql_query($query);
		$emp_id = array();
		$emp_name = array();
		$f_name = array();
		$address = array();
		$dob = array();
		$m_number = array();
		$n_number = array();
		
		
		
		$i = 0;
		while($data = mysql_fetch_assoc($rs))
		{
			$emp_id[$i] = $data['emp_id'];
			$emp_name[$i] = $data['name'];
			$f_name[$i] = $data['f_name'];
			$address[$i] = $data['address'];
			$dob[$i] = $data['date_of_birth'];
			$m_number[$i] = $data['contact'];
			$n_number[$i] = $data['nic'];
			
			
			
			$i++;
		}
		
		$package = array($emp_id,$emp_name,$f_name,$address,$dob,$m_number,$n_number,$total);
		return $package;
	}
	
	
	
	//////////////////////////////////////////////
	function get_Scholar_id($scholar_id)
	{
		$query = "SELECT scholar_id FROM emp_scholarships WHERE emp_id=".$scholar_id;
		$rs = mysql_query($query);
		$scholar_id = "";
		while($data = mysql_fetch_assoc($rs))
		{
			$scholar_id = $data['scholar_id'];
		}
		
		return $scholar_id;
	}
	/////////////////////////////////////
	
		function get_leave_id($leave_id)
	{
		$query = "SELECT leave_id FROM emp_leave WHERE emp_id=".$leave_id;
		$rs = mysql_query($query);
		$leave_id = "";
		while($data = mysql_fetch_assoc($rs))
		{
			$leave_id = $data['leave_id'];
		}
		
		return $leave_id;
	}
	////////////////////////////////////////////////////////////
	
		function get_child_id($child_id)
	{
		$query = "SELECT child_id FROM emp_children WHERE emp_id=".$child_id;
		$rs = mysql_query($query);
		$child_id = "";
		while($data = mysql_fetch_assoc($rs))
		{
			$child_id = $data['child_id'];
		}
		
		return $child_id;
	}
	////////////////////////////////////////////////////////////
			function get_publication_id($publication_id)
	{
		$query = "SELECT publication_id FROM emp_publication WHERE emp_id=".$publication_id;
		$rs = mysql_query($query);
		$publication_id = "";
		while($data = mysql_fetch_assoc($rs))
		{
			$publication_id = $data['publication_id'];
		}
		
		return $publication_id;
	}
	
	
	

	/////////////////////////////////////////////
	
	function search_emp($start,$limit,$deptt_id=null){
		global $connect;
		try{
			$total_records="SELECT count(*) FROM emp_personal";
		$q=$connect->prepare($total_records);
		$q->execute();
		$total = $q->fetchColumn();
			if(empty($deptt_id)){
				$search_all = "SELECT emp_id,name,f_name,nic FROM emp_personal ORDER BY emp_id ASC LIMIT $start, $limit";
				$q = $connect->prepare($search_all);
				$q->execute();
				?>
                <table border="1" align="center" cellpadding="3" cellspacing="3"><tr bgcolor="#99FFCC"><th>Id</th><th>Name</th><th>Father Name</th><th>Nic</th><th>Department</th></tr>
                <?php
				while($employees = $q->fetch(PDO::FETCH_ASSOC)){
						$get_deptt_name = "SELECT departments.dept_name FROM applyment JOIN departments ON applyment.dept_id=departments.dept_id WHERE applyment.emp_id=?";							
					$p = $connect->prepare($get_deptt_name);
					$p->execute(array($employees['emp_id']));
					$row = $p->fetch();
					echo "<tr><td bgcolor='#FFFFFF'>".$employees['emp_id']."</t><td bgcolor='#FFFFFF'>".$employees['name']."</td><td bgcolor='#FFFFFF'>".$employees['f_name']."</td><td bgcolor='#FFFFFF'>".$employees['nic']."</td><td bgcolor='#FFFFFF'>".$row['dept_name']."</td></tr>";	
					
					}
					echo "</talb>";
			}else{
				$query ="SELECT applyment.*,departments.dept_name FROM applyment JOIN departments ON applyment.dept_id=departments.dept_id WHERE applyment.dept_id=?";							
					$x = $connect->prepare($query);
					$x->execute(array($deptt_id));
					?>
                    <table border="1" align="center" cellpadding="3" cellspacing="3"><tr bgcolor="#99FFCC"><th>Id</th><th>Name</th><th>Father Name</th><th>Nic</th><th>Department</th></tr>
                    <?php
					while($result = $x->fetch(PDO::FETCH_ASSOC)){
							$query1 = "SELECT name,f_name,nic FROM emp_personal WHERE emp_id=?";
							$pq = $connect->prepare($query1);
							$pq->execute(array($result['emp_id']));
							$emp_row = $pq->fetch();
							echo "<tr><td bgcolor='#FFFFFF'>".$result['emp_id']."</td><td bgcolor='#FFFFFF'>".$emp_row['name']."</td><td bgcolor='#FFFFFF'>".$emp_row['f_name'],"</td>
							<td bgcolor='#FFFFFF'>".$emp_row['nic']."</td><td bgcolor='#FFFFFF'>".$result['dept_name']."</td></tr>";
					}
					
					
			}
			
			return $total;
		}catch(PDOException $e){
		echo $e->getMessage();	
		}
}
echo "</table>";
?>