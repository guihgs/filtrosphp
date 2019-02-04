<?php
include('conn.php');

$id = $_GET['id'];
if ($id == 'Logistics') {
	
	$query = "SELECT * FROM tbl_info WHERE category = 'Logistics' ";

}elseif($id == 'Menufacturer')
{
	$query = "SELECT * FROM tbl_info WHERE category = 'Menufacturer' ";

}elseif($id == 'Food')
{
		$query = "SELECT * FROM tbl_info WHERE category = 'Food' ";
		
}elseif($id == 'Healths')
{
		$query = "SELECT * FROM tbl_info WHERE category = 'Healths' ";
}else{
	$query="SELECT * FROM tbl_info";
}

		$sql = mysqli_query($conn, $query);

		while($row=mysqli_fetch_array($sql))
		{
			echo $row['company_name'].'<br>'.$row['country'];
		}

?>