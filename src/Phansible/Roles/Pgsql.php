<?php

namespace Phansible\Roles;

use Phansible\BaseRole;
use Phansible\Renderer\PlaybookRenderer;
use Phansible\Renderer\VarfileRenderer;
use Symfony\Component\HttpFoundation\Request;

class Pgsql extends BaseRole
{
  protected $name = 'PostgreSQL';
  protected $slug = 'pgsql';

  public function getInitialValues()
  {
    return [
      'install' => 0,
      'root_password' => 123,
      'databases' => [
        'name' => 'dbname',
        'user' => 'name',
        'password' => 123,
      ]
    ];
  }
}
