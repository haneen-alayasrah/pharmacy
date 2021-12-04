<?php 
      include('includes/config.php');
      if (isset($_POST['add_admin']))
{  

	$admin_name= $_POST['admin_name'];
	$admin_email= $_POST['admin_email'];
	$admin_password=$_POST['admin_password'];

    $query = "INSERT INTO admin (admin_name,admin_email,admin_password) VALUES ('$admin_name' , '$admin_email' , '$admin_password' )" ;
    $query_run = mysqli_query($conn , $query);

	if($query_run)
	{
		header("Location: manage_admin.php");

	}
	else
	{
		header("Location: manage_admin.php");
		

	} 
}
if (isset($_POST['update_admin']))
{  
    $id = $_POST['edit_id'];

	$edit_admin_name= $_POST['edit_admin_name'];
	$edit_admin_email= $_POST['edit_admin_email'];
	$edit_admin_password=$_POST['edit_admin_password'];

	$query ="UPDATE admin SET  admin_name='$edit_admin_name' , admin_email= '$edit_admin_email' , admin_password= '$edit_admin_password'   WHERE admin_id= '$id' " ;
	$query_run = mysqli_query($conn , $query);

	if($query_run)
	{
		header("Location: manage_admin.php");

	}
	else
	{
		header("Location: manage_admin.php");
		

	} 
}
if (isset($_POST['delete_admin']))
{
      $id = $_POST['delete_id'];

      $query = "DELETE FROM admin WHERE admin_id='$id' " ;
      $query_run = mysqli_query($conn , $query);


	if($query_run)
	{
		header("Location: manage_admin.php");

	}
	else
	{
		header("Location: manage_admin.php");
		

	} 
}