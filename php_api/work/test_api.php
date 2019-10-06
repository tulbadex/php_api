<?php

//test_api.php

include('Api.php');

$api_object = new API();

if($_GET["action"] == 'insert')
{
 $data = $api_object->insert();
}

if($_GET["action"] == 'fetch_single')
{
 $data = $api_object->fetch_single($_GET["id"]);
}

if($_GET["action"] == 'update')
{
 $data = $api_object->update();
}

if($_GET["action"] == 'fetch_all')
{
 $data = $api_object->fetch_all();
}

echo json_encode($data);

?>