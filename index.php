<!DOCTYPE html>
<html>
<head>
    <title>Submit IT Support Ticket</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Submit a Support Ticket</h2>
    <form action="submit_ticket.php" method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br>
        <label>Issue:</label><br>
        <textarea name="issue" required></textarea><br>
        <button type="submit">Submit Ticket</button>
    </form>
    <a href="view_tickets.php">View Tickets</a>
</body>
</html>