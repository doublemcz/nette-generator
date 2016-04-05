<?php

namespace Doublemcz\NetteGenerator\Generators;

use Nette;

abstract class BaseGenerator
{
	/** @var array */
	protected $config;

	/**
	 * DoctrineFormGenerator constructor.
	 * @param array $config
	 */
	public function __construct(array $config)
	{
		$mandatoryParameters = [
			'Template directory' => 'templateDir',
			'Components directory' => 'componentsDir'
		];

		$this->checkParameters($config, $mandatoryParameters);
		$this->config = $config;
	}

	/**
	 * Throw exception if `mandatoryParameters` are not in `parameters` array
	 *
	 * @param $parameters
	 * @param $mandatoryParameters
	 */
	protected function checkParameters(array  $parameters, array $mandatoryParameters)
	{
		foreach ($mandatoryParameters as $name => $key) {
			if (empty($parameters[$key])) {
				throw new InvalidArgumentException(sprintf('%s is mandatory. Please set `%s` in parameters array.', $name, $key));
			}
		}
	}
}