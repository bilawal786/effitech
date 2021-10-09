@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Clients</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row row-cols-1">


                <div class="col">

                    <div class="card border-top border-0 border-4 border-danger">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                                </div>
                                <h5 class="mb-0 text-danger">User Registration</h5>
                            </div>
                            <hr>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputLastName1" class="form-label">First Name</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                        <input type="text" class="form-control border-start-0" id="inputLastName1" placeholder="First Name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputLastName2" class="form-label">Last Name</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                        <input type="text" class="form-control border-start-0" id="inputLastName2" placeholder="Last Name" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputPhoneNo" class="form-label">Phone No</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-microphone' ></i></span>
                                        <input type="text" class="form-control border-start-0" id="inputPhoneNo" placeholder="Phone No" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-message' ></i></span>
                                        <input type="text" class="form-control border-start-0" id="inputEmailAddress" placeholder="Email Address" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label">Choose Password</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open' ></i></span>
                                        <input type="text" class="form-control border-start-0" id="inputChoosePassword" placeholder="Choose Password" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock' ></i></span>
                                        <input type="text" class="form-control border-start-0" id="inputConfirmPassword" placeholder="Confirm Password" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress3" class="form-label">Address</label>
                                    <textarea class="form-control" id="inputAddress3" placeholder="Enter Address" rows="3"></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2">
                                        <label class="form-check-label" for="gridCheck2">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger px-5">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
         
        </div>
    </div>
    @endsection
