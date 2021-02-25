<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Iqbal");
var_dump($company);

$company->programmer = new BackendProgrammer("Iqbal");
var_dump($company);

$company->programmer = new FrontendProgrammer("Iqbal");
var_dump($company);

sayHelloProgrammer(new Programmer("Iqbal"));
sayHelloProgrammer(new BackendProgrammer("Iqbal"));
sayHelloProgrammer(new FrontendProgrammer("Iqbal"));