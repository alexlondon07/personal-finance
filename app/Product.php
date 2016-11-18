<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
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
    protected $table = 'products';

    /**
     * Atributos que se pueden insertar en Mass-Assignment
     * @var array
     */
    protected $fillable = ['code', 'name', 'slug', 'description', 'cost', 'price', 'enable'];


    /**
    * Relacion con archivo adjunto
    * Relacion uno a muchos
    * [attachment description]
    * @return [type] [description]
    */
    public function attachment() {
      return $this->hasMany('App\Attachment');
    }

}
