<?php 
function get_youtube_video( $token, $channel_id, $number_of_video ){
    $api_url = "https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=$channel_id&maxResults=$number_of_video&order=date&type=video&key=$token";
	$connection_c = curl_init(); // initializing
	curl_setopt( $connection_c, CURLOPT_URL, $api_url ); // API URL to connect
	curl_setopt( $connection_c, CURLOPT_RETURNTRANSFER, 1 ); // return the result, do not print
	curl_setopt( $connection_c, CURLOPT_TIMEOUT, 20 );
	$json_return = curl_exec( $connection_c ); // connect and get json data
	curl_close( $connection_c ); // close connection
	return json_decode( $json_return ); // decode and return
}
?>

