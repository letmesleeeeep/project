<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'calc.php';?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="buttons.css">
    <link rel="stylesheet" href="button-bubbles.css">
    <link rel="stylesheet" href="bar.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="about.html">About</a>
        <a href="constacts.html">Contact</a>
      </div>
      <div><button class="button1" onclick="toggleDarkMode()">Toggle Dark Mode</button></div>
      
    <form method="post" attribute="post" action="calc.php">
        <p>First Value:<br/>
            <input type="text" id="first" name="first"></p>

        <label for="function">Choose a function:</label>
        <select name="function" id="function">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        
        <p>Second Value:<br/>
            <input type="text" id="second" name="second"></p>
        <button type="submit" name="answer" id="answer" value="answer">Calculate</button>
    </form>
    

    <p><?php echo $first. $function. $second. "=". $result; ?></p>

</body>
</html>