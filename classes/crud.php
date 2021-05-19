<?php
include_once "config.php";

class Crud extends Config
{

	function __construct()
	{
		parent::__construct();
	}


//Display All
	public function displayAll($table)
	{
		$query = "SELECT * FROM {$table}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



	public function displayAllWithOrder($table,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



		public function displayAllSpecificWithOrder($table,$value,$item,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} WHERE $value='$item' ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


	//Display Specific



	public function displayOne($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}


		public function displayById($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}


			public function displayByLecturerId($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where lecturer_id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}




		public function displayNameById($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return 0;
		}
	}


	
	

//Counting All
	public function countAll($table)
	{
		$q=$this->con->query("SELECT id FROM {$table}");
		if ($q) {
			return $q->num_rows;
		} else {
			return 0;
		}
		
		
	}





	
// Inserting



		public function addApplication($post,$file)
	{

		$name = $this->cleanse($_POST['name']);
		$aschool = $this->cleanse($_POST['aschool']);
		$aprogram = $this->cleanse($_POST['aprogram']);
		$gender = $this->cleanse($_POST['gender']);
		$dob = $this->cleanse($_POST['dob']);
		$school_id = $this->cleanse($_POST['school_id']);
		$acc = $this->cleanse($_POST['acc']);
		$eot = $this->cleanse($_POST['eot']);
		$department_id = $this->cleanse($_POST['department_id']);
		$fq = $this->cleanse($_POST['fq']);
		$fqd = $this->cleanse($_POST['fqd']);
		$sq = $this->cleanse($_POST['sq']);
		$sqd = $this->cleanse($_POST['sqd']);
		$tq = $this->cleanse($_POST['tq']);
		$tqd = $this->cleanse($_POST['tqd']);
		$fap = $this->cleanse($_POST['fap']);
		$etd = $this->cleanse($_POST['etd']);
		$yapt = $this->cleanse($_POST['yapt']);
		$remark = $this->cleanse($_POST['remark']);
		$yapl = $this->cleanse($_POST['yapl']);
		// $ = $this->cleanse($_POST['']);

		//Image Section
		$img1=$_FILES['img1']['name'];
		$temp=$_FILES['img1']['tmp_name'];
		$folder="application_images/" ;  
		$pos1=strpos($img1,'.');
		$len1=strlen($img1);
		$ext1=substr($img1, $pos1, $len1); 
		$imgv1=str_replace($img1,'.',uniqid().$ext1 ); 
		$passport=$name.'-tetfund-passport-'.$imgv1;  

		move_uploaded_file($temp,$folder.$passport)  ;


		//Document Section
		$adl=$_FILES['al']['name'];
		$temp2=$_FILES['al']['tmp_name'];
		$folder2="application_documents/" ;  
		$pos2=strpos($adl,'.');
		$len2=strlen($adl);
		$ext2=substr($adl, $pos2, $len2); 
		$adlf=str_replace($adl,'.',uniqid().$ext2 ); 
		$al=$name.'-tetfund-admission-letter-'.$adlf;  

		move_uploaded_file($temp2,$folder2.$al)  ;


		$bfl=$_FILES['bf']['name'];
		$temp3=$_FILES['bf']['tmp_name'];
		$folder3="application_documents/" ;  
		$pos3=strpos($bfl,'.');
		$len3=strlen($bfl);
		$ext3=substr($bfl, $pos3, $len3); 
		$bflf=str_replace($bfl,'.',uniqid().$ext3 ); 
		$bf=$name.'-tetfund-bond-form-'.$bflf;  

		move_uploaded_file($temp3,$folder3.$bf)  ;


		$bel=$_FILES['be']['name'];
		$temp4=$_FILES['be']['tmp_name'];
		$folder4="application_documents/" ;  
		$pos4=strpos($bel,'.');
		$len4=strlen($bel);
		$ext4=substr($bel, $pos4, $len4); 
		$belf=str_replace($bel,'.',uniqid().$ext4 ); 
		$be=$name.'-tetfund-budget-estimate-'.$belf;  

		move_uploaded_file($temp4,$folder4.$be)  ;

		$cvl=$_FILES['cv']['name'];
		$temp5=$_FILES['cv']['tmp_name'];
		$folder5="application_documents/" ;  
		$pos5=strpos($cvl,'.');
		$len5=strlen($cvl);
		$ext5=substr($cvl, $pos5, $len5); 
		$cvlf=str_replace($cvl,'.',uniqid().$ext5 ); 
		$cv=$name.'-tetfund-cv-'.$cvlf;  

		move_uploaded_file($temp5,$folder5.$cv);


		$mcl=$_FILES['mc']['name'];
		$temp6=$_FILES['mc']['tmp_name'];
		$folder6="application_documents/" ;  
		$pos6=strpos($mcl,'.');
		$len6=strlen($mcl);
		$ext6=substr($mcl, $pos6, $len6); 
		$mclf=str_replace($mcl,'.',uniqid().$ext6 ); 
		$mc=$name.'-tetfund-medical-certificate-'.$mclf;  

		move_uploaded_file($temp6,$folder6.$mc);


		$sll=$_FILES['sl']['name'];
		$temp7=$_FILES['sl']['tmp_name'];
		$folder7="application_documents/" ;  
		$pos7=strpos($sll,'.');
		$len7=strlen($sll);
		$ext7=substr($sll, $pos7, $len7); 
		$sllf=str_replace($sll,'.',uniqid().$ext7 ); 
		$sl=$name.'-tetfund-study-leave-'.$sllf;  

		move_uploaded_file($temp7,$folder7.$sl);


		$ubdl=$_FILES['ubd']['name'];
		$temp8=$_FILES['ubd']['tmp_name'];
		$folder8="application_documents/" ;  
		$pos8=strpos($ubdl,'.');
		$len8=strlen($ubdl);
		$ext8=substr($ubdl, $pos8, $len8); 
		$ubdlf=str_replace($ubdl,'.',uniqid().$ext8 ); 
		$ubd=$name.'-tetfund-university-bank-details-'.$ubdlf;  

		move_uploaded_file($temp8,$folder8.$ubd);


		$rpl=$_FILES['rp']['name'];
		$temp9=$_FILES['rp']['tmp_name'];
		$folder9="application_documents/" ;  
		$pos9=strpos($rpl,'.');
		$len9=strlen($rpl);
		$ext9=substr($rpl, $pos9, $len9); 
		$rplf=str_replace($rpl,'.',uniqid().$ext9 ); 
		$rp=$name.'-tetfund-research-proposal-'.$rplf;  

		move_uploaded_file($temp9,$folder9.$rp);


		$status='0';



		$query="INSERT into application(name,aschool,aprogram,gender,dob,school_id,acc,eot,department_id,fq,fqd,sq,sqd,tq,tqd,fap,etd,yapt,remark,yapl,passport,al,bf,be,cv,mc,sl,ubd,rp,status) values('$name','$aschool','$aprogram','$gender','$dob','$school_id','$acc','$eot','$department_id','$fq','$fqd','$sq','$sqd','$tq','$tqd','$fap','$etd','$yapt','$remark','$yapl','$passport','$al','$bf','$be','$cv','$mc','$sl','$ubd','$rp','$status')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:application2.php?msg=Application was sent successfully&type=success");
		}else{
			header("Location:application2.php?msg=Error sending application try again!&type=error");
		}
	}


	public function addDepartment($post)
	{

		$name = strtoupper($this->cleanse($_POST['name']));

		$query="INSERT into department(name) values('$name')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-department.php?msg=Department was created successfully&type=success");
		}else{
			header("Location:view-department.php?msg=Error adding data try again!&type=error");
		}
	}



		public function addSchool($post)
	{

		$name = strtoupper($this->cleanse($_POST['name']));

		$query="INSERT into school(name) values('$name')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-school.php?msg=School was created successfully&type=success");
		}else{
			header("Location:view-school.php?msg=Error adding data try again!&type=error");
		}
	}




	public function updateAdmin($post)
	{
		
		$email=$this->cleanse($_POST['email']);
		$password=$this->cleanse($_POST['password']);
		$query="UPDATE admin SET email='$email',password='$password' WHERE email='$email' ";
		$sql=$this->con->query($query);
		if ($sql==true) {
			header("Location:profile.php?msg=Account was updated successfully&type=success");
		}else{
			header("Location:profile.php?msg=Error updating account try again!&type=error");
		}
	}



		public function updateDepartment($post)
	{
		
		$name=strtoupper($this->cleanse($_POST['name']));
		$id=$this->cleanse($_POST['cid']);
		$query="UPDATE department SET name='$name' WHERE id='$id' ";
		var_dump($query);
		$sql=$this->con->query($query);
		if ($sql==true) {
			header("Location:view-department.php?msg=Department was updated successfully&type=success");
		}else{
			header("Location:view-department.php?msg=Error updating course try again!&type=error");
		}
	}


			public function updateSchool($post)
	{
		
		$name=strtoupper($this->cleanse($_POST['name']));
		$id=$this->cleanse($_POST['cid']);
		$query="UPDATE school SET name='$name' WHERE id='$id' ";
		var_dump($query);
		$sql=$this->con->query($query);
		if ($sql==true) {
			header("Location:view-school.php?msg=School was updated successfully&type=success");
		}else{
			header("Location:view-school.php?msg=Error updating course try again!&type=error");
		}
	}


		public function checkApplication($eot)
	{

		$eot= $this->cleanse($eot);

		$query="SELECT * from application where eot='$eot' ";
		$sql = $this->con->query($query);
		$qu=$sql->fetch_assoc();
        if($qu){
        	$id=$qu['id'];
           if ($qu['status'] === '1') {
           	header("Location:success.php?id=$id");
           	// header("Location:application-check.php?msg=You have been successfully screened...visit www.bsum.edu.ng?matno=$matno to obtain a copy of Transcript Approval&type=success");
           } else {
           	header("Location:application-check.php?msg=Application is undergoing screening process ..check another time!!!&type=error");
           
        }
    }
        else{
        		header("Location:application-check.php?msg=Invalid Applicant Email / Phone Number!!!&type=error");
        	}
	}




		public function toggle($id)
	{
		$query="SELECT * FROM application where id='$id' ";
		$qry=$this->con->query($query);
		$row=$qry->fetch_assoc();

		$idp=$row['id'];
		$apm=$row['status'];

		 if($apm=='0'){
		$this->con->query("UPDATE application SET status='1' WHERE id='$idp'");
		header("Location:view-application.php?msg=Account was updated successfully&type=success");
		 }            
		 elseif($apm=='1'){
		$this->con->query("UPDATE application SET status='0' WHERE id='$idp'");
		header("Location:view-application.php?msg=Account was updated successfully&type=success");
		 }
		 elseif($apm==''){
		$this->con->query("UPDATE application SET status='0' WHERE id='$idp'");
		header("Location:view-application.php?msg=Account was updated successfully&type=success");
		 }else{
			header("Location:view-application.php?msg=Error updating account try again!&type=error");
		}
	}



//Empty Table
	public function emptyTable($table,$url) 
	{ 
		$id = $this->cleanse($id);
		$query = "TRUNCATE {$table}";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}



//Delete Items
	public function delete($id, $table,$url) 
	{ 
		$id = $this->cleanse($id);
		$query = "DELETE FROM {$table} WHERE id = $id";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}
	


	public function cleanse($str)
	{
   #$Data = preg_replace('/[^A-Za-z0-9_-]/', '', $Data); /** Allow Letters/Numbers and _ and - Only */
		$str = htmlentities($str, ENT_QUOTES, 'UTF-8'); /** Add Html Protection */
		$str = stripslashes($str); /** Add Strip Slashes Protection */
		if($str!=''){
			$str=trim($str);
			return mysqli_real_escape_string($this->con,$str);
		}
	}




	

	public function greeting()
	{
      //Here we define out main variables 
		$welcome_string="Welcome!"; 
		$numeric_date=date("G"); 

 //Start conditionals based on military time 
		if($numeric_date>=0&&$numeric_date<=11) 
			$welcome_string="Good Morning!,"; 
		else if($numeric_date>=12&&$numeric_date<=17) 
			$welcome_string="Good Afternoon!,"; 
		else if($numeric_date>=18&&$numeric_date<=23) 
			$welcome_string="Good Evening!,"; 

		return $welcome_string;

	}



}

?>

