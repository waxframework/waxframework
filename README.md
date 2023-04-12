<p align="center">
<a href="https://packagist.org/packages/waxframework/waxframework"><img src="https://img.shields.io/packagist/dt/waxframework/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/waxframework/waxframework"><img src="https://img.shields.io/packagist/v/waxframework/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/waxframework/waxframework"><img src="https://img.shields.io/packagist/l/waxframework/framework" alt="License"></a>
</p>

# About WaxFramework

WaxFramework is a wordpress plugin framework that makes web development easy and enjoyable. Its expressive syntax and range of features help developers create high-quality applications with ease.

- [About WaxFramework](#about-waxframework)
	- [Installation](#installation)
	- [Artisan Command](#artisan-command)
	- [Routing](#routing)
	- [Database](#database)
	- [Regenerate Vendor Directory](#regenerate-vendor-directory)

## Installation

1. Create plugin with waxframework

   ```sh
   composer create-project waxframework/waxframework plugin-name
   ```
2. Go to the plugin directory
   ```sh
   cd plugin-name
   ```
3. Setup plugin name and other information
	```sh
	php artisan app:setup
	```
## Artisan Command
Run this command to see all available command lists
```sh
php artisan
```
## Routing
<a href="https://github.com/sovware/routing">Routing Documentation</a>

## Database
<a href="https://github.com/sovware/database">Database Documentation</a>

## Regenerate Vendor Directory
To re-generate vendor folder don't use `composer install` / `php artisan app:setup`

Use
```sh
composer setup
```