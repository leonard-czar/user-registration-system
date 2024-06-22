
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <link rel="stylesheet" href="/assets/style.css">
<script src="/assets/toggle.js" ></script>
 <style>
     

    
</style>
</head>

<body class="confirm">

    <h1>Registration Confirmation</h1>

    <h3 id="success">{$message}</h3>

    <p>Username: {$username}</p>

    <p>Email: {$email}</p>

    {* <p> Password: <span id="password" style="">{$password}</span> <button id="passwordToggle">Show</button>
    </p> *}
<p> Password: <span id="password">{$password}</span> <button id="passwordToggle">Show</button> </p>

<div class="margin"><a href="/registeration-form.php">Back</a></div>
       
</script>
</body>

</html>