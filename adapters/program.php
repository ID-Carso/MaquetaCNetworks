<?php

include './callApi.php';

class Program
{

    private $baseUrl = "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/";

    function getPrograms($date, $country)
    {
        callAPI(null, $this->baseUrl . "program/actual_programing/" . $country . "&" . $date . "", null);
    }

    function getProgramming($date, $country, $isCurrentDay)
    {

        callAPI(null, $this->baseUrl . "program/actual_programing_programation/" . $country . "&" . $date . "&" . $isCurrentDay, null);
    }

    function showSynopsis($id)
    {
        callAPI(null, $this->baseUrl . "program/sinopsis/" . $id, null);
    }

    function getProgramsGMT($date)
    {
        callAPI(null, $this->baseUrl . "program/actual_programing/GMT&" . $date . "", null);
    }
}


if (isset($_POST['function']) && !empty($_POST['function'])) {
    $funcion = $_POST['function'];


    switch ($funcion) {
        case 'getPrograms':

            $date = $_POST['date'];
            $country = $_POST['country'];
            $program = new Program();
            echo ($program->getPrograms($date, $country));
            break;

        case 'showSynopsis':

            $id = $_POST['chapter_id'];
            $program = new Program();
            echo ($program->showSynopsis($id));
            break;

        case 'getProgramsGMT':
            $date = $_POST['date'];
            $program = new Program();
            echo ($program->getProgramsGMT($date));
            break;

        case 'getProgramming':
            $date = $_POST['date'];
            $country = $_POST['country'];
            $isCurrentDay = $_POST["isCurrentDay"];
            $program = new Program();
            echo ($program->getProgramming($date, $country, $isCurrentDay));
            break;
    }
}
