<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.auto_command.make_controller' shared service.

$a = ${($_ = isset($this->services['maker.file_manager']) ? $this->services['maker.file_manager'] : $this->load(__DIR__.'/getMaker_FileManagerService.php')) && false ?: '_'};

$this->services['maker.auto_command.make_controller'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeController($a), $a, ${($_ = isset($this->services['maker.generator']) ? $this->services['maker.generator'] : $this->load(__DIR__.'/getMaker_GeneratorService.php')) && false ?: '_'});

$instance->setName('make:controller');

return $instance;