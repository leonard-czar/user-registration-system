<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="/assets/style.css">

</head>

<body class="body">
    <h1>An Error Occured</h1>
    <div>
        {foreach $errors as $error}
            <ul>
                <li>
                    <strong class="errors">{$error}</strong>
                </li>
            </ul>
        {/foreach}
    </div>
</body>

</html>