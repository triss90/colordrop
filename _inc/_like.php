<?php
include("_app.php");
$app = new MyApp;
// include("_functions.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
	try {
		$stream = fopen("php://input", "rb");
		if (!$stream) throw new Exception("cannot open input stream");
		$data = stream_get_contents($stream);
		$ebc = json_decode($data, true);
		$palette = $app -> DatabasePrepareQueryReturnFirstField( "SELECT * FROM likes WHERE palette = ?", array($ebc['palette']));	
		if ($ebc['action'] === 'increment') {
			// Increment like
			$newLike = $palette['likes']+1;
			$app -> DatabaseUpdate( "likes", array('likes'), array($newLike, $ebc['palette']), "WHERE palette = ?");
		} else if ($ebc['action'] === 'decrement') {
			// Decrement like
			$newLike = $palette['likes']-1;
			$app -> DatabaseUpdate( "likes", array('likes'), array($newLike, $ebc['palette']), "WHERE palette = ?");
		}
	}
	catch(Exception $e) {

	}
	finally {
		fclose($stream);
	}
}