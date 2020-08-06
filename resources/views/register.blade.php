<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <div>
        <h2>Buat Account Baru!</h2>
        <h4>Sign Up Form</h4>
    </div>
    <form action="/welcome" method="POST">
    @csrf

    <form>
        <label for="first_name">First name:</label>
        <br><br>
        <input type="text" id="first_name">
        <br><br>
        <label for="last_name">Last name:</label>
        <br><br>
        <input type="text" id="last_name">
        <br><br>
        <label>Gender:</label><br><br>
        <input type="radio" name="gender" value="0">Male <br>
        <input type="radio" name="gender" value="1">Female <br>
        <input type="radio" name="gender" value="3">Other
        <br><br>
        <label>Nationality:</label> <br><br>
        <select>
            <option value="id">Indonesian</option>
            <option value="sg">Singaporean</option>
            <option value="au">Australian</option>
            <option value="my">Malaysian</option>
        </select>
        <br><br>
        <label>Language Spoken:</label><br><br>
        <input type="checkbox" name="language_spoken" value="0"> Bahasa Indonesia <br>
        <input type="checkbox" name="language_spoken" value="1"> English <br>
        <input type="checkbox" name="language_spoken" value="2"> Other 
        <br><br>
        <label for="bio_user">Bio:</label>
        <br>
        <textarea cols="20" rows=10" id="bio_user"></textarea>
        <br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>