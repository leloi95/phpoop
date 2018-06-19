<?php
abstract  class lophoc{
    public $GiaoVien;
    public $HocSinh;

    abstract public function infoClass();
  }

  class lop10 extends lophoc{

    public function infoClass(){
        echo "xin chao lop 10";
    }
  }

  $lop10a = new lop10();
  echo $lop10a->GiaoVien= "giao vien a"."<br/>";
  echo $lop10a->HocSinh= "hoc sinh b"."<br/>";
  $lop10a->infoClass();
  // lop abstract khong the khoi tao doi tuong
  // lop thua ke lop abstract phai viet lai (rewrite) lai phuong thuc cua lop abstract
 ?>
