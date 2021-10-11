@extends('layouts.dashboard')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">View Students</h3>
        <div class="align-in-center">
            <div class="formField flex-row br-light-white mb-0 align-in-center mr-10">
                <img class="ml-15" src="{{ asset('assets/svg-icons/svg_search.svg') }}" width="18">
                <input class="full-width" type="text" name="username" placeholder="Username">
            </div>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 border-02 p-15 mt-30 align-in-center sm_p-30">
        <div class="_90-width sm_full-width pt-50 pb-50 sm_pt-20 sm_pb-20">
            <table class="full-width">
                <tbody>
                    <tr>
                        <td class="table-row">
                            <div>
                                <span class="initials">MU</span>
                                <div class="st-info">
                                    <label>Muhammad Usman</label>
                                    <p>Joined 21. August 2021</p>
                                </div>
                            </div>
                            <div>
                                <div class="btn-whatsapp hover-effect"><img src="{{ asset('assets/svg-icons/svg_whatsapp.svg') }}" width="24"></div>
                                <div class="btn-delete hover-effect" onclick="showElem('deleteModal');">Delete</div>
                            </div>
                        </td>
                        <td class="table-row">
                            <div>
                                <span class="initials">MU</span>
                                <div class="st-info">
                                    <label>Muhammad Usman</label>
                                    <p>Joined 21. August 2021</p>
                                </div>
                            </div>
                            <div>
                                <div class="btn-whatsapp hover-effect"><img src="{{ asset('assets/svg-icons/svg_whatsapp.svg') }}" width="24"></div>
                                <div class="btn-delete hover-effect" onclick="showElem('deleteModal');">Delete</div>
                            </div>
                        </td>
                        <td class="table-row">
                            <div>
                                <span class="initials">MU</span>
                                <div class="st-info">
                                    <label>Muhammad Usman</label>
                                    <p>Joined 21. August 2021</p>
                                </div>
                            </div>
                            <div>
                                <div class="btn-whatsapp hover-effect"><img src="{{ asset('assets/svg-icons/svg_whatsapp.svg') }}" width="24"></div>
                                <div class="btn-delete hover-effect" onclick="showElem('deleteModal');">Delete</div>
                            </div>
                        </td>
                        <td class="table-row">
                            <div>
                                <span class="initials">MU</span>
                                <div class="st-info">
                                    <label>Muhammad Usman</label>
                                    <p>Joined 21. August 2021</p>
                                </div>
                            </div>
                            <div>
                                <div class="btn-whatsapp hover-effect"><img src="{{ asset('assets/svg-icons/svg_whatsapp.svg') }}" width="24"></div>
                                <div class="btn-delete hover-effect" onclick="showElem('deleteModal');">Delete</div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection