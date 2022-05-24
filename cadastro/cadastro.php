<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title> Cadastro </title>
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
    <form action="salvar.php" method="post">
		<h1> Cadastro </h1>
        <input type="email" class="nomes" placeholder="Email"name="email" required>
        <br>
        <input type="text" class="nomes" placeholder="Nome" name="nome" required>
        <br>
        <input type="password" class="nomes" placeholder="Senha" name="senha" required>
        <br>
		<input type="submit" name="submit" id="submit" class="btn btn-outline-info" value="Cadastrar">
        <br>
	</form>

</body>
</html>