
<htm>
<body>
<?php 
// class Index {
//     public const MESSAGE = "Hello from server";

//     public function hello() {
//         echo self::MESSAGE;
//     }
// }

// $mes = new Index();
// $mes->hello();
// echo Index::MESSAGE;   //REC
// echo $mes::MESSAGE;

abstract class Car {
    public $name;
    public $company;

    public function __construct($name, $company) {
        $this->name = $name;
        $this->company = $company;
    }

    abstract public function intro() : string;

    abstract public function driver($driverName) : string;

    public function test() : int {
        return 100;
    }
}

class Audi extends Car {
    public function __construct($name) {
        parent::__construct($name, "Audi");
    }
    public function intro() : string {
        return "I am $this->name and company: $this->company";
    }

    public function driver($driverName) : string {
        return "Audi Driver name: $driverName";
    }
}

class Volvo extends Car {
    public function __construct($name) {
        parent::__construct($name, "Volvo");
    }
    public function intro() : string {
        return "I am $this->name and company: $this->company";
    }

    public function driver($driverName) : string {
        return "Volvo Driver name: $driverName";
    }
}

$audi = new Audi("Rs4");
echo $audi->intro() . "<br>";
echo $audi->driver("Abhi") . "<br>";
echo $audi->test() . "<br>";

$volvo = new Volvo("123");
echo $volvo->intro() . "<br>";
echo $volvo->driver("Meet") . "<br>";
echo $volvo->test() . "<br>";


interface Animal {
    public function makeSound() : string;
}

interface Mammals {
    public function type() : string;
}

interface Fish {
    public function lifeLine() : int;
}

class Cat implements Animal, Mammals {
    public function makeSound() : string {
        return "Meow";
    }

    public function type() : string {
        return "CAT";
    }
}

class Jawless implements Animal, Fish {
    public function makeSound() : string {
        return "startle";
    }

    public function lifeLine() : int {
        return 10;
    }
}

$cat = new Cat();
echo $cat->makeSound() . "<br>";
echo $cat->type() . "<br>";

$jawLess = new Jawless();
echo $jawLess->makeSound() . "<br>";
echo $jawLess->lifeLine() . "<br>";

?>
</body>
</html>

