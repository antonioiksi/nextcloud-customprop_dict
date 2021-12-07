<?php

namespace OCA\customprop_dict\Tests\Unit\Controller;

use OCA\customprop_dict\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}
