<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'database.php';
    $db = new database();
    session_start();

    $sql = "INSERT INTO reservering VALUES (:reserverings_code, :van, :tot, :klant_code, :kamer_code, :created_at)";

   $klant_code = $_SESSION['klant_code'];
   $kamer_code = $_GET['kamer_code'];
   $reserverings_code = $_GET['reserverings_code'];
   
    $placeholders = [
        'reserverings_code' => NULL,
        'van'=> $_POST['van'],
        'tot'=> $_POST['tot'],
        'klant_code'=> $klant_code,
        'kamer_code'=> $kamer_code,
        'created_at'=> date("Y-m-d")
        ];
            $db->insert($sql, $placeholders);
            header("Location: overzicht-reservering.php?kamer_code=$kamer_code");
    }



?>

<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Gegevens</title>
</head>

<body>

<div class="card text-center">
  <div class="card-header">
    <div class="card-body">
        <h2 class="text-muted">Kamer reserveren</h2>
</div>
    <form method="POST">
        Van : <input type="date" name="van" placeholder="van" required> <br><br>
        Tot : <input type="date" name="tot" placeholder="tot" required> <br><br>
       
        <input type="hidden" name="kamer_code" value="<?php echo $_GET['kamer_code']; ?>">  <br><br>
        <input class="btn btn-primary" type="submit" value="Reserveeer">
    </form>

</div>
    </div>
        </div>

    <br>
      <br>
        <br>
    
</body>
</html>