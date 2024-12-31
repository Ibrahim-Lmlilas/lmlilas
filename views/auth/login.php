<?php
include __DIR__ . '/../layouts/header.php';
require_once __DIR__ . '/../../database/connection.php';

session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    
    
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_array($result);
        
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role_id'] = $user['role_id'];

            if ($user['role_id'] == 1) {
                header("Location: ../admin/dashboard.php");
            } else {
                header("Location: ./register.php");
            }
            exit();
        } else {
            $error = "Mot de passe incorrect";
        }
    }
}
?>



<h2>Login</h2>
<!-- TODO: Add login form with input fields for username and password -->
<!-- Add Bootstrap form classes as needed -->
<form method="post" action="">
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" name="username" id="username" required>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password" required>
    </div>
    <button type="submit"  name="login" class="btn btn-primary">Login</button>
</form>

<?php include __DIR__ . '/../layouts/footer.php'; ?>