# Claudia Fitness
[Mobile App Design Figma](https://www.figma.com/proto/T9dwG6KeaFMwW27zh2YYoT/Claudia-Fitness?page-id=2%3A41&node-id=122%3A1297&viewport=-374%2C-1670%2C0.36&scaling=scale-down&starting-point-node-id=101%3A192)
[API Specification Notion](https://www.notion.so/timedoor/Api-Specification-d1f51fe3d7984cee8c8f79a5d18ed09a)

## Project Manager

```bash
Cokin Cahya
```
## Credential
Basic auth credential 
(For accessing non-production server and API documentation)
```bash
Username : timedoor
Password : <#claudia-fitness#2022>
```

Admin page credential 
```bash
# Admin user for client
Username : claudia-fitness
Password : <#claudia-fitness#2022>

# Probably have hidden feature for developer
Username : timedoor
Password : <tmdr#claudia-fitness#2022>
```

## Installation

- After clone this repository, run

```bash
composer install
```

- Setup `.env` file, you can get the example from `.env.example`

- Generate `APP_KEY`

```bash
php artisan key:generate
```

- Migrate database

```bash
php artisan migrate:fresh --seed
```

- Application ready to serve

## Dependencies

1. ```laravel/framework : ^9.19``` [docs](https://laravel.com/docs/9.x)
2. ```timedoor/tmd-basic-auth: ^1.0``` [docs](https://github.com/backend-timedoor/basic-auth)
