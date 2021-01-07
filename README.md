# Gentools

Gentools is a composer package for to make eloquent repositories.

## Installation

Use the composer to install the package.

```bash
composer require solverao/gentools
```

## Usage
### Repository

To create a new repository class run the following command 
```
php artisan make:repo "nameRepository"
```
It will default be created in `App/Repositories`
### Presenter

To create a new presenter class run the following command
```
php artisan make:presenter "namePresenter"
```
It will default be created in `App/Presenters`

### Config
If you want to publish the config file run the following command `php artisan vendor:publish` and chose gentools-config.

## Test 
To generate coverage report run
```
phpunit --coverage-test
```
or
```
phpunit --coverage-html test/coverage
```
## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)