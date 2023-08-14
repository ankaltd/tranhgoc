<?php

// Defined autoload class when call to
spl_autoload_register('autoload');
function autoload($class_name) {

    // convert class name into lowercase
    $class_name = strtolower($class_name);

    // convert all _ into -
    $class_name = str_replace('_', '-', $class_name);

    // If class name container "model" that is model, inside folder models    
    if (strstr($class_name, 'model')) {
        $path = THEME_APP . '/models/' . $class_name . '.php';
    } elseif (strstr($class_name, 'view')) {
        // If class name container "view" that is view, inside folder views        
        $path = THEME_APP . '/views/' . $class_name . '.php';
    } else {
        // Other is normal class, inside folder classes
        $path = THEME_APP . '/controllers/' . $class_name . '.php';
    }

    // Nếu file tồn tại thì require_once
    if (file_exists($path)) {
        require_once($path);
    }
}
