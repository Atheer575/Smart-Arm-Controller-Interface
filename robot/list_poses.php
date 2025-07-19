<?php
$conn = new mysqli("localhost", "root", "", "your_db");
$res = $conn->query("SELECT * FROM poses");
$i = 1;
while ($row = $res->fetch_assoc()) {
  echo "<tr>
    <td>$i</td>
    <td>{$row['motor1']}</td>
    <td>{$row['motor2']}</td>
    <td>{$row['motor3']}</td>
    <td>{$row['motor4']}</td>
    <td>{$row['motor5']}</td>
    <td>{$row['motor6']}</td>
    <td>
      <button onclick='runPose({$row['id']})'>Run</button>
      <button onclick='removePose({$row['id']})'>Delete</button>
    </td>
  </tr>";
  $i++;
}
