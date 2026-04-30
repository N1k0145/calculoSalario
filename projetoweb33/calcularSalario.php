<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <h2>Salário Calculado</h2>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $horas = $_POST["txthoras"];
                $valor = $_POST["txtvalor"];
                $salario = $horas * $valor;
                echo "<span class='resultado-valor'>R$ " . number_format($salario, 2, ",", ".") . "</span>";
            }
        ?>
        <a href="index.php" class="btn-voltar">Novo Cálculo</a>
    </div>
</body>