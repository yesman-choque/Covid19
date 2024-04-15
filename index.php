<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <h2>Casos e Mortes por Covid-19</h2>
    
            <form action="index.php" method="post">
                <label for="countries-list">Escolha um país</label>
                <select id="countries-list" name="country">
                    <?php include 'options.php'?>
                </select>

                <button type="submit">Buscar</button>
            </form>
        </header>

        <main>
            <section>
                <h2>Informações Gerais</h2>
                <div id="total">
                    <?php include 'total.php'; ?>
                </div>
                <h3>Dados por estado</h3>
                <div id="data">
                    <?php include 'data.php'; ?>
                </div>
            </section>
        </main>

        <footer>
            <?php include 'last-access.php'; ?>
        </footer>
    </div>
</body>
</html>