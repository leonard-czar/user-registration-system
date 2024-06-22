<?php
/* Smarty version 5.3.1, created on 2024-06-21 21:52:02
  from 'file:smartyTemplate/confirmation.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_6675d9e2144101_42008913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61dbc96fe67430939da35d381f7eb90591f9debe' => 
    array (
      0 => 'smartyTemplate/confirmation.tpl',
      1 => 1718999090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6675d9e2144101_42008913 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Lebechi\\Documents\\PROJECTS\\USER REGISTRATION FORM\\smartyTemplate';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <link rel="stylesheet" href="/assets/style.css">
<?php echo '<script'; ?>
 src="/assets/toggle.js" ><?php echo '</script'; ?>
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
