<?php
 function connection(){

    return new PDO("mysql:dbname=mvcex;host=localhost", "root", "");

}

function liste_admis(){
    $PDO=connection();
   
    return $PDO->query("SELECT * FROM trainner")->fetchAll(PDO::FETCH_OBJ);   
}
function create_candidat(){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $login = $_POST['login'];
    $password = $_POST['password'];

    $PDO = connection();
    $sqlstat = $PDO->prepare("INSERT INTO trainner (id, name, prenom, age, Login, Password) VALUES (UUID(),?,?,?,?,?)");

    return $sqlstat->execute([$first_name, $last_name, $age, $login, $password]);
}



    function viewer($Id){
        $PDO=connection();
        $sqlstat=$PDO->prepare("SELECT * FROM trainner WHERE id=?");
        $sqlstat->execute([$Id]);
         return $sqlstat->fetch(PDO::FETCH_OBJ);
    }

    function suppr_candidat($Id){
        $PDO=connection();
        $sqlstat=$PDO->prepare("DELETE FROM trainner WHERE id=?");
        
        return $sqlstat->execute([$Id]);
    }

?>