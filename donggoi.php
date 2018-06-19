<?php
class pheptoan{
  public $a;
  public $b;
  function congtong(){
    $tong = $this->a+ $this->b;
    return $tong;
  }
  function tru(){
    $hieu =$this->a - $this->b;
    return $hieu;
  }
}
$giatri = new pheptoan();
$giatri->a = 15;
$giatri->b = 17;
echo $giatri->congtong();
echo "<hr/>";
echo $giatri->tru();
 ?>
