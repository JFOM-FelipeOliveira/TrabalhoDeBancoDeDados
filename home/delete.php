<!DOCTYPE html>
<html>
<head>
    <title> Usuário deletado! </title>
</head>
<body>
    <?php
        $servername = "sql213.epizy.com";
        $username = "epiz_30276130";
        $password = "***********";
        $dbname = "epiz_30276130_usuarios";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // sql to delete a record
        $sql = "DELETE FROM usuariostab WHERE id='".$_POST["id"]."'";

        if ($conn->query($sql) === TRUE) {
            header('Location: index.php?msg=Usuario excluido com sucesso');
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
    ?>
    <a href="index.php"> Voltar </a>

</body>
</html>