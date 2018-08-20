@extends('layouts.main')
@section('title', 'E-Waste Portal')
@section('body')
    @include('layouts.navbar')
    <br>
    <br>
    <div class="container">
    <!--Panel-->
    <div class="jumbotron">
        <h1 class="display-3">E-Waste Portal</h1>
        <p class="lead">
            This is a place where you can get to know about one of the major 
            problems in the modern world, E-Waste...
            <br>
            Get to know about E-Waste, connect with buyers and sellers of e-waste here.
        </p>
        <hr class="my-4">
        <p>Register as a buyer or seller to start managing your e-waste and getting into e-waste transactions</p>
        <p>Login if you already have an account</p>
        {{-- <p class="lead"> --}}
            {{-- <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Register as a Seller</a> --}}
            {{-- <a class="btn btn-primary btn-lg" href="{{ route('regBuyer') }}" role="button">Register as a Buyer</a> --}}
            {{-- <a class="btn btn-success btn-lg" href="{{ route('login') }}" role="button">Login</a> --}}
        {{-- </p> --}}
    </div>
    <div class="card">
        <div class="card-header"><h4 class="m-0">Browse our Categories</h4></div>
        <div class="card-group">
            
        </div>
    </div>
    <br>



      
    
    {{-- Add footer with laws, methods, standards and other information --}}
              
    </div>
    <!--/.Panel-->
    <hr>
    <footer class="footer">
            
        <div class="container">
                <h3 class="text-info">Site Information</h3>
            <div class="row">
                    @foreach($site_info as $info)
                    <div class="col">
                        <h4 class="pt-2 text-dark d-inline">{{$info->title}}</h4>
                        {!!$info->type == 0 ? '<kbd class="float-right bg-success">Exclusive</kbd>' : ''!!}
                        <div class="text-muted text-center py-3" style="overflow:hidden; height:120px">{{$info->description}}</div>
                        <span data-toggle="modal" data-target="#infoModal{{$info->id}}">
                        <a href="#" class="btn btn-info float-right mt-2">Read More</a>
                        </span>
                        <br>
                    </div>
                    {{-- Modal for complain/report --}}
                <div class="modal fade" id="infoModal{{$info->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Site Information / Site News</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <h3 class="text-center">{{$info->title}}</h3>
                        <p>{{$info->description}}</p>
                        </div>
                        
                    </div>
                    </div>
                </div>
              {{--  --}}
                @endforeach
            </div>
            <br>
        </div>
    </footer>
    
@endsection
       