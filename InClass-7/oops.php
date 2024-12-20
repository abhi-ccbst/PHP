<html>
<body>
    <?php 
    class Oops {
        private $name;
        public $color;



        function __construct($nameComing, $color) {
            $this->name = $nameComing;
            $this->color = $color;
        }
        // function __destruct() {
        //     echo "This Oops is $this->name";
        // }
        // function __construct($nameComing) {
        //     $this->name = $nameComing;
        // }
        // function set_name($nameComing) {
        //     $this->name = $nameComing;
        // }

        function get_name() {
            return $this->name;
        }
        function get_color() {
            return $this->color;
        }
    }
    $apple = new Oops("Apple", "Blue");
    $banana = new Oops("Banana", "Black");
    // $apple->set_name('Apple');
    // $banana->set_name('Banana');

    echo $apple->get_name() . "<br>" . $banana->get_name() . "<br>";
    echo $apple->get_color() . "<br>" . $banana->get_color() . "<br>";
    echo $apple->name . "<br>" . $banana->name . "<br>";
    echo $apple->color . "<br>" . $banana->color;
    ?>
</body>
</html>

