<?php

class BaseClass 
{ 
  public function myMethod() 
 { 
 echo "BaseClass method called";
 }
} 
 
 class DerivedClass extends BaseClass 
 {
  public function myMethod() 
 {
  echo "DerivedClass method called"; 
 }
} 
 $c = new DerivedClass();
 $c->myMethod();

?>