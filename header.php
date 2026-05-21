<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DS Theme</title>
        <?php wp_head();?>
    </head>

    <body> <?php body_class();?>

    <?php wp_nav_menu(array('theme_location'=>'primary'));?>
        <header>
            <nav>
                <ul>
                    <li>Contact Us</li>
                    <li>About Us</li>
                    <li>Register</li>
                </ul>
            </nav>
        </header>