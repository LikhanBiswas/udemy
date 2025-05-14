<?php

function u_setup_theme(){
    add_theme_support('editor-styles');

    add_editor_style([
        'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap',
        'assets/bootstrap-icons/bootstrap-icons.css',
        'assets/public/index.css',
        'assets/editor.css'
    ]);
}