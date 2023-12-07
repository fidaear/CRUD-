<?php
$tit = "LISTE DES ADMIS EN ENSEEIHT INP de Toulouse";


ob_start();
?>
<a href="create.php" class="btn btn-primary">Ajouter</a>
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>First name</td>
            <td>Age</td>
            <td>Login</td>
            <td>Password</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($admited as $trainners) : ?>
            <tr>
                <td><?= $trainners->Id ?></td>
                <td><?= $trainners->name ?></td>
                <td><?= $trainners->prenom ?></td>
                <td><?= $trainners->age ?></td>
                <td><?= $trainners->login ?></td>
                <td><?= $trainners->password ?></td>
                <td><a href="delete.php?id=<?php echo $trainners->Id ?>" class="btn btn-danger btn-sn">Supprimer</a></td>
                <td><a href="edit.php?id=<?php echo $trainners->Id ?>" class="btn btn-warning btn-sn">Update</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
$content=ob_get_clean();
include_once 'views/layout.php';
?>
