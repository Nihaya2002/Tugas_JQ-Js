<?php
include('koneksi3.php');
$id=$_GET['id'];

$query = mysqli_query($koneksi, "SELECT*FROM customer WHERE id='$id'");

while ($customer = mysqli_fetch_array($query)){
    $first_name = $customer['first_name'];
    $last_name = $customer['last_name'];
    $email = $customer['email'];
    $phone = $customer['phone'];
    $address = $customer['address'];
    
}
?>
<form action="proses_edit.php?id=<?php echo $id ?>" method="post">
<table>
<tr>    <td>first name</td>
    <td><input type = "text" name= "first_name" value="<?php echo $first_name; ?> "></td>
</tr>
<tr>
    <td>last name</td>
    <td><input type = "text" name= "last_name" value="<?php echo $last_name; ?> "></td>
</tr>
<tr>
    <td>Email</td>
    <td><input type = "text" name= "email" value="<?php echo $email; ?> "></td>
</tr>
<tr>
    <td>Phone</td>
    <td><input type = "text" name= "phone" value="<?php echo $phone; ?> "></td>
</tr>
<tr>
    <td>Address</td>
    <td><input type = "text" name= "address" value="<?php echo $address; ?> "></td>
<tr>
    <td colspan=2><input type="submit" name ="submit" value="Ubah"></td>
</tr>
</table>
</form>

