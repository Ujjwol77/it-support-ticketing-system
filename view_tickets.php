<?php
include 'db.php';

$sql = "SELECT * FROM tickets ORDER BY id DESC";
$result = $conn->query($sql);

echo "<h2>All Support Tickets</h2>";
echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Issue</th><th>Status</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['issue']."</td>
                <td>".$row['status']."</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No tickets found</td></tr>";
}
echo "</table>";
echo "<a href='index.php'>Back to Submit Ticket</a>";

$conn->close();
?>