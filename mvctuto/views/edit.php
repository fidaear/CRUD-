<?php
$tit = "Update the candidate";

ob_start();

?>
<form method="post" action="edit.php">
   
        <div class="table table-striped">
            <label>First name</label><br>
            <input type="text" name="first_name" value="<?=$stagiaire->name; ?>"><br>
            <label>Last name</label><br>
            <input type="text" name="last_name" value="<?=$stagiaire->prenom; ?>"><br>
            <label>Age</label><br>
            <input type="number" name="age" value="<?=$stagiaire->age; ?>"><br>
            <label>Login</label><br>
            <input type="text" name="login" value="<?=$stagiaire->login; ?>"><br>
            <label>Password</label><br>
            <input type="password" name="password"><br>
        </div>
        <div class="form-group">
            <input type="submit" value="Update"  class="btn btn-primary my-2">
        </div>
    
</form>
<?php
$content = ob_get_clean();
include_once 'views/layout.php';
?>
