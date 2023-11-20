<?php
/* Smarty version 4.3.4, created on 2023-11-10 18:54:10
  from 'C:\xampp\htdocs\korki\smarty\templates\debug.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_654e6e426f5be1_79953714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88a5f60b9bd515dfeb039b9f3f1baacd9b5088d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\korki\\smarty\\templates\\debug.tpl',
      1 => 1699638847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654e6e426f5be1_79953714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\korki\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.debug_print_var.php','function'=>'smarty_modifier_debug_print_var',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, '_smarty_debug', 'debug_output', null);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smarty Debug Console</title>
    <style>
        

        * {
            box-sizing: border-box;
        }

        body {
            font-family: consolas, lucida console, courier new, monospace;
            color: #fff;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            image-rendering: pixelated;
            z-index: -1;
        }

        .app-top {
            color: #fff;
            background: #000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            font-size: 18px;
            flex: 0 0 auto;
        }

        main {
            background: rgba(0, 0, 0, 0.9);
            flex: 1;
        }

        .header {
            font-size: 1.5em;
            font-weight: bold;
            margin: 10px;
            text-transform: uppercase;
        }

        .record {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 10px 0;
        }

        .icon-container {
            flex: 0 0 60px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .variable-name {
            flex: 0 0 auto;
            color: #3a7dd3;
            display: flex;
            align-items: center;
        }

        .variable-name .dolar-sign {
            color: gray;
        }

        .variable-name .colon {
            color: #fff;
            min-height: 25px;
        }

        .variable-value {
            flex: 2 0 40%;
            min-height: 25px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .meta {
            flex: 0 0 auto;

        }

        .icon-object {
            background: #A41F47;
            border-radius: 40px;
            padding: 3px 5px;
            color: black;
        }
        
    </style>
</head>
<body>

    <img src="https://media.tenor.com/FIlAXMHf8vsAAAAd/naruto-background.gif" class="background">

    <div class="app-top">
        <div class="left">Smarty Debug Console - <?php echo htmlspecialchars((string) Smarty::SMARTY_VERSION, ENT_QUOTES, 'UTF-8');?>
</div>
        <div class="right"><?php if (!empty($_smarty_tpl->tpl_vars['template_data']->value)) {?>Load Time - <?php echo htmlspecialchars((string) sprintf("%.5f",$_smarty_tpl->tpl_vars['execution_time']->value), ENT_QUOTES, 'UTF-8');
}?></div>
    </div>
    
    <main>

        <div class="header">Assigned template variables</div>

        <div class="content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assigned_vars']->value, 'vars');
$_smarty_tpl->tpl_vars['vars']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vars']->key => $_smarty_tpl->tpl_vars['vars']->value) {
$_smarty_tpl->tpl_vars['vars']->do_else = false;
$__foreach_vars_0_saved = $_smarty_tpl->tpl_vars['vars'];
?>
                <div class="record">
                    <div class="icon-container">
                        <div class="icon-object">{ }</div>
                    </div>
                    <div class="variable-name">
                        <span class="dolar-sign">$</span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vars']->key, ENT_QUOTES, 'UTF-8');?>
<span class="colon">:</span>
                    </div>
                    <div class="variable-value">
                        <?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['vars']->value['value'],10,80);?>

                    </div>
                    <div class="meta">nocache = false</div>
                </div>
            <?php
$_smarty_tpl->tpl_vars['vars'] = $__foreach_vars_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </main>

        </body>
</html>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo '<script'; ?>
 type="text/javascript">
    _smarty_console = window.open("", "console<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['targetWindow']->value, ENT_QUOTES, 'UTF-8');?>
", "width=1024,height=600,left=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['offset']->value, ENT_QUOTES, 'UTF-8');?>
,top=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['offset']->value, ENT_QUOTES, 'UTF-8');?>
,resizable,scrollbars=yes");
    _smarty_console.document.write("<?php echo strtr((string)$_smarty_tpl->tpl_vars['debug_output']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
");
    _smarty_console.document.close();
<?php echo '</script'; ?>
>
<?php }
}
