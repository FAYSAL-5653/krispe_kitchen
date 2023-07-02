@extends('backend.master')
@section('main-contant')
    <div id="layoutSidenav">
        @include('backend.layout.nav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center mt-2">
                        <div class="col-lg-10">
                            <div class="align-items-center mb-3">
                                <div class="container">
                                    <h2>Update Food</h2>
                                    <form action="{{ route('foodupdate', $updatefood->id) }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="foodName">Update Food Name</label>
                                            <input type="text" class="form-control" id="foodName" name="update_food_Name"
                                              value="{{$updatefood->foodName }}"  required>
                                        </div>
                                        <div class="form-group">
                                            <label for="foodDescription">Update Food Description</label>
                                            <textarea class="form-control" id="foodDescription" name="update_food_Description" rows="3" required>{{ $updatefood->foodDescription }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="foodPrice">Update Food Price</label>
                                            <input type="number" step="0.01" class="form-control" id="update_food_Price"
                                              value="{{$updatefood->foodPrice }}"  name="update_food_Price" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-2">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        @include('backend.layout.sidnav')
    </div>
@endsection
