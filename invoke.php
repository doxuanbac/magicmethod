
<?php
class MyClass
{
    public function __invoke($x)
    {
        var_dump($x);
    }
}
$ob = new MyClass;
$ob->x = "Do Xuan Bac";
var_dump($ob);
echo "<br />";
?>

