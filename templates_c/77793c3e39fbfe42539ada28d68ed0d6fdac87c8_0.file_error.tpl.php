<?php
/* Smarty version 5.3.1, created on 2024-06-21 22:12:30
  from 'file:smartyTemplate/error.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_6675deae446ea8_96845722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77793c3e39fbfe42539ada28d68ed0d6fdac87c8' => 
    array (
      0 => 'smartyTemplate/error.tpl',
      1 => 1719000748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6675deae446ea8_96845722 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Lebechi\\Documents\\PROJECTS\\USER REGISTRATION FORM\\smartyTemplate';
?><!DOCTYPE html>
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
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('errors'), 'error');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('error')->value) {
$foreach0DoElse = false;
?>
            <ul>
                <li>
                    <strong class="errors"><?php echo $_smarty_tpl->getValue('error');?>
</strong>
                </li>
            </ul>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
</body>

</html><?php }
}
