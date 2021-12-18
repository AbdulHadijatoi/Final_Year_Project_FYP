<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;

class PhotoController extends Controller
{
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
        // ensure the request has a file before we attempt anything else.

        if ($request->file('photo')) {

            $this->validate($request,[
                'photo' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            // return $request->photo;
            // Save the file locally in the storage/public/ folder under a new folder named /product
            // $request->file('photo')->store('images');
            $imageName = time().'.'.$request->photo->extension();  
            $request->photo->move(public_path('images'), $imageName);

            // $request->photo->storeAs('images');

            // Store the record, using the new file hashname which will be it's new filename identity.
            // $photo = new Images([
            //     "user_id" => $request->user_id,
            //     "file_path" => $request->
            // ]);

            // $image = new Images;
            

            // $image->user_id = $request->user_id;
            // $image->photo_path = $imageName;

            $image = images::firstOrCreate(
                ['user_id' => $request->user_id],
                ['photo_path' => $imageName]
            );

            $image->photo_path = $imageName;
            
            $image->save(); // Finally, save the record.
        }

        return back()->with('success', 'Successfully uploaded to database.');
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
