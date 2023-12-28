<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義する
        class Food {
            //プロパティを定義する
            public $name;
            public $price;

            // コントラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;

            }
        }

        // インスタンス化する
        $food = new Food('potato', 250);


        // クラスを定義する
        class Animal {
            //プロパティを定義する
            public $name;
            public $height;
            public $weight;

            // コントラクタを定義する
            public function __construct(string $name, int $height, string $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化する
        $animal = new Animal('dog', 60, 5000);

        // インスタンス$userの各プロパティの値を出力する
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';
        echo $food->price;
        echo '<br>';
        echo $animal->height;
        



        ?>
    </p>
    
</body>

</html>
