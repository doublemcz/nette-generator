<?php

namespace Doublemcz\NetteGenerator\Commands;

use Doublemcz;
use Symfony;

class GenerateUblabooDoctrineDatagrid extends Symfony\Component\Console\Command\Command
{

	/**
	 * @inheritdoc
	 */
	protected function configure()
	{
		$this
			->setName('generate:ublaboo-doctrine-datagrid')
			->addArgument('componentName', NULL, 'Component name')
			->setDescription('Creates empty datagrid based on Ublaboo');
	}

	/**
	 * @param Symfony\Component\Console\Input\InputInterface $input
	 * @param Symfony\Component\Console\Output\OutputInterface $output
	 * @return int|null|void
	 */
	protected function execute(Symfony\Component\Console\Input\InputInterface $input, Symfony\Component\Console\Output\OutputInterface $output)
	{
		$componentName = $input->getArgument('componentName');
		if (empty($componentName)) {
			$helper = $this->getHelper('question');
			$question = new Symfony\Component\Console\Question\Question('Component name: ');
			do {
				$componentName = $helper->ask($input, $output, $question);
			} while (empty($componentName));
		}

		try {
			$this->getHelper('container')->getByType(Doublemcz\NetteGenerator\Generators\UblabooDoctrineDatagridGenerator::class)->generate([
				'name' => $componentName,
			]);

			$output->writeln(sprintf('%s has been created', $componentName));
		} catch (Doublemcz\NetteGenerator\Generators\DuplicationException $e) {
			$output->writeln('ERROR: ' . $e->getMessage());
		}
	}

}
