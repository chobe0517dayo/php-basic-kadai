<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        if (true) {
            echo '昇順にソートします。<br>';
            asort($nums);
            foreach ($nums as $num){
            echo "$num <br>";
            }
        } elseif (false) {
            echo '降順にソートします。<br>';
            arsort($nums);
            foreach ($nums as $num); {
            echo "$num <br>";
            }
        }
        

        ?>
    </p>
</body>

</html>
