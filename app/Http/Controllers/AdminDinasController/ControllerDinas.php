<?php

namespace App\Http\Controllers\AdminDinasController;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ControllerDinas extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
