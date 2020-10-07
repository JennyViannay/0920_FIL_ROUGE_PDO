<?php 
include '../layout/header.php'; 
require '../db/connect.php';

if (isset($_POST)) {
    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['address'])) {
        $insertCommand = $pdo->prepare("INSERT INTO command(firstname, lastname, address) VALUES (:firstname, :lastname, :address)");
        $insertCommand->execute([
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'address' => $_POST['address']
            ]);
        } 
    }
    
    // READ (all - one) OK
    $query = "SELECT * FROM command";
    $statement = $pdo->query($query);
    $commands = $statement->fetchAll(PDO::FETCH_ASSOC);
    var_dump($commands); 
?>
<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">Votre commande est validée</h1>
        <hr class="my-4">
        <a href="../index.php">Revenir au shop</a>
    </div>
</div>
<?php include '../layout/footer.php'; ?>