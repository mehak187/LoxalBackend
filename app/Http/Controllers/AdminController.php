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

        $response2 = Http::withHeaders([
            'auth-token' => $token,
        ])->get('https://localx-be20c6c46c77.herokuapp.com/api/getProductsForSale');


        if ($response->successful() && $response2->successful()) {
            $items = $response->json();
            $itemsmain = $items['data'] ?? [];

            $itemssale = $response2->json();
            $itemssalemain = $itemssale['data'] ?? [];
            return view('admin.items-management', [
                'items' => $itemsmain,
                'itemssales' => $itemssalemain,
            ]);
        } else {
            return view('admin.items-management')->withErrors('Failed to fetch drivers.');
        }
    }
    public function categoriesDetail($id){
        $token = session('user_token'); 

        if (!$token) {
            return redirect()->route('login')->withErrors('Session expired. Please log in again.');
        }
        $response = Http::withHeaders([
            'auth-token' => $token, 
        ])->get('https://localx-be20c6c46c77.herokuapp.com/api/get_main_categories');

        $response2 = Http::withHeaders([
            'auth-token' => $token,
        ])->get('https://localx-be20c6c46c77.herokuapp.com/api/get_sub_categories/' . $id);

        if ($response->successful() && $response2->successful()) {
            $catgs = $response->json();
            $allcatgs = $catgs['data'] ?? [];
            $catgDetail = collect($allcatgs)->firstWhere('_id', $id);

            $subcatg = $response2->json();
            $subcatgmain = $subcatg['data'] ?? [];
            if ($catgDetail) {
                
                return view('admin.categories-detail', [
                    'catg' => $catgDetail,
                    'subcatgs' => $subcatgmain,
                ]);
            } else {
                return redirect()->back()->withErrors('Category not found.');
            }
        } else {
            $statusCode = $response->status();
            $errorBody = $response->body();
            logger('Get Categories API Error', [
                'status' => $statusCode,
                'response' => $errorBody,
            ]);
            return redirect()->back()->withErrors('Failed to fetch drivers. API Response: ' . $errorBody);
        }
    }
    public function itemsDetail($id){
        $token = session('user_token'); 
        if (!$token) {
            return redirect()->route('login')->withErrors('Session expired. Please log in again.');
        }
        $response = Http::withHeaders([
            'auth-token' => $token, 
        ])->get('https://localx-be20c6c46c77.herokuapp.com/api/getProductsForRent');

        $response2 = Http::withHeaders([
            'auth-token' => $token,
        ])->get('https://localx-be20c6c46c77.herokuapp.com/api/getProductsForSale');

        if ($response->successful() && $response2->successful()) {
            $itemsrent = $response->json();
            $allitemsrent = $itemsrent['data'] ?? [];
            $itemRentDetail = collect($allitemsrent)->firstWhere('_id', $id);

            $itemssale = $response->json();
            $allitemssale = $itemssale['data'] ?? [];
            $itemSaleDetail = collect($allitemssale)->firstWhere('_id', $id);

            if ($itemRentDetail) {
                return view('admin.items-detail', [
                    'item' => $itemRentDetail,
                ]);
            } 
            elseif ($itemSaleDetail) {
                return view('admin.items-detail', [
                    'item' => $itemSaleDetail,
                ]);
            }
            else {
                return redirect()->back()->withErrors('Category not found.');
            }
        } else {
            $statusCode = $response->status();
            $errorBody = $response->body();
            logger('Get Categories API Error', [
                'status' => $statusCode,
                'response' => $errorBody,
            ]);
            return redirect()->back()->withErrors('Failed to fetch items. API Response: ' . $errorBody);
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
