<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $data['header_title']="Dashboard";
        return $data;
    }

    public function userHome(Request $request)
    {
    
        $responseIndex = $this->index($request);
    
    return view('dashboard.dashboard', $responseIndex,["msg"=>"I am a user role"]);
    
    }
    
    
    public function moderatorHome(Request $request)
    {
    
        $responseIndex = $this->index($request);
    
    return view('dashboard.dashboard',$responseIndex,["msg"=>"I am a Moderator role"]);
    
    }
    
    
    
    
    public function adminHome(Request $request)
    {
    
        $responseIndex = $this->index($request);
        $monthlyExpenses = Expense::all();
    
    return view('dashboard.dashboard',$responseIndex,["msg"=>"I am a Admin role",'monthlyExpenses'=>$monthlyExpenses]);
    
    }
    
}
