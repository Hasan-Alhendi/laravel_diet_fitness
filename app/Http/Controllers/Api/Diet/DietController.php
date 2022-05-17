<?php

namespace App\Http\Controllers\Api\Diet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Diet;
use App\Traits\GeneralTrait;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class DietController extends Controller
{
    use GeneralTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
 second
        $diet = new Diet;
        $diet->calory = $request->calory;
        $diet->model_number = $request->model_number;
        $diet->protien = $request->protien;
        $diet->carbohydrate = $request->carbohydrate;
        $diet->fats = $request->fats;
        $diet->save();

        


 server
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

            //    $diet = Diet::find($id);

            // $diet =  Diet::where('calory',$id)->get();
            $diet = Diet::with('meals')->where('calory',$id)->get();
            return $this->returnData('Diet',$diet);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }


 second




 server
}

