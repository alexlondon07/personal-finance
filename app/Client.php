<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Client extends Model
{
  /**
     * Enable soft deletes for a model
     * @var string
     */
    protected $dates = ['deleted_at'];


    use Sluggable;

    /**
    * Return the sluggable configuration array for this model.
    *
    * @return array
    */
    public function sluggable()
    {
      return [
        'slug' => [
          'source' => 'name'
        ]
      ];
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * Atributos que se pueden insertar en Mass-Assignment
     * @var array
     */
    protected $fillable = ['name', 'reference', 'slug', 'cellphone', 'address', 'enable'];

}
