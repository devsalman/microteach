<?php

class ProvinceController extends BaseController {

    public function __construct(Province $province)
    {
        $this->province = $province;
    }
    
    public function index()
    {
        return View::make('admin/province');
    }
    
    public function ajaxDTGetProvinces()
    {
        $count = $this->province->all()->count();
        
        $response = array();
        $response['draw'] = Input::get('draw');
        $response['recordsTotal'] = $count;
        $response['recordsFiltered'] = $count;
        $response['data'] = $this->province->all()->sortBy('name');
        
        return Response::json($response);
    }
}
