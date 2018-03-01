<?php

namespace App\Http\Controllers;

use App\agent;
use App\blog;
use App\renter;
use Illuminate\Http\Request;
use Image;

class AgentController extends Controller
{
    
    public function index()
    {
        $datas = agent::all();
         $dataRenter = renter::all();
         $dataBlog = blog::all();
        return view('agentlogin',[
            'datas' => $datas,
            'dataRenter' => $dataRenter
        ]);
    }

    public function guestindex()
    {
        $datas = agent::all();
        $dataRenter = renter::all();
        $dataBlog = blog::all();
        return view('index',[
            'datas' => $datas,
            'dataRenter' => $dataRenter
        ]);
    }
    public function singleTrip($id)
    {
        $data = agent::find($id);
        return view('agenttripdetails',[
            'data' => $data
        ]);
    }


    public function agenttripshow(){
        $datas = agent::all();
        return view('agenttripshow',[
            'datas' => $datas
        ]);
    }
    public function create()
    {
        return view('agent.create');
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

        $agent = new agent;
        $agent->title = $request->title;
        $agent->description = $request->description;
        $agent->date = $request->date;
        $agent->cost = $request->cost;
        $agent->photo1 = '';
        $agent->photo2 = '';
        $agent->photo3 = '';
        $agent->photo4 = '';
        if($request->hasFile('photo1')){
            $photo1 = $request->file('photo1');
            $photoname1 =time().'.'.$photo1->getClientOriginalExtension();
            $location = public_path('agent/'.$photoname1);
            Image::make($photo1)->resize(800,800)->save($location);

             $agent->photo1 = $photoname1;
         }
          if($request->hasFile('photo2')){
            $photo2 = $request->file('photo2');
            $photoname2 =time().'.'.$photo2->getClientOriginalExtension();
            $location = public_path('agent/'.$photoname2);
            Image::make($photo2)->resize(800,800)->save($location);


             $agent->photo2 = $photoname2;
         }
          if($request->hasFile('photo3')){
            $photo3 = $request->file('photo3');
            $photoname3 =time().'.'.$photo3->getClientOriginalExtension();
            $location = public_path('agent/'.$photoname3);
            Image::make($photo3)->resize(800,800)->save($location);


             $agent->photo3 = $photoname3;
         }
          if($request->hasFile('photo4')){
            $photo4 = $request->file('photo4');
            $photoname4 =time().'.'.$photo4->getClientOriginalExtension();
            $location = public_path('agent/'.$photoname4);
            Image::make($photo4)->resize(800,800)->save($location);


             $agent->photo4 = $photoname4;
         }
        $agent->save();
        $datas = agent::all(); 
        return redirect()->to('agentlogin');
    }
}
