@extends('layouts.app')

@section('css')
@stop

@section('barra')
<h2>profile do utilizador</h2>
                   
@endsection

@section('content')
        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-8 col-sm-offset-2">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
           <h5>Profile Detail</h5>
       </div> 
    <div class="ibox-content profile-content">
      <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

     <img alt="image"  src="/uplouds/users/{{$user->foto}}" style="height: 150px; width: 150px; float: left; border-radius: 200%; margin-left: 10px; margin-right: 7px;">

         <h4><strong>{{$user->name}}'s profile</strong></h4>
        <p><i class="fa fa-map-marker"></i> {{$user->email}}</p>
                 

        <form enctype="multipart/form-data" action="/profile" method="post">   
                       <input type="file" name="foto">
                       <input type="hidden" name="_token" value="{{csrf_token()}}">
                       <input type="submit" name="" class="pull-right btn btn-sm btn-primary">
                   </form>

    <a href="{!! url('/home') !!}" class="btn btn-sm btn-default">Cancel</a>

                       </div>
                    </div>
                </div>
            </div>
 
            </div>
        </div>
@endsection

@section('scripts')

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Peity -->
    <script src="js/demo/peity-demo.js"></script>

@endsection