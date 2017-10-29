<?php

namespace Doublemcz\NetteGenerator\Generators;

use Nette;

/**
 * Class UblabooDoctrineDatagridGenerator
 * @package Doublemcz\NetteGenerator\Generators
 */
class UblabooDoctrineDatagridGenerator extends BaseGenerator
{

	/**
	 * @param array $parameters
	 * @throws DuplicationException
	 */
	public function generate(array $parameters)
	{
		$mandatoryParameters = [
			'Name' => 'name',
		];

		$this->checkParameters($parameters, $mandatoryParameters);
		$finalDir = $this->config['componentsDir'] . '/' . $parameters['name'];
		if (is_dir($finalDir)) {
			throw new DuplicationException(sprintf('Component `%s` already exists.', $finalDir));
		}

		Nette\Utils\FileSystem::copy($this->config['templateDir'], $finalDir);
		$this->generateFiles($finalDir, $parameters);
	}

	/**
	 * @param string $finalDir
	 * @param $parameters
	 */
	private function generateFiles($finalDir, $parameters)
	{
		$componentName = $parameters['name'];
		$files = [
			'Component.latte.template' => $componentName . '.latte',
			'Component.php.template' => $componentName . '.php',
			'IComponentFactory.php.template' => 'I' . $componentName . 'Factory.php',
		];

		$placeholders = [
			'COMPONENT_NAMESPACE' => $this->config['componentNamespace'],
			'NAME' => $componentName,
		];

		foreach ($files as $fileFrom => $fileTo) {
			$destinationFilePath = $finalDir . '/' . $fileTo;
			rename($finalDir . '/' . $fileFrom, $destinationFilePath);

			$fileContents = file_get_contents($destinationFilePath);
			foreach ($placeholders as $placeholder => $value) {
				$fileContents = str_replace('##' . $placeholder . '##', $value, $fileContents);
			}

			// Tabs are Nette standard
			$fileContents = str_replace('    ', "\t", $fileContents);
			file_put_contents($destinationFilePath, $fileContents);
		}
	}

}
