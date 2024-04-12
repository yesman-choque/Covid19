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
    
            <form>
                <label for="covid-status">Escolha um país</label>
                <select id="covid-status" name="covid-status">

                    <?php include 'countries.php'; ?>

                    <option value="infected">Infected</option>
                    <option value="recovered">Recovered</option>
                    <option value="deceased">Deceased</option>
                </select>

                <button type="submit">Atualizar</button>
            </form>
        </header>
    </div>
</body>
</html>