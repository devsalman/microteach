<?php
/**
 * Created by PhpStorm.
 * Account: Salman
 * Date: 8/29/14
 * Time: 2:47 PM
 */

class AccountController extends BaseController {

    public function __construct(Account $account)
    {
        $this->account = $account;
    }

    public function login()
    {
        $email = Input::get('email');
        $password = Input::get('password');
        $account = $this->account->where('email', $email)->first();

        if(Hash::check($password, $account->password))
        {
            return Redirect::to('admin/dashboard');
        }

        return Redirect::to('account/login');
    }
} 