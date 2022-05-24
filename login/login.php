<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"                                             integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #9400D3;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Início</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"  aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
	<form class="form_login" action="validar_usuario.php"  method ="post">
        <div class="ls-alert-success"><?php echo $_GET["msg"]?></div>
        <h1> Login </h1>
		<input type="email" placeholder="email" class="email" name="email" id="email" required>
		<br><br>
		<input type="password" placeholder="senha" class="senha" name="senha" id="senha" required>
		<br><br>
		<input type="submit" name="submit" class="btn btn-outline-info" value="Entrar">
        <br><br>
	</form>
</body>
</html>