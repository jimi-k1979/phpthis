<?php
namespace PhpThis\Menu;

abstract class AbstractMenu {
  private $menuId;
  private $menuItemId;
  private $menuName;
  private $description;
  
  public function setMenuId(int $menuId): void {
    $this->menuId = $menuId;
  }
  
  public function getMenuId(): int {
    return $this->menuId;
  }
  
  public function setMenuItemId(int $menuItemId): void {
    $this->menuItemId = $menuItemId;
  }
  
  public function getMenuItemId(): int {
    return $this->menuItemId;
  }
  
  public function setMenuName(string $menuName): void {
    $this->menuName = $menuName;
  }
  
  public function getMenuName(): string {
    return $this->menuName;
  }
  
  public function setDescription(string $description): void {
    $this->description = $description;
  }
  
  public function getDescription(): string {
    return $this->description;
  }
}
