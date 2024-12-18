

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Extended POST and GET Form</title>
</head>
<body>
    <h1>Extended POST and GET Request Example</h1>

    <!-- GET request for search filters -->
    <form action="form.php" method="GET">
        <label for="search">Search:</label>
        <input type="text" id="search" name="search" placeholder="Enter search term">

        <label for="search2">Search:</label>
        <input type="text" id="search2" name="search2" placeholder="Enter search2 term">
        <button type="submit">Search</button>
    </form>

    <br><hr><br>

    <!-- POST request for form submission -->
    <form action="form.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" placeholder="Enter your age" min="1" max="100" required><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="" disabled selected>Select your gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br>

        <label for="preferences">Preferences:</label><br>
        <input type="checkbox" id="sports" name="preferences[]" value="Sports">
        <label for="sports">Sports</label><br>
        <input type="checkbox" id="music" name="preferences[]" value="Music">
        <label for="music">Music</label><br>
        <input type="checkbox" id="movies" name="preferences[]" value="Movies">
        <label for="movies">Movies</label><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" placeholder="Enter your message" rows="4" cols="50"></textarea><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
