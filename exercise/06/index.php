<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。
class Car{

    public $Name;
    public $Number;
    public $Color;
    public $information;

    public function __construct($Name,$Number,$Color)
    {
        $this->Name = $Name;
        $this->Number = $Number;
        $this->Color = $Color;
    }
    
    public function getName()
    {
        return $this->Name;
    }
    public function getNumber()
    {
        return $this->Number;
    }
    public function getColor()
    {
        return $this->Color;
    }
    public function information()
    {
        return '車の車種:'.
                $this->Name.
               '､車体番号:'.
                $this->Number.
               '､カラー:'.
                $this->Color.
                'です｡';
    }
    public function setName($Name)
    {
        $this->Name = $Name;
    }
    public function setNumber($Number)
    {
        $this->Number = $Number;
    }
    public function setColor($Color)
    {
        $this->Color = $Color;
    }
    public function setinformation()
    {
        return '車の車種:'.
                $this->Name.
               '､車体番号:'.
                $this->Number.
               '､カラー:'.
                $this->Color.
                'です｡';
    }
}
// 以下を実行した時にエラーがでないようにして下さい。
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');
var_dump($car1);

// 車名(車種)を取得
echo $car1->getName();
echo '<br>';

// 車体番号を取得
echo $car1->getNumber();
echo '<br>';

// カラーを取得
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
echo $car1->information();
echo '<br>';

// 車名(車種)を更新
$car1->setName('アルファード');
echo $car1->getName();
echo '<br>';

// 車体番号を取得
$car1->setNumber(200);
echo $car1->getNumber();
echo '<br>';

// カラーを取得
$car1->setColor('red');
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
echo $car1->information();
echo '<br>';
