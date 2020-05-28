<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <title> TEST </title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />
    
    <script src="https://www.littleexplorersplaygroup.co.uk/tree/main.js"></script>
    
    <?php wp_head(); ?> <!-- style.css is included by default by wp_head() function. Add this function before HEAD tag. -->
</head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/lazysizes@5.2.1-rc2/lazysizes.min.js" async=""></script>
        
        <div class="header">
            <div class="logo_header">
                <svg width="192px" height="33px" viewBox="0 0 192 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
            
            <div class="menu">
                <nav id="nav" class="tree-primary-menu">
                    <?php
                        $args = array(
                        'theme_location' => 'primary');
                    ?>
                    <?php wp_nav_menu($args); 
                    ?>
                </nav>
                <div id="burger" class="burger" onmouseenter="showMenu()">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>
        </div>