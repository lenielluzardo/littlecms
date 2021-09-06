<?php

namespace App\Mappers;

use App\DTO\UserDTO;
use App\Models\User;

class UserMapper
{
    static function MapToDTO($model)
    {   
        $dto = new UserDTO();

        $dto->name = $model->first_name.' '.$model->last_name;
        $dto->thumbnail = $model->thumbnail;
        $dto->description = $model->description;
        
        return $dto;
    }
    
    static function MapToModel($dto)
    {

    }
}