<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chariqua";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM electeur";
$result = $conn->query($sql);
$i=1;
echo "$result->num_rows";
?>

<html>
<head>
<style>
body {
  background-color: #7CA1B4;
  margin:0 auto; 
  
  
}
</style>
</head>
<body>
<table border="1">
<tr>
<td>Index</td>
<td>Nom</td>
<td>Numéro National</td>
<td>Commune</td>
<td>Centre</td>
<td>Encadreur</td>

</tr>



<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo"<tr>";
    
    //echo "Nom: " . $row["name"]. " - NNI: " . $row["nni"]. " " . $row["commune"]." " . $row["centre"]." " . $row["encadreur"]. "<br>";
    
    

    echo"<td>".$i."</td>";
    echo"<td>".$row["name"]."</td>";
    echo"<td>".$row["nni"]."</td>";
    echo"<td>".$row["commune"]."</td>";
    echo"<td>".$row["centre"]."</td>";
    echo"<td>".$row["encadreur"]."</td>";
    echo"</tr>";
    $i++;
}
} else {
  echo "0 results";
}
$conn->close();
?>
</table>
</body>
</html>
