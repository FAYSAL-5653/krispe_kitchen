@extends('backend\master')
@section('main-contant')
    <div id="layoutSidenav">
        @include('backend.layout.nav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center mt-2">
                        <div class="col-lg-10">
                            <div class=" align-Foods-center mb-3">
                                <div class="container ">
                                    <h2>Add Food</h2>
                                    <form action="{{ Route('Foodadd') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="FoodName">Food Name</label>
                                            <input type="text" class="form-control" id="FoodName" name="FoodName"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="FoodDescription">Food Description</label>
                                            <textarea class="form-control" id="FoodDescription" name="FoodDescription" rows="3" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="FoodPrice">Food Price</label>
                                            <input type="number" step="0.01" class="form-control" id="FoodPrice"
                                                name="FoodPrice" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-2">Add Food</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
        @include('backend.layout.sidnav')
    </div>
@endsection

