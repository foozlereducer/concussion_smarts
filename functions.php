<?php
/**
 * sbmr-Modern-Responsive functions and definitions
 *
 * @package Modern-Responsive
 */

// Report all PHP errors
error_reporting( E_ALL );

// Site Functions
require get_template_directory() . '/functions/smbr-site-functions.php';

// Theme Setting
require get_template_directory() . '/functions/smbr-theme-settings.php';

// Side Bars
require get_template_directory() . '/functions/smbr-sidebars.php';

smbr_jetpack_setup();