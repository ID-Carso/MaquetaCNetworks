<?php

include './callApi.php';

class Section
{
    function getMetakeys()
    {
        callAPI(null, "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/mail/", null);
    }
}

if (isset($_POST['function']) && !empty($_POST['function'])) {
    $funcion = $_POST['function'];


    switch ($funcion) {

        case 'getMetakeys':

            $section = new Section();
            echo ($section->getMetakeys());

            break;
    }
}
