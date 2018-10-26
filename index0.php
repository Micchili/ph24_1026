<?php
  // objectの設計図作る
  class ClassName{
    // 白紙の設計図
    // classに処理はかけない
    // echo 2;
  }

  $myClass = new ClassName();
  class Robot{
    //クラス名はアッパーキャメル
    // class直下にかけるのは次
    // 属性(プロパティ)　=　データ　=　変数宣言
    // 振る舞い(メソッド)　= 処理≒関数

    // プロパティ宣言
    public $type = null;
    public $name = null;
    private $id = null;
    public $bc = null;

    public function getName()
    {
      return ;
    }

    // アクセス修飾子
    // プロパティとメソッドの公開度合いを制御することができる
    // public
    // private
    // protected

    // 重要
    // オブジェクト指向三大要素の一つカプセル化(情報隠蔽)
    // 情報を隠すことができる
    // データと処理をひとくくりにできる

    // インスタンスのタイミングで一度だけ呼び出されるメソッド
    // public function __construct()
    // {
    //   $this->name = "dora";
    //   $this->id = 999;
    //   $this->type = "dog";
    //   $this->bodycolor = "red";
    //   echo "aaa";
    // }

    public function __construct($name,$id,$type,$bc)
    {
      $this->name = $name;
      $this->id = $id;
      $this->type = $type;
      $this->bodycolor = $bc;

    }
  }


  // $r = new Robot();
  $r = new Robot("D","X","cat","blue");

  print $r->getName();
  // アクセス可能なので書き換えもOK
  // でもだめ！
  // print $r->id = "2999DC0001";
  // プロパティは原則プライベート
  echo 1;
