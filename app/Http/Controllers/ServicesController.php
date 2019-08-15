<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->paginate(5);
        //$services = Service::all();
        //return view('admin.index',compact('services'));  
        return view('admin.index',compact('services'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $services = new Service();

        // $services->name = $request->heading;
        // $services->type = $request->description;
        // $services->price = $request->price;

    
        // if($request->hasfile('image')){
        //          $file = $request->file('image');
        //          $extension = $file->getClientOriginalExtension();
        //          $filename = time() . '.' . $extension;
        //          $file->move('/uploads/service/', $filename);
        //          $services->image = $filename;

                 
        //      } 

        //      $services->save();

        if($request->ajax())
        {
            return "True request!";
        }
             
        //return response()->json(['success'=>'Got Simple Ajax Request.']);
        //return redirect('admin')->json($services);
        //return redirect('admin/index')->with('services',$services);

        // $services->heading = $request->input('heading');
        // $services->description = $request->input('description');
        // $services->price = $request->input('price');
        
        // if($request->hasfile('image')){
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('uploads/service/', $filename);
        //     $services->image = $filename;
        // } else {
        //     return $request;
        //     $services->image = '';
        // }
        // $services->save();
        // return redirect('admin')->with('services',$services);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Service  $services
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $services = Service::find($id);
        return view('admin.show',compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Service  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = Service::find($id);
        return view('admin.edit',compact('services'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Service  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $services = Service::find($id);
        $services->heading = $request->input('heading');
        $services->description = $request->input('description');
        $services->price = $request->input('price');

        if($request ->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $time().'.'.$extension;
            $file->move('uploads/service/',$filename);
            $services->image = $filename;
        }
        $services->save();

        return redirect('admin')->with('services',$services);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Service::find($id);
        $services->delete();

        return redirect()->route('admin.index')
                        ->with('success','Product deleted successfully');
    }
}
