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

                <div style="margin:1px auto" class="col-md-12">

                    <form class="row m-4"
                        style="border: 0.5px solid #ced4da60; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding:5px">
                        @csrf

                        {{-- <div class="col-md-6 mt-4">
                            <h4>MAINTENANCE REQUEST BY: JULS ESTORCO</h4>
                        </div>

                        <div class="col-md-6 text-end mt-4">
                            <a href="" class="btn btn btn-outline-danger me-2"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                                </svg></a>
                        </div>

                        <div class="col-md-8 p-4">
                            <div class="row">
                                <div class="form-group px-0">
                                    <label style="color: rgb(128, 128, 128)">Request Type</label>
                                    <input id="request_type" required style="border-color: rgb(166, 166, 166)"
                                        type="text" class="form-control" name="request_type" value="KISAME REPAIR">
                                </div>

                                <div class="form-group px-0">
                                    <label style="color: rgb(128, 128, 128)">Priority</label>
                                    <input style="border-color: rgb(166, 166, 166)" type="text" class="form-control"
                                        name="priority" value="HIGH">
                                </div>

                                <div class="form-group px-0 ">
                                    <label style="color: rgb(128, 128, 128)">Details</label>
                                    <input style="border-color: rgb(166, 166, 166); height:85px" type="text"
                                        class="form-control " name="details"
                                        value="I am writing to you to request for repair and maintenance of the office. I have been renting this office for (Duration – Months/ Years) since (Date/ Months). The condition of the office is very bad and needs urgent repairs. The gates are becoming rusty and the paint on the wall is also coming off. As per the rental agreement, all the repair and maintenance facilities needed on the premises are (mention as per agreement) responsibility.
                                        I kindly request you to make arrangements and fix this problem as soon as possible. I have already spoken with someone in the office who will empty the space, give you the keys and a copy of the estimated amount required for repair.">

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 p-4">
                            <div>
                                <div class="row">
                                    <div class="form-group col-md-8 mt-3">
                                        <label style="color: rgb(128, 128, 128); font-size:20px">Location: &nbsp;
                                            &nbsp;</label>
                                        <span style="border-color: rgb(166, 166, 166); font-size:20px"
                                            class="form-control-static">Danao
                                            City, Cebu</span>
                                    </div>

                                    <div class="form-group col-md-8 mt-2">
                                        <label style="color: rgb(128, 128, 128); font-size:20px">Room Unit: &nbsp;</label>
                                        <span style="border-color: rgb(166, 166, 166);  font-size:20px"
                                            class="form-control-static">RJAE001</span>
                                    </div>

                                    <div class="form-group col-md-8 mt-2">
                                        <label style="color: rgb(128, 128, 128); font-size:20px">Date Requested:
                                            &nbsp;</label>
                                        <span style="border-color: rgb(166, 166, 166); font-size:20px"
                                            class="form-control-static">03-16-02</span>
                                    </div>

                                    <div class="form-group col-md-8 mt-2">
                                        <label style="color: rgb(128, 128, 128); font-size:20px">Author: &nbsp;</label>
                                        <span style="border-color: rgb(166, 166, 166); font-size:20px"
                                            class="form-control-static">Juls
                                            Estorco</span>
                                    </div>

                                    <div class="form-group col-md-10 mt-2">
                                        <label style="color: rgb(128, 128, 128); font-size:20px" for="status">Status:
                                            &nbsp;</label>
                                        <div class="input-group">
                                            <select id="status" class="form-select form-select-sm" disabled>
                                                <option value="status">PENDING</option>
                                                <option value="status">ON GOING</option>
                                                <option value="location">DONE</option>
                                                <option value="location">DISAPPROVED</option>

                                            </select>

                                            <div class="input-group-append">
                                                <button id="editButton" class="btn btn-primary" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> --}}

                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="col-md-12">
                                    <h4 class="card-title">MAINTENANCE REQUEST BY : JULS ESTORCO</h4>
                                </div>
                            </div>

                            <div class="col-md-4 p-4">
                                <div>
                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label style="color: rgb(128, 128, 128); font-size:18px">Location: &nbsp;
                                                &nbsp;</label>
                                            <span style="border-color: rgb(166, 166, 166); font-size:18px"
                                                class="form-control-static">Danao
                                                City, Cebu</span>
                                        </div>

                                        <div class="form-group col-md-8 mt-2">
                                            <label style="color: rgb(128, 128, 128); font-size:18px">Room Unit:
                                                &nbsp;</label>
                                            <span style="border-color: rgb(166, 166, 166);  font-size:18px"
                                                class="form-control-static">RJAE001</span>
                                        </div>

                                        <div class="form-group col-md-8 mt-2">
                                            <label style="color: rgb(128, 128, 128); font-size:18px">Date Requested:
                                                &nbsp;</label>
                                            <span style="border-color: rgb(166, 166, 166); font-size:18px"
                                                class="form-control-static">03-16-02</span>
                                        </div>

                                        <div class="form-group col-md-8 mt-2">
                                            <label style="color: rgb(128, 128, 128); font-size:18px">Author: &nbsp;</label>
                                            <span style="border-color: rgb(166, 166, 166); font-size:18px"
                                                class="form-control-static">Juls
                                                Estorco</span>
                                        </div>

                                        <div class="form-group col-md-10 mt-2">
                                            <label style="color: rgb(128, 128, 128); font-size:18px"
                                                for="status">Status:
                                                &nbsp;</label>
                                            <div class="input-group">
                                                <select id="status" class="form-select form-select-sm" disabled>
                                                    <option value="status">PENDING</option>
                                                    <option value="status">ON GOING</option>
                                                    <option value="location">DONE</option>
                                                    <option value="location">DISAPPROVED</option>

                                                </select>

                                                <div class="input-group-append">
                                                    <button id="editButton" class="btn btn-primary" type="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="row card-body">
                                <label style="color: rgb(128, 128, 128)">Request Type</label>
                                <input id="request_type" required style="border-color: rgb(166, 166, 166)" type="text"
                                    class="form-control" name="request_type" value="KISAME REPAIR">
                            </div>

                            <div class="form-group px-0">
                                <label style="color: rgb(128, 128, 128)">Priority</label>
                                <input style="border-color: rgb(166, 166, 166)" type="text" class="form-control"
                                    name="priority" value="HIGH">
                            </div>

                            <div class="row card-body">
                                <label style="color: rgb(128, 128, 128)">Description</label>
                                <p class="card-text">I am writing to you to request for repair and maintenance of the
                                    office. I have been renting this office for (Duration – Months/ Years) since (Date/
                                    Months). The condition of the office is very bad and needs urgent repairs. The gates
                                    are
                                    becoming rusty and the paint on the wall is also coming off. As per the rental
                                    agreement, all the repair and maintenance facilities needed on the premises are
                                    (mention
                                    as per agreement) responsibility.
                                    I kindly request you to make arrangements and fix this problem as soon as possible.
                                    I
                                    have already spoken with someone in the office who will empty the space, give you
                                    the
                                    keys and a copy of the estimated amount required for repair.</p>
                            </div>


                            {{-- <div class="col-md-8">
                                <div class="row card-body">
                                    <label style="color: rgb(128, 128, 128)">Request Type</label>
                                    <input id="request_type" required style="border-color: rgb(166, 166, 166)"
                                        type="text" class="form-control" name="request_type" value="KISAME REPAIR">
                                </div>

                                <div class="row card-body">
                                    <label style="color: rgb(128, 128, 128)">Description</label>
                                    <p class="card-text">I am writing to you to request for repair and maintenance of the
                                        </p>
                                </div>
                            </div> --}}




                            {{-- <div class="card-footer text-muted">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <img style="width: 75px" src="{{ asset('image/gwapo1.jpg') }}" alt=""
                                            class="rounded-circle">
                                    </div>
                                    <div class="col">
                                        <h5 class="card-title">{{ $announcement->user->first_name }} {{ $announcement->user->first_name }}</h5>
                                        <p style="font-size: 14px">J and E Rentals and Property Owner</p>
                                        <p style="font-size: 12px">{{ $announcement->date_created->format('F d, Y | g:i A') }}</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>


                        <div class="col-12 mt-4">
                            <div class="d-flex justify-content-end">

                                <a href="" class="btn btn btn-outline-danger me-2"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                                    </svg>
                                </a>


                                <button type="submit"
                                    style="cursor: pointer; margin-left: 10px; width: 125px; font-size: 12px; color: #fff;"
                                    class=" btn btn-primary">UPDATE STATUS
                                </button>

                                <a style="cursor: pointer; margin-left: 10px; width: 100px; font-size: 12px; color:#fff;"
                                    class="btnH30 btn btn-danger" onclick="history.back()">BACK
                                </a>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/status.js') }}"></script> <!-- Add this line -->
@endsection
