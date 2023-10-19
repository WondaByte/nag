<?php

namespace App\Http\Controllers;
use Datatables;

use Illuminate\Support\Facades\Redirect;
use App\Models\Geodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view ('admin.dashboard');
    }

    // public function viewdata()
    // {
    //     return view('admin.viewdata');
    // }

    public function addgeo()
    {
        $data=Geodata::all();
        return view('admin.addgeo',compact('data'));
        // return view('admin.addgeo'); 
        // var_dump('WONDER');
        // die;


    }

    // public function nextpage()
    // {
    //     return view('admin.nextpage');
    // }
   
    // public function specific()
    // {
    //     return view('admin.specific');
    // }
   
    // public function addview()
    // {
    //     return view('admin.add_doctor');
    // }

    public function upload(Request $request)
    {

        //validating the field for GEO DATA 
        $this->validate($request,[
        'ocode'=>'required',
        'oname'=>'required',
        'fname'=>'required',
        'telephone'=>'required',
        'region'=>'required',
        'city'=>'required',
        'locality'=>'required',
        'landmark'=>'required',
        'ctype'=>'required',
        'ovisibility'=>'required',
        'uavailable'=>'required',
        
        ]);
      
        $data = new geodata;
        // $image=$request->file;
        // $imagename=time().'.'.$image->getClientoriginalExtension();
       
        // $request->file->move('geoimage',$imagename);
        // $geodata->image=$imagename;
        $data->ocode=$request->input ('ocode');
        $data->oname=$request->input ('oname');
        $data->fname=$request->input ('fname');
        $data->telephone=$request->input ('telephone');
        $data->region=$request->input ('region');
        $data->city=$request->input ('city');
        $data->locality=$request->input ('locality');
        $data->landmark=$request->input ('landmark');
        $data->ctype=$request->ctype;
        $data->ovisibility=$request->ovisibility;
        $data->uavailable=$request->uavailable;


        $data->save();
        return redirect('addgeo')->back()->with('success','Geodata Saved and Added Successfully');

    }


    public function editgeodata(Request $request, $id)
    {
        $data = Geodata::find($id);
    
        $data->ocode=$request->ocode;
        $data->oname=$request->oname;
        $data->fname=$request->fname;
        $data->telephone=$request->telephone;
        $data->region=$request->region;
        $data->city=$request->city;
        $data->locality=$request->locality;
        $data->landmark=$request->landmark;
        $data->ctype=$request->ctype;
        $data->ovisibility=$request->ovisibility;
        $data->uavailable=$request->uavailable;
            
            // $image=$request->file;

            // if($image)
            // {
            // $imagename=time().'.'.$image->getClientOriginalExtension();
            
            // $request->file->move('geoimage',$imagename);

            // $data->image=$imagename;
            // }
            

            $data->save();

            return redirect()->back()->with('message','Geodata Details Updated Successfully');
        
        
        }


    // public function showappointment()
    // {

    //     $data=appointment::all();
    //     return view('admin.showappointment',compact('data'));
    // }


    public function approved($id)
    {
        $data=geodata::find($id);
        $data->status='approved';
        $data->save();
        return redirect()->back();
    }



    public function deleted($id)
    {
        $data=geodata::find($id);
        $data->status='deleted';
        $data->save();

        return redirect()->back();
    }

    // public function addgeoIndex()
    // {

    //     $data = geodata::all();
    //     return view('admin.addgeo',compact('data'));
    // }

    public function viewdata()
    {

        $data = geodata::all();
        return view('admin.viewdata',compact('data'));
    }

    public function deleteGeodata($id)
    {
        $data=Geodata::find($id);
        $data->delete();
        $data->save();
        return redirect()->back();
        
    }


    public function updateGeodata($id)
    {
            $data=Geodata::find($id);


        return view('admin.update_Geodata',compact('data'));
    }

}
