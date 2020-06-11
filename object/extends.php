<?php

//親クラス・基底クラス・オーバークラス
class BaseProduct{
  //変数  関数
  public  function  echoProduct(){
    echo'親クラスです';
  }
  //オーバーライド（上書き)
  public function getProduct(){
    echo  '親の関数です';
  }
}

//子クラス
class Product extends BaseProduct{
//変数
private $product  = [];
//関数

//初回
function  __construct($product){
$this->product=$product;  
}

public  function  getProduct(){
  echo  $this->product;
}

public  function  addProduct($item){
  $this->product  .=  $item;
}

public  static  function  getStaticProduct($str){
  echo  $str;
}
//アクセス修飾,private(外からアクセスできない),protected(自分・継承したクラス),public(公開)

}

$instance = new Product('テスト');

var_dump($instance);

$instance->getProduct();
echo'<br>';

//親クラスのメソッド
$instance->echoProduct();

$instance->addProduct('追加分');
echo'<br>';
$instance->getProduct();
echo'<br>';

//静的(static) クラスメイ::関数名
Product::getStaticProduct('静的');
echo'<br>';