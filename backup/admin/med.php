
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;

text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table border="1" style="text-align: center;">
<tr>
<th>Id</th>
<th>fname</th>
<th>lname</th>
<th>Email</th>
<th>Phone</th>
<th>Alt Phone</th>
<th>GST</th>
<th>Drugs Lisence</th>
<th>AADHAR</th>
<th>PAN</th>
<th>Address</th>
<th>Time</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "dronella");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, fname,lname, email,phone,altphone,gst,dl,aadhar,pan,location, time FROM med order by time desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $row["id"]. "</td>
<td>" . $row["fname"] . "</td>
<td>" . $row["lname"] . "</td>
<td>". $row["email"]. "</td>
<td>". $row["phone"]. "</td>
<td>". $row["altphone"]. "</td>
<td>". $row["gst"]. "</td>
<td>". $row["dl"]. "</td>
<td>". $row["aadhar"]. "</td>
<td>". $row["pan"]. "</td>
<td>". $row["location"]. "</td>
<td>". $row["time"]. "</td>
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>