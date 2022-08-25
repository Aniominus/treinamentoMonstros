<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monstro extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'monstros';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [];

     /**
     * Get the Campeonatos attribute.
     *
     * @return string
     */
    public function getStatAttribute() {
        return $this->statRelationship;
    }

    public function getTamanhoAttribute() {
        return $this->tamanhoRelationship;
    }

    public function getTipoAttribute() {
        return $this->tipoRelationship;
    }

    public function getAtaqueAttribute() {
        return $this->ataqueRelationship;
    }


    public function statRelationship(){
        return $this->belongsTo(Stat::class,'stats_id');
    }

    public function tamanhoRelationship(){
        return $this->belongsTo(Tamanho::class,'tamanho_id');
    }

    public function tipoRelationship(){
        return $this->belongsTo(Tipo::class,'tipo_id');
    }

    public function ataqueRelationship(){
        return $this->belongsToMany(Ataque::class, 'monstros_has_ataques', 'monstro_id', 'ataque_id');
    }


    use HasFactory;
}
