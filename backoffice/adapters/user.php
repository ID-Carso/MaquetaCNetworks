<?php
session_start();

// class Console
// {
//     /**
//      * @param string $name Nombre único para poder ejecutar esto varias veces en el mismo documento
//      * @param mixed $var Una variable cadena, objeto, matriz o lo que sea
//      * @param string $type (debug|info|warn|error)
//      * @return html
//      */
//     public static function log($name, $var, $type = 'debug')
//     {
//         $name = preg_replace('/[^A-Z|0-9]/i', '_', $name);
//         $types = array('debug', 'info', 'warn', 'error');
//         if (!in_array($type, $types)) $type = 'debug';
//         $s = '<script>' . PHP_EOL;
//         if (is_object($var) or is_array($var)) {
//             $object = json_encode($var);
//             $object = str_replace("'", "\'", $object);
//             $s .= "var object$name = '$object';" . PHP_EOL;
//             $s .= "var val$name = eval('('+object$name+')');" . PHP_EOL;
//             $s .= "console.$type(val$name);" . PHP_EOL;
//         } else {
//             $var = str_replace('"', '\\"', $var);
//             $s .= "console.$type($var);" . PHP_EOL;
//         }
//         $s .= '</script>' . PHP_EOL;
//         return $s;
//     }
// }



class User
{
    private static $instance = NULL;

    public static function getUserInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }


    function signIn($data)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/admin_user/login");
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Accept: application/json'));
        $response = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($response, true);

        $_SESSION["session"] = 1;
        $_SESSION["name_user"] = $result["data"]["name"];
        $_SESSION["email"] = $result["data"]["email"];
        $_SESSION["id"] = $result["data"]["id"];
        $_SESSION["rol"] = $result["data"]["rol"]["name"];
        $_SESSION["rol_id"] = $result["data"]["rol"]["id"];
        echo ($response);
    }

    function signOut()
    {
        session_destroy();
        echo "200";
    }

    function registerUser($name, $email, $password, $rol, $adminId)
    {
        $dataUser = array("name" => $name, "email" => $email, "password" => $password, "rol_id" => $rol, "admin_user_id" => $adminId);
        $dataUserJson = json_encode($dataUser);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/admin_user");
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataUserJson);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Accept: application/json'));
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    function updateDataUser($data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/admin_user/editAdmin");
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Accept: application/json'));

        $response = curl_exec($ch);
        curl_close($ch);
        echo ($response);
    }

    function getAllUsersBO()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/admin_user');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        curl_close($ch);
        return $response;
    }

    function getUser($id)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/admin_user/" . $id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    function getAllUsersFront()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $result = json_decode($response, true);
        echo ($result["id"]);
        curl_close($ch);
        return $result;
    }

    function deleteUserBO($data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/admin_user/down");
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Accept: application/json'));
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
}

if (isset($_POST['function']) && !empty($_POST['function'])) {
    $function = $_POST['function'];


    switch ($function) {
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

        case 'signOut':
            $user = User::getUserInstance();
            echo ($user->signOut());
            break;

        case 'registerUser':
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $rol = $_POST['rol'];
            $adminId = $_SESSION['id'];
            $users = User::getUserInstance();
            echo ($users->registerUser($name, $email, $password, $rol, $adminId));
            break;

        case 'getAllUsersBO':
            $user = User::getUserInstance();
            echo ($user->getAllUsersBO());
            break;


        case 'updateDataUser':

            $data = array("id_root" => $_SESSION["id"], "id_admin_user" => $_POST['id_admin_user'], "name" => $_POST['name'], "email" => $_POST['email'], "password" => $_POST['password'], "password_confirm" => $_POST['password_confirm'], "rol_id" => $_POST["rol_id"]);
            $dataJson = json_encode($data);
            $user = User::getUserInstance();
            echo ($user->updateDataUser($dataJson));
            break;

        case 'getUser':

            $user = User::getUserInstance();
            echo ($user->getUser($_POST["id"]));
            break;

        case 'getAllUsersFront':
            $user = User::getUserInstance();
            $result = $user->getAllUsersBo();
            break;

        case 'getUserToUpdate':
            $user = User::getUserInstance();
            echo ($user->getUser($_POST["id"]));
            break;

        case 'deleteUserBO':
            $user = User::getUserInstance();
            $data = array("id_root" => $_SESSION["id"], "id_admin_user" => $_POST["id_admin_user"]);
            $dataJson = json_encode($data);
            echo ($user->deleteUserBO($dataJson));
            break;
    }
}
