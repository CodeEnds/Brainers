{capture name='_smarty_debug' assign=debug_output}
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smarty Debug Console</title>
    <style>
        {literal}

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
        {/literal}
    </style>
</head>
<body>

    <img src="https://media.tenor.com/FIlAXMHf8vsAAAAd/naruto-background.gif" class="background">

    <div class="app-top">
        <div class="left">Smarty Debug Console - {Smarty::SMARTY_VERSION}</div>
        <div class="right">{if !empty($template_data)}Load Time - {$execution_time|string_format:"%.5f"}{/if}</div>
    </div>
    
    <main>

        <div class="header">Assigned template variables</div>

        <div class="content">
            {foreach $assigned_vars as $vars}
                <div class="record">
                    <div class="icon-container">
                        <div class="icon-object">{literal}{ }{/literal}</div>
                    </div>
                    <div class="variable-name">
                        <span class="dolar-sign">$</span>{$vars@key}<span class="colon">:</span>
                    </div>
                    <div class="variable-value">
                        {$vars['value']|debug_print_var:10:80 nofilter}
                    </div>
                    <div class="meta">nocache = false</div>
                </div>
            {/foreach}
        </div>
    </main>

    {*
    <h1>Smarty {Smarty::SMARTY_VERSION} Debug Console<br />
        {if isset($template_name)}{$template_name|debug_print_var nofilter} {/if}
        {if !empty($template_data)}Total Time {$execution_time|string_format:"%.5f"}{/if}
    </h1>

    {if !empty($template_data)}
        <h2>included templates &amp; config files (load time in seconds)</h2>
        <div>
            {foreach $template_data as $template}
                <span style="color: brown;">{$template.name}</span>
                <br>&nbsp;&nbsp;<span class="exectime">
                (compile {$template['compile_time']|string_format:"%.5f"}) (render {$template['render_time']|string_format:"%.5f"}) (cache {$template['cache_time']|string_format:"%.5f"})
                </span>
                <br>
            {/foreach}
        </div>
    {/if}

    <h2>assigned template variables</h2>

    <table id="table_assigned_vars">
        {foreach $assigned_vars as $vars}
            <tr>
                <td>
                    <h3 style="color: blue;">${$vars@key}</h3>
                    {if isset($vars['nocache'])}<strong>Nocache</strong><br>{/if}
                    {if isset($vars['scope'])}<strong>Origin:</strong> {$vars['scope']|debug_print_var nofilter}{/if}
                </td>
                <td>
                    <h3>Value</h3>
                    {$vars['value']|debug_print_var:10:80 nofilter}
                </td>
                <td>
                    {if isset($vars['attributes'])}
                        <h3>Attributes</h3>
                        {$vars['attributes']|debug_print_var nofilter}
                    {/if}
                </td>
        {/foreach}
    </table>

    <h2>assigned config file variables</h2>

    <table id="table_config_vars">
        {foreach $config_vars as $vars}
            <tr>
                <td>
                    <h3 style="color: blue;">#{$vars@key}#</h3>
                    {if isset($vars['scope'])}<strong>Origin:</strong> {$vars['scope']|debug_print_var nofilter}{/if}
                </td>
                <td>
                    {$vars['value']|debug_print_var:10:80 nofilter}
                </td>
            </tr>
        {/foreach}

    </table> *}
    </body>
</html>
{/capture}
<script type="text/javascript">
    _smarty_console = window.open("", "console{$targetWindow}", "width=1024,height=600,left={$offset},top={$offset},resizable,scrollbars=yes");
    _smarty_console.document.write("{$debug_output|escape:'javascript' nofilter}");
    _smarty_console.document.close();
</script>
