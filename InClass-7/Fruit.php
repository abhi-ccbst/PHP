<html>
<body>
<?php 

class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro() {
        echo "This fruit is {$this->name} and the color is {$this->color}.";
    }

    // private function introTest() {
    //     echo "This fruit is {$this->name} and the color is {$this->color}.";
    // }
}

class Berry extends Fruit {
    public $weight;
    public function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function message() {
        $this->intro();
        // $this->introTest();//ERRRO
        echo "I am fruit or berry?";
    }

    public function intro() {
        echo "This fruit is {$this->name} and the color is {$this->color} and the weight is {$this->weight}.";
    }
}
$berry = new Berry("Berry", "Blue", "50 gram");
$berry->intro();
// $berry-> message();
// $berry->introTest(); //ERORR
// $berry->intro(); //ERORR
?>
</body>
</html>

