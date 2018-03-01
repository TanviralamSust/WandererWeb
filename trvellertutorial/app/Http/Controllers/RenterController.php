<?php

namespace App\Http\Controllers;

use App\renter;
use App\agent;
use Illuminate\Http\Request;
use Image;
class RenterController extends Controller
{
   

    public function index()
    {
        $datas = agent::all();
        $dataRenter = renter::all();

        return view('renterlogin',[
            'datas' => $datas,
            'dataRenter' => $dataRenter
        ]);
    }

    public function renterserviceshow()
    {
        $datas = renter::all();
        return view('renterserviceshow',[
            'datas' => $datas
        ]);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function singleService($id)
    {
         $data = renter::find($id);
        return view('renterservicedetails',[
            'data' => $data
        ]);
    }

   public function create()
    {
        return view('renter.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'cost' => 'required',
            'photo1' => 'required',
            'photo2' => 'required',
            'photo3' => 'required',
            'photo4' => 'required',
        ]);

        $renter = new renter;
        $renter->title = $request->title;
        $renter->description = $request->description;
        $renter->date = $request->date;
        $renter->cost = $request->cost;
        $renter->user_id = auth()->user()->id;
        // $renter->photo1 = $request->photo1;
        // $renter->photo2 = $request->photo2;
        // $renter->photo3 = $request->photo3;
        // $renter->photo4 = $request->photo4;
        if($request->hasFile('photo1')){
            $photo1 = $request->file('photo1');
            $photoname1 =time().'.'.$photo1->getClientOriginalExtension();
            $location = public_path('renter/'.$photoname1);
            Image::make($photo1)->resize(800,800)->save($location);
                  
             $renter->photo1 = $photoname1;
         }
          if($request->hasFile('photo2')){
            $photo2 = $request->file('photo2');
            $photoname2 =time().'.'.$photo2->getClientOriginalExtension();
            $location = public_path('renter/'.$photoname2);
            Image::make($photo2)->resize(800,800)->save($location);
            
           
             $renter->photo2 = $photoname2;
         }
          if($request->hasFile('photo3')){
            $photo3 = $request->file('photo3');
            $photoname3 =time().'.'.$photo3->getClientOriginalExtension();
            $location = public_path('renter/'.$photoname3);
            Image::make($photo3)->resize(800,800)->save($location);
            
           
             $renter->photo3 = $photoname3;
         }
          if($request->hasFile('photo4')){
            $photo4 = $request->file('photo4');
            $photoname4 =time().'.'.$photo4->getClientOriginalExtension();
            $location = public_path('renter/'.$photoname4);
            Image::make($photo4)->resize(800,800)->save($location);
            
           
             $renter->photo4 = $photoname4;
         }
        $renter->save();
        $datas = renter::all();
        return redirect()->to('renterlogin');
    }
}
