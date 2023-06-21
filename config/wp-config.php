<?php
/**
 * Load the proper Wordpress configuration for the desired environment.
 */

# Load the environment settings.
if ( file_exists( dirname( __FILE__ ) . '../config/env-settings.php' ) ) {
    include(dirname(__FILE__) . '../config/env-settings.php');
}
else {
    define('WEB_ENV', 'default');
}

# Load the appropriate Wordpress config for this environment.
 if ( file_exists( dirname( __FILE__ ) . '../config/wp-config.' . WEB_ENV . '.php' ) )
     include(dirname(__FILE__) . '/wp-config.' . WEB_ENV . '.php');
