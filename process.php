<?php
include "db.php";
session_start();
if(!empty($_POST))
{
	$roll=$_POST['rollno'];
	$name=$_POST['name'];
	$subject=$_POST['subject'];
	$q1=$_POST['q1'];
	$q2=$_POST['q2'];
	$q3=$_POST['q3'];
	$q4=$_POST['q4'];
	$q5=$_POST['q5'];
	$q6=$_POST['q6'];
	$q7=$_POST['q7'];
	$q8=$_POST['q8'];
	$q9=$_POST['q9'];
	$q10=$_POST['q10'];
	$total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10;
	$per=($total/50)*100;

	$x=mysqli_query($con,"insert into feeds(roll,name,subject,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,total,percent) values('$roll','$name','$subject','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$total','$per'); ");
	if($x)
	{
		echo "<script>
		alert('Feedback successfully submitted.');
		window.location.href='index.php';
		</script>";
		
	}
	else{
		echo "<script>
		alert('There seems to be an problem');
		window.location.href='index.php';
		</script>";
	}



}
	?>
		