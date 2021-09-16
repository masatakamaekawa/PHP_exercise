  <?php

  class User {
      public $name = 'Bob';
      public $age = 21;

      public function greet($to)
      {
          return 'こんにちは' . $to . "さん\n";
      }

      public function selfIntroduction()
      {
-         return '私の名前は' . $name . "です\n";
+                '私の年齢は' . $this->$age . "です\n";
      }
  }
