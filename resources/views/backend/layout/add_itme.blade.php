@extends('backend\master')
@section('main-contant')
    <div id="layoutSidenav">
        @include('backend.layout.nav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center mt-2">
                        <div class="col-lg-10">
                            <div class=" align-items-center mb-3">
                                <div class="container ">
                                    <h2>Add Menu Item</h2>
                                    <form action="{{ Route('itmeadd') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="itemName">Item Name</label>
                                            <input type="text" class="form-control" id="itemName" name="itemName"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="itemDescription">Item Description</label>
                                            <textarea class="form-control" id="itemDescription" name="itemDescription" rows="3" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="itemPrice">Item Price</label>
                                            <input type="number" step="0.01" class="form-control" id="itemPrice"
                                                name="itemPrice" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-2">Add Item</button>
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
