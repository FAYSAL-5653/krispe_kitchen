<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackednController extends Controller
{
    // dashbord
    public function index()
    {
        return view('backend.index');
    }

    // user reg
    public function register(Request $request)
    {
        DB::table('users')->insert([
            "name" => "$request->user_name",
            "email" => "$request->User_email",
            "password" => "$request->User_password",
        ]);
        return 'data inser sucessfully';
    }
    public function registration()
    {
        return view('backend.registration');
    }
    // user login
    public function login()
    {
        return view('backend.login');
    }

    // for itme
    public function addItme(Request $request)
    {
        return view('backend.layout.add_itme');
    }
    public function itmeadd(Request $request)
    {
        DB::table('add_itme')->insert([
            "itemName" => "$request->itemName",
            "itemDescription" => "$request->itemDescription",
            "itemPrice" => "$request->itemPrice",
        ]);
        return redirect()->route('additme');
    }
    public function manageItme()
    {
        $additme = DB::table('add_itme')->get();
        return view('backend.layout.manage_itme', compact('additme'));
    }
    public function editItme(Request $request)
    {
        $updateitme = DB::table('add_itme')->find($request->id);
        return view('backend.layout.edit_itme', compact('updateitme'));
    }
    public function Itmeupdate(Request $request)
    {
        DB::table('add_itme')->where('id', $request->id)->update([
            'itemName' => $request->update_itme_Name,
            'itemDescription' => $request->update_itme_Description,
            'itemPrice' => $request->update_itme_Price,
        ]);

        return redirect()->route('manageitme');
    }
    public function destroyitme(Request $request)
    {
        DB::table('add_itme')->where('id', '=', $request->id)->delete();
        return back();
    }

    // for food
    public function addFood()
    {
        return view('backend.layout.add_food');
    }
    public function Foodadd(Request $request)
    {
        DB::table('add_food')->insert([
            "foodName" => "$request->FoodName",
            "foodDescription" => "$request->FoodDescription",
            "foodPrice" => "$request->FoodPrice",
        ]);
        return redirect()->route('addfood');
    }
    public function manageFood()
    {
        $addfood = DB::table('add_food')->get();
        return view('backend.layout.manage_food', compact('addfood'));
    }

    public function editfood(Request $request)
    {
        $updatefood = DB::table('add_food')->find($request->id);
        return view('backend.layout.edit_food', compact('updatefood'));
    }

    public function foodupdate(Request $request)
    {
        DB::table('add_food')->where('id', $request->id)->update([
            'foodName' => $request->update_itme_Name,
            'itemDescription' => $request->update_itme_Description,
            'itemPrice' => $request->update_itme_Price,
        ]);
        return redirect()->route('managefood');
    }

    public function destroyfood(Request $request)
    {
        DB::table('add_food')->where('id', '=', $request->id)->delete();
        return back();
    }

}
