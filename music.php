
<?php
	function debug_to_console( $data ) {
		$output = $data;
		if ( is_array( $output ) )
			$output = implode( ',', $output);

		echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
	}
	
	debug_to_console( "Test2" );

	$q = $_REQUEST["q"];		
	shell_exec("./mp3player ".$q);

?>
