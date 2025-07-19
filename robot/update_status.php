<?php
$conn = new mysqli("localhost", "root", "", "your_db");
$conn->query("UPDATE status SET value = 0 WHERE id = 1");
