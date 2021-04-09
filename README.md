# Message topic generator

Message topic structure generator.

Implements it with the following structure: 
**scope.application.service.version.type.resource.name**

## Installation

Install via [composer](https://getcomposer.org/)

```shell script
composer require jamarcer/topic
```

## Usage

Use it as a standard library.

## Development

Prepare the development environment. 

```shell script
make build
```

```shell script
make composer-install
```

Or you can access directly to bash ...

```shell script
make start
```

... and test the library

```shell script
/var/app/vendor/bin/phpunit  --configuration /var/app/phpunit.xml.dist 
```

## License
Licensed under the [MIT license](http://opensource.org/licenses/MIT)

Read [LICENSE](LICENSE) for more information
