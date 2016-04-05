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
		$builder = $this->getContainerBuilder();
		$config = $this->getConfig();
		$parameters = array_merge(['componentsDir' => $config['componentsDir']], $config['generators']['doctrineForm']);
		$builder->addDefinition($this->prefix('generators.doctrineFormGenerator'))
			->setClass('Doublemcz\NetteGenerator\Generators\DoctrineFormGenerator', [$parameters]);
	}

	/**
	 * @return array
	 */
	public function getConfig()
	{
		$config = parent::getConfig($this->defaults);
		$appDir = $this->getContainerBuilder()->parameters['appDir'];
		if (!array_key_exists('componentsDir', $config)) {
			$config['componentsDir'] = $appDir . '/Components';
		}

		return $config;
	}
}
