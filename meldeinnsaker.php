<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Repair Request</title>
    <style>
        * {
            text-align: center;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2>Elvebakken Skademeldingskjema</h2>
    <form action="connect.php" method="post">

        <label for="epost">Epost:</label>
        <input type="text" id="epost" name="epost" required>
       
        <label for="navnogetternavn">Navn og etternavn:</label>
        <input type="text" id="navnogetternavn" name="navnogetternavn" required>

        <label for="klasse">Klasse:</label>
        <input type="text" id="klasse" name="klasse" required>

        <label for="kommentar">Hva som har skjedd?:</label>
        <textarea id="text" name="kommentar" rows="4" required></textarea>

        

        <button type="submit">Send inn</button>
    </form>

</body>
</html>