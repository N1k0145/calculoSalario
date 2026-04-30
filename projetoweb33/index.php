<head>
    <meta charset="UTF-8">
    <title>Cálculo de Salário</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="box">
        <h2>Calculadora</h2>
        <form action="calcularSalario.php" method="post">
            <label>Horas Trabalhadas:</label>
            <input type="text" name="txthoras" placeholder="Ex: 160">

            <label>Valor da Hora (R$):</label>
            <input type="text" name="txtvalor" placeholder="Ex: 50.00">

            <div class="btn-group">
                <input type="submit" value="Calcular">
                <input type="reset" value="Limpar">
            </div>
        </form>
    </div>
</body>