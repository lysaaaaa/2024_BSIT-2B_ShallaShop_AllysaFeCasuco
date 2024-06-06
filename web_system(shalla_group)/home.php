<?php 

$conn = new mysqli("localhost", "root", "", "shallashop");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_GET['user'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($user['full_name']); ?></h2>
    <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
    <p>Username: <?php echo htmlspecialchars($user['username']); ?></p>
    <p>Age: <?php echo htmlspecialchars($user['age']); ?></p>
    <p>Address: <?php echo htmlspecialchars($user['address']); ?></p>
    <p>User Type: <?php echo htmlspecialchars($user['user_type'] == 'A' ? 'Admin' : 'Customer'); ?></p>
</body>
</html>