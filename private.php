<?php
    class DongVat{
      private $ten;
      private $nhomdv;
      public function setDongVat($t,$n){
        $this->ten = $t;
        $this->nhomdv = $n;
      }
      public function getDongVat(){
        return $this->DongVat;
      }
    }
    $Cho = new  DongVat();
    echo $cho->t = "milu"."</br>";
    echo $cho->n = "trang";
    // $cho->setDongVat();
    // $cho->getDongVat();
    //--------------------
    // neu bien la private thi phai tao ham set va get
    // ham set phai tao tham so gan bang thuoc tinh cua lop ->> de co the truy xuat toi thuoc tinh ben trong lop
    // get se return ve ten class hoac thuoc tinh
 ?>
