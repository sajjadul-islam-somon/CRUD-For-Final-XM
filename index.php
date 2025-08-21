<!DOCTYPE html>
<html>
    <head>
        <title>For Final</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <form action="upload.php" method="POST">
            <h2>Simple Form</h2>
            <label for="uname">Username :</label>
            <input type="text" id="uname" name="uname" reqired>

            <br><br>

            <label for="pass">Password :</label>
            <input type="password" id="pass" name="pass" reqired>

            <br><br>

            <button type="submit">Submit</button>
        </form>

        <br><br>

        <a href="fetch.php">Show All Data (Fetch) 🈸</a>

        <br><br>

        <a href="search.php">Search Any Data (Search) 🔎</a>
    </body>
</html>