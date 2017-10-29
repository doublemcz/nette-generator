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
		'componentNamespace' => 'Components',
		'generators' => [
			'doctrineForm' => [
				'templateDir' => __DIR__ . '/../Templates/DoctrineForm',
				'entityNamespace' => 'App\Entities'
			],
			'form' => [
				'templateDir' => __DIR__ . '/../Templates/Form',
			],
			'component' => [
				'templateDir' => __DIR__ . '/../Templates/Component',
			],
			'ublabooDoctrineDatagrid' => [
				'templateDir' => __DIR__ . '/../Templates/UblabooDoctrineDatagrid',
			]
		]
	];

	/**
	 * @inheritdoc
	 */
	public function loadConfiguration()
	{
		$this->registerCommands();
		$this->registerGenerators();
	}

	/**
	 * Registers console commands into configuration
	 *
	 * @return void
	 */
	private function registerCommands()
	{
		$builder = $this->getContainerBuilder();
		$builder->addDefinition($this->prefix('commands.doctrineForm'))
			->setClass('Doublemcz\NetteGenerator\Commands\GenerateDoctrineFormCommand')
			->addTag(ConsoleExtension::TAG_COMMAND);

		$builder->addDefinition($this->prefix('commands.form'))
			->setClass('Doublemcz\NetteGenerator\Commands\GenerateFormCommand')
			->addTag(ConsoleExtension::TAG_COMMAND);

		$builder->addDefinition($this->prefix('commands.component'))
			->setClass('Doublemcz\NetteGenerator\Commands\GenerateComponentCommand')
			->addTag(ConsoleExtension::TAG_COMMAND);

		$builder->addDefinition($this->prefix('commands.ublabooDoctrineDatagrid'))
			->setClass('Doublemcz\NetteGenerator\Commands\GenerateUblabooDoctrineDatagrid')
			->addTag(ConsoleExtension::TAG_COMMAND);
	}

	/**
	 * Registers generators into configuration
	 *
	 * @return void
	 */
	private function registerGenerators()
	{
		$builder = $this->getContainerBuilder();
		$config = $this->getConfig();
		$generators = ['FormGenerator', 'DoctrineFormGenerator', 'ComponentGenerator', 'UblabooDoctrineDatagridGenerator'];
		foreach ($generators as $generator) {
			$parameters = array_merge(
				$this->sharedConfigBetweenGenerators(),
				$config['generators'][lcfirst(str_replace('Generator', '', $generator))]
			);

			$builder->addDefinition($this->prefix('generators.' . lcfirst($generator)))
				->setClass('Doublemcz\\NetteGenerator\\Generators\\' . $generator, [$parameters]);
		}
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

	/**
	 * @return array
	 */
	private function sharedConfigBetweenGenerators()
	{
		$config = $this->getConfig();

		return [
			'componentsDir' => $config['componentsDir'],
			'componentNamespace' => $config['componentNamespace'],
		];
	}

}
