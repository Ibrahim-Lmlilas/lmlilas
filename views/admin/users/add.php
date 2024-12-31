<?php
include __DIR__.'/../../layouts/header.php';
include __DIR__.'/../../../database/connection.php';

$roles_query = "SELECT * FROM role";
$roles_result = mysqli_query($conn, $roles_query);

if (isset($_POST['submit'])) {
    $username =  $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $fullname =  $_POST['fullname'];
    $role_id = (int)$_POST['role_id'];

    $query = "INSERT INTO user (username, password, fullname, role_id) 
              VALUES ('$username', '$password', '$fullname', $role_id)";
    
   
}
?>

<div class="container">
    <h2>Add New User</h2>
    

    <form method="post" action="">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="fullname" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label>Role</label>
            <select name="role_id" class="form-control" required>
                <?php while($role = mysqli_fetch_assoc($roles_result)): ?>
                    <option value="<?php echo $role['id']; ?>">
                        <?php echo $role['name']; ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Add User</button>
        <a href="../dashboard.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?php include __DIR__.'/../../layouts/footer.php'; ?>
