<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<form action="/welcome" method="POST">
    @csrf
    <h1>Buat Account Baru!</h1>

    <h3>Sign Up Form</h3>

    <label for="fname">First Name :</label><br><br>
    <input type="text" name="fname" id="fname"><br><br>
    <label for="lname">Last Name :</label><br><br>
    <input type="text" name="lname" id="lname"><br><br>

    <label for="">Gender</label><br><br>
    <input type="radio" name="gender" id="male"> <label for="male">Male</label><br>
    <input type="radio" name="gender" id="female"> <label for="female">Female</label><br>
    <input type="radio" name="gender" id="other"> <label for="other">Other</label><br><br>

    <label for="">Nationality :</label><br><br>
    <select class="form-control" name="national" id="">
        <option>Indonesian</option>
        <option>Singapore</option>
        <option>Malaysian</option>
        <option>Australian</option>
    </select><br><br>

    <label for="">Language Spoken :</label><br><br>
    <input type="checkbox" name="indo" id="indo"><label for="indo">Bahasa Indonesia</label><br>
    <input type="checkbox" name="eng" id="eng"><label for="eng">English</label><br>
    <input type="checkbox" name="oth" id="oth"><label for="oth">Other</label><br><br>

    <label for="">Bio :</label><br><br>
    <textarea name="bio" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" name="" id="" >


</form>
</body>
</html>