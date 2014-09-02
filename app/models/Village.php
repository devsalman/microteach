<?php

class Village extends Eloquent {
    
    protected $table = 'villages';
    
    public function district()
    {
        return $this->belongsTo('District');
    }
}
