# Coders Free

- Laravel 9
- Alpine JS
- Livewire
<!-- - Redis -->

## Requirements

- Php 8.1
- Node 16
- MySQL
## Pre-instalacion

- Se debe crear la base de datos y posteriormente, agregar los datos correspondientes al .env
- $BASE_URL = 'http://via.placeholder.com' -> $BASE_URL = 'https://placehold.jp';

## Instalacion

```bash
  composer install
  npm install
```


## Post-instalacion

#### Se debe reemplazar la url de de faker:
- ruta 'vendor/fakerphp/faker/src/Faker/Provider/Image.php'
- $BASE_URL = 'http://via.placeholder.com' -> $BASE_URL = 'https://placehold.jp';