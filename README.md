## プロジェクトのはじめ方

1 `docker compose up -d`

2 `docker compose ps`

3 `docker compose exec app bash`

4 `cd laravel-project/`

5 `composer update`

6 `.env.example -> .envに書き換える`

7 `.envファイルにキーを設定する php artisan key:generate`

8 `php artisan migrate:fresh`

9 `ブラウザでwelcomeページ表示 -> localhost:8000`
