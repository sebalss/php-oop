<?php

namespace Data\Traits;

trait SayGoodBye{
    public function goodBye(?string $name): void{
        if (is_null($name)){
            echo "Good Bye" . PHP_EOL;
        }else{
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello{
    public function hello(?string $name): void{
        if (is_null($name)){
            echo "Hello" . PHP_EOL;
        }else{
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait Hasname{
    public string $name;
}

trait CanRun{
    public abstract function run(): void;
}

trait All{
    use SayGoodBye, SayHello, Hasname, CanRun {
        //bisa di override
        //hello as private;
        //goodBye as private;
    }
}

class ParentPerson{
    public function goodBye(?string $name): void
    {
        echo "Good bye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

class Person extends ParentPerson {
    use All;

    public function run(): void //override function pada class person, karena trait CanRun memiliki abstract function.
    {
        echo "Person $this->name is Running" . PHP_EOL;
    }




}