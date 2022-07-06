<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function show()
    {
        return view('user.balance');
    }

    public function incomes()
    {
        return view('user.incomes');
    }

    public function expenses()
    {
        return view('user.expenses');
    }

    public function purchase()
    {
        return view('user.purchase');
    }
}