<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardFrontendController extends Controller
{
   public function index(){
    return view('admin.dashboard_frontend');
   }
}