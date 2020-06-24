<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Furniture;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chairNumberMaker = Furniture::where('status', 'available')->sum('chairNumber');

        return view('customer.index', ['maximumPax' => $chairNumberMaker]);
    }

    public function paxCounter(Request $counter)
    {
        $pax = $counter->paxNumber; // get input from user number of pax
        $loopType = 0; //loop initialize for type checking

        $getStatus = Furniture::where('status', 'available')->count(); // get total available desk
        $getTypeCount = Furniture::where('status', 'available')->groupBy('chairNumber')->count();
        $getTypeTable = Furniture::select('chairNumber')->groupBy('chairNumber')->orderBy('chairNumber', 'DESC')->where('status', 'available')->pluck('chairNumber')->toArray(); //type of table
        $getChairTotal = Furniture::where('status', 'available')->sum('chairNumber'); // get total available desk
        if ($getStatus >= 0) { //if no available desk, people will need to que
            while ($loopType < $getTypeCount) { //check between type of Table
                if ($pax >= $getTypeTable[$loopType]) {
                    $tableAssign = round($getTypeTable[$loopType] / $pax); //how many table should be prepared
                    $reminderPax = ($pax % $getTypeTable[$loopType]); //how many pax need to reseat

                } else {
                    echo 'check';
                }
                $loopType++;
            }
        } else {
            echo 'people need to que';
        }





        return view('customer.placement');
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
