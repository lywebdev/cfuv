<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
//use Illuminate\Http\JsonResponse;

class BaseController extends Controller
{
    /**
     * Success response method.
     * @param $result
     * @param $message
     * @return
     */
    public function sendResponse($result, string $message, int $code = 200)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
            'code'    => 200
        ];

        return response()->json($response, $code);
    }

    /**
     * Return error response.
     * @param $error
     * @param $errorMessages
     * @param $code
     * @return
     */
    public function sendError($error, array $errorMessages = [], int $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
            'code'    => $code
        ];
        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, 200);
    }
}
