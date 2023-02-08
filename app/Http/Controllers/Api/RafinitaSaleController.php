<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Helpers\RafinitaApiHelper;

class RafinitaSaleController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $response = RafinitaApiHelper::post($request);

        if ($response['status'] == 200) {
            return Controller::apiResponceSuccess($response['data'], 200);
        } else {
            return Controller::apiResponceError($response['data'], $response['status']);
        }
    }
}
