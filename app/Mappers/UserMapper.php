<?php

namespace App\Mappers;

use App\DTO\UserFieldDTO;
use App\Models\User;

class UserMapper
{
    static function MapToDTO($model)
    {   
        $dto = new UserFieldDTO();

        $dto->name = $model->name;
        $dto->thumbnail = $model->thumbnail;
        $dto->description = $model->description;
        
        $dto->fields = collect([
            'experience' => $model->experience,
            'studies' => $model->studies,
            'stack' => $model->stack,
            'interests' => $model->interests,
            'hobbies' => $model->hobbies
        ]);

        $dto->miscellaneous = $model->miscellaneous;
        
        return $dto;
    }
    
    static function MapToModel($dto)
    {

    }
}