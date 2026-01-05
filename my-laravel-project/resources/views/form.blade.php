@extends('layout.master')

@section('title', 'Form Page')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Page</h1>

    <div class="row">

        <div class="col-lg-6">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Basic Form</h6>
                </div>
                <div class="card-body">

                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail"
                                placeholder="Enter email">
                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword"
                                placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect">Example select</label>
                            <select class="form-control" id="exampleSelect">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleTextarea">Example textarea</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3"
                                placeholder="Write something..."></textarea>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Remember me</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </form>

                </div>
            </div>

        </div>

        <div class="col-lg-6">

            <!-- Another Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Input Groups</h6>
                </div>
                <div class="card-body">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username">
                        <div class="input-group-append">
                            <span class="input-group-text">@example.com</span>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Amount">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
