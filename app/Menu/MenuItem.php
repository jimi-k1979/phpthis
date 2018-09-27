<?php
namespace PhpThis\Menu;

class MenuItem {
  private $menuItemId;
  private $itemName;
  private $description;
  private $price;
  private $servingSize;
  private $picture;
  
  public function setMenuItemId(int $menuItemId): void {
    $this->menuItemId = $menuItemId;
  }
  
  public function getMenuItemId(): int {
    return $this->menuItemId;
  }
  
  public function setPrice(float $price): void {
    $this->price = $price;
  }
  
  public function getPrice(): float {
    return $this->price;
  }
  
  public function setPicture(string $picture): void {
    $this->picture = $picture;
  }
  
  public function getPicture(): string {
    return $this->picture;
  }
  
  public function setItemName(string $itemName): void {
    $this->itemName = $itemName;
  }
  
  public function getItemName(): string {
    return $this->itemName;
  }
  
  public function setDescription(string $description): void {
    $this->description = $description;
  }
  
  public function getDescription(): string {
    return $this->description;
  }
  
  public function setServingSize(string $servingSize):void {
    $this->servingSize = $servingSize;
  }
  
  public function getServingSize(): string {
    return $this->servingSize;
  }
}
