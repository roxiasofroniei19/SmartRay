<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Xray;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use App\Models\User;
use Auth;
use File;

class XraysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Portofolio');
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
        $request->validate([

            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $imageName = time().'.'.$request->photo->extension();  
        $request->photo->move(public_path('storage/img/xrays'), $imageName);

        $xray = new Xray;

        $xray->xray_image = $imageName;
        $xray->xray_result = 0;
        $xray->user_id = Auth::id();

        $xray->save();

        return Inertia::render('Portofolio');
    }

    public function getAllXrays() {
        $xrays = Xray::where('user_id', Auth::id())->get();

        return response()->json($xrays);
    }

    public function getImage($id) {

        $xray = Xray::find($id);
        $path = storage_path() . '\\app\\public\\img\\xrays\\' . $xray->xray_image;
        $file = base64_encode(File::get($path));
        return response()->json($file);
    }

    public function storeImageResult(Request $request) {
        $xray = Xray::find($request->id);

        $xray->xray_result = $request->result;

        $xray->save();
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
