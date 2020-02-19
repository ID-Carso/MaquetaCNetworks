<?php

include './callApi.php';

class Console
{
    /**
     * @param string $name Nombre único para poder ejecutar esto varias veces en el mismo documento
     * @param mixed $var Una variable cadena, objeto, matriz o lo que sea
     * @param string $type (debug|info|warn|error)
     * @return html
     */
    public static function log($name, $var, $type = 'debug')
    {
        $name = preg_replace('/[^A-Z|0-9]/i', '_', $name);
        $types = array('debug', 'info', 'warn', 'error');
        if (!in_array($type, $types)) $type = 'debug';
        $s = '<script>' . PHP_EOL;
        if (is_object($var) or is_array($var)) {
            $object = json_encode($var);
            $object = str_replace("'", "\'", $object);
            $s .= "var object$name = '$object';" . PHP_EOL;
            $s .= "var val$name = eval('('+object$name+')');" . PHP_EOL;
            $s .= "console.$type(val$name);" . PHP_EOL;
        } else {
            $var = str_replace('"', '\\"', $var);
            $s .= "console.$type($var);" . PHP_EOL;
        }
        $s .= '</script>' . PHP_EOL;
        return $s;
    }
}



class User
{
    private static $instance = NULL;
    private $name = NULL;
    private $password = NULL;
    private $email = NULL;


    public static function getUserInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    function getAllUsers($json)
    {
        $url = "https://jsonplaceholder.typicode.com/posts/1";
        callAPI("PUT", $url, $json);
    }

    function signIn($data)
    {
        callAPI("POST", "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/login", $data);
    }

    function registerUser($name, $email, $password)
    {
        $dataUser = array("name" => $name, "email" => $email, "password" => $password);
        $dataUserJson = json_encode($dataUser);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user");
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataUserJson);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Accept: application/json'));

        $response = curl_exec($ch);
        curl_close($ch);
        echo ($response);
    }

    function updateDataUser($data)
    {
        callAPI("POST", "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/update", $data);
    }


    function selectAvatar($src)
    {
        callAPI("POST", "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/update", $src);
    }

    function sendEmail($id)
    {
        callAPI(null, "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/mail/" . $id, null);
    }

    function updateAlerts($data)
    {
        callAPI("POST", "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/config_notification", $data);
    }

    function addFavorites($data)
    {
        callAPI("POST", "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/add_favorites", $data);
    }

    function removeFavorites($data)
    {
        callAPI("POST", "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/remove_favorites", $data);
    }

    function showNotification($id, $currentTime, $currentDate)
    {
        callAPI(null, "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/notification/" . $id . "&" . $currentTime . "&" . $currentDate . "", null);
    }
}





if (isset($_POST['function']) && !empty($_POST['function'])) {
    $funcion = $_POST['function'];


    switch ($funcion) {

        case 'showNotificaction':
            if ($_POST["id"] && $_POST["currentTime"] && $_POST["currentDate"]) {
                $id = $_POST["id"];
                $currentTime = $_POST["currentTime"];
                $currentDate = $_POST["currentDate"];


                $user = User::getUserInstance();
                $user->showNotification($id, $currentTime, $currentDate);
            }
            break;

        case 'signIn':
            if (is_string($_POST['email']) && is_string($_POST['password'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $data = array("email" => $email, "password" => $password);
                $dataJson = json_encode($data);
                $user = User::getUserInstance();
                echo ($user->signIn($dataJson));
            }
            break;

        case 'registerUser':
            if (is_string($_POST['name']) && is_string($_POST['email']) && is_string($_POST['password'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $users = User::getUserInstance();
                $users->registerUser($name, $email, $password);
            } else {
                return "No válido";
            }
            break;
        case 'updateDataUser':

            $data = array("id" => $_POST['id'], "gender" => $_POST['gender'], "birthday" => $_POST['date'], "country" => $_POST['country']);
            $dataJson = json_encode($data);
            $user = User::getUserInstance();
            echo ($user->updateDataUser($dataJson));
            break;

        case 'selectAvatar':
            $dataUser = array("id" => $_POST['id'], "avatar" => $_POST['avatar']);
            $dataJson = json_encode($dataUser);
            $users = User::getUserInstance();
            echo ($users->selectAvatar($dataJson));
            break;

        case 'sendEmail':

            $data = $_POST['id'];
            echo ($data);
            $user = User::getUserInstance();
            echo ($user->sendEmail($data));
            break;

        case 'updateAlerts':

            $data = $_POST['data'];
            json_decode($data, true);
            $dataJson = json_encode($data);
            echo Console::log('JSON: ', $data);
            $user = User::getUserInstance();
            echo ($user->updateAlerts($dataJson));
            break;

        case 'addFavorites':
            $userId = $_POST["user_id"];
            $programId = $_POST["program_id"];
            $data = array("user_id" => $userId, "program_id" => $programId);
            $dataJson = json_encode($data);
            $user = User::getUserInstance();
            echo ($user->addFavorites($dataJson));
            break;

        case 'removeFavorites':
            $userId = $_POST["user_id"];
            $programId = $_POST["program_id"];
            $data = array("user_id" => $userId, "program_id" => $programId);
            $dataJson = json_encode($data);
            $user = User::getUserInstance();
            echo ($user->removeFavorites($dataJson));
            break;
    }
}
