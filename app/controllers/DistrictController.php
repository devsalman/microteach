<?php

class DistrictController extends BaseController {
    
    public function __construct(District $district) {
        $this->district = $district;
    }

    public function index()
    {
        return View::make('admin/district');
    }
    
    public function ajaxDTGetDistricts()
    {
        $districts = $this->district->all();
        $count = $districts->count();
        $response['data'] = array();
        $response['recordsTotal'] = $count;
        $response['recordsFiltered'] = $count;
        
        foreach ($districts as $district)
        {
            $data = array();
            $data['name'] = $district->name;
            $data['city'] = $district->city->name;
            $data['province'] = $district->city->province->name;
            
            array_push($response['data'], $data);
        }
        
        return Response::json($response);
    }
}
