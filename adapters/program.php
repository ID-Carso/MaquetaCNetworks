<?php

include './callApi.php';

class Program
{

    function getPrograms($date, $time)
    {
        callAPI(null, "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/program/actual_programing/" . $time . "&" . $date . "", null);
    }

    function showSynopsis($id)
    {
        callAPI(null, "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/program/actual_programing/" . $id, null);
    }
}


if (isset($_POST['function']) && !empty($_POST['function'])) {
    $funcion = $_POST['function'];


    switch ($funcion) {
        case 'getPrograms':

            $date = $_POST['date'];
            $time = $_POST['time'];
            $program = new Program();
            echo ($program->getPrograms($date, $time));
            break;

        case 'showSynopsis':

            $id = $_POST['program_id'];
            $program = new Program();
            echo ($program->showSynopsis($id));
            break;
    }
}
