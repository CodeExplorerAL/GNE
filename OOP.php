<?php
// 定義一個基類 Animal //-（類別）
class Animal
{
  // 受保護的屬性 name，僅能在此類及繼承此類的子類中訪問 //-（封裝）
  protected $name;

  // 建構函數，初始化 name 屬性 //-（封裝）
  public function __construct($name)
  {
    $this->name = $name;
  }

  // 基類中的方法 makeSound（類的方法）
  public function makeSound()
  {
    return "某種聲音"; // 基類的預設實現
  }
}

// 定義一個從 Animal 繼承的子類 Dog //-（繼承）
class Dog extends Animal
{
  // 重寫基類中的方法 makeSound（多態）
  public function makeSound()
  {
    return "汪汪"; // 子類的實現
  }
}

// 創建 Dog 類的實例，這個物件擁有 Animal 類的特性，也可以使用 Dog 類的方法 //-（物件）
$dog = new Dog("小黃");

// 呼叫 Dog 類中的 makeSound 方法，展示方法重寫的效果 //-（多態）
echo $dog->makeSound(); // 輸出: 汪汪
