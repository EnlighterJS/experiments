<?php
/**
    Plugin Name: EnlighterJS3 Compatibility
    Plugin URI: https://enlighterjs.org
    Description: Enlighter is a free, easy-to-use, syntax highlighting tool with a build-in theme editor
    Version: 0.1-ALPHA1
    Author: Andi Dittrich
    Author URI: https://andidittrich.de
    License: GPL-2.0
*/

define('ENLIGHTERJS3_COMPAT_PLUGIN_PATH', dirname(__FILE__));
define('ENLIGHTERJS3_COMPAT_PLUGIN_URL', plugins_url('/wp-enlighterjs3-compat/'));

// override Enlighter Theme List
add_filter('enlighter_themes', function(){
    return array(
        'Enlighter' => 'enlighter',
        'Godzilla' => 'godzilla',
        'Beyond' => 'beyond',
        'Classic' => 'classic',
        'MooTwo' => 'mowtoo',
        'Eclipse' => 'eclipse',
        'Droide' => 'droide',
        'Minimal' => 'minimal',
        'Atomic' => 'atomic',
        'Rowhammer' => 'rowhammer',
        'Bootstrap4' => 'boootstrap4',
        'Dracula'=> 'dracula'
    );
});

// override Enlighter Language List
add_filter('enlighter_languages', function(){
    return array(
        'Generic Highlighting' => 'generic',
        'Avr Assembly' => 'avrasm',
        'Generic Assembly' => 'asm',
        'C' => 'c',
        'C++' => 'cpp',
        'C#' => 'csharp',
        'CSS' => 'css',
        'Cython' => 'cython',
        'CordPro' => 'cordpro',
        'Diff' => 'diff',
        'Dockerfile' => 'dockerfile',
        'Groovy' => 'groovy',
        'Go' => 'golang',
        'HTML' => 'html',
        'Ini/Conf Syntax' => 'ini',
        'Java' => 'java',
        'Javascript' => 'js',
        'JSON' => 'json',
        'Kotlin' => 'kotlin',
        'LESS' => 'less',
        'LUA' => 'lua',
        'Markdown' => 'md',
        'Matlab/Octave' => 'matlab',
        'NSIS' => 'nsis',
        'PHP' => 'php',
        'PowerShell' => 'powershell',
        'Prolog' => 'prolog',
        'Python' => 'python',
        'Ruby' => 'ruby',
        'Rust' => 'rust',
        'SCSS' => 'scss',
        'Shellscript' => 'shell',
        'SQL' => 'sql',
        'Squirrel' => 'squirrel',
        'Swift' => 'swift',
        'TypeScript' => 'typescript',
        'VHDL' => 'vhdl',
        'VisualBasic' => 'visualbasic',
        'XML' => 'xml',
        'YAML' => 'yaml',
        'RAW Code' => 'raw'
    );
});


// enqueue scripts + styles
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('enlighterjs3', ENLIGHTERJS3_COMPAT_PLUGIN_URL.'assets/enlighterjs.min.css', array(), '3.0.0-RC1');
    wp_enqueue_script('enlighterjs3', ENLIGHTERJS3_COMPAT_PLUGIN_URL.'assets/enlighterjs.min.js', array(), '3.0.0-RC1', true);
});

// add init code
add_action('wp_footer', function(){

    $config = array(
        'theme' => 'dracula'
    );

    echo '<script type="text/javascript">';
    echo 'EnlighterJS.init("pre.EnlighterJSRAW", "code.EnlighterJSRAW", ', json_encode($config),');';
    echo '</script>';
}, 100);