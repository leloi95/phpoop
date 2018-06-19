<?php
  class person{
    public $mauda;
    public $mautoc;
    public function NoiXinChao(){
      echo $say ="Xin Chao";
    }
  }
  class nguoichauau extends person{
    public $maumat;
    function NoiXinChao(){
      // parent::NoiXinChao();
      echo $say = "Hello";
    }
  }
  $leloi = new nguoichauau();
  echo $leloi->mauda ="da vang"."</br>";
  echo $leloi->mautoc = "mau den"."</br>";
  echo $leloi->maumat = "mau nau";
  echo "<hr/>";
  $leloi = new nguoichauau();
  echo $leloi->NoiXinChao();
  // tinh da hinh la co the thua ke dc phuong thuc lop cha va ovewrite phuong thuc lop cha;
 ?>
