<?php

namespace PaymentProcess\AdminDashboard\App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function getDashboard(){
        try{
            return view('admin-dashboard::index');
        } catch(\Exception $e){
            Log::error("Admin Dashboard:", [$e->getMessage()]);
            return back()->with('error',$e->getMessage());
        }
    }
}
