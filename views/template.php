<!DOCTYPE html>w
<html lang="pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My page</title>
</head>
<body>
        <nav>
            <br>
                <a href="<?php echo BASE_URL; ?>">Home</a>||<a href="<?php echo BASE_URL; ?>galeria">galeria</a>
            <br>
        </nav>
        <hr>

        <?php 
            $this->loadViewInTemplate($viewName, $viewData);
        ?>


</body>
</html>