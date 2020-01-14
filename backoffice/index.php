<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="col-8 mx-auto">
            <div class="m-form-login mx-auto">
                <form>
                    <div>
                        <label>Usuario</label>
                        <input type="email" name="usuario" id="">
                    </div>
                    <div>
                        <label>Contraseña</label>
                        <input type="email" name="usuario" id="">
                    </div>
                    <button>Ingresar</button>
                </form>


            </div>

        </div>
    </main>
</body>

</html>