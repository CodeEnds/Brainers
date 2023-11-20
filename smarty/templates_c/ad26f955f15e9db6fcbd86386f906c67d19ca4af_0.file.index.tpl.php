<?php
/* Smarty version 4.3.4, created on 2023-11-09 19:56:34
  from 'C:\xampp\htdocs\korki\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_654d2b62350192_36455824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad26f955f15e9db6fcbd86386f906c67d19ca4af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\korki\\smarty\\templates\\index.tpl',
      1 => 1699555955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654d2b62350192_36455824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\korki\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'C:\\xampp\\htdocs\\korki\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['title']->value);?>
</title>
</head>
<body>
    <h1><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['title']->value);?>
</h1>

    <p>
        The number of pixels is: <?php echo smarty_function_math(array('equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['width']->value,'y'=>$_smarty_tpl->tpl_vars['height']->value),$_smarty_tpl);?>

    </p>
</body>
</html><?php }
}
