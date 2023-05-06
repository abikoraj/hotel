@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-title rounded bg-soft-primary">
                                            <i class="bx bx-check-shield font-size-24 mb-0 text-primary"></i>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0 font-size-15">Total Rooms</h6>
                                    </div>

                                </div>
                                <div>
                                    <h4 class="mt-4 pt-1 mb-0 font-size-22">{{ $rooms }}</h4>
                                    <div class="d-flex mt-1 align-items-end overflow-hidden">
                                        <div class="flex-grow-1">
                                            <p class="text-muted mb-0 text-truncate">Total Number of Rooms</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div id="mini-1" data-colors='["#1f58c7"]' class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-title rounded bg-soft-primary">
                                            <i class="bx bx-check-shield font-size-24 mb-0 text-primary"></i>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0 font-size-15">Total Users</h6>
                                    </div>

                                </div>
                                <div>
                                    <h4 class="mt-4 pt-1 mb-0 font-size-22">{{ $users }}</h4>
                                    <div class="d-flex mt-1 align-items-end overflow-hidden">
                                        <div class="flex-grow-1">
                                            <p class="text-muted mb-0 text-truncate">Total Number of Users</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div id="mini-1" data-colors='["#1f58c7"]' class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-title rounded bg-soft-primary">
                                            <i class="bx bx-check-shield font-size-24 mb-0 text-primary"></i>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0 font-size-15">Total Services</h6>
                                    </div>

                                </div>
                                <div>
                                    <h4 class="mt-4 pt-1 mb-0 font-size-22">{{ $services }}</h4>
                                    <div class="d-flex mt-1 align-items-end overflow-hidden">
                                        <div class="flex-grow-1">
                                            <p class="text-muted mb-0 text-truncate">Total Number of Services</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div id="mini-1" data-colors='["#1f58c7"]' class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- end row -->


    </div>
@endsection
