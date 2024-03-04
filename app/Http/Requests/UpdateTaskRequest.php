<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// Para update ja que vamos usar o mesmo validade que store, entao vamos apenas extender para a clase de storeRequest
class UpdateTaskRequest extends StoreTaskRequest
{

}
