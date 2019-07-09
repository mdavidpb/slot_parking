<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    protected $table = 'mobils';
    protected $primaryKey = 'id';
    protected $fillable = ['number_plate','colour'];

    public function slot(){
        return $this->hasOne('App/slot','mobil_id','id');
        // uangel e ngene opo iso tenan aku dadi programmer halah halah taek, ga dadi dadi program e , eeee embohhhhhhhhhh ngerasakno koding kok uangelmen, ngono mas mas mbak mbak e yoopo yo kok pinter men nggarap e, opo wes kebiasaan yo? 
        // mugo mugo aku iso YA ALLAH Aamiin.
        // opo iki sg kudu tak coding YA ALLAH cek dadi program berjalan?----=-
    }
}
