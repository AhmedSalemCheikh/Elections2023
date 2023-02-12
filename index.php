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

<center><b><i> Elections 2023 </i></b>
<br>
<b><i> Commune M'balal </i></b>
<br>
<b><i> Centre Chariqua </i></b>
<br>
<table border="1">
<tr>
<td><b><i>Index</i></b></td>
<td><b><i>Nom</i></b></td>
<td><b><i>Numéro National</i></b></td>
<td><b><i>Commune</i></b></td>
<td><b><i>Centre</i></b></td>
<td><b><i>Encadreur</td>

</tr>



<?php
echo "<br><br>Le Nombre d'Inscris est :$result->num_rows <br><br>";
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
</center>
</body>
</html>
