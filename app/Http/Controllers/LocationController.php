<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repo\Region\RegionInterface;
use App\Repo\Province\ProvinceInterface;
use App\Repo\City\CityInterface;
use App\Repo\Barangay\BarangayInterface;
use Obfuscate;
class LocationController extends Controller
{

	protected $region;
	protected $province;
	protected $city;
	protected $barangay;

	public function __construct(RegionInterface $region, ProvinceInterface $province, CityInterface $city, BarangayInterface $barangay){

		$this->region = $region;
		$this->province = $province;
		$this->city = $city;
		$this->barangay = $barangay;
	}
    

    public function region(){

        $collection  = $this->region->all();

    	return response()->json([

    			'regions' => $this->region->all()
    		]);
    }


    public function regionProvinces( $regCode ){

    	return response()->json([

    			'provinces' =>  $this->province->where('regCode', $regCode)->get()
    		]);
    }

    public function provinceAll(){

    	return response()->json([

    			'provinces' => $this->province->orderBy('provDesc', 'asc')->get()
    		]);
    }

    public function cityAll(){

    	return response()->json([

    			'cities' => $this->city->all()
    		]);
    }

    public function provinceCities($provCode){

    	return response()->json([

    			'cities' => $this->city->whereNoDecode('provCode', $provCode)->get()
    		]);
    }

    public function cityBarangay( $cityCode ){

    	return response()->json([

    			'barangays' => $this->barangay->whereNoDecode('citymunCode', $cityCode)->get()
    		]);
    }
}
