<?php
$conn = new mysqli("localhost", "root", "", "your_db");
$conn->query("DELETE FROM poses WHERE id=" . $_GET['id']);
