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
                                    <h2>Restaurant Food Management</h2>
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

                                            @if (count(  $addfood) > 0)
                                                @foreach (  $addfood as $food)
                                                    <tr>
                                                        <td>{{ $food->id}} </td>
                                                        <td>{{ $food->foodName }}</td>
                                                        <td>{{ $food->foodDescription }}</td>
                                                        <td>{{ $food->foodPrice }}</td>

                                                        <td>
                                                            <a class="btn btn-sm btn-primary" href="{{Route('editfood',$food->id)}}"> Edit</a>
                                                            <a class="btn btn-sm btn-danger" href="{{Route('destroyfood',$food->id)}}"> Delete</a>
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
