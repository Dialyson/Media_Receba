<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Atv 2</title>
</head>
<body>
<form name="form_imc" id="form_imc" method="POST" enctype="multipart/form-data" action="imc.php" >
	  <div class="form-group">
		<label for="altura">Nota 1</label>
		<input type="number" step="0.01" min="1" class="form-control" id="Nota 1" name="Nota 1">
	  </div>
	  <div class="form-group">
		<label for="exampleInputPassword1">Nota 2</label>
		<input type="number" step="0.01" min="1" class="form-control" id="Nota 2" name="Nota 2">
	  </div>
	  <br><button type="submit" class="btn btn-primary">Inserir</button>
	</form>

    <?php
$num1 = $_POST['Nota 1'];
$num2 = $_POST['Nota 2'];

?>

