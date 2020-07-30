<?php

// class (データと関数をセットでもっている変数)

class Dog
{
  public $name = 'ito';
  public function bark(){
    echo "ワン\n";
  }
}

$a = new Dog(); //オブジェクトを生成する。

$a->bark();
echo $a->name;

//ブラウザを経由してアプリケーションを起動する
// $ php -S 127.0.0.1:8000 //サーバー起動
// 127.0.0.1:8000/ファイル名でアクセス

?>