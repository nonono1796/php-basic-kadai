<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <title>kadai_005</title>
</head>
<body>
    <!-- 変数の代入 -->
    <p>
        <?php
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;
        ?>
    </p>
    <!-- 平均値の計算 -->
    <p>
        <?php
        echo ($score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9+$score10)/10;
        ?>
    </p>
</body>
</html>