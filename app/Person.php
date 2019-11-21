<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function getData()
    {
        return $this->id . ': ' . $this->name . '(' . $this->age . ')';
    }

    public function scopeNameEqual($query, $str)
    {
        return $query->where('name',$str);
    }

    public function scopeAgeGreaterThan()
    {
        return $query->where('age','>=',$n);
    }

    public function scopeAgeLessThan()
    {
        return $query->where('age','<=',$n);
    }

}
