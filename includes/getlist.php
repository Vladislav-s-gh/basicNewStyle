<?php

// Connect to the database
$db = new mysqli("localhost", "root", "", "businessdb");

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}


$sql = "SELECT username, score FROM basicratingscore ORDER BY score DESC";
$result = $db->query($sql);

// Check if any records were found
if ($result->num_rows > 0) {
  // Print table header
  echo "<table>";
  echo "<tr>";
  foreach ($result->fetch_fields() as $field) {
    echo "<th>{$field->name}</th>";
  }
  echo "</tr>";

  // Print each record
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    foreach ($row as $key => $value) {
      echo "<td>{$value}</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No records found";
}

// Close the connection
$db->close();
?>