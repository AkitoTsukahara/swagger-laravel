# laravel-template  
Laravel開発環境をサクッと構築できます！  
# 始め方  
1.このリポジトリをクローンもしくはダウンロードしてください。  
2.`php-sandbox`ディレクトリで以下のコマンドを入力してください。  
  ```
$ docker-compose up -d
  ```
  
3.以下のコマンドでphpコンテナに入ります。  
```
$ docker-compose exec php bash
# 不要なファイルを削除します
$ rm .gitkeep
```

4.laravelのプロジェクトを立ち上げましょう！  
```
# バージョンを指定しない場合
$ composer create-project --prefer-dist laravel/laravel ./
# バージョンを指定する場合
$ composer create-project --prefer-dist laravel/laravel=8.* ./
```

5.`http://localhost/`でLaravelのウェルカムページが表示されたら成功です!  
止めたい時は以下のコマンドを入力してください。  
```
$  docker stop $(docker ps -q) 
```

```
# テストの実行（ローカルから）
docker-compose exec php ./vendor/bin/phpunit
# テストの実行（コンテナ内から）
./vendor/bin/phpunit

```