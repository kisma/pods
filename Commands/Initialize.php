<?php
namespace Kisma\Pods\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Initialize
 * Creates a new container
 *
 * Kisma(tm) : PHP Nanoframework (http://github.com/Pogostick/kisma/)
 * Copyright 2009-2013, Jerry Ablan/Pogostick, LLC., All Rights Reserved
 *
 * @copyright Copyright (c) 2009-2013 Jerry Ablan/Pogostick, LLC.
 * @license   http://github.com/kisma/kisma/blob/master/LICENSE
 * @author    Jerry Ablan <getkisma@gmail.com>
 */
class Initialize extends Command
{
	//*************************************************************************
	//* Methods
	//*************************************************************************

	/**
	 * Configure the command
	 */
	protected function configure()
	{
		$this
			->setName( 'initialize' )
			->setDescription( 'Initialize a new pod' )
			->addArgument(
				'pod_name',
				InputArgument::REQUIRED,
				'Pod Name'
			)
			->addOption(
				'force',
				'f',
				InputOption::VALUE_OPTIONAL,
				'Don\'t ask me no questions, I\'ll tell you no lies...'
			);

		$this->setAliases( array( 'initialize','init' ) );
	}

	/**
	 * @param \Symfony\Component\Console\Input\InputInterface   $input
	 * @param \Symfony\Component\Console\Output\OutputInterface $output
	 *
	 * @return int|null|void
	 */
	protected function execute( InputInterface $input, OutputInterface $output )
	{
		$_podName = $input->getArgument( 'pod_name' );

		if ( $input->getOption( 'quiet' ) )
		{
			$output->writeln( 'No lies baby.' );

			return;
		}

		$output->writeln( 'Building pod ' . $_podName . ' now...' );
	}
}
