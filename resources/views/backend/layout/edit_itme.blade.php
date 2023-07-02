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
                                    <h2>Update Itme</h2>
                                    <form action="{{ route('Itmeupdate', $updateitme->id) }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="itmeName">Update Itme Name</label>
                                            <input type="text" class="form-control" id="foodName"
                                                name="update_itme_Name" value="{{ $updateitme->itemName }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="itmeDescription">Update Itme Description</label>
                                            <textarea class="form-control" id="itmeDescription" name="update_itme_Description" rows="3" required>{{ $updateitme->itemDescription }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="itmePrice">Update Itme Price</label>
                                            <input type="number" step="0.01" class="form-control" id="update_itme_Price"
                                                value="{{ $updateitme->itemPrice }}" name="update_itme_Price" required>
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
