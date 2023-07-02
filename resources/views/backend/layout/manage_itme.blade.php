@extends('backend\master')
@section('main-contant')
    <div id="layoutSidenav">
        @include('backend.layout.nav')

        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class=" align-items-center mb-3">
                                <div class="container mt-5">
                                    <h2>Restaurant Item Management</h2>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Item Name</th>
                                                <th>Item Description</th>
                                                <th>Item Price</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if (count($additme) > 0)
                                                @foreach ($additme as $itme)
                                                    <tr>
                                                        <td>{{ $itme->id}} </td>
                                                        <td>{{ $itme->itemName }}</td>
                                                        <td>{{ $itme->itemDescription }}</td>
                                                        <td>{{ $itme->itemPrice }}</td>
                                                        <td>
                                                            <a class="btn btn-sm btn-primary" href="{{ Route('editItme',$itme->id) }}"> Edit</a>
                                                            <a class="btn btn-sm btn-danger" href="{{Route('destroyitme',$itme->id)}}"> Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="5" class="text-center">
                                                        Data not found
                                                    </td>
                                                </tr>
                                            @endif


                                            <!-- Add more rows for other items -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
        @include('backend.layout.sidnav')
    </div>
@endsection
