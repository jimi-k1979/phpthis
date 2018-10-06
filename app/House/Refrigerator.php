<?php
namespace PhpThis\House;

class Refrigerator extends AbstractHouseholdObject {
  public static function create() {
    return new Refrigerator();
  }
}
