<?php

namespace Doublemcz\NetteGenerator\Commands;

use Doublemcz;
use Symfony;

class GenerateFormCommand extends Symfony\Component\Console\Command\Command
{

	/**
	 * @inheritdoc
	 */
	protected function configure()
	{
		$this->setName('generate:form')->setDescription('Creates empty form component');
	}

	/**
	 * @param Symfony\Component\Console\Input\InputInterface $input
	 * @param Symfony\Component\Console\Output\OutputInterface $output
	 * @return int|null|void
	 */
	protected function execute(Symfony\Component\Console\Input\InputInterface $input, Symfony\Component\Console\Output\OutputInterface $output)
	{
		$helper = $this->getHelper('question');

		$question = new Symfony\Component\Console\Question\Question('Component name: ');
		do {
			$componentName = $helper->ask($input, $output, $question);
		} while (empty($componentName));

		try {
			$this->getHelper('container')->getByType(Doublemcz\NetteGenerator\Generators\FormGenerator::class)->generate([
				'name' => $componentName,
			]);

			$output->writeln(sprintf('%s has been created' ,$componentName));
		} catch (Doublemcz\NetteGenerator\Generators\DuplicationException $e) {
			$output->writeln('ERROR: ' .$e->getMessage());
		}
	}

}
