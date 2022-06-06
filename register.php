<?php require "header.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once 'database.php';
    $db = new database();
    session_start();

    $sql = "INSERT INTO klant (klant_code, username, adres, klant_naam, password, plaats, postcode, telefoon)
    VALUES(:klant_code, :username, :adres, :klant_naam, :password, :plaats, :postcode, :telefoon)";

    $placeholder = [
        'klant_code'   => NULL,
        'username'     => $_POST['username'],
        'adres'        => $_POST['adres'],
        'klant_naam'   => $_POST['klant_naam'],
        'password'     => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'plaats'       => $_POST['plaats'],
        'postcode'     => $_POST['postcode'],
        'telefoon'     => $_POST['telefoon']

    ];
    $db->insert($sql, $placeholder);
    header("location: login-klant.php");
};

?>



<div class="cardform">
        <div class="wrap">
        <form method="post">
        <div class="mb-3">

            <div id="emailHelp" class="form-text">We'll never share your information with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label" required>Username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label" required>Password</label>
            <input type="password" class="form-control" name="password">
        </div> 
        <div class="mb-3">
            <label for="naam" class="form-label" required>Naam</label>
            <input type="text" class="form-control" name="klant_naam">
        </div>
        <div class="mb-3">
            <label for="adres" class="form-label" required>Adres</label>
            <input type="text" class="form-control" name="adres">
        </div>
        <div class="mb-3">
            <label for="plaats" class="form-label" required>Plaats</label>
            <input type="text" class="form-control" name="plaats">
        </div>
        <div class="mb-3">
            <label for="postcode" class="form-label" required>Postcode</label>
            <input type="text" class="form-control" name="postcode">
        </div>
        <div class="mb-3">
            <label for="telefoon" class="form-label" required>Telefoon</label>
            <input type="tel" class="form-control" name="telefoon">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

