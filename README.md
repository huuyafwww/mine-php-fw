# PHPの自作フレームワークフレームワークプロジェクト

## 目的

ロジカルで動的な立ち回りの学習を兼ねて、将来的にはオープンソースとしてPHPフレームワークの位置づけとして世に評価を求めているため

## 文献

※文献として扱う場合は内部仕様を読み解いた前提で実装している

また同文献内の"その他"に関しては、

- 立ち回りを意識した定数の定義
- Utility系の処理

等を主に参考としている

### ベース

PHP製のフレームワークである[Codeigniter](https://codeigniter.com/)を基盤に設計から実装を施している

### サブ

暫定ではあるが、PHP製のCMSである[Wordpress](https://ja.wordpress.org/)に実装されている下記事項を施す想定としている

- Action
- Hook
- 多彩な条件分岐メソッド
- REST API

### その他

- [Laravel](http://laravel.jp/)

## 自作テンプレートエンジンに関して

PHP製のテンプレートエンジンである[smarty](https://www.smarty.net/docsv2/ja/)やLaravelの[Blade](https://readouble.com/laravel/5.5/ja/blade.html)等の内部仕様をベースに実装を施すことを想定としている

## 実装内容

PHP製のFWのみの開発とせず、組み込みのManagement SystemをHeadless CMSで開発・実装も行う

### 技術仕様

- PHP
- MYSQL
- HTML
- CSS
- Javascript
    - jQuery

### 組み込みHeadless CMSでの実装事項

- Framework Update
- REST API Management
- Message Queueing
- Create Mirror Environment
- Auto Backup
- Other Useful Tool

### 詳細

同プロジェクトのreferenceディレクトリの[README.md](https://github.com/huuyafwww/mine-php-fw/tree/develop/reference)に詳細を表記している

また、[Trello](https://trello.com/b/Kr98OefW/php-mine-fw)上でタスク管理を行っている
