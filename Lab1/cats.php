<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cats</title>
</head>
<body>
<?php include ('config.php');?>
<?php include ('connect.php');?>

<?php
// create & initialize a curl session
$curl = curl_init();

// set our url with curl_setopt()
curl_setopt($curl, CURLOPT_URL, "https://catfact.ninja/fact");

// return the transfer as a string, also with setopt()
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// curl_exec() executes the started curl session
// $output contains the output string
$output = curl_exec($curl);

// close curl resource to free up system resources
// (deletes the variable made by curl_init)

echo $output;
curl_close($curl);

//$get_data = callAPI('GET', 'https://catfact.ninja/fact', false);
//$response = json_decode($get_data, true);
//$errors = $response['fact']['length'];
//$data = $response['fact']['length'][0];

//echo $response;
//echo $data;


?>

<button>Cat fact</button>
https://catfact.ninja/fact


<button>Breed</button>
https://catfact.ninja/breeds?limit=1
</body>
</html>