<?php 

namespace church;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

class Check extends Command
{
	use Generateable;
	
	protected function configure()
	{
		$this
			->setName('check')
			->setDescription('Check the environment.')
			->setHelp('This command allows you to check environment.');
	}
	
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$output->writeln([
			'checking...',
		]);
		
		$loaded_extension = get_loaded_extensions();
		$is_yaf_extension_have_been_loaded = in_array('yaf', $loaded_extension);
		$output->writeln($is_yaf_extension_have_been_loaded ? "yaf extension: <fg=green>loaded</>" : "yaf extension: <fg=red>unloaded</>");
		
		$use_namespace_on = ini_get('yaf.use_namespace');
		$output->writeln($use_namespace_on ? "yaf.use_namespace: <fg=green>on</>" : "<fg=red>off</>");
						
		$use_spl_autoload_on = ini_get('yaf.use_spl_autoload');
		$output->writeln($use_spl_autoload_on ? "yaf.use_spl_autoload: <fg=green>on</>" : "<fg=red>off</>");
		
	}
}
