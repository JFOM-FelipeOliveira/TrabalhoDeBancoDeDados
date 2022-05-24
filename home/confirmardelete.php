<!DOCTYPE html>
<html>
<head>
    <title> Excluir usuário! </title>
</head>
<body>
    <?php
         //Start the session
        session_start();

        if($_SESSION["estalogado"]==true){ 
            $servername = "sql213.epizy.com";
            $username = "epiz_30276130";
            $password = "***********";
            $dbname = "epiz_30276130_usuarios";
            $id = $_GET["id"];

            $conn = new mysqli($servername, $username, $password, $dbname);

            if($conn->connect_error) {
                die("Connection failed: ".$conn->connect_error);
            }
        
            $sql = "SELECT * FROM usuariostab WHERE id='".$id."'";
            $result = $conn->query($sql);
            echo "Certeza que deseja remover?";

            if($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "<form action='delete.php' method='post' >";
                echo "<input type='hidden' name='id' value='".$id."'>";
                echo "id: ". $row["id"]. " - Nome: " . $row["nome"]. " " . $row["email"]. " ". $row["senha"]."";
                echo "<input type='submit' value='Excluir'>";
            }else{
                echo "Usuário não logado!";
            }$conn->close();
        }else{
            echo "Usuário não existe!";
        }
    ?>

</body>
</html>