<?php 

$idcustomer=$_POST['idcustomer'];
$Penanganan=$_POST['Penanganan'];
$resolved=$_POST['resolved'];


$sql = "UPDATE complainusers SET resolved='$resolved',Penanganan='$Penanganan' WHERE idcustomer='$idcustomer'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    echo "ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd";
} else {
    echo "Error updating record: " . $conn->error;
    echo "ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt";
}

$conn->close();


?>