<?php

class VillageController extends BaseController {
    
    public function __construct(Village $village) {
        $this->village = $village;
    }
    public function index()
    {
        return View::make('admin/village');
    }
    
    public function ajaxDTGetVillages()
    {
        $villages = $this->village->all();
        $count = $villages->count();
        
        $response['data'] = array();
        $response['recordsTotal'] = $count;
        $response['recordsFiltered'] = $count;
        
        foreach ($villages as $village)
        {
            $data = array();
            $data['name'] = $village->name;
            $data['district'] = $village->district->name;
            $data['city'] = $village->district->city->name;
            $data['province'] = $village->district->city->province->name;
            
            array_push($response['data'], $data);
        }
        
        return Response::json($response);
    }
}
