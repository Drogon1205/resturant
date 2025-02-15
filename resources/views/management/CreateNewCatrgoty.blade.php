@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-2">
            @include('sidebar')

        </div>

        <div class="col-10">

           <div class="card">

            <div class="card-header">
                <h6>Create new Category</h6>

            </div>

            <div class="card-body">
                <form action="">

                    <label for="">New category</label>
                    <input type="text" class="form-control">
                    <br>
                    <input type="submit" class="btn btn-danger">
                </form>
            </div>
            <div class="card-footer">


            </div>

           </div>

        </div>
    </div>

</div>
@endsection
