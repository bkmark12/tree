<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>TREE</title>

    <?php wp_head(); ?> <!-- style.css is included by default by wp_head() function. Add this function before HEAD tag. -->
</head>
<body>
    
    <header id="header" class="header">
        <div id="logo_header">
            <svg width="192px" height="33px" viewBox="0 0 192 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Generator: Sketch 51.1 (57501) - http://www.bohemiancoding.com/sketch -->
            <title>Logo</title>
            <desc>Created with Sketch.</desc>
            <defs></defs>
            <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Homepage" transform="translate(-91.000000, -34.000000)">
                    <g id="Header" transform="translate(0.000000, 28.000000)">
                        <g id="Logo" transform="translate(91.000000, 0.000000)">
                            <text id="TREE." font-family="Helvetica-Bold, Helvetica" font-size="37.5" font-weight="bold" fill="#1A2F02">
                                <tspan x="84.1056604" y="37">TREE.</tspan>
                            </text>
                            <g id="Group" transform="translate(0.000000, 6.000000)" fill-rule="nonzero">
                                <ellipse id="Oval" fill="#7ED321" style="mix-blend-mode: multiply;" cx="38.2981132" cy="16.5" rx="16.5207547" ry="16.5"></ellipse>
                                <ellipse id="Oval-Copy" fill="#B8E986" style="mix-blend-mode: multiply;" cx="60.0754717" cy="16.5" rx="16.5207547" ry="16.5"></ellipse>
                                <ellipse id="Oval-Copy-2" fill="#417505" style="mix-blend-mode: multiply;" cx="16.5207547" cy="16.5" rx="16.5207547" ry="16.5"></ellipse>
                            </g>
                        </g>
                    </g>
                </g>
            </g>
            </svg>
        </div>
        
        <nav id="nav" class="tree-primary-menu">
            <?php
            $args = array(
                'theme_location' => 'primary');
            ?>
            
            <?php wp_nav_menu($args);?>
        
        
            <div id="burger" class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>