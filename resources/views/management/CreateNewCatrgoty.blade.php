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
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form action="/Management/Category" method="POST">
                    @csrf
                    <label for="">New category</label>
                    <input type="text" class="form-control" name="cat">
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
