<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends BaseController
{
    public function index() {
        $todos = Todo::all();

        return $this->sendResponse($todos);
    }

    public function save(Request $request) {
        // validate params
        $validate = Validator::make($request->all(), [
            'message' => 'required'
        ]);
        // send error if validation failed
        if ($validate->fails()) {
            return $this->sendError('Validation failed', $validate->errors());
        }
        // create todo
        $todo = Todo::create([
            'message' => $request->message
        ]);
    
        return $this->sendResponse($todo);
    }
}
