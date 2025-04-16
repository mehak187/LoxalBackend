<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addNewUser(){
        return view('admin/add-new-user');
    }
    public function categoryManagement(){
        return view('admin/category-management');
    }
    public function dashboard(){
        return view('admin/dashboard');
    }
    public function driversRequestDetails(){
        return view('admin/drivers-request-details');
    }
    public function itemsManagement(){
        return view('admin/items-management');
    }
    public function notification(){
        return view('admin/notifications');
    }
    public function rentalLogDetails(){
        return view('admin/rental-log-details');
    }
    public function rentalLog(){
        return view('admin/rental-log');
    }
    public function saleLog(){
        return view('admin/sale-log');
    }
    public function saleLogDetails(){
        return view('admin/sale-log-details');
    }
    public function userDetails(){
        return view('admin/user-details');
    }
    public function userManagement(){
        return view('admin/users-management');
    }
    public function index(){
        return view('index');
    }
  
}
