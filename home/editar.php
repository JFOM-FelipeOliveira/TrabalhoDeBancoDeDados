<!DOCTYPE html>
<html>
<head>
    <title> Excluir usuário! </title>
    <style>
        body{
			font-family: sans-serif;
			background-image: linear-gradient(to right, cyan,yellow);
		}
		.formulario{
			background-color: rgba(0,0,0,0.8);
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			padding: 80px;
			border-radius: 15px;
			color: white;
		}
		.nomes{
			padding: 15px;
			width: 90%;
			border-radius: 5px 15px;
			border:none;
			outline: none;
		}
		.genero{
			padding: 18px;
			border-radius: 5px 15px;
			border:none;
			outline: none;
		}
		.data{
			padding: 2px;
			border-radius: 5px 15px;
			border:none;
			outline: none;
		}
		.submit{
			background-color: dodgerblue;
			padding: 15px;
			width: 100%;
			border: none;
			border-radius: 5px 15px;
			color: white;
			font-size: 18px;
		}
		.submit:hover{
			background-color: deepskyblue;
			cursor: pointer;
		}
        a:hover{
			background-color: grey;
			cursor: pointer;
		}
        a{
            background-color: black;
			padding: 10px;
			width: 50%;
			border: none;
			border-radius: 5px 15px;
			color: white;
			font-size: 18px;
        }
    </style>
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

            if($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "<form class = formulario action='atualizar.php' method='post' >";
                echo " <h1 style='color: white;'>Atualizar usuário</h1> ";
                echo "<input type='hidden' name='id' value='".$id."'>";
                echo "Nome: <input type='input' name='nome' class='nomes' value='".$row["nome"]."'><br>";
                echo "Idade: <input type='input' name='idade' class='nomes' value='".$row["idade"]."'><br>";
                echo "Peso: <input type='input' name='peso' class='nomes' value='".$row["peso"]."'><br>";
                echo "Altura: <input type='input' name='altura' class='nomes' value='".$row["altura"]."'><br>";
                echo "Email: <input type='input' name='email' class='nomes' value='".$row["email"]."'><br>";
                echo "Senha: <input type='password' name='senha' class='nomes' value=''><br><br>";
                echo "<input type='submit' class='submit'value='Atualizar'>";
            }else{
                echo "Usuário não logado!";
            }$conn->close();
        }else{
            echo "Usuário não existe!";
        }
    ?>

</body>
</html>