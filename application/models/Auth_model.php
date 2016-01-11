<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Auth_model extends Eloquent {

    protected $table = 'users';
    public $timestamp = false;

}
