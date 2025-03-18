
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz sobre a Lei de Ohm</title>
    <link href="/src/styles.css" rel="stylesheet">
</head>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="conceitos.php">Conceitos</a></li>
            <li><a href="formula.php">Fórmula</a></li>
            <li><a href="exemplos.php">Exemplos</a></li>
            <li><a href="quiz.php">Quiz</a></li>
        </ul>
    </nav>
</header>
<body>
    <h1>Quiz sobre a Lei de Ohm</h1>
    <form>
        <label for="q1">1. Qual é a fórmula da Lei de Ohm?</label><br>
        <input type="radio" id="q1a" name="q1" value="A"> U = R + I<br>
        <input type="radio" id="q1b" name="q1" value="B"> U = R * I<br>
        <input type="radio" id="q1c" name="q1" value="C"> U = R / I<br><br>

        <label for="q2">2. Se a tensão é de 10V e a resistência é de 2Ω, qual é a corrente?</label><br>
        <input type="radio" id="q2a" name="q2" value="A"> 5A<br>
        <input type="radio" id="q2b" name="q2" value="B"> 2A<br>
        <input type="radio" id="q2c" name="q2" value="C"> 20A<br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>