<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        $onions=['名前'=>'玉ねぎ','値段'=>200,'産地'=>'北海道'];
        foreach($onions as $key => $value){
            echo "{$key}:{$value}'<br>'";
        }
        ?>
    </p>
</body>
</html>