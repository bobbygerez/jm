<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\Product\ProductInterface;
use App\Repo\MainCategory\MainCategoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Obfuscate;

class ApiProductController extends Controller
{
    protected $product;
    protected $mainCategory;

    public function __construct(ProductInterface $product, MainCategoryInterface $mainCategory){

    	$this->product = $product;
        $this->mainCategory = $mainCategory;
    }

    public function getData(){
  $request =  app()->make('request');

        $maincategories = $this->mainCategory->where('id', $request->input('mainCategoryId'))->with(['merchantCategory.merchantSubcategory.products.photos', 'merchantCategory.merchantSubcategory.products.prices'])->first();

            $collection = [];
            $price;
            $photo;

            foreach ($maincategories->merchantCategory as $merchantCat) {
               
               foreach ($merchantCat->merchantSubcategory as $merchantSub) {
                   
                   foreach($merchantSub->products as $product){


                        foreach ($product->prices as $price) {
                           
                           if( $price->is_primary){

                                $price = $price->price;
                           }
                          
                        }

                        foreach ($product->photos as $photo) {
                            if( $photo->is_primary){

                                $photo = $photo->path;
                            }
                        }

                        $collection[] = [

                            'id' => Obfuscate::encode($product->id),
                            'name' => $product->name,
                            'desc' => $product->desc,
                            'price' => $price,
                            'photo' => $photo

                        ];

                   }
               }
            }

            $collection = collect($collection);
            
            if($request->price_where){

            }

            if($request->sortBy === 'asc'){

                $collection = $collection->sortBy('price');
            }
            else{

                $collection = $collection->sortByDesc('price');
            }

            $collection  = $collection->values()->all();

            $collection = collect($collection);

            $collection = $collection->map(function( $item ){

                return [
                    'id' => $item['id'],
                    'name' => $item['name'],
                    'desc' => $item['desc'],
                    'price' => number_format($item['price'], '2', '.', ','),
                    'photo' => $item['photo']
                ];
            });

            $paginate = new LengthAwarePaginator($collection->forPage($request->page, $request->per_page), $collection->count(), $request->per_page, $request->page, ['path'=>url('api/products')]);


        return response()->json([

                'merchantCategories' => $maincategories->merchantCategory,

            ]);
    }


    public function backUp(){

          $request =  app()->make('request');

        $maincategories = $this->mainCategory->where('id', $request->input('mainCategoryId'))->with(['merchantCategory.merchantSubcategory.products.photos', 'merchantCategory.merchantSubcategory.products.prices'])->first();

            $collection = [];
            $price;
            $photo;

            foreach ($maincategories->merchantCategory as $merchantCat) {
               
               foreach ($merchantCat->merchantSubcategory as $merchantSub) {
                   
                   foreach($merchantSub->products as $product){


                        foreach ($product->prices as $price) {
                           
                           if( $price->is_primary){

                                $price = $price->price;
                           }
                          
                        }

                        foreach ($product->photos as $photo) {
                            if( $photo->is_primary){

                                $photo = $photo->path;
                            }
                        }

                        $collection[] = [

                            'id' => Obfuscate::encode($product->id),
                            'name' => $product->name,
                            'desc' => $product->desc,
                            'price' => $price,
                            'photo' => $photo

                        ];

                   }
               }
            }


            $collection = collect($collection);
            
            if($request->price_where){

            }

            if($request->sortBy === 'asc'){

                $collection = $collection->sortBy('price');
            }
            else{

                $collection = $collection->sortByDesc('price');
            }

            $collection  = $collection->values()->all();

            $collection = collect($collection);

            $collection = $collection->map(function( $item ){

                return [
                    'id' => $item['id'],
                    'name' => $item['name'],
                    'desc' => $item['desc'],
                    'price' => number_format($item['price'], '2', '.', ','),
                    'photo' => $item['photo']
                ];
            });

            $paginate = new LengthAwarePaginator($collection->forPage($request->page, $request->per_page), $collection->count(), $request->per_page, $request->page, ['path'=>url('api/products')]);

        return response()->json([

                'merchantCategories' => $maincategories->merchantCategory,

            ]);
    }

    
}
