<!DOCTYPE html>
<html>
<head>
    <title> Cadastro salvo! </title>
</head>
<body>
    <?php
        $email = $_POST['email'];
        $nome = $_POST['nome'];
        $senha = sha1($_POST['senha']);

        $servername = "sql213.epizy.com";
        $username = "epiz_30276130";
        $password = "***********";
        $dbname = "epiz_30276130_usuarios";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error){
            die("Connection failed: ".$conn->connect_error);
        }
        $sql = "INSERT INTO usuariostab (email, nome, senha) VALUES ('".$email."', '".$nome."', '".$senha."')";

        if($conn->query($sql) ===TRUE){
            echo "Usuário cadastrado com sucesso!";
            header('Location: login.php?usuario cadastrado com sucesso');
            exit;
        } else {
            echo "Error: ".$sql ."<br>" . $conn->error;
        }

        $conn->close();
    ?>

</body>
</html>