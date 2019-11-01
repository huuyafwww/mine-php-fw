# PHPの学習記録

## オブジェクト指向関連

### 宣言方法

```
$sample = new Sample;
$sample = new Sample();
```

- 上記のどちらでも可能

ただしコンストラクタに引数を渡す場合は、下記の記法になる

```
$sample = new Sample($var);
```

子クラスの宣言も同様に、

```
$sample = new Sample_child($var);
```

として、子クラスをいきなり宣言することが可能。

### アクセス修飾子周り

#### public

- どこからでもアクセスが可能
- アクセス修飾子がない場合はpublicと同様の扱いになる

#### protected

- そのクラス自身と継承クラスからアクセスが可能
- 継承は可能である
- アクセス権内のメソッドからのコールのみ可能

#### private

- 同じクラスからのアクセスが可能
- 継承は不可能
- protectedと同様にアクセス権内のメソッドからのコールのみに対応している

```
class Sample {
    protected function protectedFunc(){
        echo "Protected<br>";
    }
    private function privateFunc(){
        echo "Private<br>";
    }
    public function publicFunc(){
        echo "Public<br>";
        $this->protectedFunc(); // エラーにはならない
        $this->privateFunc(); //エラーにはならない
    }
}
$sample = new Sample;
// $sample->protectedFunc();   // エラーになります
// $sample->privateFunc();     // エラーになります
$sample->publicFunc();         // エラーにはならない
```

#### 参考文献

- [PHPのアクセス修飾子public,protected,privateの違い](https://uxmilk.jp/26435)

### コンストラクタ(__construct())

- クラス生成時に自動で実行される関数

#### 宣言方法

```
public function __construct(){

}
```

#### コンストラクタの引数が無い場合

```
$sample = new Sample;
$sample = new Sample();
```

#### コンストラクタの引数が有る場合

```
$sample = new Sample($var);
```

#### 扱い方の例

```
class Sample{
    protected $name; //protected修飾子で$name変数を宣言する
    
    public function __construct(){
        $this->name = "花子";
    }
}
```

#### 参考文献

- [【PHP入門】PHPのコンストラクタの使い方：__construct()](https://uxmilk.jp/14376)
- [【PHP】extendsで親クラスの__constructメソッドが呼び出せていない場合の対処法](https://qiita.com/enutake/items/99463127cefd7e3b74e3)

### アロー演算子での参照

#### 変数の場合

```
$this->変数名;
```

#### 関数の場合

```
$this->関数名();
```

### 継承周り

#### 記法

```
class Sample{

}
class Sample_chid extends Sample{

}
```

- class 子クラス名 extends 親クラス{}

#### 注意事項

##### 親・子双方にコンストラクタが存在する場合

- 親クラスのコンストラクタがオーバーライドされて、子クラスのコンストラクタしか実行されない（[参考リンク](https://qiita.com/enutake/items/99463127cefd7e3b74e3)）
- 対策方法としては子クラスのコンストラクタ内に下記の記述を追記する

```
parent::__construct();
```

### トレイト（trait）

- 複数のメソッド内で共通の処理を行うメソッドが存在する場合等に扱う
    - 例として、モデルやビュー生成時等

#### 記法

##### 定義

```
trait Sample{
    public function sample_fn(){

    }
}
```

##### インポート

- クラス内直下に記述する

```
use Sample;
```

#### 参考文献

- [PHPのトレイトを使うならおさえておきたい５つのこと](https://qiita.com/sasakure-kei@github/items/212637b2f32197441a3a)

### 基本

#### 変数

- 基本はprivateな変数
    - publicな変数は定義しない
    - なるべくコンストラクタから変数の定義をすることで、publicにするのを避ける

#### メソッド

- 外からコールしないメソッドは基本、privateかprotectedで定義する
- 外からコールするメソッドのみpublicで扱う

#### トレイト

- モデルやビューの生成時に使い回すメソッドはtraitとして扱う