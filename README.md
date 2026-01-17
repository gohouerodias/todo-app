---
Описание

REST API на Laravel 11 для управления напоминаниями.
Поддерживает CRUD-операции, статусы, валидацию данных и тестовые данные.

Технологии

PHP 8+

Laravel 11

PostgreSQL

Eloquent ORM

Миграции и сидеры

REST API

Сущности
Статус (Status)

id

name

Предустановленные статусы:

Новый

Исполнен

Запланирован

Просрочен

Напоминание (Task)

id

short_description

description

execution_datetime

status_id

Связь: один статус — много напоминаний.

Установка
composer install
php artisan migrate --seed
php artisan serve

Основные API

Создание напоминания
POST /api/tasks

Получить все напоминания
GET /api/tasks

Обновление напоминания
PUT /api/tasks/{id}

Удаление напоминания
DELETE /api/tasks/{id}

Получить статусы
GET /api/statuses

Валидация

short_description — обязательное поле

execution_datetime — обязательная дата

status_id — должен существоватьREST API для напоминаний – Laravel

---
