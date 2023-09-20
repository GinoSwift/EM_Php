<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chap_31
    </title>
</head>

<body>
    <?php
    // class Animal
    // {
    //     //
    // }
    // $dog = new Animal;
    // var_dump($dog);s


    // public property
    // class Animal
    // {
    //     public $name;
    //     public function run()
    //     {
    //         echo "$this->name is running...";
    //     }
    // }
    // $dog = new Animal;
    // $dog->name = "Bobby";
    // $dog->run();

    //private property
    // class Animal
    // {
    //     private $name;
    // }

    // $dog = new Animal;
    // $dog->name = "Bobby";

    //constructor
    // class Animal
    // {
    //     public function __construct()
    //     {
    //         echo "Creating Animal Object";
    //     }
    // }
    // $dog = new Animal;

    // class Animal
    // {
    //     private function __construct()
    //     {
    //         echo "Creating Animal Object";
    //     }
    // }
    // $dog = new Animal;

    class Animal
    {
        static $type = "Mammal";

        static function info()
        {
            echo "Group: " . static::$type;
        }
    }
    echo Animal::$type;
    echo "<br>";
    Animal::info();
    echo "<br>";

    // class Animals
    // {
    //     private $name;
    //     public function __construct($name)
    //     {
    //         $this->name = $name;
    //     }

    //     public function run()
    //     {
    //         echo "$this->name is running...";
    //     }
    // }
    // $dog = new Animals("Bobby");
    // $dog->run();

    class Animals
    {

        public function __construct(private $name)
        {
            //
        }

        public function run()
        {
            echo "$this->name is running... <br>";
        }
    }
    $dog = new Animals("Bobby");
    $dog->run();

    // class Animal_1
    // {
    //     private $name;
    //     public function __construct($name)
    //     {
    //         $this->name = $name;
    //     }

    //     public function run()
    //     {
    //         echo "$this->name is running... <br>";
    //     }
    // }

    // class Dog extends Animal_1
    // {
    //     public function bark()
    //     {
    //         echo "Woof.. woof...";
    //     }
    // }
    // $dog = new Dog("Phyu Ma");
    // $dog->run();
    // $dog->bark();


    //INHERITANCE
    class Animal_1
    {
        protected $name;

        public function __construct($name)
        {
            $this->name = $name;
        }
    }

    class Dog extends Animal_1
    {
        public function bark()
        {
            echo "$this->name : Woof.. woof...";
        }
    }
    $bobby = new Dog("Bobby");
    $bobby->bark();
    echo "<br>";

    class Animal_2
    {
        static function info()
        {
            echo "Animal Class";
        }
    }
    class Dog_2 extends Animal_2
    {
        //
    }
    class Fox extends Dog_2
    {
        //
    }

    Fox::info();
    echo "<br>";

    class Animal_3
    {
        protected $name;
        public function __construct($name)
        {
            $this->name = $name;
        }
    }

    class Dog_3 extends Animal_3
    {
        private $color;
        public function __construct($name, $color)
        {
            parent::__construct($name);
            $this->color = $color;
        }

        public function profile()
        {
            echo "$this->name has $this->color color. <br>";
        }
    }

    $bobby = new Dog_3("Bobby", "brown");
    $bobby->profile();
    $phyuMa = new Dog_3("PhyuMa", "white");
    $phyuMa->profile();

    class Baby
    {
        public function run()
        {
            echo "The baby is running";
        }
    }
    class Fish
    {
        public function swim()
        {
            echo "The fish is swimming";
        }
    }
    function app(Baby $obj)
    {
        $obj->run();
    }
    app(new Baby);
    echo "<br>";
    // app(new Fish);


    //interface
    interface Animal_4
    {
        public function move();
    }

    class Dog_4 implements Animal_4
    {
        public function move()
        {
            echo "The dog is running";
        }
    }

    class Fish_4 implements Animal_4
    {
        public function move()
        {
            echo "The fish is swimming";
        }
    }

    function app_4(Animal_4 $obj)
    {
        $obj->move();
    }
    app_4(new Dog_4);
    echo "<br>";
    app_4(new Fish_4);
    echo "<br>";

    interface Animal_5
    {
        public function move();
    }
    interface LiveStock
    {
        public function isFriendly();
    }
    class Cow implements Animal_5, LiveStock
    {
        public function move()
        {
            echo "The cow is walking";
        }
        public function isFriendly()
        {
            return true;
        }
    }

    // // $cow = new Co;
    // echo "<br>";

    // Traits
    trait Math
    {
        public function add($a, $b)
        {
            echo $a + $b;
        }
    }
    trait Area
    {
        private $PI = 3.14;
        public function circle($r)
        {
            echo $this->PI * $r * $r;
        }
    }
    class Calculator
    {
        use Math, Area;
    }
    $calc = new Calculator;
    $calc->add(1, 2);
    echo "<br>";
    $calc->circle(5);
    echo "<br>";

    class Math_1
    {
        public function __call($name, $args)
        {
            echo "Method $name doesn't exist";
        }
        static function __callStatic($name, $arguments)
        {
            echo "Static method $name doesn't exist";
        }
    }
    $obj = new Math_1;
    $obj->add();
    Math::add();





    ?>

</body>

</html>