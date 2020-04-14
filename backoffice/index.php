<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include 'styles.php';
    include 'scripts.php';
    ?>
</head>

<body>
    <main>
        <?php
        $nameSection = "Claro Networks";
        include 'header-office.php';
        showHeader($nameButton, $nameSection, 3);
        ?>
        <div class="col-8 mx-auto mt-5 mb-5">
            <div class="m-form-login mx-auto no-gutters">
                <div class="text-center col-5 mr-xl-6 mt-xl-6 mb-xl-6 ml-xl-6">
                    <form>
                        <div class="mb-xl-5">
                            <label class="a-text-black-semibold a-login-label mb-xl-4">Usuario</label>
                            <input type="email" name="usuario" id="" class="login-input">
                        </div>
                        <div class="mb-xl-6">
                            <label class="a-text-black-semibold a-login-label mb-xl-4">Contraseña</label>
                            <input type="email" name="usuario" id="" class="login-input">
                        </div>
                        <button class="a-button-black a-text-white-bold a-button-basic">Ingresar</button>
                    </form>
                </div>
            </div>

        </div>
    </main>
</body>

</html>