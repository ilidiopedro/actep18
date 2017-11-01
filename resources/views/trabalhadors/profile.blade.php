@extends('layouts.app')

@section('css')
@stop

@section('barra')
<h2>profile do utilizador</h2>
                   
@endsection

@section('content')
        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Profile Detail</h5>
                        </div>
                        <div>


                            <div class="col-md-10 col-md-offset-1">
                    <img src="/uplouds/user/{{$user->foto}}" style="height: 150px; width: 150px; float: left; border-radius: 200%; margin-left: 10px; margin-right: 7px;" alt="imagem do usuario">
                   <h2> {{$user->name}}'s profile</h2>

                   <form enctype="multipart/form-data" action="/profile" method="post">
                       <label>uploud imagem</label>
                       <input type="file" name="foto">
                       <input type="hidden" name="_token" value="{{csrf_token()}}">
                       <input type="submit" name="" class="pull-right btn btn-sm btn-primary">
                   </form>

                   <div class="form-group col-sm-12">
   
    <a href="{!! url('/home') !!}" class="btn btn-default">Cancel</a>
</div>
                   </div>
                </div>
                
                            <div class="ibox-content no-padding border-left-right">
                                <img alt="image" class="img-responsive" src="img/profile_big.jpg">
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong>Monica Smith</strong></h4>
                                <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                <h5>
                                    About me
                                </h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                                </p>
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