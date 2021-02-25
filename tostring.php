<?php
// tostring cho phép trả về 1 opject như một string
class ConNguoi
{
    public function __toString()
    {
        return 'Phương thức __toString() được gọi';
    }
}

$conNguoi = new ConNguoi();
echo $conNguoi;
?>