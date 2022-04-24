<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insere.php" method="post">
        <label for="data">
            Data:
            <input type="date" name="data" id="data" required>
        </label>
        <br>
        <label for="hora">
            Hora:
            <input type="time" name="hora" id="hora" required>
        </label>
        <br>
        <label for="descricao">
            Descrição:
            <input type="text" name="descricao" id="descricao">
        </label>
        <br>
        <label for="local">
            Local:
            <input type="text" name="local" id="local" required>
        </label>
        <br>
        <br /><br />
        <input type="submit" value="Cadastrar">
    </form>

</body>

</html>