<?php

namespace OCA\customprop_dict\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'customprop_dict';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
