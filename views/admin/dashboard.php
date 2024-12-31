<?php include __DIR__.'/../layouts/header.php'; ?>
<?php include __DIR__.'/../../database/connection.php'; 




if (isset($_POST['submit'])) {
    $username =  $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $fullname = $_POST['fullname'];
    $role_id = (int)$_POST['role_id'];

    $query = "INSERT INTO user (username, password, fullname, role_id) 
              VALUES ('$username', '$password', '$fullname', $role_id)";
    
  
}
?>

<h2>Admin Dashboard</h2>


<!-- Add User Button -->
<a href="./users/add.php" class="btn btn-primary mb-3">Add User</a>


<!-- TODO: Display a table of users with options to edit or delete -->
<!-- Use Bootstrap table classes -->

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php 

        $query = "SELECT user.*, role.name as role_name 
                 FROM user 
                 LEFT JOIN role ON user.role_id = role.id";
        $result = mysqli_query($conn, $query);
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
        if($users) {
            foreach($users as $row) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['fullname'] . "</td>";
                echo "<td>" . $row['role_name'] . "</td>";
                echo "<td>
                        <a href='./users/edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a> 
                        <a href='./users/delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' 
                           onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')\">Delete</a>
                      </td>";
                echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>

<?php include __DIR__.'/../layouts/footer.php'; ?>
