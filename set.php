<?php
class MyName
{
    public $name;
    public $age;

    public function __set($key, $value)
    {
        if ($key = "age") {
                $this->$key = $value;
        }
    }

    public function ThongTin(){
        echo "Toi la ".$this->name."Tôi ".$this->age." tuổi";
    }
}
    $name = new MyName();
    $name->name = "Do Xuan Bac";     
    $name->age = 20; 
    $name->ThongTin();
?>

<?php
class ConNguoi
{
    public $name;
    public $age;

    public function __set($key, $value)
    {
        $this->$key = $value;
    }
    public function __get($key)
    {
        return $this->$key;
    }
}

$conNguoi = new ConNguoi();
$conNguoi->name = "Do Xuan Bac";
$conNguoi->age = '20';
echo $conNguoi->name;
echo $conNguoi->age;
echo "<br />"
?>

<?php
class Product
{

    public function __set($key, $value)
    {
        $this->$key = $value;
    }

    public function __get($key)
    {
        return $this->$key;
    }
}

$iPhone = new Product;
$iPhone->name = 'SamSung';
$iPhone->model = '123456';
$iPhone->price = '$900 USD';

echo $iPhone->name;
echo $iPhone->model;
echo $iPhone->price;
?>