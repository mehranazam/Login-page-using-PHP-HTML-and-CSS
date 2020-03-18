<?php

function connection()
{
	$username='root';
	$password='';
	$servername='localhost';
	$database='user';
	$conn=mysqli_connect($servername,$username,$password,$database);
	$user=$_POST['UserName'];
		$pass=$_POST['password'];
		$selectQuery='select * from userdata';
		$result=mysqli_query($conn,$selectQuery);
		$queryarray=mysqli_fetch_array($result);
		
	if($conn->connect_error)
	{

		echo "connection error";

	}else{
			
		if($queryarray['firstname']==$user && $queryarray['password']==$pass){
			?>
			<script type="text/javascript">
			alert("Login Succeful");
		</script>
	<?php
			
		}else{

		?>
		<script type="text/javascript">
			alert("User Name or password incorrect");
		</script>
		<?php
		}


	}

}
if(isset($_POST['submit']))
{
   connection();
}


?>