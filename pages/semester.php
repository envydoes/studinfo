<?php
	include_once('includes/database.php');
	
	$semesterid = $_GET('semesterid');

<table width="50%" border="1">
  <tr>
    <td>Course ID:</td>	
    <td><? if ($semesterid) echo $semesterid; ?></td>

  </tr>
</table>
<br>
<table  width="50%"  border="1">
  <tr>
    <td>Course Description:</td>
    <td><input type = "text" style="width:250px" id="semester" />
	<button onclick="addEditSemester(<?$semesterid?>);">ADD</button></td>

  </tr>
</table>



?>