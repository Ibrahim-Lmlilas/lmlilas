<?php include __DIR__.'/../../layouts/header.php'; ?>

<h2>Edit User</h2>

<form method="post" action="">
    
    <div class="form-group">
        <label for="fullname">fullname:</label>
        <input type="text" class="form-control" name="fullname" id="fullname" required>
    </div>
    <div class="form-group">
        <label for="username">username:</label>
        <input type="username" class="form-control" name="username" id="username" required>
    </div>

    <div class="form-group">
       <select name="role" id="role">
        <option default>select role</option>
       </select>
    </div>

    
    <button type="submit" class="btn btn-primary">Add Employee</button>
</form>

<?php include __DIR__.'/../../layouts/footer.php'; ?>
