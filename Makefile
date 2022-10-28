destroy:
	docker-compose down --volumes --remove-orphans
	rm -rf ./src/node_modules ./src/vendor ./docker/db/var/lib/mysql
build:
	docker-compose build --no-cache --force-rm
up:
	docker-compose up -d
run/npm:
	docker-compose exec app npm run dev
down:
	docker-compose down --remove-orphans
app/install:
	docker-compose exec app composer install
	docker-compose exec app npm install
app/laravel-init:
	docker-compose exec app cp .env.example .env
	docker-compose exec app php artisan migrate
	docker-compose exec app php artisan db:seed
init:
	@make build
	@make up
	@make app/install
	@make app/laravel-init
