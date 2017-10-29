# Nette component generator

## Basic installation
via composer `composer require doublemcz/nette-generator`

## Configuration
Activate by nette extension. Go to config.neon and append this to the file
```
extensions:
  console: Kdyby\Console\DI\ConsoleExtension
  generator: Doublemcz\NetteGenerator\DI\GeneratorExtension
```

You can specify several options to change generator behaviour. For example, commonly we save components under `app/Components` dir in the project. You can change it by `componentsDir`. There is a list of complete options:

```
generator:
  componentsDir: %appDir%/App/Components ## Default is %appDir%/Components
  componentNamespace: App\Components     ## Default is Components

  generators:
  	doctrineForm:
  		entityNamespace: App\Entities
```

## Available commands
 - generate:form (Generates simple empty component with Nette Form, used i.e. for contact form)
 - generate:doctrine-form  (Generates a component with Nette Form based on Doctrine ORM)
 - generate:component  (Generates empty component)

## Usage
You can generate a component by Console command (Kdyby/Console). For Doctrine Form just run this command from root of your project.
```
php www/index.php generate:doctrine-form
```

You will be asked to specify `name` and `entity name`. Name can be `UserForm` and `entity name` just `User`. After successfull creation you will get following structure

```
  app
    Components <-- Newly created (If not exists)
      UserForm <-- Newly created
        UserForm.php <-- Newly created
        IUserFormFactory.php <-- Newly created
        UserForm.latte <-- Newly created
    model
    config
    Presenters
      templates
  www
  temp
  vendor
  ...
```

##### Command accepts optional arguments for component and entity name
```
php www/index.php generate:doctrine-form [ComponentName] [EntityName]
```

Example
```
php www/index.php generate:doctrine-form UserForm User
```

If given folder `UserForm` exists, generator tells you you cannot continue and DO NOT OVERWRITE files.
