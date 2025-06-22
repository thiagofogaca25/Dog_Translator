<?php require_once __DIR__ . '/../app/Translator.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dog Translator</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <h1>🐶 Tradutor de Cachorrês</h1>

    <form action="" method="post">
        <textarea name="text" placeholder="Digite sua frase..." required></textarea><br><br>

        <label style="font-size:2.5rem" for="mode">Modo:</label>
        <select name="mode" id="mode">
            <option value="normal">Normal</option>
            <option value="fofo">Fofo</option>
            <option value="raivoso">Raivoso</option>
        </select><br><br>

        <button type="submit">TRANSLATE</button>
    </form>
    
    <div class="result-container ">

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $translated = toDogLanguage($_POST['text'], $_POST['mode']);
        echo "<h2>TRADUÇÃO:</h2><p>" . htmlspecialchars($translated) . "</p>";
    }
    ?>
    </div>

    <audio id="barkSound" src="assets/audio/bark.mp3"></audio>
    <script src="assets/js/sound.js"></script>

    <footer>
    </footer>
</body>
</html>
