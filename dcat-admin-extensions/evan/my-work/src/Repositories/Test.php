<?php

namespace Evan\MyWork\Repositories;

use Evan\MyWork\Models\Test as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Test extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
