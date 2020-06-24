<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Furniture;

class OwnerController extends Controller
{
    //authentication page
    public function authentication()
    {
        return view('owner.index');
    }
    //dashboard page with list of Furniture
    public function dashboard()
    {
        // $furniture = DB::table('furniture')->get();
        $furniture = Furniture::all();
        return view('owner.dashboard', ['furniture' => $furniture]);
    }
    //Add new furniture page
    public function upgradestore()
    {
        return view('owner.add-furni');
    }
    //save the furniture
    public function store(Request $request)
    {
        $tableNumberMaker = Furniture::max('tableNumber');
        $tableNumberMaker = $tableNumberMaker + 1;
        $count = $request->tableCount;
        $defaultStatus = "available";
        $counter = 1;
        while ($counter <= $count) {
            $furniture = new Furniture;
            $furniture->labelTable = $request->furnitureType;
            $furniture->tableNumber = $tableNumberMaker++;
            $furniture->chairNumber = $request->chair;
            $furniture->status = $defaultStatus;
            $furniture->save();
            $counter++;
        }
        return redirect('/admin/dashboard');
    }
    //delete
    public function destroy(Furniture $furniture)
    {
        return $furniture;
    }
}
