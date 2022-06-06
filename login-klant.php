<?php require "header.php" ?>
<div class="parent">
    <div class="cardform">
        <form method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" required>
            
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php 

include "database.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $username = stripcslashes($username);
    $password = stripcslashes($password); 
    
    $db = new database();
    $db->login_klant($username, $password);
};

?>