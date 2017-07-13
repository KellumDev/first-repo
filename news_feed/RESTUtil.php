<?php 

/* restful utility to build the http query and GET verb in curl */


/* the building the http string */
function build_query_string(array $params){

	$query_string = http_build_query($params); 
	return $query_string; 
}

/*the curl function for the get request*/
function curl_get($url){
	$ch = curl_init($url); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch); 
	curl_close($ch); 
	return $response; 
}

?>
