<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= URLROOT?>ElectroSite/User/logIn" method="POST">
        <label>name :</label>
        <input type="email" placeholder="enter your email" name="email"><br>
        <label>password</label>
        <input type="password" placeholder="enter your password" name="pwd"><br>
        <button type="submit">connect</button>
    </form>
</body>
</html>