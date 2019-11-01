# 自作フレームワーク開発

## 仕様

- オープンソースで公開できるフレームワークとして開発を行う
- シンプルに
    - ディレクトリ構造
    - 立ち回り
- 利用者が任意の識別子で各種ディレクトリの名称を管理できるようにする
    - フレームワークジェネレーターを用意する

## 想定する処理の概要

- viewを生成することを目的とした処理
- フロントエンドでsubmitされたHTTPリクエストをさばく処理
- ajax経由のHTTPリクエストをさばく処理
- exec関数等でコマンドラインを実行する処理

## 考慮事項

- ルーティング
- セッション
- クッキー
- ログ
- ビュー
- バリデーション
- データベース（ORMラッパー）
- config（パスやフレームワーク独自の定義等）

## ディレクトリ構造

- app
    - base
        - init
        - layout
    - controllers
        - requests
            - post
            - session
            - get
            - files
                - requests.php
    - models
    - views
    - routing
- system
    - core
        - Controller.php（要らないのでは）
        - Model.php（要らないのでは）
        - Router.php
        - Loader.php(クラスのロードで扱う)
    - helper