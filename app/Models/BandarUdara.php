<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BandarUdara extends Model
{
    protected $fillable = [
        'bandara_udara_id',
        'nama_bandara',
        'nama_alias',
        'kode_iata',
        'lokasi',
        'provinsi',
    ];
    protected static function boot(){
        parent::boot();

        static::creating(function($model){
            $model->bandara_udara_id = $model->generateUniqueCode();
        });
    }
    private function generateUniqueCode(){
        $lastCode = self::orderBy('bandara_udara_id', 'desc')->first();
        $number = 1;

        if($lastCode){
            preg_match('/(\d+)/', $lastCode->bandara_udara_id, $matches);
            $number = intval($matches[0] + 1);
        }

        return "BU" . str_pad($number,3,0,STR_PAD_LEFT);
    }
}
