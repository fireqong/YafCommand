<?php 

namespace church;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateController extends Command
{
	use Generateable;
	
	protected function configure()
	{
		$this
			->setName('make:controller')
			->addArgument('controller_name', InputArgument::REQUIED, 'The name of controller.')
			->setDescription('Create new controller.')
			->setHelp('This command allows you create a controller.');
	}
	
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$output->writeln([
			'generating...',
		]);
		
		$controller_name = $input->getArgument('controller_name');
		
		$data = sprintf(fread(__DIR__ . 'Templates/Controller.php', $controller_name);
		defined('APPLICATION_PATH') && $this->generate(APPLICATION_PATH . 'controllers' . DIRECTORY_SEPARATOR . $controller_name . '.php', $data);
		
		$output->writeln('controller ' . $controller_name . ' generate successfully.';
	}
}
