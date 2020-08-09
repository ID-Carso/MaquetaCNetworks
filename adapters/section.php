<?php

include './callApi.php';

class Section
{
    function getMetakeys($landing)
    {
        callAPI(null, "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/section/".$landing, null);
  }
}

if (isset($_POST['function']) && !empty($_POST['function'])) {
    $funcion = $_POST['function'];
    $landing=$_POST['landing'];
    $section = new Section();
    echo ($section->getMetakeys($landing));
    
}
