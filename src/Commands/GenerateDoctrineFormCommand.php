<?php

namespace Doublemcz\NetteGenerator\Commands;

use Doublemcz\NetteGenerator\Generators\DoctrineFormGenerator;
use Doublemcz\NetteGenerator\Generators\DuplicationException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class GenerateDoctrineFormCommand extends Command
{

	/**
	 * @inheritdoc
	 */
	protected function configure()
	{
		$this->setName('generate:doctrine-form')
			->addArgument('componentName', InputArgument::OPTIONAL, 'Component name (i.e. UserForm)')
			->addArgument('entityName', InputArgument::OPTIONAL, 'Entity name (i.e. User)')
			->setDescription('Creates form component based on Doctrine entity');
	}

	/**
	 * @param InputInterface $input
	 * @param OutputInterface $output
	 * @return int|null|void
	 */
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$helper = $this->getHelper('question');

		$componentName = $input->getArgument('componentName');
		if (empty($componentName)) {
			$question = new Question('Component name: ');
			do {
				$componentName = $helper->ask($input, $output, $question);
			} while (empty($componentName));
		}

		$entityName = $input->getArgument('entityName');
		if (empty($entityName)) {
			$question = new Question('Entity name: ');
			do {
				$entityName = $helper->ask($input, $output, $question);
				if (!class_exists('App\\Entities\\' . $entityName)) {
					$output->writeln(sprintf("WARNING: Entity %s does not exists.", $entityName));
				}
			} while (empty($entityName));
		}

		try {
			$this->getHelper('container')->getByType(DoctrineFormGenerator::class)->generate([
				'name' => $componentName,
				'entityName' => $entityName
			]);
		} catch (DuplicationException $e) {
			$output->writeln('ERROR: ' . $e->getMessage());
		}
	}

}
