<?php
$tit = "Ajouter un candidat de INP en N7 Toulouse";

ob_start();
?>
<form method="post" action="store.php">
    <center>
        <div class="table table-striped">
            <label>First name</label><br>
            <input type="text" name="first_name"><br>
            <label>Last name</label><br>
            <input type="text" name="last_name"><br>
            <label>Age</label><br>
            <input type="number" name="age"><br>
            <label>Login</label><br>
            <input type="text" name="login"><br>
            <label>Password</label><br>
            <input type="password" name="password"><br>
        </div>
        <div class="form-group">
            <input type="submit" value="Ajouter"  class="btn btn-success my-2">
        </div>
    </center>
</form>
<?php
$content = ob_get_clean();
include_once 'views/layout.php';
?>
