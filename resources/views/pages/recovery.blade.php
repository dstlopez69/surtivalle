@extends('layouts.template2')
@section('content')
<div class="auto-container ">
    <div class="content-box">
        <div class="auto-container">
            <div class="row clearfix">
                <div style="text-align:center" class="column col-md-5 col-sm-6 col-xs-12">
                    <h2> {{trans('recovery.recovery')}} </h2>
                    <!--<h2><a href="{{url('/dashboard')}}">Prueba</a></h2>-->
                    <!-- Login Form -->
                    <div class="login-form">
                        <!--Login Form-->
                        <form method="post" action=" {{url('\info')}} ">
                            <div class="form-group">
                                <label> {{trans('recovery.message')}} </label>
                                <input type="text" name="username" placeholder=" {{trans('login.writeemail')}} "
                                    required="" />
                            </div>

                            <div class="clearfix" style="text-align:center">

                                <div class="pull-right">
                                    <div class="form-group no-margin">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">
                                            {{trans('recovery.recovery')}}
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <br><br>
                                <h4 style="text-align:left">
                                    <a href="{{url('/')}}"> {{trans('login.comeback')}} </a>
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