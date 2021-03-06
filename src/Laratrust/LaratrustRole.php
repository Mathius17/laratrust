<?php

namespace Santigarcor\Laratrust;

/**
 * This file is part of Laratrust,
 * a role & permission management solution for Laravel.
 *
 * @license MIT
 * @package Santigarcor\Laratrust
 */

use Santigarcor\Laratrust\Contracts\LaratrustRoleInterface;
use Santigarcor\Laratrust\Traits\LaratrustRoleTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class LaratrustRole extends Model implements LaratrustRoleInterface
{
    use LaratrustRoleTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('laratrust.roles_table');
    }
}
