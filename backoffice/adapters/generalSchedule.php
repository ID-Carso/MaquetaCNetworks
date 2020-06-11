<?php

class GeneralSchedule
{
    function getGeneralSchedule()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/admin_user/all/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        curl_close($ch);
        return $response;
    }
}



if (isset($_POST['function']) && !empty($_POST['function'])) {
    $function = $_POST['function'];


    switch ($function) {
        case 'getGeneralSchedule':
            $generalSchedule = new GeneralSchedule();
            break;
    }
}
