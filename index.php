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
            <h1>Casos e Mortes por Covid-19</h1>
    
            <form action="index.php" method="post">
                <label for="countries-list">Escolha um país</label>
                <select id="countries-list" name="country">
                    <?php
                        $countries = ['Brazil', 'Canada', 'Australia'];
                        foreach ($countries as $country) {
                            if (isset($_POST['country']) and $country === $_POST['country']) {
                                echo '<option value="' . $_POST['country'] . ' " selected>' . $_POST['country'] . '</option>';
                            } else {
                                echo '<option value="' . $country . '">' . $country . '</option>';
                            }
                        }
                    ?>
                </select>

                <button type="submit">Atualizar</button>
            </form>
        </header>

        <main>
            <section>
                <h2>Informações</h2>
                <div id="data">
                    <?php include 'states.php'; ?>
                </div>
            </section>
        </main>

        <footer>
            <p>Desenvolvido por Kidopi</p>
            <?php include 'last-access.php'; ?>
        </footer>
    </div>
</body>
</html>