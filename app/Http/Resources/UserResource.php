<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Attributes\Schema;
use PhpParser\Builder\Property;

//#[Schema(
//    title: 'UserResource',
//    description: 'User',
//    properties: [
//        new Property(
//            property: 'id',
//            description: 'Идентификатор записи',
//            type: 'integer',
//        ),
//        new Property(
//            property: 'name',
//            description: 'Имя',
//            type: 'string',
//        ),
//        new Property(
//            property: 'surname',
//            description: 'Фамилия',
//            type: 'string',
//        ),
//        new Property(
//            property: 'position',
//            description: 'Должность',
//            type: 'string',
//        ),
//        new Property(
//            property: 'description',
//            description: 'О себе',
//            type: 'string',
//        ),
//        new Property(
//            property: 'interests',
//            description: 'Интересы',
//            type: 'string',
//        ),
//        new Property(
//            property: 'telegram',
//            description: 'Телеграм',
//            type: 'string',
//        ),
//        new Property(
//            property: 'github',
//            description: 'Гитхаб',
//            type: 'string',
//        ),
//        new Property(
//            property: 'image',
//            description: 'Картинка',
//            type: 'string',
//        ),
//    ],
//        xml: new Xml(
//        name: 'ExecutionPlatformResource'
//    )
//)]

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'surname' => $this->surname,
            'position' => $this->position,
            'description' => $this->description,
            'interests' => $this->interests,
            'telegram' => $this->telegram,
            'github' => $this->github,
            'image' => asset('storage/' . $this->image),
        ];
    }
}
