<?php
/**
 * SUPERCELL: includes/helpers.php
 *
 * Use this file to register simple PHP helper functions for use in your theme.
 */


 /**
  * SUPERCELL: asset helper
  *
  * Allows you to call `print asset('<path from root of theme')` rather
  * than messing with wp functions.
  */
if (!function_exists('asset')) {
    function asset($subPath)
    {
        return get_template_directory_uri() . DIRECTORY_SEPARATOR . $subPath;
    }
}
