@extends('layouts.template2')
@section('content')
<div class="auto-container ">
    <div class="content-box">
        <div class="auto-container">
            <div class="row clearfix">
                <div style="text-align:center" class="column col-md-5 col-sm-6 col-xs-12">
                    <h2> <a href="{{url('/dashboard')}}"> {{trans('login.login')}}</a> </h2>
                    
                    <!--<h2><a href="{{url('/dashboard')}}">Prueba</a></h2>-->
                    <!-- Login Form -->
                    <div class="login-form">
                        <!--Login Form-->
                        <form method="post" action="  ">
                            <div class="form-group">
                                <label> {{trans('login.email')}} </label>
                                <input type="text" name="username" placeholder=" {{trans('login.writeemail')}} "
                                    required="" />
                            </div>

                            <div class="form-group">
                                <label> {{trans('login.password')}} </label>
                                <input type="password" name="password" placeholder=" {{trans('login.writepass')}} "
                                    required="" />
                            </div>

                            <div class="clearfix" style="text-align:center">

                                <div class="pull-right">
                                    <div class="form-group no-margin">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">
                                            {{trans('login.login')}}
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <br><br>
                                <h4><a href="{{url('/')}}"> {{trans('login.comeback')}} </a> &nbsp &nbsp &nbsp &nbsp
                                    &nbsp &nbsp &nbsp &nbsp
                                    &nbsp &nbsp &nbsp <a href="{{url('/recovery')}}"> {{trans('login.lostpass')}} </a>
                                </h4>
                            </div>
                        </form>
                        <br>
                    </div>
                    <!--End Login Form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection