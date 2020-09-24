<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
    <br>

    <label for="User" style="font-size: 40px">Wpisz swoją nazwę</label>
    <br>
    <input type="text" name="nazwa" style="margin-left:50px; padding-left:50px">
    <br>

    <label for="miastoA">Wybierz Startowe Miasto</label>

    <select name="miastoA" id="miastoA">
        <option value="krakow">Kraków</option>
        <option value="warszawa">Warszawa</option>
    </select>

    <br>

    <label for="miastoB">Wybierz Docelowe Miasto</label>

    <select name="miastoB" id="miastoB">
        <option value="krakow">Kraków</option>
        <option value="warszawa">Warszawa</option>
    </select>
    <br>
    <input type="submit" value="submit">


    </form>
</body>
</html>