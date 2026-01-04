# Task REST API – Laravel

# Description

Projet  **Laravel** permettant de gérer une liste de tâches (To-Do List).

les fonctionnalités demandées :

- CRUD complet des tâches
- Validation des données

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

## Migration + données factices

<pre class="overflow-visible! px-0!" data-start="1755" data-end="1793"><div class="contain-inline-size rounded-2xl corner-superellipse/1.1 relative bg-token-sidebar-surface-primary"><div class="sticky top-[calc(--spacing(9)+var(--header-height))] @w-xl/main:top-9"><div class="absolute end-0 bottom-0 flex h-9 items-center pe-2"><div class="bg-token-bg-elevated-secondary text-token-text-secondary flex items-center gap-4 rounded-sm px-2 font-sans text-xs"></div></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="whitespace-pre! language-bash"><span><span>php artisan migrate --seed</span></span></code></div></div></pre>


---

## Mettre à jour une tâche

<pre class="overflow-visible! px-0!" data-start="2590" data-end="2675"><div class="contain-inline-size rounded-2xl corner-superellipse/1.1 relative bg-token-sidebar-surface-primary"><div class="sticky top-[calc(--spacing(9)+var(--header-height))] @w-xl/main:top-9"><div class="absolute end-0 bottom-0 flex h-9 items-center pe-2"><div class="bg-token-bg-elevated-secondary text-token-text-secondary flex items-center gap-4 rounded-sm px-2 font-sans text-xs"></div></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="whitespace-pre! language-json"><span><span>PUT /api/tasks/</span><span>1</span><span>

</span><span>{</span><span>
  </span><span>"title"</span><span>:</span><span></span><span>"API Laravel terminée"</span><span>,</span><span>
  </span><span>"status"</span><span>:</span><span></span><span>true</span><span>
</span><span>}</span></span></code></div></div></pre>


## Créer une tâche

<pre class="overflow-visible! px-0!" data-start="2431" data-end="2552"><div class="contain-inline-size rounded-2xl corner-superellipse/1.1 relative bg-token-sidebar-surface-primary"><div class="sticky top-[calc(--spacing(9)+var(--header-height))] @w-xl/main:top-9"><div class="absolute end-0 bottom-0 flex h-9 items-center pe-2"><div class="bg-token-bg-elevated-secondary text-token-text-secondary flex items-center gap-4 rounded-sm px-2 font-sans text-xs"></div></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="whitespace-pre! language-json"><span><span>POST /api/tasks

</span><span>{</span><span>
  </span><span>"title"</span><span>:</span><span></span><span>"Créer une API"</span><span>,</span><span>
  </span><span>"description"</span><span>:</span><span></span><span>"Test technique Laravel"</span><span>,</span><span>
  </span><span>"status"</span><span>:</span><span></span><span>false</span><span>
</span><span>}</span></span></code></div></div></pre>
