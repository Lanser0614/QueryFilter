<?php


namespace App\Service;


class UsersFilter extends  QueryFilter
{
    public function name($value)
    {
       $this->builder->where('name', 'like', "%$value%");
    }

    public function gender($value)
    {
        $this->builder->where('gender',  "$value");
    }

    public function title($value)
    {
//        if (empty($value)) return;
        $this->builder->whereHas('posts', function ($query) use ($value){
            $query->where('title', 'like', "%$value%");
        });
    }


}
