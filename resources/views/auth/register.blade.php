{{-- Extends layout --}}
@extends('layout.fullwidth')



{{-- Content --}}
@section('content')
<div class="col-md-6">
        
  <div class="authincation-content">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <form action="{{route('register')}}" method="POST"> 

                  

                    @csrf
                    <div class="auth-form">
                        @if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
                        <div class="text-center mb-3"> 
                           
                          <a href="{!! url('/index'); !!}"><h2 class="text-white"> Kofinance</h2></a>
                        </div>
                        <h4 class="text-center mb-4 text-white">Sign up your account</h4>
                        <form action="{!! url('/index'); !!}">
                            <div class="form-group"> 

                                <label class="mb-1 text-white"><strong>Name</strong></label>
                                <input type="text" class="form-control" placeholder="Olanrewju Kabir" name="name" value="{{old('name')}}">
                            </div>

                           
                            <div class="form-group"> 
                                <label class="mb-1 text-white"><strong>Email</strong></label>
                
                                <input type="email" class="form-control" placeholder="hello@example.com" name="email">
                            </div>
                            <div class="form-group"> 
                                
                                <label class="mb-1 text-white"><strong>Password</strong></label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group"> 
                                
                                <label class="mb-1 text-white"><strong>Confirm Password</strong></label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn bg-white text-primary btn-block">Sign me up</button>
                            </div>
                        </form>
                        <div class="new-account mt-3">
                            <p class="text-white">Already have an account? <a class="text-white" href="{!! url('/page-login'); !!}">Sign in</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection