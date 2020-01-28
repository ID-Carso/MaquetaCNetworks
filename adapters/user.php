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

    function getAllUsers()
    {
        $ch = curl_init();

        // definimos la URL a la que hacemos la petición
        curl_setopt($ch, CURLOPT_URL, "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user");
        // indicamos el tipo de petición: POST
        //curl_setopt($ch, CURLOPT_POST, TRUE);
        // definimos cada uno de los parámetros
        //curl_setopt($ch, CURLOPT_POSTFIELDS, "postvar1=value1&postvar2=value2&postvar3=value3");

        // recibimos la respuesta y la guardamos en una variable
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $remote_server_output = curl_exec($ch);

        // cerramos la sesión cURL
        curl_close($ch);
        echo json_encode($remote_server_output);
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
            }



            break;
        case 'funcion2':
            $b->accion2();
            break;
    }
}
