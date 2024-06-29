<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * show dashboard page
     */
    public function index()
    {
        return "Dashboard Page";
    }
}
