<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clicker Game</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>The Clicker Game</h1>
    <button class="regular-btn" onclick="increaseCounter()">CLICK ME</button>
    <button class="golden-btn hide" onclick="increaseCounter()">CLICK ME</button>
    <div class="counter">
        <p>Clicks:&nbsp;</p>
        <p id="counter"></p>
    </div>
</body>
<script src="script.js"></script>

</html>