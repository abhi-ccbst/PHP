<!DOCTYPE html>
<html lang="en">
<head>
    <title>Input Types Exercise</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            display: inline-block;
            width: 150px;
            margin-bottom: 10px;
        }
        input, select, button {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Form Input Types Exercise</h1>
    <form action="form_handler.php" method="post">
        <label for="text">Text:</label>
        <input type="text" id="text" name="text" placeholder="Enter text"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter email"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <label for="tel">Phone:</label>
        <input type="tel" id="tel" name="tel" placeholder="123-456-7890"><br>

        <label for="url">URL:</label>
        <input type="url" id="url" name="url" placeholder="https://example.com"><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date"><br>

        <label for="datetime">Datetime:</label>
        <input type="datetime-local" id="datetime" name="datetime"><br>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time"><br>

        <label for="week">Week:</label>
        <input type="week" id="week" name="week"><br>

        <label for="month">Month:</label>
        <input type="month" id="month" name="month"><br>

        <label for="number">Number:</label>
        <input type="number" id="number" name="number" min="1" max="100"><br>

        <label for="range">Range:</label>
        <input type="range" id="range" name="range" min="1" max="100"><br>

        <label for="color">Color:</label>
        <input type="color" id="color" name="color"><br>

        <label for="checkbox">Checkbox:</label>
        <input type="checkbox" id="checkbox" name="checkbox" value="checked"> Agree to terms<br>

        <label for="radio1">Radio:</label>
        <input type="radio" id="radio1" name="radio" value="Option 1"> Option 1
        <input type="radio" id="radio2" name="radio" value="Option 2"> Option 2<br>

        <button type="submit">Submit</button>
        <input type="reset" value="Reset"><br>
    </form>
</body>
</html>
