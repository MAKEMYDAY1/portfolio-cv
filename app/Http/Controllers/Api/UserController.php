<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use OpenApi\Attributes\Get;
use OpenApi\Attributes\JsonContent;
use OpenApi\Attributes\Response;

class UserController extends Controller
{
//    #[Get(
//        path: '/api/exec-platforms',
//        summary: 'Получение списка сред выполнения',
//        security: [['bearer_token' => []]],
//        tags: ['ExecutionPlatform'],
//        responses: [
//            new Response(
//                response: 200,
//                description: 'Список сервисов',
//                content: new JsonContent(
//                    ref: '#/components/schemas/ExecutionPlatform'
//                )
//            ),
//        ],
//    )]

    public function index() {
        return UserResource::collection(User::all());
    }

    public function show(User $user) {
        return new UserResource($user);
    }

}
