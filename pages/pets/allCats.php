<?php session_start(); 
require '../../php/db_connection.php';
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../../css/tables.css">
  <link rel="stylesheet" href="../../css/search.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
      crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
      crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
      crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
      crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
      crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
      crossorigin="anonymous"></script>
</head>
<body>  
<center>
<h2>All Cats</h2>
</center>

<br>
<br>

<table>
  <tr>
    <th>Pet Id</th>
    <th>Name</th>
    <th>Breed</th>
    <th>Sex</th>
    <th>Age</th>
    <th>Color/Pattern</th>
    <th>Medical Conditions</th>
    <th>Ready to Adopt</th>
    <th>Adopted date</th>
    <th>Donor</th>
    <th>Shelter</th>
    <th>Owner</th>
  </tr>
 
<?php
  
  $sql = "SELECT * FROM pet, cat WHERE pet.Pet_id = cat.Pet_id";
  $result = $conn->query($sql);

  while($row = mysqli_fetch_array($result))
  {    
    echo "<tr>";
    echo "<td>" . $row['Pet_id'] . "</td>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Breed'] . "</td>";
    echo "<td>" . $row['Sex'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "<td>" . $row['Appearance'] . "</td>";
    echo "<td>" . $row['Conditions'] . "</td>";
    echo "<td>" . $row['Ready_to_adopt'] . "</td>";
    echo "<td>" . $row['Adopt_date'] . "</td>";
    echo "<td>" . $row['Donor_id'] . "</td>";
    echo "<td>" . $row['Shelter_num'] . "</td>";
    echo "<td>" . $row['Owner_id'] . "</td>";
    echo "</tr>";
  }
  
  $conn->close();
  ?>
  </table>
