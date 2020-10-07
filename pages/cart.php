<?php
session_start();
require '../functions/function.php';
$panierInfos = getCartInfos();
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!empty($_GET['article'])) {
        deleteArticle($_GET['article']);
    }
}
include '../layout/header.php';
?>
<div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Modele</th>
                <th scope="col">Qty</th>
                <th scope="col">Price</th>
                <th scope="col">Total</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total = 0;
            for ($i = 0; $i < count($panierInfos); $i++) {
                $total = +$panierInfos[$i]['qty'] * 270;
            ?>
                <tr>
                    <th scope="row">#</th>
                    <td><?php echo $panierInfos[$i]['product'] ?></td>
                    <td><?php echo $panierInfos[$i]['qty'] ?></td>
                    <td>270 $</td>
                    <td><?php echo $panierInfos[$i]['qty'] * 270 ?>$</td>
                    <td>
                        <form method="GET">
                            <input type="text" class="d-none" name="article" value="<?php echo $panierInfos[$i]['product'] ?>">
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </form>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
    <div class="jumbotron">
        <h1 class="display-4">Total panier : <?php echo getTotalCart(); ?> $ </h1>
        <hr class="my-4">
        <form method="POST" action="success.php">
            <div class="form-group">
                <label for="firstname">Nom</label>
                <input type="text" class="form-control" name="firstname" id="firstname">
            </div>
            <div class="form-group">
                <label for="lastname">Prénom</label>
                <input type="text" class="form-control" name="lastname" id="lastname">
            </div>
            <div class="form-group">
                <label for="address">Adresse</label>
                <input type="text" class="form-control" name="address" id="address">
            </div>
            <button type="submit" class="btn btn-primary">Valider mon panier</button>
        </form>
    </div>
</div>
<?php include '../layout/footer.php'; ?>