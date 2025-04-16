<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function addNewUser(){
        return view('admin/add-new-user');
    }
    public function categoryManagement(){
        $token = session('user_token');
        if (!$token) {
            return redirect()->route('login')->with('error', 'Session expired. Please log in again.');
        }
        $response = Http::withHeaders([
            'auth-token' => $token,
        ])->get('https://localx-be20c6c46c77.herokuapp.com/api/get_main_categories');

        if ($response->successful()) {
            $catgs = $response->json();
            $catgsmain = $catgs['data'] ?? [];
            return view('admin.category-management', [
                'catgs' => $catgsmain,
            ]);
        } else {
            return view('admin.category-management')->withErrors('Failed to fetch drivers.');
        }
    }
    public function dashboard(){
        return view('admin/dashboard');
    }
    public function driversRequestDetails(){
        return view('admin/drivers-request-details');
    }
    public function itemsManagement(){
        $token = session('user_token');
        if (!$token) {
            return redirect()->route('login')->with('error', 'Session expired. Please log in again.');
        }
        $response = Http::withHeaders([
            'auth-token' => $token,
        ])->get('https://localx-be20c6c46c77.herokuapp.com/api/getProductsForRent');

        if ($response->successful()) {
            $items = $response->json();
            $itemsmain = $items['data'] ?? [];
            return view('admin.items-management', [
                'items' => $itemsmain,
            ]);
        } else {
            return view('admin.items-management')->withErrors('Failed to fetch drivers.');
        }
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
        $token = session('user_token');
        if (!$token) {
            return redirect()->route('login')->with('error', 'Session expired. Please log in again.');
        }
        $currentPage = request('page', 1);
        $response = Http::withHeaders([
            'auth-token' => $token,
        ])->get('https://localx-be20c6c46c77.herokuapp.com/api/getAllUsers', [
            'page' => $currentPage,
            'limit' => 10,
        ]);

        if ($response->successful()) {
            $users = $response->json();
            $totalPages = $users['data']['totalPages'] ?? 1;
            $users = $users['data']['users'] ?? [];

            return view('admin.users-management', [
                'users' => $users,
                'currentPage' => $currentPage,
                'totalPages' => $totalPages,
            ]);
        } else {
            return view('admin.users-management')->withErrors('Failed to fetch drivers.');
        }
    }
 
  
}
