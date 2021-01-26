<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;

class Category extends Model
{

    public $table = 'categories';

    public $fillable = ['name','parent_id'];

     /**
     * Get the index name for the model.
     *
     * @return string
    */
    public function parent() {
        return $this->belongsTo(Category::class,'parent_id','id') ;
    }

     /**
     * Get the index name for the model.
     *
     * @return string
    */
    public function childs() {
        return $this->hasMany(Category::class, 'parent_id');
    }


    public function allChildren()
    {
        return $this->childs()->with('allChildren');
    }

    public function root()
    {
        return $this->parent
            ? $this->parent->root()
            : $this;
    }

}
