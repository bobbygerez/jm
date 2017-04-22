<?php 

namespace App\Helpers;

trait ProductDataViewer {


	public function scopeSearchPaginateAndOrder($query){
		//$mainCategories = $this->mainCategory->where('id', $mainCategoryId)->with(['merchantCategory', 'merchantCategory.merchantSubcategory', 'products'])->get();
		return $query->with(['photos', 'unit'])->paginate(10);
	}
}