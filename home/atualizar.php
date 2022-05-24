<!DOCTYPE html>
<html>
<head>
    <title> Usuário Atualizado! </title>
</head>
<body>
    <?php
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        $email = $_POST["email"];
        $senha = sha1($_POST["senha"]);
        $id = $_POST["id"];


        $servername = "sql213.epizy.com";
        $username = "epiz_30276130";
        $password = "***********";
        $dbname = "epiz_30276130_usuarios";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: ".$conn->connect_error);
        }
        if(strlen($_POST["senha"])>0){
            $sql = "UPDATE usuariostab SET nome='".$nome."', idade='".$idade."', peso='".$peso."', altura='".$altura."', email='".$email."', senha='".$senha."' WHERE usuariostab.id='".$id."'";        
        }else{
            $sql = "UPDATE usuariostab SET nome='".$nome."', idade='".$idade."', peso='".$peso."', altura='".$altura."', email='".$email."' WHERE usuariostab.id='".$id."'";
        }

        if ($conn->query($sql) ==true) {
            header('Location: home.php?msg='.$email.'');
            exit;
        } else {
            echo "Error: ".$sql ."<br>" . $conn->error;
        }

        $conn->close();
    ?>
    <a href="index.php"> Voltar </a>

</body>
</html>