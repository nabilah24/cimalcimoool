@extends('layout.masterAdmin')

@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Profile</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Profile</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>

        @foreach ($user as $user)
            @if ($user->role === 'admin')
                <div class="table-data">
                    <div class="order">
                        <form class="form-horizontal form-material mx-2">
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Full Name</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="{{ $user->name }}"
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="{{ $user->email }}""
                                        class="form-control ps-0 form-control-line" name="example-email" id="example-email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Password</label>
                                <div class="col-md-12">
                                    <input type="password" value="password" class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Phone No</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="{{ $user->phone }}"
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Message</label>
                                <div class="col-md-12">
                                    <textarea rows="5" class="form-control ps-0 form-control-line"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Select Country</label>
                                <div class="col-sm-12 border-bottom">
                                    <select class="form-select shadow-none ps-0 border-0 form-control-line">
                                        <option>Indonesia</option>
                                        <option>London</option>
                                        <option>India</option>
                                        <option>Usa</option>
                                        <option>Canada</option>
                                        <option>Thailand</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 d-flex">
                                    <button class="btn btn-success mx-auto mx-md-0 text-white">Update
                                        Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="todo">
                        <center class="mt-4"> <img src="{{ asset('assets/images/user/agent.jpg') }}"
                                class="rounded-circle" width="300" />
                            <h4 class="card-title mt-2">{{ $user->name }}</h4>
                        </center>
                    </div>
                </div>
            @endif
        @endforeach
    </main>
@endsection
