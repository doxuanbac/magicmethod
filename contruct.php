<?php
    class Cat {
        public $name;
        public function __construct()
        {
            $this->age = 4;
            $this->mau = 'Black';
        }
    }
    
    $myCat = new Cat;
    $myCat->name = "Kitty";
    
    $myCat1 = new Cat;
    $myCat1->name = "Tom";

    var_dump($myCat); echo "<br />";
    var_dump($myCat1);
?>
<?php
    class ABC{
        public function __construct()
        {
            echo "Hello <br />";
        }

        public function __destruct()
        {
            echo "Goobye <br />";
        }
        public function test(){
            echo "test <br />";
        }
    }
    echo "123";
    $oABC = new ABC;
    $oABC->test();
    echo "456";
?>

<?php
class TaiKhoan
{
    public $ten;
    public $ho;

    public function __construct($ten, $ho)
    {
        $this->ten = $ten;
        $this->ho = $ho;
    }
    public function __destruct()
    {
        echo "Goobye <br />";
    }
}

class KhachHang extends TaiKhoan
{
}

$oName = new TaiKhoan("Bac", "Do");
echo $oName->ten;
echo "<br />";
echo $oName->ho;
echo "<br />";

$oName1 = new Khachhang("Bac", "Do");
echo $oName1->ten;
echo "<br />";
?>

<?php
class Audi
{
    public $infor;
    public $money;

    function __construct($infor, $money)
    {
        $this->infor = $infor;
        $this->money = $money;
    }

    function get_infor()
    {
        return $this->infor;
    }

    function get_money()
    {
        return $this->money;
    }
    public function __destruct()
    {
        echo "Goobye <br />";
    }
}

$audi = new Audi('TT', '100000 USD');
echo $audi->get_infor();
?>