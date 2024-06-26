<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $full_name = $_POST['full_name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $user_type = $_POST['user_type'];
    $username = $_POST['username'];

    $sql = "INSERT INTO users (email, password, full_name, age, address, user_type, username)
            VALUES ('$email', '$password', '$full_name', $age, '$address', '$user_type', '$username')";

    if ($conn->query($sql) === TRUE) {
        header('Location: login.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style> 
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: Arial, sans-serif;
    background: url('home_img/background.jpg') no-repeat center center fixed;
    background-size: cover;
    
}

form {
    background-color: #ffffff;
    background: transparent;
    box-shadow: black;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 5px 5px 10px 10px #00000033;
    width: 300px;
}

.form-group {
    position: relative;
    margin: 10px 0;
}

.form-group input {
    width: 100%;
    padding: 10px 10px 10px 40px;
    border: 1px solid #cccccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.form-group .fa {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #cccccc;
}

form button {
    width: 100%;
    padding: 10px;
    background-color: #b8860b;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

form button:hover {
    background-color: #daa520;
}

h2 {
    text-align: center;
}
</style>
<body>
    <form method="post" action="signup.php">
        <h2>Sign Up</h2>
        <div class="form-group">
            <i class="fa fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <i class="fa fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <i class="fa fa-user"></i>
            <input type="text" name="full_name" placeholder="Full Name" required>
        </div>
        <div class="form-group">
            <i class="fa fa-birthday-cake"></i>
            <input type="number" name="age" placeholder="Age" required>
        </div>
        <div class="form-group">
            <i class="fa fa-home"></i>
            <input type="text" name="address" placeholder="Address" required>
        </div>
        <div class="form-group">
            <i class="fa fa-user-circle"></i>
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <select name="user_type" required>
                <option value="" disable selected>Select user type</option>
                <option value="A">Admin</option>
                <option value="C">Customer</option>
            </select>
        </div>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
