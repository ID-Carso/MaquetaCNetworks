<?php
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
}


function callAPI($method, $url, $data)
{
    $curl = curl_init();
    switch ($method) {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Accept: application/json'
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // EXECUTE:
    $result = curl_exec($curl);
    if (!$result) {
        die("Connection Failure");
    }
    curl_close($curl);
    echo ($result);
}


if (isset($_POST['function']) && !empty($_POST['function'])) {
    $funcion = $_POST['function'];


    switch ($funcion) {
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

        $data = array("id" =>$_POST['id'], "gender" => $_POST['gender'], "birthday" => $_POST['date'], "country" => $_POST['country']);
        $dataJson = json_encode($data); 
        
        //$data = $_POST['dataUser'];
        
      
            
    
        $user = User::getUserInstance();
        echo($user->updateDataUser($dataJson));
            break;

        case 'funcion1':
            $dataUser = array("id" => $_POST['id'], "title" => $_POST['title'], "body" => $_POST['body'], "userId" => $_POST['userId']);

            $dataJson = json_encode($dataUser);

            $users = User::getUserInstance();
            $users->getAllUsers($dataJson);
    }
}
