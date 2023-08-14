<?php

/**
 * Custom Javascript Files to enqueue to Admin
 *
 *
 * Datas Structure
 *
 * [
 *     'handle'         => JS file Identifier
 *     'path'           => JS file path
 *     'dependencies'   => JS Files dependencies
 *     'version'        => JS File version
 *     'in_footer'      => JS file loaded in footer
 * ];
 *
 * You can use "ant_js_files" filter to change Javascript files loaded
 *
 */
return apply_filters('ant_js_files', []);
