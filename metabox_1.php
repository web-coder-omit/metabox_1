<?php

/**
 * Plugin Name: Metabox
 * Plugin URI:  Plugin URL Link
 * Author:      Plugin Author Name
 * Author URI:  Plugin Author Link
 * Description: This plugin make for pratice wich is "Metabox".
 * Version:     0.1.0
 * License:     GPL-2.0+
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: mb
*/

function plugin_languages(){
    load_plugin_textdomain('plugins_languages',false,dirname(__FILE__)."/languages");
}
add_action("plugins_loaded","plugin_languages");

// function metabox_function(){
//     add_meta_box('first_metabox', __('Your_location','mb'),'mb_first_function','post');
// }
// function mb_first_function(){
//     $lable = __('Location','mb');
//     $metabox_html = <<<EOD
//     <p>
//         <label for='mb_location'>{$lable}</label>
//         <input type='text' name='location' id='mb_location'/>
//     </p>
//     EOD;
// echo $metabox_html;
// }


// add_action('admin_menu', 'metabox_function');


function second_function(){
    add_meta_box('second_metabox', __('Your_Name','mb'), 'second_metabox_function','page','side');
};
function second_metabox_function(){
    $meta_info = <<<EOD
    <div>
        <label for="name">First Name</label>
        <input type='text' id='name' placeholder="Put your name"/>
    </div>
    EOD;
    echo $meta_info;
}



add_action('admin_init','second_function');












?>