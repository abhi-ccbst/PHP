<html>
<body>
    <?php 
    class Oops {
        public $name;
        public $color;

        function __construct($nameComing, $color) {
            $this->name = $nameComing;
            $this->color = $color;
        }

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
    echo $apple->get_color() . "<br>" . $banana->get_color();

    ?>
</body>
</html>