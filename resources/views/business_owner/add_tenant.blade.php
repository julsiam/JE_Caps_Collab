@extends('layouts.owner')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div style="margin-top:5%" class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div style="margin:1px auto" class="col-md-8">

                    <form class="row g-3 mt-4" action="{{ route('save.tenant') }}" method="POST"
                        style="border: 0.5px solid #ced4da60; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding:5px">
                        @csrf

                        <div>
                            <h3>ADD TENANT</h3>
                        </div>

                        <div class="col-md-12 p-2">
                            <div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label style="color: rgb(128, 128, 128)">Email</label>
                                        <input id="email" required style="border-color: rgb(166, 166, 166)"
                                            type="email" class="form-control" name="email">

                                        {{-- @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label style="color: rgb(128, 128, 128)">Password</label>
                                        <input style="border-color: rgb(166, 166, 166)" type="password" class="form-control"
                                            name="password">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label style="color: rgb(128, 128, 128)">Phone Number</label>
                                        <input style="border-color: rgb(166, 166, 166)" type="text" class="form-control"
                                            name="phone_number">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label style="color: rgb(128, 128, 128)">Permanent Address</label>
                                        <input style="border-color: rgb(166, 166, 166)" type="text" class="form-control"
                                            name="address">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label style="color: rgb(128, 128, 128)">First Name</label>
                                        <input style="border-color: rgb(166, 166, 166)" type="text" class="form-control"
                                            name="first_name">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label style="color: rgb(128, 128, 128)">Last Name</label>
                                        <input style="border-color: rgb(166, 166, 166)" type="text" class="form-control"
                                            name="last_name">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 p-2">
                            <div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label style="color: rgb(128, 128, 128)">Birthdate</label>
                                        <input style="border-color: rgb(166, 166, 166)" type="date" class="form-control"
                                            name="birthdate">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label style="color: rgb(128, 128, 128)">Age</label>
                                        <input style="border-color: rgb(166, 166, 166)" type="number" class="form-control"
                                            name="age">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label style="color: rgb(128, 128, 128)">Occupation</label>
                                        <input style="border-color: rgb(166, 166, 166)" type="text" class="form-control"
                                            name="occupation">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label style="color: rgb(128, 128, 128)">Work Address</label>
                                        <input style="border-color: rgb(166, 166, 166)" type="text" class="form-control"
                                            name="work_address">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 p-2">
                            <div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label style="color: rgb(128, 128, 128)">Location</label>
                                        <input style="border-color: rgb(166, 166, 166)" type="text" class="form-control"
                                            name="location">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label style="color: rgb(128, 128, 128)">Room Unit</label>
                                        <input style="border-color: rgb(166, 166, 166)" type="text" class="form-control"
                                            name="room_unit">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label style="color: rgb(128, 128, 128)">Room Rent</label>
                                        <input style="border-color: rgb(166, 166, 166)" type="text" class="form-control"
                                            name="room_rent">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label style="color: rgb(128, 128, 128)">Rent Start Date</label>
                                        <input style="border-color: rgb(166, 166, 166)" type="date"
                                            class="form-control" name="rent_start_date">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label style="color: rgb(128, 128, 128)">Due Date</label>
                                        <input style="border-color: rgb(166, 166, 166)" type="date"
                                            class="form-control" name="due_date">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="d-flex justify-content-end">
                                <button type="submit"
                                    style="cursor: pointer; margin-left: 10px; width: 100px; color: #fff;"
                                    class="btnH30 btn btn-primary">ADD</button>
                                <button type="reset"
                                    style="cursor: pointer; margin-left: 10px; width: 100px; color: #fff;"
                                    class="btnH30 btn btn-warning">CLEAR</button>


                                <a style="cursor: pointer; margin-left: 10px; width: 100px;color:#fff;"
                                    class="btnH30 btn btn-danger" onclick="history.back()">BACK
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
