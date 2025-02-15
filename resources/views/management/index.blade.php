@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-2">

            <div class="list-group">
                <a href="/Management/Category" class="list-group-item list-group-item-action">
                <img src="{{asset('image/categories.png')}}" height="20",width="20">
                Category</a>

                <a href="#" class="list-group-item list-group-item-action">
                <img src="{{asset('image/menu.png')}}" height="20",width="20">
                Menu</a>

                <a href="#" class="list-group-item list-group-item-action">
                <img src="{{asset('image/table.png')}}" height="20",width="20">
                Table</a>

                <a href="#" class="list-group-item list-group-item-action">
                <img src="{{asset('image/user.png')}}" height="20",width="20">
                    User</a>
              </div>

        </div>

        <div class="col-10">

        </div>
    </div>

</div>
@endsection
