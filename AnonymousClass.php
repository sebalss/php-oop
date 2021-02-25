<?php

interface HelloWorld{
    function sayHello();
}

$helloworld = new class("LEM") implements HelloWorld{

    public string $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function sayHello(): void{
        echo "Hello $this->name" . PHP_EOL;
    }
};
$helloworld->sayHello();