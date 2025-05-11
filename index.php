<?php
	include_once('includes/database.php');
?>
<!doctype html> 		
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="" alt=""> </div>
    </header>
	<script>
	function addEditSemester() {
			var semester = document.getElementById('Semester').value;
			if (semester!='') {
				
			}else {
				Swal.fire({
  icon: "error",
  title: "Error on semester...",
  text: "Please Input Semester",
});	
		}
	</script>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Student Info</span> </a>
                <div class="nav_list"> <a href="#" onclick="loadPage('pages/semester.php?semesterid=0', 'content');" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Semester</span>
				</a> <a href="#" onclick="loadPage('pages/course.php?courseid=0', 'content');" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Course</span> 
				</a> <a href="#" onclick="loadPage('pages/subject.php?subjectid=0', 'content');" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Subject</span> 
				</a> <a href="#" onclick="loadPage('pages/semester.php?semesterid=0', 'content');" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Student List</span> </a> 
				<a href="#" onclick="loadPage('pages/student.php?studentid=0', 'content');" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Registration</span> </a> 
				<a href="#" onclick="loadPage('pages/gradeentry.php?gradeentryid=0', 'content');" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Grade Entry</span> </a> </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light" id="content">
        <h4>Main Components</h4>
    </div>
    <!--Container Main end-->
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'>document.addEventListener("DOMContentLoaded", function(event) {
   
const showNavbar = (toggleId, navId, bodyId, headerId) =>{
const toggle = document.getElementById(toggleId),
nav = document.getElementById(navId),
bodypd = document.getElementById(bodyId),
headerpd = document.getElementById(headerId)

// Validate that all variables exist
if(toggle && nav && bodypd && headerpd){
toggle.addEventListener('click', ()=>{
// show navbar
nav.classList.toggle('show')
// change icon
toggle.classList.toggle('bx-x')
// add padding to body
bodypd.classList.toggle('body-pd')
// add padding to header
headerpd.classList.toggle('body-pd')
})
}
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink(){
if(linkColor){
linkColor.forEach(l=> l.classList.remove('active'))
this.classList.add('active')
}
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

 // Your code to run since DOM is loaded and ready
});</script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
                            
                                </body>
                            </html>