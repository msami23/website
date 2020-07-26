<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','topic','category_id','image','price'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id')
        ->WithDefault([
            'name'=>'No Category',
        ]);
    }
      public function products(){
        return $this->belongsToMany(
            Tag::class,
            'products_tags',
            'product_id',
            'tag_id',
            'id',
            'id');
    }

    public function images(){
        return $this->hasMany(ProductImage::class);
    }


    //tags products
    /*public function getSimilar()
    {
        $tags = $this->tags()->pluck('id')->toArray();
        $tag_ids = implode(',' , $tags);


        $similar_product = Product::whereRaw("id IN(SELECT product_id FROM product_tags WHERE tag_id IN ($tag_ids))")
        ->where('id','<>', $this->id)->get();

        return  $similar_product;
    }*/

}
