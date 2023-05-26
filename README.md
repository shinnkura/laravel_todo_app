## プロジェクトのはじめ方

1 `docker compose up -d`

2 `docker compose exec app bash`

3 `cd laravel-project/`

4 `composer update`

5 `.env.example -> .envに書き換える`

6 `.envファイルにキーを設定する php artisan key:generate`

7 `ブラウザでwelcomeページ表示 -> localhost:8000`


## vender ファイルを編集した際にするコマンド
##　

`php artisan migrate:fresh`
