# dev-customer-management-system
DockerとLaravelを用いたCRUD処理の復習

## 環境構築手順
#### 1. リポジトリをクローン
```shell
$ git clone https://github.com/mitsuyuki-furuya-epkotsoftware/dev-customer-management-system.git
```
#### 2. リポジトリに移動
```shell
$ cd dev-customer-management-system
```
#### 3. コンテナ起動
```shell
$ docker-compose up -d
```

#### 4. appコンテナ内へアクセス
```shell
$ docker-compose exec app bash
```
#### 5. Laravelのプロジェクトフォルダへ移動
```shell
$ cd CustomerManagementSystem
```

#### 6. envファイルの作成
```shell
$ cp .env.example .env
```

#### 7. composerインストール
```shell
$ composer install
```

#### 8. アプリケーションキーを生成
```shell
$ php artisan key:generate
```

#### 9. マイグレーション実行
```shell
$ php artisan migrate
```

#### 10. シーダー実行
```shell
$ php artisan db:seed
```

#### 11. 動作確認
http://localhost:1000

username：`user`

password：`pass`

#### 12. phpmyadmin
http://localhost:1100

username：`user`

password：`pass`