@extends('layouts.owner')


@section('content')
    <div class="container-fluid">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="m-2">
            <div class="row justify-content-center" style="margin-top:8%">
                <div class="col-md-12">
                    <h2>MAINTENANCE REQUEST</h2>
                </div>


            </div>

            <div class="row mt-4">
                <div class="col-md-6 justify-content-start">
                    <div class="input-group" style="width:30%">
                        <input type="text" class="form-control form-control-sm" placeholder="Search request">
                        <button class="btn btn-primary btn-sm" type="button">Search</button>
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-end mt-2 mt-md-0">

                    <div class="input-group" style="width:30%">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="sort-by">Sort by:</label>
                        </div>

                        <select id="sort-by" class="form-select form-select-sm">
                            <option value="status"></option>
                            <option value="status">Priority</option>
                            <option value="location">Location</option>
                        </select>
                    </div>
                </div>
            </div>



            <div class="container-fluid body-content mt-4">
                <div class="table-responsive">
                    <table id="InventoryData" class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">DATE CREATED</th>
                                <th class="text-center">AUTHOR</th>
                                <th class="text-center">TYPE</th>
                                <th class="text-center">PRIORITY</th>
                                <th class="text-center">LOCATION</th>
                                <th class="text-center">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">01</td>
                                <td class="text-center">03-16-2023</td>
                                <td class="text-center">Juls Estorco</td>
                                <td class="text-center">KISAME REPAIR</td>
                                <td class="text-center">HIGH</td>
                                <td class="text-center">CONSOLACION</td>
                                <td class="text-center">
                                    <a href="{{ url('maintenance_details') }}" style="cursor: pointer"
                                        class="btn btn-primary btn-sm">SHOW DETAILS </a>

                                    <a href="" class="btn btn-danger me-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="10" height="10" fill="currentColor" class="bi bi-trash3"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                        </svg></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">02</td>
                                <td class="text-center">03-17-2023</td>
                                <td class="text-center">Omne Pelingon</td>
                                <td class="text-center">COMFORT ROOM REPAIR</td>
                                <td class="text-center">HIGH</td>
                                <td class="text-center">CEBU CITY</td>
                                <td class="text-center">
                                    <a href="{{ url('maintenance_details') }}" style="cursor: pointer"
                                        class="btn btn-primary btn-sm">SHOW DETAILS </a>

                                    <a href="" class="btn btn-danger me-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="10" height="10" fill="currentColor" class="bi bi-trash3"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                        </svg></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">03</td>
                                <td class="text-center">03-20-2023</td>
                                <td class="text-center">Christine Martonia</td>
                                <td class="text-center">NOISY NEIGHBOR</td>
                                <td class="text-center">LOW</td>
                                <td class="text-center">DANO CITY</td>
                                <td class="text-center">
                                    <a href="{{ url('maintenance_details') }}" style="cursor: pointer"
                                        class="btn btn-primary btn-sm">SHOW DETAILS </a>

                                    <a href="" class="btn btn-danger me-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="10" height="10" fill="currentColor" class="bi bi-trash3"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                        </svg></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">04</td>
                                <td class="text-center">03-25-2023</td>
                                <td class="text-center">Hannah Cagaanan</td>
                                <td class="text-center">DOOR REPAIR</td>
                                <td class="text-center">MEDIUM</td>
                                <td class="text-center">CONSOLACION</td>
                                <td class="text-center">
                                    <a href="{{ url('maintenance_details') }}" style="cursor: pointer"
                                        class="btn btn-primary btn-sm">SHOW DETAILS </a>

                                    <a href="" class="btn btn-danger me-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="10" height="10" fill="currentColor" class="bi bi-trash3"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                        </svg></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">05</td>
                                <td class="text-center">03-30-2023</td>
                                <td class="text-center">John Doe</td>
                                <td class="text-center">BARADONG CR</td>
                                <td class="text-center">HIGH</td>
                                <td class="text-center">CEBU CITY</td>
                                <td class="text-center">
                                    <a href="{{ url('maintenance_details') }}" style="cursor: pointer"
                                        class="btn btn-primary btn-sm">SHOW DETAILS </a>

                                    <a href="" class="btn btn-danger me-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="10" height="10" fill="currentColor" class="bi bi-trash3"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                        </svg></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">06</td>
                                <td class="text-center">04-16-2023</td>
                                <td class="text-center">Jessa Sam</td>
                                <td class="text-center">CEILING REPAIR</td>
                                <td class="text-center">HIGH</td>
                                <td class="text-center">CONSOLACION</td>
                                <td class="text-center">
                                    <a href="{{ url('maintenance_details') }}" style="cursor: pointer"
                                        class="btn btn-primary btn-sm">SHOW DETAILS </a>

                                    <a href="" class="btn btn-danger me-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="10" height="10" fill="currentColor" class="bi bi-trash3"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                        </svg></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>


            <div class="col-xl-12">
                <div class="row mt-8" style=" float:left;">
                    <label class="col-form-label">Total Maintenance Request:</label>
                    <input style="width: 40%; margin-left: 30px" type="text" class="form-control" id="totalTenants"
                        disabled value="6">
                </div>

                <div class="row mt-4" style=" float:right;">
                    <a style="cursor: pointer; color:#fff;" class="btn btn-danger"
                        onclick="history.back()">BACK
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
