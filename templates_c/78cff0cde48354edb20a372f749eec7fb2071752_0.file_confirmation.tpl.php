<?php
/* Smarty version 5.3.1, created on 2024-06-21 21:39:44
  from 'file:confirmation.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_6675d700ed2359_85176578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78cff0cde48354edb20a372f749eec7fb2071752' => 
    array (
      0 => 'confirmation.tpl',
      1 => 1718998780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6675d700ed2359_85176578 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Lebechi\\Documents\\PROJECTS\\USER REGISTRATION FORM';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <link rel="stylesheet" href="/style.css">
<?php echo '<script'; ?>
 src="/toggle.js" ><?php echo '</script'; ?>
>
 <style>
     

    
</style>
</head>

<body class="confirm">

    <h1>Registration Confirmation</h1>

    <h3 id="success"><?php echo $_smarty_tpl->getValue('message');?>
</h3>

    <p>Username: <?php echo $_smarty_tpl->getValue('username');?>
</p>

    <p>Email: <?php echo $_smarty_tpl->getValue('email');?>
</p>

    <p> Password: <span id="password"><?php echo $_smarty_tpl->getValue('password');?>
</span> <button id="passwordToggle">Show</button> </p>

   
       
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
