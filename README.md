---
# REST API для задач – Laravel


## Описание


Проект на **Laravel** для управления списком задач (to-do list).


Реализуемый функционал:


* Полный CRUD для задач
* Валидация входных данных
---
## Используемые технологии

* PHP 8+
* Laravel 11
* MySQL
* Eloquent ORM
* Фабрики и сидеры

---

## Структура модели задачи

Модель задачи (`Task`) содержит следующие поля:

* `id`
* `title` (строка, обязательное поле)
* `description` (текст, необязательное поле)
* `status` (логическое значение, по умолчанию `false`)
* `created_at`
* `updated_at`

---

## Миграции и тестовые данные

Для выполнения миграций и заполнения базы тестовыми данными используйте команду:

<pre class="overflow-visible! px-0!" data-start="832" data-end="870"><div class="contain-inline-size rounded-2xl corner-superellipse/1.1 relative bg-token-sidebar-surface-primary"><div class="sticky top-[calc(--spacing(9)+var(--header-height))] @w-xl/main:top-9"><div class="absolute end-0 bottom-0 flex h-9 items-center pe-2"><div class="bg-token-bg-elevated-secondary text-token-text-secondary flex items-center gap-4 rounded-sm px-2 font-sans text-xs"></div></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="whitespace-pre! language-bash"><span><span>php artisan migrate --seed
</span></span></code></div></div></pre>

---

## Обновление задачи

Пример запроса для обновления задачи:

<pre class="overflow-visible! px-0!" data-start="938" data-end="1022"><div class="contain-inline-size rounded-2xl corner-superellipse/1.1 relative bg-token-sidebar-surface-primary"><div class="sticky top-[calc(--spacing(9)+var(--header-height))] @w-xl/main:top-9"><div class="absolute end-0 bottom-0 flex h-9 items-center pe-2"><div class="bg-token-bg-elevated-secondary text-token-text-secondary flex items-center gap-4 rounded-sm px-2 font-sans text-xs"></div></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="whitespace-pre! language-json"><span><span>PUT /api/tasks/</span><span>1</span><span>
</span><span>{</span><span>
  </span><span>"title"</span><span>:</span><span></span><span>"Laravel API Complete"</span><span>,</span><span>
  </span><span>"status"</span><span>:</span><span></span><span>true</span><span>
</span><span>}</span><span>
</span></span></code></div></div></pre>

---

## Создание задачи

Пример запроса для создания новой задачи:

<pre class="overflow-visible! px-0!" data-start="1092" data-end="1212"><div class="contain-inline-size rounded-2xl corner-superellipse/1.1 relative bg-token-sidebar-surface-primary"><div class="sticky top-[calc(--spacing(9)+var(--header-height))] @w-xl/main:top-9"><div class="absolute end-0 bottom-0 flex h-9 items-center pe-2"><div class="bg-token-bg-elevated-secondary text-token-text-secondary flex items-center gap-4 rounded-sm px-2 font-sans text-xs"></div></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="whitespace-pre! language-json"><span><span>POST /api/tasks
</span><span>{</span><span>
  </span><span>"title"</span><span>:</span><span></span><span>"Создать API"</span><span>,</span><span>
  </span><span>"description"</span><span>:</span><span></span><span>"Технический тест Laravel"</span><span>,</span><span>
  </span><span>"status"</span><span>:</span><span></span><span>false</span><span>
</span><span>}</span></span></code></div></div></pre>
