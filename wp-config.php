<?php

// debugging on production
// see wp-content/debug.log
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define( 'WP_DEBUG_DISPLAY', false );

// disable editing of theme files from the WordPress Dashboard
// source: https://github.com/senlin/Code-Snippets/blob/master/WP-CONFIG/disallow-file-edit.php
define ( 'DISALLOW_FILE_EDIT', true );

// DISABLE THEME/PLUGIN EDITOR
// source: https://github.com/senlin/Code-Snippets/blob/master/WP-CONFIG/disable-theme-plugin-editor.php
define('DISALLOW_FILE_EDIT',true);

// set post revisions count 
define( 'WP_POST_REVISIONS', 3);