<!DOCTYPE html>
<html>
<head>
    <title>For Final</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Simple Navbar -->
    <nav>
        <div class="left-part">
            <a href="index.php">For Final</a>
        </div>

        <div class="middle-part">
            <a href="index.php">Home Page 🏠</a>
            <a href="fetch.php">Show All Data 🈸</a>
            <a href="search.php">Search Data 🔎</a>
        </div>

        <div class="right-part">
            <h4>😃Thank You</h4>
        </div>
    </nav>


    <!-- Simple Input Form     -->
    <form action="upload.php" method="POST">
        <h3>Input Form</h3>
        <br>

        <label for="uname">Username :</label>
        <input type="text" id="uname" name="uname" reqired>
        <br><br>

        <label for="pass">Password :</label>
        <input type="password" id="pass" name="pass" reqired>
        <br><br>

        <button type="submit">Submit</button>
    </form>
    <hr>
</body>
</html>