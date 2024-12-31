<?php 
include __DIR__.'/../layouts/header.php';
require_once __DIR__.'/../../database/connection.php';

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role_id = 2;
    
    $stmt = $conn->prepare("INSERT INTO user (username, fullname, password, role_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $username, $fullname, $password, $role_id);
    
    if($stmt->execute()) {
        header("Location: login.php");
        exit();
    }
}
?>

<h2>Register</h2>
<!-- TODO: Add registration form with input fields for username, password, etc. -->
<!-- Add Bootstrap form classes as needed -->
<form method="post" action="">
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" name="username" id="username" required>
    </div>
    <div class="form-group">
        <label for="fullname">Fullname:</label>
        <input type="text" class="form-control" name="fullname" id="fullname" required>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password" required>
    </div>
    <!-- Add other registration fields as needed -->
    <button type="submit" class="btn btn-success" name="register">Register</button>
</form>

<?php include __DIR__.'/../layouts/footer.php'; ?>
