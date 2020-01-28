<?php



class User{
    private static $instance = NULL;
    private $name = NULL;
    private $password = NULL
}
//Comprobamos que el valor no venga vacío
if (isset($_POST['function']) && !empty($_POST['function'])) {
    $funcion = $_POST['function'];

    //En función del parámetro que nos llegue ejecutamos una función u otra
    switch ($funcion) {
        case 'funcion1':
            /*$return = array(
                "id" => 6,
                "username" => "EL JC"
            );
            echo json_encode($return);*/

            $ch = curl_init();

            // definimos la URL a la que hacemos la petición
            curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/users");
            // indicamos el tipo de petición: POST
            //curl_setopt($ch, CURLOPT_GET, TRUE);
            // definimos cada uno de los parámetros
            //curl_setopt($ch, CURLOPT_POSTFIELDS, "postvar1=value1&postvar2=value2&postvar3=value3");

            // recibimos la respuesta y la guardamos en una variable
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $remote_server_output = curl_exec($ch);

            // cerramos la sesión cURL
            curl_close($ch);
            echo json_encode($remote_server_output);
            break;
        case 'funcion2':
            $b->accion2();
            break;
    }
}


function holaMundo()
{
    return 1;
}
