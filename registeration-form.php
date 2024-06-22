<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>

<body>
    <form action="process.php" method="post">
        
        <label for="username">Username:</label>
        <input type="text" name="username" >

        <label for="email">Email:</label>
        <input type="email" name="email" >

        <label for="password">Password:</label>
        <input type="password" name="password" >

        <input type="submit" value="Register">
    </form>

   

</body>

</html>