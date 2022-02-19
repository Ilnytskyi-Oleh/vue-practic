<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\Person\StoreRequest;
use App\Http\Resources\Person\PersonResource;
use App\Models\Person;

class CreateController extends Controller
{
    public function __invoke()
    {
        return  new PersonResource($person);
    }
}
