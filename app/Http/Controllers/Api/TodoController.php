<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends BaseController
{
    public function index() {
        $todos = Todo::all();

        return $this->sendResponse($todos);
    }

    public function save(Request $request) {
        
    }
}
