<?php
class MyClass
{
    private $name;
    private $age;

    function __construct($name="", $age="")
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get($propertyName)
    {   
        if ($propertyName == "age") {
            if ($this->age > 30) {
                return $this->age - 10;
            } else {
                return $this->$propertyName;
            }
        } elseif($propertyName = "name") {
            return $this->$propertyName;
        }
    }
}
$Name = new MyClass("Do Xuan Bac", 20);   
echo "Name：" . $Name->name . "<br>";   
echo "Age：" . $Name->age . "<br>"; 