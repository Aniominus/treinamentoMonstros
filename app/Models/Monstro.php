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
    protected $hidden = [
        'created_at',
        'updated_at',
        'tipoRelationship',
        'statRelationship',
        'tamanhoRelationship',
        'ataqueRelationship',
        'tamanho_id',
        'tipo_id',
        'stats_id'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'stat',
        'tamanho',
        'tipo',
        'ataque'
    ];

     /**
     * Get the relevant attributes from Stat, Tamanho, Tipo e Ataque.
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

    /**
     * Set the StatAttribute.
     *
     * @param  array  $value
     * @return void
     */
    public function setStatAttribute($value) {
        $this->statRelationship()->sync($value);
    }
    /**
     * Set the TamanhoAttribute.
     *
     * @param  array  $value
     * @return void
     */
    public function setTamanhotAttribute($value) {
        $this->tamanhoRelationship()->sync($value);
    }
    /**
     * Set the TipoAttribute.
     *
     * @param  array  $value
     * @return void
     */

    public function setTipoAttribute($value) {
        $this->tipoRelationship()->sync($value);
    }
    /**
     * Set the AtaqueAttribute.
     *
     * @param  array  $value
     * @return void
     */
    public function setAtaqueAttribute($value) {
        $this->ataqueRelationship()->sync($value);
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
