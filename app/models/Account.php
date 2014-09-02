<?php
/**
 * Created by PhpStorm.
 * Account: Salman
 * Date: 8/29/14
 * Time: 4:18 PM
 */

class Account extends Eloquent {

    protected $table = 'accounts';
    protected $guarded = array('id', 'password');

} 