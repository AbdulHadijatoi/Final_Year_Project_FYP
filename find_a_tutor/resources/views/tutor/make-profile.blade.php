

        <div class="main-content light-text">

            <div class="justify-content-between align-items-center">
                <h3 class="h-dashboard">Update Profile</h3>
                <div class="align-in-center">
                    <a class="btn-dashboard mr-10" href="add-course.html">View Profile</a>
                </div>
            </div>

            <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 dashboard-card-bg p-15 mt-30 align-in-center sm_p-30">
                <div class="_70-width sm_full-width pt-50 pb-50 sm_pt-20 sm_pb-20">
                    
                    <div class="justify-content-between sm_flex-column">
                        <div class="formField mr-10 sm_mr-0">
                            <label>First name</label>
                            <input type="text" name="firstname" placeholder="First name">
                        </div>
    
                        <div class="formField">
                            <label>Last name</label>
                            <input type="text" name="lastname" placeholder="Last name">
                        </div>
                    </div>

                    <div class="justify-content-between sm_flex-column">
                        <div class="form-field sm_60-width mr-10 sm_mr-0">
                            <label>Country</label>
                            <div class="select-container brightness-120 hover-effect mr-10 sm_mt-10 align-in-center h45" style="border: none;">
                                <select name="country">
                                    <option selected disabled>Choose Country</option>
                                    <option>Pakistan</option>
                                    <option>USA</option>
                                    <option>UK</option>
                                    <option>Behrain</option>
                                </select>
                            </div>
                        </div>
    
                        <div class="form-field sm_60-width mr-10 sm_mr-0">
                            <label>Province</label>
                            <div class="full-width select-container brightness-120 hover-effect mr-10 sm_mt-10 align-in-center h45" style="border: none;">
                                <select name="province">
                                    <option selected disabled>Choose Province</option>
                                    <option>Sindh</option>
                                    <option>Panjab</option>
                                    <option>Baltistan</option>
                                    <option>KPK</option>
                                </select>
                            </div>
                        </div>

                        <div class="formField">
                            <label>City</label>
                            <input type="text" name="city" placeholder="Enter city">
                        </div>
                    </div>

                    <div class="justify-content-between sm_flex-column">
                        <div class="formField mr-10 sm_mr-0">
                            <label>Gender</label>
                            <input type="text" name="gender" placeholder="Gender">
                        </div>

                        <div class="formField mr-10 sm_mr-0">
                            <label>Contact</label>
                            <input type="text" name="contact" placeholder="contact">
                        </div>
    
                        <div class="formField">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    
                    <div class="justify-content-between sm_flex-column align-items-center">
                        <div class="formField mr-10 sm_mr-0">
                            <label>Upload Photo</label>
                            <input type="file" name="photo">
                        </div>

                        <div class="formField mr-10 sm_mr-0">
                            <label>Language</label>
                            <input type="text" name="language" placeholder="Language">
                        </div>
    
                        <a class="btn-dashboard full-width green" href="add-course.html">Save</a>
                    </div>

                </div>
            </section>
        </div>
@endsection