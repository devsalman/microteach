<?php

class Account extends Eloquent {

    protected $table = 'accounts';
    protected $guarded = array('id', 'password');

} 