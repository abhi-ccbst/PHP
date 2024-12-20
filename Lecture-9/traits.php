<html>
<body>

<?php 
trait message1 {
    private $name;

    public function test($name) {
        $this->name = $name;
    }
    
    public function msg1() {
        echo "This is coming from message1 trait. Name: " . $this->name;
    }
}

trait message2 {

    public function msg2() {
        echo "This is coming from message2 trait.";
    }
}

class Welcome {
    use message1;

    public function __construct() {
        $this->test("Welcome");
        self::welcome();
    }

    public static function welcome() {
        echo "Hello word";
    }
}

class Welcome2 {
    use message1, message2;

    public function __construct() {
        $this->test("Welcome2");
    }
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";
$obj->welcome();
echo "<br>";

$obj2 = new Welcome2();
$obj2->msg1();
echo "<br>";
$obj2->msg2();
echo "<br>";
Welcome::welcome();

?>

</body>
</html>
