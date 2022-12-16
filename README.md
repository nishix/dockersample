## 起動方法
```docker compose build
docker compose up -d
docker compose exec vue bash
cd Onigiri
nom run dev
```

## コンテナ再起動
docker stop $(docker compose ps -a -q) && docker compose up -d

