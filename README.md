
# Task REST API – Laravel

## 📌 Description

Ce projet est une **API REST simple** développée avec **Laravel** permettant de gérer une liste de tâches (To-Do List).

Il a été réalisé dans le cadre d’un **test technique (Junior PHP Developer)** et implémente les fonctionnalités demandées :

- CRUD complet des tâches
- Validation des données
- Utilisation de MySQL
- Données factices pour tests rapides

L’API est **stateless** et respecte les conventions REST.

---

## Technologies utilisées

- PHP 8+
- Laravel 11
- MySQL
- Eloquent ORM
- Factories & Seeders

---

## Structure du modèle Task

Une tâche (`Task`) contient les champs suivants :

- `id`
- `title` (string, obligatoire)
- `description` (text, optionnel)
- `status` (boolean, par défaut `false`)
- `created_at`
- `updated_at`

### Migration + données factices

<pre class="overflow-visible! px-0!" data-start="1755" data-end="1793"><div class="contain-inline-size rounded-2xl corner-superellipse/1.1 relative bg-token-sidebar-surface-primary"><div class="sticky top-[calc(--spacing(9)+var(--header-height))] @w-xl/main:top-9"><div class="absolute end-0 bottom-0 flex h-9 items-center pe-2"><div class="bg-token-bg-elevated-secondary text-token-text-secondary flex items-center gap-4 rounded-sm px-2 font-sans text-xs"></div></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="whitespace-pre! language-bash"><span><span>php artisan migrate --seed</span></span></code></div></div></pre>


---
