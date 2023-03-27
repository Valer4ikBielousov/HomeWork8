<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Make money</title>

</head>
<body>
<div class="block">
    <form action="server.php" method="post" enctype="multipart/form-data">
        <div class="block">
            <h1 class=form>MAKE MONEY</h1>
            <div class="form-input-name">
                <label for="nickname">Nickname</label>
                <input type="text" id="nickname" name="nickname">
            </div>
            <div class="form-input-type">
                <label>Type of earn money</label><br>
                <label for="casino">
                    <input type="checkbox" id="casino" name="profession[]" value="casino">
                    Play online Casino
                </label>
                <br>
                <label for="C#">
                    <input type="checkbox" id="C#" name="profession[]" value="C#">
                    Learning C#
                </label>
                <br>
                <label for="PHP">
                    <input type="checkbox" id="PHP" name="profession[]" value="PHP">
                    Learning PHP
                </label>
                <br>
                <label for="JS">
                    <input type="checkbox" id="JS" name="profession[]" value="JS">
                    Learning JS
                </label>
            </div>

            <div class="form-input-currency">
                <label>Currency of money</label><br>
                <label for="dollar">
                    <input type="radio" id=dollar name="currency" value="dollar">
                    Dollar
                </label>
                <br>
                <label for="euro">
                    <input type="radio" id="euro" name="currency" value="euro">
                    Euro
                </label>
                <div class="form-input-earn">
                    <label>How much money per year</label><br>
                    <select name="earn">
                        <option disabled>How much money do want per year</option>
                        <option>24000</option>
                        <option>48000</option>
                        <option>60000</option>
                    </select>
                </div>
            </div>
            <div class="form-input-statement">
                <label>Your statement</label><br>
                <input type="file" name="statement">
            </div>
            <div class="form-input-send">
                <label>Send your wishes to God</label><br>
                <input type="submit">
            </div>
        </div>

    </form>

</body>
</html>

