<!DOCTYPE html>
<html>
<head>
    <title> Validar usuário! </title>
</head>
<body>
    <?php
         //Start the session
        session_start();
    ?>

    <?php 
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $_SESSION["estalogado"] = false;

        $servername = "sql213.epizy.com";
        $username = "epiz_30276130";
        $password = "***********";
        $dbname = "epiz_30276130_usuarios";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM `usuariostab` ORDER BY `id` ASC";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                if($row["email"]==$email && $row["senha"]==sha1($senha)){
                    $_SESSION["estalogado"] = true;
                    $_SESSION["email"] = $email;
                }

            }
        }
        else{
            echo "0 results";
        }
        
        if($_SESSION["estalogado"]){
            echo "Está logado!";
            header('Location: home.php');
            exit;
        }
        else{
            echo "Não está logado!";
            header('Location: login.php?msg=Dados inválidos, tente novamente!');
            exit;
            
        }

        $conn->close();
    ?>

</body>
</html>