@extends('layouts.dashboard')

@section('title', 'Make Profile')

@section('content')

        <div class="main-content light-text">

            <div class="justify-content-between align-items-center">
                <h3 class="h-dashboard">Update Profile</h3>
                <div class="align-in-center">
                    <a target="_blank" class="btn-dashboard mr-10" href="{{ route('profile',$userdata->username ?? '' ) }}">Preview Profile</a>
                </div>
            </div>

            <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 dashboard-card-bg p-15 mt-30 align-in-center sm_p-30">
                @if(Session::has('success'))
                    <div class="session-status">
                        {{Session::get('success')}}
                    </div>
                @endif 
                @if(Session::has('fail'))
                    <div class="session-error">
                        {{Session::get('fail')}}
                    </div>
                @endif 

                <div enctype="multipart/form-data" class="_70-width sm_full-width pt-50 pb-50 sm_pt-20 sm_pb-20">

                    <form action="{{ route('student.make-profile.store') }}" method="POST" enctype="multipart/form-data" class="flex-column">
                        @csrf
                            <div class="formField mr-10 sm_mr-0">
                                <label>Upload Photo</label>
                                <input type="file" name="photo">
                            </div>
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <span class="text-danger text-small"> @error('photo'){{ $message }} @enderror</span>
                            <input type="hidden" value="1" name="dataType">
                            <button class="btn success" type="submit">Save</button>
                        <span class="text-danger text-small"> @error('photo_path'){{ $message }} @enderror</span>
                    </form>
                    
                    <hr class="opacity-1">
                    <br>

                    <form class="flex-column" action="{{ route('student.make-profile.store') }}" method="POST">
                        @csrf
                        <div class="formField mr-10 sm_mr-0">
                            <label>Phone (WhatsApp)</label>
                            <input type="tel" name="phone" placeholder="Phone#" autocomplete="off" required  style="font-weight:800;" value="{{$userdata->phone ?? ''}}">
                        </div>
                        <label>Phone Number Visibility <span class="font-size-13 text-red">(security!) </span></label>
                        <div>
                            <label><input type="radio" name="phoneVisibility" value="1" @if($userdata->phoneVisibility == 1) checked @endif> Public</label>
                            <label><input type="radio" name="phoneVisibility" value="0" @if($userdata->phoneVisibility == 0) checked @endif> Private</label>
                        </div>
                        <span class="text-danger text-small"> @error('phone'){{ $message }} @enderror</span>
                        <span class="text-danger text-small"> @error('phoneVisibility'){{ $message }} @enderror</span>
                        <input type="hidden" value="2" name="dataType">
                        <button class="btn success" type="submit">Save</button>
                    </form>

                    <hr class="opacity-1">
                    <br>
                    <form class="flex-column" action="{{ route('student.make-profile.store') }}" method="POST">
                        @csrf
                        {{-- <div class="formField">
                            <label>Username</label>
                            <input type="text" name="username" placeholder="Username" value="{{$userdata->username ?? ''}}" required>
                        </div>
                        

                        <div class="formField mr-10 sm_mr-0">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email" disabled value="{{$userdata->email ?? ''}}" required autocomplete="off">
                        </div> --}}

                        <div class="formField">
                            <label>Password</label>
                            <input type="password" name="password" minlength="8" value="" placeholder="Password" required autocomplete="off">
                        </div>
                        <label>Profile Visibility <span class="font-size-13 text-red">(security!) </span></label>
                        <div>
                            <label><input type="radio" name="profileVisibility" value="1" @if($userdata->profileVisibility == 1) checked @endif> Public</label>
                            <label><input type="radio" name="profileVisibility" value="0" @if($userdata->profileVisibility == 0) checked @endif> Private</label>
                        </div>
                        <input type="hidden" value="3" name="dataType">
                        <button class="btn success" type="submit">Save</button>
                    </form>
                    <span class="text-danger text-small"> @error('profileVisibility'){{ $message }} @enderror</span>
                    <span class="text-danger text-small"> @error('username'){{ $message }} @enderror</span>
                    <span class="text-danger text-small"> @error('email'){{ $message }} @enderror</span>
                    <span class="text-danger text-small"> @error('password'){{ $message }} @enderror</span>

                    <hr class="opacity-1">
                    <br>

                    <form class="flex-column" action="{{ route('student.make-profile.store') }}" method="POST">
                        @csrf
                        <div class="justify-content-between sm_flex-column">
                            <div class="formField mr-10 sm_mr-0">
                                <label>First name</label>
                                <input type="text" name="firstname" placeholder="First name" value="{{$userdata->firstname ?? ''}}">
                            </div>
        
                            <div class="formField">
                                <label>Last name</label>
                                <input type="text" name="lastname" placeholder="Last name" value="{{$userdata->lastname ?? ''}}">
                            </div>
                        </div>
                        <span class="text-danger text-small"> @error('firstname'){{ $message }} @enderror</span>
                        <span class="text-danger text-small"> @error('lastname'){{ $message }} @enderror</span>

                        <div class="justify-content-between sm_flex-column">
                            <div class="formField mr-10 sm_mr-0">
                                <label>Gender</label>
                                <div class="justify-content-start">
                                    <label class="align-in-center mr-20" for="male"><input class="mr-10" type="radio" id="male" name="gender" @if($userdata->gender == 'Male') {{'checked'}} @endif value="Male"> Male</label>
                                    <label class="align-in-center mr-20" for="female"><input class="mr-10" type="radio" id="female" name="gender" @if($userdata->gender == 'Female') {{'checked'}} @endif value="Female"> Female</label>
                                    <label class="align-in-center" for="other"><input class="mr-10" type="radio" id="other" name="gender" @if($userdata->gender == 'Other') {{'checked'}} @endif  value="Other"> Other</label>
                                </div>
                            </div>
                            <div class="formField">
                                <label>Tagline</label>
                                <input type="text" name="tagline" placeholder="Tagline" value="{{$userdata->tagline ?? ''}}">
                            </div>
                        </div>
                        <span class="text-danger text-small"> @error('gender'){{ $message }} @enderror</span>
                        <span class="text-danger text-small"> @error('tagline'){{ $message }} @enderror</span>

                        <div class="justify-content-between sm_flex-column full-width">
                            <div class="form-field mr-10 sm_mr-0">
                                <label>Location</label>
                                <div class="select-container brightness-120 hover-effect mr-10 sm_mt-10 align-in-center h45" style="border: none;">
                                    <select name="location" required>
                                        <option selected disabled>Choose location</option>
                                        <option @if($userdata->location == 'Islamabad') {{'selected'}} @endif value="Islamabad">Islamabad</option>
                                        <option value="" disabled>Punjab Cities</option>
                                        <option @if($userdata->location == 'Ahmed Nager Chatha') {{'selected'}} @endif value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                                        <option @if($userdata->location == 'Ahmadpur East') {{'selected'}} @endif value="Ahmadpur East">Ahmadpur East</option>
                                        <option @if($userdata->location == 'Ali Khan Abad') {{'selected'}} @endif value="Ali Khan Abad">Ali Khan Abad</option>
                                        <option @if($userdata->location == 'Alipur') {{'selected'}} @endif value="Alipur">Alipur</option>
                                        <option @if($userdata->location == 'Arifwala') {{'selected'}} @endif value="Arifwala">Arifwala</option>
                                        <option @if($userdata->location == 'Attock') {{'selected'}} @endif value="Attock">Attock</option>
                                        <option @if($userdata->location == 'Bhera') {{'selected'}} @endif value="Bhera">Bhera</option>
                                        <option @if($userdata->location == 'Bhalwal') {{'selected'}} @endif value="Bhalwal">Bhalwal</option>
                                        <option @if($userdata->location == 'Bahawalnagar') {{'selected'}} @endif value="Bahawalnagar">Bahawalnagar</option>
                                        <option @if($userdata->location == 'Bahawalpur') {{'selected'}} @endif value="Bahawalpur">Bahawalpur</option>
                                        <option @if($userdata->location == 'Bhakkar') {{'selected'}} @endif value="Bhakkar">Bhakkar</option>
                                        <option @if($userdata->location == 'Burewala') {{'selected'}} @endif value="Burewala">Burewala</option>
                                        <option @if($userdata->location == 'Chillianwala') {{'selected'}} @endif value="Chillianwala">Chillianwala</option>
                                        <option @if($userdata->location == 'Chakwal') {{'selected'}} @endif value="Chakwal">Chakwal</option>
                                        <option @if($userdata->location == 'Chichawatni') {{'selected'}} @endif value="Chichawatni">Chichawatni</option>
                                        <option @if($userdata->location == 'Chiniot') {{'selected'}} @endif value="Chiniot">Chiniot</option>
                                        <option @if($userdata->location == 'Chishtian') {{'selected'}} @endif value="Chishtian">Chishtian</option>
                                        <option @if($userdata->location == 'Daska') {{'selected'}} @endif value="Daska">Daska</option>
                                        <option @if($userdata->location == 'Darya Khan') {{'selected'}} @endif value="Darya Khan">Darya Khan</option>
                                        <option @if($userdata->location == 'Dera Ghazi Khan') {{'selected'}} @endif value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                        <option @if($userdata->location == 'Dhaular') {{'selected'}} @endif value="Dhaular">Dhaular</option>
                                        <option @if($userdata->location == 'Dina') {{'selected'}} @endif value="Dina">Dina</option>
                                        <option @if($userdata->location == 'Dinga') {{'selected'}} @endif value="Dinga">Dinga</option>
                                        <option @if($userdata->location == 'Dipalpur') {{'selected'}} @endif value="Dipalpur">Dipalpur</option>
                                        <option @if($userdata->location == 'Faisalabad') {{'selected'}} @endif value="Faisalabad">Faisalabad</option>
                                        <option @if($userdata->location == 'Ferozewala') {{'selected'}} @endif value="Ferozewala">Ferozewala</option>
                                        <option @if($userdata->location == 'Fateh Jhang') {{'selected'}} @endif value="Fateh Jhang">Fateh Jang</option>
                                        <option @if($userdata->location == 'Ghakhar Mandi') {{'selected'}} @endif value="Ghakhar Mandi">Ghakhar Mandi</option>
                                        <option @if($userdata->location == 'Gojra') {{'selected'}} @endif value="Gojra">Gojra</option>
                                        <option @if($userdata->location == 'Gujranwala') {{'selected'}} @endif value="Gujranwala">Gujranwala</option>
                                        <option @if($userdata->location == 'Gujrat') {{'selected'}} @endif value="Gujrat">Gujrat</option>
                                        <option @if($userdata->location == 'Gujar Khan') {{'selected'}} @endif value="Gujar Khan">Gujar Khan</option>
                                        <option @if($userdata->location == 'Hafizabad') {{'selected'}} @endif value="Hafizabad">Hafizabad</option>
                                        <option @if($userdata->location == 'Haroonabad') {{'selected'}} @endif value="Haroonabad">Haroonabad</option>
                                        <option @if($userdata->location == 'Hasilpur') {{'selected'}} @endif value="Hasilpur">Hasilpur</option>
                                        <option @if($userdata->location == 'Haveli Lakha') {{'selected'}} @endif value="Haveli Lakha">Haveli Lakha</option>
                                        <option @if($userdata->location == 'Jatoi') {{'selected'}} @endif value="Jatoi">Jatoi</option>
                                        <option @if($userdata->location == 'Jalalpur') {{'selected'}} @endif value="Jalalpur">Jalalpur</option>
                                        <option @if($userdata->location == 'Jattan') {{'selected'}} @endif value="Jattan">Jattan</option>
                                        <option @if($userdata->location == 'Jampur') {{'selected'}} @endif value="Jampur">Jampur</option>
                                        <option @if($userdata->location == 'Jaranwala') {{'selected'}} @endif value="Jaranwala">Jaranwala</option>
                                        <option @if($userdata->location == 'Jhang') {{'selected'}} @endif value="Jhang">Jhang</option>
                                        <option @if($userdata->location == 'Jhelum') {{'selected'}} @endif value="Jhelum">Jhelum</option>
                                        <option @if($userdata->location == 'Kalabagh') {{'selected'}} @endif value="Kalabagh">Kalabagh</option>
                                        <option @if($userdata->location == 'Karor Lal Esan') {{'selected'}} @endif value="Karor Lal Esan">Karor Lal Esan</option>
                                        <option @if($userdata->location == 'Kasur') {{'selected'}} @endif value="Kasur">Kasur</option>
                                        <option @if($userdata->location == 'Kamalia') {{'selected'}} @endif value="Kamalia">Kamalia</option>
                                        <option @if($userdata->location == 'Kamoke') {{'selected'}} @endif value="Kamoke">Kamoke</option>
                                        <option @if($userdata->location == 'Khanewal') {{'selected'}} @endif value="Khanewal">Khanewal</option>
                                        <option @if($userdata->location == 'Khanpur') {{'selected'}} @endif value="Khanpur">Khanpur</option>
                                        <option @if($userdata->location == 'Kharian') {{'selected'}} @endif value="Kharian">Kharian</option>
                                        <option @if($userdata->location == 'Khushab') {{'selected'}} @endif value="Khushab">Khushab</option>
                                        <option @if($userdata->location == 'Kot Addu') {{'selected'}} @endif value="Kot Addu">Kot Addu</option>
                                        <option @if($userdata->location == 'Jauharabad') {{'selected'}} @endif value="Jauharabad">Jauharabad</option>
                                        <option @if($userdata->location == 'Lahore') {{'selected'}} @endif value="Lahore">Lahore</option>
                                        <option @if($userdata->location == 'Lalamusa') {{'selected'}} @endif value="Lalamusa">Lalamusa</option>
                                        <option @if($userdata->location == 'Layyah') {{'selected'}} @endif value="Layyah">Layyah</option>
                                        <option @if($userdata->location == 'Liaquat Pur') {{'selected'}} @endif value="Liaquat Pur">Liaquat Pur</option>
                                        <option @if($userdata->location == 'Lodhran') {{'selected'}} @endif value="Lodhran">Lodhran</option>
                                        <option @if($userdata->location == 'Malakwal') {{'selected'}} @endif value="Malakwal">Malakwal</option>
                                        <option @if($userdata->location == 'Mamoori') {{'selected'}} @endif value="Mamoori">Mamoori</option>
                                        <option @if($userdata->location == 'Mailsi') {{'selected'}} @endif value="Mailsi">Mailsi</option>
                                        <option @if($userdata->location == 'Mandi Bahauddin') {{'selected'}} @endif value="Mandi Bahauddin">Mandi Bahauddin</option>
                                        <option @if($userdata->location == 'Mian Channu') {{'selected'}} @endif value="Mian Channu">Mian Channu</option>
                                        <option @if($userdata->location == 'Mianwali') {{'selected'}} @endif value="Mianwali">Mianwali</option>
                                        <option @if($userdata->location == 'Multan') {{'selected'}} @endif value="Multan">Multan</option>
                                        <option @if($userdata->location == 'Murree') {{'selected'}} @endif value="Murree">Murree</option>
                                        <option @if($userdata->location == 'Muridke') {{'selected'}} @endif value="Muridke">Muridke</option>
                                        <option @if($userdata->location == 'Mianwali Bangla') {{'selected'}} @endif value="Mianwali Bangla">Mianwali Bangla</option>
                                        <option @if($userdata->location == 'Muzaffargarh') {{'selected'}} @endif value="Muzaffargarh">Muzaffargarh</option>
                                        <option @if($userdata->location == 'Narowal') {{'selected'}} @endif value="Narowal">Narowal</option>
                                        <option @if($userdata->location == 'Nankana Sahib') {{'selected'}} @endif value="Nankana Sahib">Nankana Sahib</option>
                                        <option @if($userdata->location == 'Okara') {{'selected'}} @endif value="Okara">Okara</option>
                                        <option @if($userdata->location == 'Renala Khurd') {{'selected'}} @endif value="Renala Khurd">Renala Khurd</option>
                                        <option @if($userdata->location == 'Pakpattan') {{'selected'}} @endif value="Pakpattan">Pakpattan</option>
                                        <option @if($userdata->location == 'Pattoki') {{'selected'}} @endif value="Pattoki">Pattoki</option>
                                        <option @if($userdata->location == 'Pir Mahal') {{'selected'}} @endif value="Pir Mahal">Pir Mahal</option>
                                        <option @if($userdata->location == 'Qaimpur') {{'selected'}} @endif value="Qaimpur">Qaimpur</option>
                                        <option @if($userdata->location == 'Qila Didar Singh') {{'selected'}} @endif value="Qila Didar Singh">Qila Didar Singh</option>
                                        <option @if($userdata->location == 'Rabwah') {{'selected'}} @endif value="Rabwah">Rabwah</option>
                                        <option @if($userdata->location == 'Raiwind') {{'selected'}} @endif value="Raiwind">Raiwind</option>
                                        <option @if($userdata->location == 'Rajanpur') {{'selected'}} @endif value="Rajanpur">Rajanpur</option>
                                        <option @if($userdata->location == 'Rahim Yar Khan') {{'selected'}} @endif value="Rahim Yar Khan">Rahim Yar Khan</option>
                                        <option @if($userdata->location == 'Rawalpindi') {{'selected'}} @endif value="Rawalpindi">Rawalpindi</option>
                                        <option @if($userdata->location == 'Sadiqabad') {{'selected'}} @endif value="Sadiqabad">Sadiqabad</option>
                                        <option @if($userdata->location == 'Safdarabad') {{'selected'}} @endif value="Safdarabad">Safdarabad</option>
                                        <option @if($userdata->location == 'Sahiwal') {{'selected'}} @endif value="Sahiwal">Sahiwal</option>
                                        <option @if($userdata->location == 'Sangla Hill') {{'selected'}} @endif value="Sangla Hill">Sangla Hill</option>
                                        <option @if($userdata->location == 'Sarai Alamgir') {{'selected'}} @endif value="Sarai Alamgir">Sarai Alamgir</option>
                                        <option @if($userdata->location == 'Sargodha') {{'selected'}} @endif value="Sargodha">Sargodha</option>
                                        <option @if($userdata->location == 'Shakargarh') {{'selected'}} @endif value="Shakargarh">Shakargarh</option>
                                        <option @if($userdata->location == 'Sheikhupura') {{'selected'}} @endif value="Sheikhupura">Sheikhupura</option>
                                        <option @if($userdata->location == 'Sialkot') {{'selected'}} @endif value="Sialkot">Sialkot</option>
                                        <option @if($userdata->location == 'Sohawa') {{'selected'}} @endif value="Sohawa">Sohawa</option>
                                        <option @if($userdata->location == 'Soianwala') {{'selected'}} @endif value="Soianwala">Soianwala</option>
                                        <option @if($userdata->location == 'Siranwali') {{'selected'}} @endif value="Siranwali">Siranwali</option>
                                        <option @if($userdata->location == 'Talagang') {{'selected'}} @endif value="Talagang">Talagang</option>
                                        <option @if($userdata->location == 'Taxila') {{'selected'}} @endif value="Taxila">Taxila</option>
                                        <option @if($userdata->location == 'Toba Tek Singh') {{'selected'}} @endif value="Toba Tek Singh">Toba Tek Singh</option>
                                        <option @if($userdata->location == 'Vehari') {{'selected'}} @endif value="Vehari">Vehari</option>
                                        <option @if($userdata->location == 'Wah Cantonment') {{'selected'}} @endif value="Wah Cantonment">Wah Cantonment</option>
                                        <option @if($userdata->location == 'Wazirabad') {{'selected'}} @endif value="Wazirabad">Wazirabad</option>
                                        <option value="" disabled>Sindh Cities</option>
                                        <option @if($userdata->location == 'Badin') {{'selected'}} @endif value="Badin">Badin</option>
                                        <option @if($userdata->location == 'Bhirkan') {{'selected'}} @endif value="Bhirkan">Bhirkan</option>
                                        <option @if($userdata->location == 'Rajo Khanani') {{'selected'}} @endif value="Rajo Khanani">Rajo Khanani</option>
                                        <option @if($userdata->location == 'Chak') {{'selected'}} @endif value="Chak">Chak</option>
                                        <option @if($userdata->location == 'Dadu') {{'selected'}} @endif value="Dadu">Dadu</option>
                                        <option @if($userdata->location == 'Digri') {{'selected'}} @endif value="Digri">Digri</option>
                                        <option @if($userdata->location == 'Diplo') {{'selected'}} @endif value="Diplo">Diplo</option>
                                        <option @if($userdata->location == 'Dokri') {{'selected'}} @endif value="Dokri">Dokri</option>
                                        <option @if($userdata->location == 'Ghotki') {{'selected'}} @endif value="Ghotki">Ghotki</option>
                                        <option @if($userdata->location == 'Haala') {{'selected'}} @endif value="Haala">Haala</option>
                                        <option @if($userdata->location == 'Hyderabad') {{'selected'}} @endif value="Hyderabad">Hyderabad</option>
                                        <option @if($userdata->location == 'Islamkot') {{'selected'}} @endif value="Islamkot">Islamkot</option>
                                        <option @if($userdata->location == 'Jacobabad') {{'selected'}} @endif value="Jacobabad">Jacobabad</option>
                                        <option @if($userdata->location == 'Jamshoro') {{'selected'}} @endif value="Jamshoro">Jamshoro</option>
                                        <option @if($userdata->location == 'Jungshahi') {{'selected'}} @endif value="Jungshahi">Jungshahi</option>
                                        <option @if($userdata->location == 'Kandhkot') {{'selected'}} @endif value="Kandhkot">Kandhkot</option>
                                        <option @if($userdata->location == 'Kandiaro') {{'selected'}} @endif value="Kandiaro">Kandiaro</option>
                                        <option @if($userdata->location == 'Karachi') {{'selected'}} @endif value="Karachi">Karachi</option>
                                        <option @if($userdata->location == 'Kashmore') {{'selected'}} @endif value="Kashmore">Kashmore</option>
                                        <option @if($userdata->location == 'Keti Bandar') {{'selected'}} @endif value="Keti Bandar">Keti Bandar</option>
                                        <option @if($userdata->location == 'Khairpur') {{'selected'}} @endif value="Khairpur">Khairpur</option>
                                        <option @if($userdata->location == 'Kotri') {{'selected'}} @endif value="Kotri">Kotri</option>
                                        <option @if($userdata->location == 'Larkana') {{'selected'}} @endif value="Larkana">Larkana</option>
                                        <option @if($userdata->location == 'Matiari') {{'selected'}} @endif value="Matiari">Matiari</option>
                                        <option @if($userdata->location == 'Mehar') {{'selected'}} @endif value="Mehar">Mehar</option>
                                        <option @if($userdata->location == 'Mirpur Khas') {{'selected'}} @endif value="Mirpur Khas">Mirpur Khas</option>
                                        <option @if($userdata->location == 'Mithani') {{'selected'}} @endif value="Mithani">Mithani</option>
                                        <option @if($userdata->location == 'Mithi') {{'selected'}} @endif value="Mithi">Mithi</option>
                                        <option @if($userdata->location == 'Mehrabpur') {{'selected'}} @endif value="Mehrabpur">Mehrabpur</option>
                                        <option @if($userdata->location == 'Moro') {{'selected'}} @endif value="Moro">Moro</option>
                                        <option @if($userdata->location == 'Nagarparkar') {{'selected'}} @endif value="Nagarparkar">Nagarparkar</option>
                                        <option @if($userdata->location == 'Naudero') {{'selected'}} @endif value="Naudero">Naudero</option>
                                        <option @if($userdata->location == 'Naushahro Feroze') {{'selected'}} @endif value="Naushahro Feroze">Naushahro Feroze</option>
                                        <option @if($userdata->location == 'Naushara') {{'selected'}} @endif value="Naushara">Naushara</option>
                                        <option @if($userdata->location == 'Nawabshah') {{'selected'}} @endif value="Nawabshah">Nawabshah</option>
                                        <option @if($userdata->location == 'Nazimabad') {{'selected'}} @endif value="Nazimabad">Nazimabad</option>
                                        <option @if($userdata->location == 'Qambar') {{'selected'}} @endif value="Qambar">Qambar</option>
                                        <option @if($userdata->location == 'Qasimabad') {{'selected'}} @endif value="Qasimabad">Qasimabad</option>
                                        <option @if($userdata->location == 'Ranipur') {{'selected'}} @endif value="Ranipur">Ranipur</option>
                                        <option @if($userdata->location == 'Ratodero') {{'selected'}} @endif value="Ratodero">Ratodero</option>
                                        <option @if($userdata->location == 'Rohri') {{'selected'}} @endif value="Rohri">Rohri</option>
                                        <option @if($userdata->location == 'Sakrand') {{'selected'}} @endif value="Sakrand">Sakrand</option>
                                        <option @if($userdata->location == 'Sanghar') {{'selected'}} @endif value="Sanghar">Sanghar</option>
                                        <option @if($userdata->location == 'Shahbandar') {{'selected'}} @endif value="Shahbandar">Shahbandar</option>
                                        <option @if($userdata->location == 'Shahdadkot') {{'selected'}} @endif value="Shahdadkot">Shahdadkot</option>
                                        <option @if($userdata->location == 'Shahdadpur') {{'selected'}} @endif value="Shahdadpur">Shahdadpur</option>
                                        <option @if($userdata->location == 'Shahpur Chakar') {{'selected'}} @endif value="Shahpur Chakar">Shahpur Chakar</option>
                                        <option @if($userdata->location == 'Shikarpaur') {{'selected'}} @endif value="Shikarpaur">Shikarpaur</option>
                                        <option @if($userdata->location == 'Sukkur') {{'selected'}} @endif value="Sukkur">Sukkur</option>
                                        <option @if($userdata->location == 'Tangwani') {{'selected'}} @endif value="Tangwani">Tangwani</option>
                                        <option @if($userdata->location == 'Tando Adam Khan') {{'selected'}} @endif value="Tando Adam Khan">Tando Adam Khan</option>
                                        <option @if($userdata->location == 'Tando Allahyar') {{'selected'}} @endif value="Tando Allahyar">Tando Allahyar</option>
                                        <option @if($userdata->location == 'Tando Muhammad Khan') {{'selected'}} @endif value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                        <option @if($userdata->location == 'Thatta') {{'selected'}} @endif value="Thatta">Thatta</option>
                                        <option @if($userdata->location == 'Umerkot') {{'selected'}} @endif value="Umerkot">Umerkot</option>
                                        <option @if($userdata->location == 'Warah') {{'selected'}} @endif value="Warah">Warah</option>
                                        <option value="" disabled>Khyber Cities</option>
                                        <option @if($userdata->location == 'Abbottabad') {{'selected'}} @endif value="Abbottabad">Abbottabad</option>
                                        <option @if($userdata->location == 'Adezai') {{'selected'}} @endif value="Adezai">Adezai</option>
                                        <option @if($userdata->location == 'Alpuri') {{'selected'}} @endif value="Alpuri">Alpuri</option>
                                        <option @if($userdata->location == 'Akora Khattak') {{'selected'}} @endif value="Akora Khattak">Akora Khattak</option>
                                        <option @if($userdata->location == 'Ayubia') {{'selected'}} @endif value="Ayubia">Ayubia</option>
                                        <option @if($userdata->location == 'Banda Daud Shah') {{'selected'}} @endif value="Banda Daud Shah">Banda Daud Shah</option>
                                        <option @if($userdata->location == 'Bannu') {{'selected'}} @endif value="Bannu">Bannu</option>
                                        <option @if($userdata->location == 'Batkhela') {{'selected'}} @endif value="Batkhela">Batkhela</option>
                                        <option @if($userdata->location == 'Battagram') {{'selected'}} @endif value="Battagram">Battagram</option>
                                        <option @if($userdata->location == 'Birote') {{'selected'}} @endif value="Birote">Birote</option>
                                        <option @if($userdata->location == 'Chakdara') {{'selected'}} @endif value="Chakdara">Chakdara</option>
                                        <option @if($userdata->location == 'Charsadda') {{'selected'}} @endif value="Charsadda">Charsadda</option>
                                        <option @if($userdata->location == 'Chitral') {{'selected'}} @endif value="Chitral">Chitral</option>
                                        <option @if($userdata->location == 'Daggar') {{'selected'}} @endif value="Daggar">Daggar</option>
                                        <option @if($userdata->location == 'Dargai') {{'selected'}} @endif value="Dargai">Dargai</option>
                                        <option @if($userdata->location == 'Darya Khan') {{'selected'}} @endif value="Darya Khan">Darya Khan</option>
                                        <option @if($userdata->location == 'Dera Ismail Khan') {{'selected'}} @endif value="Dera Ismail Khan">Dera Ismail Khan</option>
                                        <option @if($userdata->location == 'Doaba') {{'selected'}} @endif value="Doaba">Doaba</option>
                                        <option @if($userdata->location == 'Dir') {{'selected'}} @endif value="Dir">Dir</option>
                                        <option @if($userdata->location == 'Drosh') {{'selected'}} @endif value="Drosh">Drosh</option>
                                        <option @if($userdata->location == 'Hangu') {{'selected'}} @endif value="Hangu">Hangu</option>
                                        <option @if($userdata->location == 'Haripur') {{'selected'}} @endif value="Haripur">Haripur</option>
                                        <option @if($userdata->location == 'Karak') {{'selected'}} @endif value="Karak">Karak</option>
                                        <option @if($userdata->location == 'Kohat') {{'selected'}} @endif value="Kohat">Kohat</option>
                                        <option @if($userdata->location == 'Kulachi') {{'selected'}} @endif value="Kulachi">Kulachi</option>
                                        <option @if($userdata->location == 'Lakki Marwat') {{'selected'}} @endif value="Lakki Marwat">Lakki Marwat</option>
                                        <option @if($userdata->location == 'Latamber') {{'selected'}} @endif value="Latamber">Latamber</option>
                                        <option @if($userdata->location == 'Madyan') {{'selected'}} @endif value="Madyan">Madyan</option>
                                        <option @if($userdata->location == 'Mansehra') {{'selected'}} @endif value="Mansehra">Mansehra</option>
                                        <option @if($userdata->location == 'Mardan') {{'selected'}} @endif value="Mardan">Mardan</option>
                                        <option @if($userdata->location == 'Mastuj') {{'selected'}} @endif value="Mastuj">Mastuj</option>
                                        <option @if($userdata->location == 'Mingora') {{'selected'}} @endif value="Mingora">Mingora</option>
                                        <option @if($userdata->location == 'Nowshera') {{'selected'}} @endif value="Nowshera">Nowshera</option>
                                        <option @if($userdata->location == 'Paharpur') {{'selected'}} @endif value="Paharpur">Paharpur</option>
                                        <option @if($userdata->location == 'Pabbi') {{'selected'}} @endif value="Pabbi">Pabbi</option>
                                        <option @if($userdata->location == 'Peshawar') {{'selected'}} @endif value="Peshawar">Peshawar</option>
                                        <option @if($userdata->location == 'Saidu Sharif') {{'selected'}} @endif value="Saidu Sharif">Saidu Sharif</option>
                                        <option @if($userdata->location == 'Shorkot') {{'selected'}} @endif value="Shorkot">Shorkot</option>
                                        <option @if($userdata->location == 'Shewa Adda') {{'selected'}} @endif value="Shewa Adda">Shewa Adda</option>
                                        <option @if($userdata->location == 'Swabi') {{'selected'}} @endif value="Swabi">Swabi</option>
                                        <option @if($userdata->location == 'Swat') {{'selected'}} @endif value="Swat">Swat</option>
                                        <option @if($userdata->location == 'Tangi') {{'selected'}} @endif value="Tangi">Tangi</option>
                                        <option @if($userdata->location == 'Tank') {{'selected'}} @endif value="Tank">Tank</option>
                                        <option @if($userdata->location == 'Thall') {{'selected'}} @endif value="Thall">Thall</option>
                                        <option @if($userdata->location == 'Timergara') {{'selected'}} @endif value="Timergara">Timergara</option>
                                        <option @if($userdata->location == 'Tordher') {{'selected'}} @endif value="Tordher">Tordher</option>
                                        <option value="" disabled>Balochistan Cities</option>
                                        <option @if($userdata->location == 'Awaran') {{'selected'}} @endif value="Awaran">Awaran</option>
                                        <option @if($userdata->location == 'Barkhan') {{'selected'}} @endif value="Barkhan">Barkhan</option>
                                        <option @if($userdata->location == 'Chagai') {{'selected'}} @endif value="Chagai">Chagai</option>
                                        <option @if($userdata->location == 'Dera Bugti') {{'selected'}} @endif value="Dera Bugti">Dera Bugti</option>
                                        <option @if($userdata->location == 'Gwadar') {{'selected'}} @endif value="Gwadar">Gwadar</option>
                                        <option @if($userdata->location == 'Harnai') {{'selected'}} @endif value="Harnai">Harnai</option>
                                        <option @if($userdata->location == 'Jafarabad') {{'selected'}} @endif value="Jafarabad">Jafarabad</option>
                                        <option @if($userdata->location == 'Jhal Magsi') {{'selected'}} @endif value="Jhal Magsi">Jhal Magsi</option>
                                        <option @if($userdata->location == 'Kacchi') {{'selected'}} @endif value="Kacchi">Kacchi</option>
                                        <option @if($userdata->location == 'Kalat') {{'selected'}} @endif value="Kalat">Kalat</option>
                                        <option @if($userdata->location == 'Kech') {{'selected'}} @endif value="Kech">Kech</option>
                                        <option @if($userdata->location == 'Kharan') {{'selected'}} @endif value="Kharan">Kharan</option>
                                        <option @if($userdata->location == 'Khuzdar') {{'selected'}} @endif value="Khuzdar">Khuzdar</option>
                                        <option @if($userdata->location == 'Killa Abdullah') {{'selected'}} @endif value="Killa Abdullah">Killa Abdullah</option>
                                        <option @if($userdata->location == 'Killa Saifullah') {{'selected'}} @endif value="Killa Saifullah">Killa Saifullah</option>
                                        <option @if($userdata->location == 'Kohlu') {{'selected'}} @endif value="Kohlu">Kohlu</option>
                                        <option @if($userdata->location == 'Lasbela') {{'selected'}} @endif value="Lasbela">Lasbela</option>
                                        <option @if($userdata->location == 'Lehri') {{'selected'}} @endif value="Lehri">Lehri</option>
                                        <option @if($userdata->location == 'Loralai') {{'selected'}} @endif value="Loralai">Loralai</option>
                                        <option @if($userdata->location == 'Mastung') {{'selected'}} @endif value="Mastung">Mastung</option>
                                        <option @if($userdata->location == 'Musakhel') {{'selected'}} @endif value="Musakhel">Musakhel</option>
                                        <option @if($userdata->location == 'Nasirabad') {{'selected'}} @endif value="Nasirabad">Nasirabad</option>
                                        <option @if($userdata->location == 'Nushki') {{'selected'}} @endif value="Nushki">Nushki</option>
                                        <option @if($userdata->location == 'Panjgur') {{'selected'}} @endif value="Panjgur">Panjgur</option>
                                        <option @if($userdata->location == 'Pishin Valley') {{'selected'}} @endif value="Pishin Valley">Pishin Valley</option>
                                        <option @if($userdata->location == 'Quetta') {{'selected'}} @endif value="Quetta">Quetta</option>
                                        <option @if($userdata->location == 'Sherani') {{'selected'}} @endif value="Sherani">Sherani</option>
                                        <option @if($userdata->location == 'Sibi') {{'selected'}} @endif value="Sibi">Sibi</option>
                                        <option @if($userdata->location == 'Sohbatpur') {{'selected'}} @endif value="Sohbatpur">Sohbatpur</option>
                                        <option @if($userdata->location == 'Washuk') {{'selected'}} @endif value="Washuk">Washuk</option>
                                        <option @if($userdata->location == 'Zhob') {{'selected'}} @endif value="Zhob">Zhob</option>
                                        <option @if($userdata->location == 'Ziarat') {{'selected'}} @endif value="Ziarat">Ziarat</option>
                                    </select>
                                </div>
                            </div>
        
                            <div class="formField mr-10 sm_mr-0">
                                <label>Education</label>
                                <input type="text" name="education" placeholder="Education"  value="{{$userdata->education ?? ''}}">
                            </div>
                            
                            <div class="formField">
                                <label>Language</label>
                                <input type="text" name="language" placeholder="Language"  value="{{$userdata->language ?? ''}}">
                            </div>
                        </div>
                        <span class="text-danger text-small"> @error('location'){{ $message }} @enderror</span>
                        <span class="text-danger text-small"> @error('education'){{ $message }} @enderror</span>
                        <span class="text-danger text-small"> @error('language'){{ $message }} @enderror</span>

                        <div class="justify-content-between sm_flex-column">
                            <div class="formField">
                                <label>Description</label>
                                <textarea name="description" placeholder="Describe yourself">{{$userdata->description ?? ''}}</textarea>
                            </div>
                        </div>
                        <span class="text-danger text-small"> @error('description'){{ $message }} @enderror</span>

                        <div class="justify-content-between sm_flex-column">
                            <div class="formField">
                                <label>Skills (Separated by commas. i-e java, chemistry)</label>
                                <textarea name="skills" placeholder="Your skills">{{$userdata->skills ?? ''}}</textarea>
                            </div>
                        </div>
                        <span class="text-danger text-small"> @error('skills'){{ $message }} @enderror</span>
                        <input type="hidden" value="4" name="dataType">
                        <button class="btn success" type="submit">Save</button>
                    </form>

                </div>
            </section>
        </div>
@endsection