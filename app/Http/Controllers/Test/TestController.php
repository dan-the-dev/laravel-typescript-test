<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestController extends Controller
{
    public function test(Request $request): Response
    {
        return new Response(['data' => $request->get('data', 'Lorem ipsum')], Response::HTTP_OK);
    }
}
