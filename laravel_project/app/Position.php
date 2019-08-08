<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = "positions";

    public static function getAll(){
        return self::get();
        }
    
    public static function getItem($id){
        //SIMILAR TO, BUT DIFFERENT A LITTLE BIT
        //return self::where('id',$id)->get($id);
        return self::findOrFail($id);
        }

    public static function search($q){
        return self::orwhere("name","like","%{$q}%")        
            ->get();
    }
}
