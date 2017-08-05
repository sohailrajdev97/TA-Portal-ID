<?php

$con = mysqli_connect( "localhost", "sohail", "", "ta" );

if ( !$con ) {
	die( "DB Connection Failed " . mysqli_error( $con ) );
}
?>