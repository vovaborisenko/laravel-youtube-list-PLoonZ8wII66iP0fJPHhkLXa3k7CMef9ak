<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## [Прохождение видеокурса](https://www.youtube.com/playlist?list=PLoonZ8wII66iP0fJPHhkLXa3k7CMef9ak)

Видеокурс по фреймворку Laravel (Ларавел). 
Версии фреймворка используемые в курсе: 5.7.2 - 7.0
Изучение Laravel с [Дмитрием Афанасьевым](https://www.youtube.com/c/DmitryAfanasyev).

[ссылка на youtube playlist](https://www.youtube.com/playlist?list=PLoonZ8wII66iP0fJPHhkLXa3k7CMef9ak)


---
### lesson 11

[Добавлена аутентификация](https://laravel.com/docs/7.x/authentication)
```
composer require laravel/ui
php artisan ui vue --auth
npm i
npm run dev
```

---
### lesson 12
### lesson 13

Добавлены котроллеры админки (base, category).

Добавлены пути для категорий.

---
### lesson 14
### lesson 15

Добавлен вывод категорий в таблице с пагинацией

---
### lesson 16

Добавлен вывод формы редактирования категории

---
### lesson 17

Добавлена верстка формы редактирования категории

---
### lesson 18
### lesson 19
### lesson 20

Добавлена обработка запросов на редактирование категорий

---
### lesson 21
### lesson 22

Добавлена валидация

---
### lesson 23
### lesson 24

Добавлено создание категории

---
### lesson 25
### lesson 26
### lesson 27
### lesson 28
### lesson 29

Изучение и добавление репозиториев

---
### lesson 30
### lesson 31

Добавлено использование репозиториев в CaregoryController

---
### lesson 32

Начато создание управление постами

---
### lesson 33

Добавлен вывод всех статей с пагинацией

---
### lesson 34

Добавлены отношения талиц БД

---
### lesson 35
### lesson 36
### lesson 37
### lesson 38
Начато создание страницы редактирования статьи блога

---
### lesson 39
Создана страница редактирования статьи блога

---
### lesson 40
Добавлено редактирование статьи

---
### lesson 41
Создание наблюдателей - observer
```
php artisan make:observer BlogPostObserver --model=Models\BlogPost
php artisan make:observer BlogCategoryObserver --model=Models\BlogCategory
```

---
### lesson 42
Создан наблюдатель - BlogCategoryObserver

---
### lesson 43

---
## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
