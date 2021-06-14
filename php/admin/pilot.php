
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
<table border='1' width='100%' style="text-align: center;" >
<tr>
<th style="width: 8%;">Time</th>
<th>fname</th>
<th>lname</th>
<th>Email</th>
<th style="width: 10%;">Mobile</th>
<th style="width: 10%;">altmobile</th>
<th style="width: 6%;">type</th>
<th>range</th>
<th>uin</th>
<th>aadhar</th>
<th>image</th>
</tr>

<?php
    $db = mysqli_connect("localhost", "root", "", "dronella");
    $sql = "SELECT time,fname,lname,email,mobile,altmobile,d_type,d_range,uin,aadhar,image FROM pilot ORDER BY id DESC";
    $result = mysqli_query($db, $sql);
    
    while($row = mysqli_fetch_array($result)) { 
        echo "<tr>";
        echo "<td >" . $row['time'] . "</td>";
        echo "<td>" . $row['fname'] . "</td>";
        echo "<td>" . $row['lname'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
         echo "<td>" . $row['altmobile'] . "</td>";
        echo "<td>" . $row['d_type'] . "</td>";
        echo "<td>" . $row['d_range'] . "</td>";
        echo "<td>" . $row['uin'] . "</td>";
        echo "<td>" . $row['aadhar'] . "</td>";

        echo "<td><img height='100' width='100' src='../images/".$row['image']."'></td>";
        echo "</tr>"; 
    }
echo "</table>";

    ?>


    </table>
</body>
</html>