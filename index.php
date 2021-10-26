<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'autoload.php';
        $core = new Core();
        require_once 'Model/Model.php';
        $model = New Model();
        $model->connection();
        ?>
    </body>
</html>
