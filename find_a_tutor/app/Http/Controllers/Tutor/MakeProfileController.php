<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Images;
use App\Models\User;
use App\Models\Tutor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MakeProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userdata = User::where('id',Auth::id())->get()->first();
        return view('tutor.make-profile',['userdata'=>$userdata]);
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
    // username email password phone firstname lastname gender tagline description education language location skills
    public function store(Request $request)
    {
        $user = User::find(Auth::id());
        
        switch ($request->dataType) {
            case 1:
                if ($request->file('photo')) {
                    $this->validate($request,[
                        'photo' => 'mimes:jpeg,bmp,png,gif,svg|max:4096' // Only allow .jpg, .bmp and .png file types.
                    ]);
                    
                    $imageName = time().'.'.$request->photo->extension();  
                    $request->photo->move(public_path('images'), $imageName);
                    $image = images::firstOrCreate(
                        ['user_id' => $request->user_id],
                        ['photo_path' => $imageName]
                    );
                    $image->photo_path = $imageName;
                    $image->save(); // Finally, save the record.
                }
                return back()->with('success', 'Successfully saved!');
            case 2:
                if($request->has('phone'))
                    $user->phone = $request->phone;
                if($request->has('phoneVisibility'))
                    $user->phoneVisibility = $request->phoneVisibility;
                $user->save();
                return back()->with('success', 'Successfully saved!');
            case 3:
                if($user->password != $request->password)
                    $this->validate($request,['password' => 'required']);
                if($user->profileVisibility != $request->profileVisibility)
                    $this->validate($request,['profileVisibility' => 'required']);
                
                if($request->has('password'))
                    $user->password = Hash::make($request->password);
                if($request->has('profileVisibility'))
                    $user->profileVisibility = $request->profileVisibility;
                $user->save();
                return back()->with('success', 'Successfully saved!');
            case 4:
                if($request->has('firstname'))
                    $user->firstname = $request->firstname;
                if($request->has('lastname'))
                    $user->lastname = $request->lastname;
                if($request->has('gender'))
                    $user->gender = $request->gender;
                if($request->has('tagline'))
                    $user->tagline = $request->tagline;
                if($request->has('description'))
                    $user->description = $request->description;
                if($request->has('education'))
                    $user->education = $request->education;
                if($request->has('language'))
                    $user->language = $request->language;
                if($request->has('location'))
                    $user->location = $request->location;
                if($request->has('skills'))
                    $user->skills = $request->skills;

                $user->save();
                return back()->with('success', 'Successfully saved!');
            default:
                return back();
        }
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
