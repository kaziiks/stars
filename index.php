<?php
$conn = new mysqli("localhost", "root", "", "stars");

$results = $conn->query("SELECT * FROM users");
$data = $results->fetch_assoc();

var_dump($data);

echo "<form methode='POST'>";
    echo "<label>Lietotājvārds:<input name='user'/></label><br>";
    echo "<label>Parole:<input name='pasword'/></label><br>";
    echo "<input type='submit' value='Reģistrēties'/>";
echo "</form>";