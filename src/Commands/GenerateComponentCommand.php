<?php

namespace Doublemcz\NetteGenerator\Commands;

use Doublemcz\NetteGenerator\Generators\ComponentGenerator;
use Doublemcz\NetteGenerator\Generators\DoctrineFormGenerator;
use Doublemcz\NetteGenerator\Generators\DuplicationException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class GenerateComponentCommand extends Command
{
	protected function configure()
	{
		$this->setName('generate:component')->setDescription('Creates empty component');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$helper = $this->getHelper('question');

		$question = new Question('Component name: ');
		do {
			$componentName = $helper->ask($input, $output, $question);
		} while (empty($componentName));

		try {
			$this->getHelper('container')->getByType(ComponentGenerator::class)->generate([
				'name' => $componentName,
			]);

			$output->writeln('Component ' . $componentName . ' has been created');
		} catch (DuplicationException $e) {
			$output->writeln('ERROR: ' .$e->getMessage());
		}
	}
}