<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> BD para WEB </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"                                             integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style type="text/css">
		body, ul, li, p {
	        margin: 0px;
	        padding: 0px;
	        list-style: none;
	        font-size: 1.2rem;
	        font-family: sans-serif;
	        background-image: linear-gradient(to right, cyan, yellow);
	    }
	    a{
		    text-decoration: none;
		    color: white;
	    }
	    .header_home{
		    background-color: #1d1e20;
		    display: flex;
		    flex-wrap: wrap;
		    justify-content: space-between;
		    padding: 20px;
		    align-items: center;
	    }
        .titulo{
            font-size: 2rem;
        }
	    .menu{
		    display: flex;
		    background-color: #1d1e20; 
	    }
	    .menu li a{
		    background-color: #1d1e20;
		    display: block;
		    color: white;
		    padding: 10px;
	    }
	    h1{
		    text-align: center;
		    margin-top: 100px;
	    }
	    .flex{
		    display: flex;
		    flex-wrap: wrap;
		    max-width: 1000px;
		    margin: 0 auto;
	    }
        form{
            background-color: rgba(0,0,0,0.8);
	        position: absolute;
	        top: 50%;
	        left: 50%;
	        transform: translate(-50%,-50%);
	        padding: 60px;
	        border-radius: 5px 15px;
	        color: white;
        }
        form a{
            padding: 3px;
            background-color: blue;
            color: white;
            border-radius: 5px;
            margin: 5px;
        }
	</style>
</head>
<body>
    <header class="header_home">
		<a href="/"> LOGO </a>
        <a href="home.php" class="titulo"> Rede Social </a>
		<ul class="menu">
            <li><a href='logout.php'>Sair</a></li>
		</ul>
	</header>
    <form>
    <?php
        // Start the session
        session_start();

        if($_SESSION["estalogado"]==true){ 
            $servername = "sql213.epizy.com";
            $username = "epiz_30276130";
            $password = "***********";
            $dbname = "epiz_30276130_usuarios";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM usuariostab";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    if($row["email"]==$_SESSION["email"] || $row["email"]==$_GET["msg"] ){
                        echo "<h3>Seja bem vindo, ".$row["nome"]."!"."<br>Email: ".$row["email"]."</h3><br><br>";
                        echo "<a class='btn btn-primary' href='editar.php?id=". $row["id"]."'> Editar dados  </a>";
                        echo "<a class='btn btn-danger' href='confirmardelete.php?id=". $row["id"]."'>  Excluir conta </a><br>";
                    }

                }
            }
            else {
                echo "0 results";
            }
            
            $conn->close();

        }
        else{
            header('Location: login.php?msg=usuarionãologado');
        }
    ?>
    </form>
    <section class="flex">
	</section>
</body>
</html>