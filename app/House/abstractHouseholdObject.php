<?php
namespace PhpThis\House;

abstract class AbstractHouseholdObject {
  public static function create() {
    return new self();
  }
}
