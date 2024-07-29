<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [];

    public function save(array $options = []){

        try{
            return parent::save($options);
        }
        catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }
}
