<?Php	
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$dbname = 'studentinfo';
	global $db_connection;

	$db_connection = mysqli_connect($host, $user, $password, $dbname) or die('Failed to connect to Database Server');

	$db = mysqli_select_db($db_connection, $dbname);

	function GetValue($sql_str) {
		global $db_connection;
		$result = mysqli_query($db_connection, $sql_str);
		$row = mysqli_fetch_array($result);
		return $row[0];
	}

	function isDBTableExist($dbname, $table) {
		return GetValue("SELECT COUNT(*)
		FROM information_schema.tables
		WHERE table_schema = '".$dbname."'
			AND table_name = '".$table."'
			LIMIT 1;") + 0;
	} 
			
	if (!isDBTableExist($dbname, 'tblsemester')) {
		mysqli_query($db_connection, 'CREATE TABLE tblsemester(
										semid int(11) NOT NULL AUTO_INCREMENT,
										semester varchar(255) default \'\',
										primary key(semid))');
										
										
		mysqli_query($db_connection, 'CREATE TABLE tblcourse(
										courseid int(11) NOT NULL AUTO_INCREMENT,
										semester varchar(255) default \'\',
										primary key(courseid))');
										
										
		mysqli_query($db_connection, 'CREATE TABLE tblsection(
										sectionid int(11) NOT NULL AUTO_INCREMENT,
										section varchar(255) default \'\',
										courseid int(11) default 0,
										semid int(11) default 0,
										primary key(sectionid))'); 
										
										
		mysqli_query($db_connection, 'CREATE TABLE tblsubject(
										subjectid int(11) NOT NULL AUTO_INCREMENT,
										subjectcode varchar(255) default \'\',										
										subjectname varchar(255) default \'\',										
										courseid int(11) default 0,
										primary key(subjectid))');
										
										
		mysqli_query($db_connection, 'CREATE TABLE tblstudent(
										studentid int(11) NOT NULL AUTO_INCREMENT,
										studentnumber varchar(255) default \'\',										
										lastname varchar(255) default \'\',	
										firstname varchar(255) default \'\',
										middlename varchar(255) default \'\',	
										sex char(1) default \'M\',
										dateofbirth DATE,  
										emailaddress varchar(255) default \'\',
											primary key(studentid))');		

		mysqli_query($db_connection, 'CREATE TABLE tblregistration( /* Renamed duplicate tblstudent */
										regid int(11) NOT NULL AUTO_INCREMENT,
										studentid int(11) default 0,
										semid int(11) default 0,
										courseid int(11) default 0,
										sectionid int(11) default 0,	
										primary key(regid))');		

		mysqli_query($db_connection, 'CREATE TABLE tblgrade(
										gradeid int(11) NOT NULL AUTO_INCREMENT,
										regid int(11) default 0,
										subjectid int(11) default 0,
										studentid int(11) default 0,
										finalgrade char(11) default \'0\',	
										primary key(gradeid))');										
	}
		
?>
