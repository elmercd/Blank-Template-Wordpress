<?php 

require_once('inc/functions/wp_enque_functions.php');
require_once('inc/functions/wp_settings_function.php');

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/ReduxFramework/configuration/my-configuration.php' ) ) {
    require_once( dirname( __FILE__ ) . '/ReduxFramework/configuration/my-configuration.php' );
}

?>