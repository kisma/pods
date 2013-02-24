#!/usr/bin/env php
<?php
namespace Kisma\Pods;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/Commands/Initialize.php';

use Symfony\Component\Console\Application;
use Kisma\Pods\Commands\Initialize;

/**
 * Class Hatchery
 *
 * @package Kisma\Pods
 */
class Hatchery extends Application
{
	/**
	 * @var string
	 */
	const HATCHERY_VERSION = '1.0.0-beta';

	/**
	 * @var string
	 */
	const HATCHERY_TITLE = 'Kisma Pod Hatchery';

	//*************************************************************************
	//* Methods
	//*************************************************************************

	/**
	 * @param string $version
	 */
	public function __construct( $version = self::HATCHERY_VERSION )
	{
		parent::__construct( static::HATCHERY_TITLE, $version );
	}

	/**
	 * @param string $version
	 */
	public static function hatch( $version = self::HATCHERY_VERSION )
	{
		$_app = new self( $version );
		$_app->add( new Initialize() );
		$_app->run();
	}

}

//	Let 'er rip!
Hatchery::hatch();
