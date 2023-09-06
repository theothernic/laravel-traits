<?php
    namespace Theothernic\LaravelTraits\Controllers;

    use Illuminate\Http\JsonResponse;

    trait JsonController
    {
        public function respondWithJson(mixed $data,
                                        int $status = 200,
                                        array $headers = []): JsonResponse
        {
            return response()->json($data, $status, $headers);
        }
    }