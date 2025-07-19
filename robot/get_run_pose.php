<?php
$conn = new mysqli("localhost", "root", "", "your_db");
$id = $_GET['id'];
$res = $conn->query("SELECT * FROM poses WHERE id=$id");
$row = $res->fetch_assoc();
file_put_contents("pose.txt", implode(",", $row));
