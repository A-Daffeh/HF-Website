@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    {{ __('BELOW IS PLACEHOLDER TEXT FOR THE TABLE. THE FORM DATA IS NOT ADDED IN THE TABLE YET ') }}

                </div>
                <Table class="carTable">
          <thead> 

           
          <tr> 
            <th>Name</th> 
            <th>Phone number </th>
            <th>Email address </th> 
            <th>Reason for contact </th> 
        </thead> 
        

         <tbody> 

     
         @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->full_name }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->reason }}</td>
                                </tr>
                            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
