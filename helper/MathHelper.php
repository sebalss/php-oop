<?php

namespace Helper;

class MathHelper{
   static public string $name = "mathHelper";

   static public function sum(int... $number): int{
       $total = 0;
       foreach ($number as $row){
           $total += $row;
       }

       return $total;
   }
}
