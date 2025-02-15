@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row text-center">

                        <div class="col-sm-4">

                           <a href="/Management">
                            <img src="{{asset('image/management.png')}}" height="80",width="80">
                            Management</a>


                        </div>

                        <div class="col-sm-4">
                            <a href="/Cashier">
                            <img src="{{asset('image/cashier.png')}}" height="80",width="80">
                            Cashier</a>
                         </div>

                         <div class="col-sm-4">
                            <a href="/report">
                                <img src="{{asset('image/report.png')}}" height="80",width="80">
                             report</a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
