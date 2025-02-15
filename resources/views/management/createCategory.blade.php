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
                <h6>Create Category</h6>
                <a href="/Management/Category/create" class="btn btn-primary float-right">Create category</a>
            </div>

            <div class="card-body">

            </div>
            <div class="card-footer">


            </div>

           </div>

        </div>
    </div>

</div>
@endsection
