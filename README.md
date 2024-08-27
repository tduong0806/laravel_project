<<<<<<< HEAD
# thisisdevelopment/laravel-base

An opinionated base laravel install. 

## Install

```
composer create-project thisisdevelopment/laravel-base <dir>
```

Or alternatively if you don't have composer installed locally:

```
dir=<dir>
git clone https://github.com/thisisdevelopment/laravel-base $dir
cd $dir
rm -rf .git
./bin/dev init
```

## Folder structure

This is modeled after the domain oriented structure proposed by sticher.io:  https://stitcher.io/blog/laravel-beyond-crud-01-domain-oriented-laravel
The proposed structure is extended with the concept of modules, which are default implementations of generic domain code. 

The complete structure is

- `app` <= toplevel app dir, no code here
- `app/App/<app name>/` <= application specific code
- `app/Domain/<domain>` <= domain specific code
- `app/Domain/vendor/<domain>` <= generic domain code (managed by composer, for packages with type=laravel-domain) 
- `app/Module/<module>` <= module code (managed by composer, for packages with type=laravel-module) 
- `packages/<package>/` <= composer wil automatically pickup any packages in this directory. This allows to develop packages alongside your application (see [packages/README.md](packages/README.md)) 

It uses `oomphinc/composer-installers-extender` to install packages of type laravel-module/laravel-domain to the `app/Module` and `app/Domain/vendor` folders.  

## Docker compose support

This base install comes with a complete docker-compose setup out of the box. 
It assumes you have a working local docker install which allows access to docker for your own user.

To easily access the containers you should also run the `thisisdevelopment/docker-hoster` container (see https://github.com/thisisdevelopment/docker-hoster) to dynamically update your hosts file.

```
docker run --restart=unless-stopped -d \
    -v /var/run/docker.sock:/tmp/docker.sock \
    -v /etc/hosts:/tmp/hosts \
    thisisdevelopment/docker-hoster
```

## Dev script

To easily access the containers you should use the included `bin/dev` script.
This script allows for easy execution of composer etc inside your containers.

The supported commands are:

- `up`
- `down`
- `rm`
- `deploy`
- `logs`
- `php-cli`
- `composer`
- `artisan`
- `phpcs`
- `phpcbf`
- `phpunit`

## Coding standards

This base install enforces the `PSR-12` code standard. It does this by installing a git-hook which enforces this standard (by means of `phpcs`)
=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> PR_branch
