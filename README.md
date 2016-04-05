# Nette component generator

## Basic installation
via composer `composer require doublemcz/nette-generator`

## Configuration
Activete by nette extension. Go to config.neon and append this to the file
```
extension:
  console: Kdyby\Console\DI\ConsoleExtension
  generator: Doublemcz\NetteGenerator\DI\GeneratorExtension
```

You can specify several options to change generator behaviour. For example, commonly we save components under `app/Components` dir in the project. You can change it by `componentsDir`. There is a list of complete options:

```
generator:
 componentsDir: Components ## Parent is %appDir%
```

## Available commands
 - generate:doctrine-form
 
## Doctrine form
### Parameters
 - templateDir (a directory with Form.latte.template, IFormFactory.template and Form.php.template)


