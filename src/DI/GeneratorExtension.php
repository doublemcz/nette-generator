<?php

namespace Doublemcz\NetteGenerator\DI;

use Kdyby\Console\DI\ConsoleExtension;
use Nette;
use Doublemcz;

class GeneratorExtension extends Nette\DI\CompilerExtension
{
	/**
	 * @var array
	 */
	public $defaults = [
		'componentsDir' => __DIR__ . '/../../app/Components',
		'generators' => [
			'doctrineForm' => [
				'templateDir' => __DIR__ . '/../Templates/DoctrineForm'
			]
		]
	];

	public function loadConfiguration()
	{
		$this->registerCommands();
		$this->registerGenerators();
	}

	private function registerCommands()
	{
		$builder = $this->getContainerBuilder();
		$builder->addDefinition($this->prefix('commands.doctrineForm'))
			->setClass('Doublemcz\NetteGenerator\Commands\GenerateFormCommand')
			->addTag(ConsoleExtension::TAG_COMMAND);
	}

	private function registerGenerators()
	{
		$config = $this->getConfig($this->defaults);
		$builder = $this->getContainerBuilder();

		$parameters = ['componentsDir' => $config['componentsDir']] + $config['generators']['doctrineForm'];
		$builder->addDefinition($this->prefix('generators.doctrineFormGenerator'))
			->setClass('Doublemcz\NetteGenerator\Generators\DoctrineFormGenerator', [$parameters]);
	}
}
