<?php
/**
 * Created by PhpStorm.
 * User: Salman
 * Date: 8/31/14
 * Time: 5:57 PM
 */

class ProvinceController extends BaseController {

    public function __construct(Province $province)
    {
        $this->province = $province;
    }
}
