<?php

class CityController extends BaseController {
    
    public function __construct(City $city) {
        $this->city = $city;
    }
    
    public function index()
    {
        return View::make('admin/city');
    }
    
    public function ajaxDTGetCities()
    {
        $cities = $this->city->all();
        $count = $cities->count();
        $response['data'] = array();
        $response['recordsTotal'] = $count;
        $response['recordsFiltered'] = $count;
        
        foreach ($cities as $city)
        {
            $data = array();
            $data['name'] = $city->name;
            $data['province'] = $city->province->name;
            
            array_push($response['data'], $data);
        }
        
        return Response::json($response);
    }
}
