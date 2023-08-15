<?php

/**
 * Custom CSS Files to enqueue Admin
 *
 *
 * Datas Structure
 *
 * [
 *     'handle'         => CSS file Identifier
 *     'path'           => CSS file path
 *     'dependencies'   => CSS Files dependencies
 *     'version'        => CSS File version
 *     'media'          => CSS file active on media
 * ];
 *
 * You can use "wep_css_files" filter to add CSS Files on enqueue process
 *
 */
return apply_filters('wep_css_files', []);
