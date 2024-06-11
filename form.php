<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form php-hotel</title>
</head>

<body>
    <form action="hotel.php" method="GET">
        <label for="yes">c'è parcheggio</label>
        <input type="radio" value="true" name="park" id="yes">
        <label for="no">non c'è parcheggio</label>
        <input type="radio" value="" name="park" id="no" >

    <button type="submit">invia </button>
    </form>
</body>

</html>