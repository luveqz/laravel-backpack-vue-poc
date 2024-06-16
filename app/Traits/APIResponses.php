<?php

namespace App\Traits;

trait APIResponses
{
    protected function ok($message)
    {
        return $this->success($message, 200);
    }

    protected function success($message, $statusCode = 200)
    {
        return response()->json(['message' => $message], $statusCode);
    }


}
