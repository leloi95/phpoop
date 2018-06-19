<?php
  class person{
    public $mauda;
    public $mautoc;
  }
  class nguoichauau extends person{
    public $maumat;
  }
  $leloi = new nguoichauau();
  echo $leloi->mauda ="da vang"."</br>";
  echo $leloi->mautoc = "mau den"."</br>";
  echo $leloi->maumat = "mau nau";
  // la lop con thua ke cac thuoc tinh va phuong thuc cua lop cha
 ?>
