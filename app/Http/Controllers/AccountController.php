<?php

namespace App\Http\Controllers;

use App\Models\Account;

class AccountController extends Controller
{
    public function index()
    {
        return Account::query()
            ->defaultOrder()
            ->get();
    }
}
