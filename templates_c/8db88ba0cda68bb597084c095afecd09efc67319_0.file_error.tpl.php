<?php
/* Smarty version 5.3.1, created on 2024-06-21 21:33:03
  from 'file:error.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_6675d56f119e24_48082317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8db88ba0cda68bb597084c095afecd09efc67319' => 
    array (
      0 => 'error.tpl',
      1 => 1718998334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6675d56f119e24_48082317 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Lebechi\\Documents\\PROJECTS\\USER REGISTRATION FORM';
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="/style.css">
    
</head>

<body class="body">
    <h1>An Error Occured</h1>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('errors'), 'error');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('error')->value) {
$foreach0DoElse = false;
?>
        <p class="errors"><strong><?php echo $_smarty_tpl->getValue('error');?>
</strong> </p>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</body>

</html><?php }
}
