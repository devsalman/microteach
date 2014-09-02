<?php

class City extends Eloquent {
    
    protected $table = 'cities';
    
    public function province()
    {
        return $this->belongsTo('Province');
    }
}
