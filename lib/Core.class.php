<?php
namespace core\Class;
class Core
{
  public static function show(mixed $value)
  {
    echo '<pre>';
    print_r($value);
    echo '</pre>';
  }
}


