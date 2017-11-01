@extends('layouts.app')

@section('css')


<link href="css/plugins/iCheck/custom.css" rel="stylesheet">

<link href="css/plugins/chosen/chosen.css" rel="stylesheet">

<link href="css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">

<link href="css/plugins/cropper/cropper.min.css" rel="stylesheet">

<link href="css/plugins/switchery/switchery.css" rel="stylesheet">

<link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">

<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">

<link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">


<link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
@stop

@section('barra')
<h2>Trabalhadores</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Trabalhadores</a>
                        </li>
                        <li class="active">
                            <strong>Registar</strong>
                        </li>
                    </ol>
@endsection

@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Dados Pessoais <small>do Trabalhador</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>

                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-6 b-r">
                            <form role="form">
                                <div class="form-group"><label>Nome</label> <input type="text" placeholder="Nome do Trabalhador" class="form-control"></div>
                                <div class="form-group">
                                <p><strong>Sexo</strong></p>
                                        <div class="checkbox checkbox-success checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox2" value="option1" checked="">
                                            <label for="inlineCheckbox2"> Masculino </label>
                                        </div>
                                        <div class="checkbox checkbox-success checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox2" value="option1">
                                            <label for="inlineCheckbox2"> Femenino </label>
                                        </div>
                                 </div>
                                <div class="form-group" id="data_3">
                                <label>Data de Nascimento</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="10/11/2013">
                                </div>
                            </div>

                            <div class="form-group">
                                    <label>Telefone</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" data-mask="(999) 999-9999" placeholder="">
                                        <span class="help-block">(999) 999-9999</span>
                                    </div>
                                </div>

                                <div class="form-group"><label>Endereço</label> <input type="text" placeholder="Introduza o endereço" class="form-control"></div>
                                

                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                        <h4>Preview image</h4>
                                        <div class="img-preview img-preview-sm"><img src="img/p3.jpg"></div><br>
                                        <div class="btn-group">
                                            <label title="Upload image file" for="inputImage" class="btn btn-primary">
                                                <input type="file" accept="image/*" name="file" id="inputImage" class="hide">
                                                Upload new image
                                            </label>
                                            <label title="Donload image" id="download" class="btn btn-primary">Download</label>
                                        </div>
                                </div>
                            </div>
                            
                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Gravar</strong></button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

<div class="row">
                <div class="col-lg-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Perfil do Trabalhador</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form role="form" class="form-inline">
                                <div class="form-group">
                                    <label for="exampleInputEmail2" class="sr-only">Perfil</label>
                                    <input type="text" placeholder="Perfil" id="exampleInputEmail2"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword2" class="sr-only">Descrição</label>
                                    <input type="text" placeholder="Descrição" id="exampleInputPassword2"
                                           class="form-control">
                                </div>
                                <button class="btn btn-white" type="submit">Gravar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Dados de Usuário <small>Visualizar</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="text-center">
                            <a data-toggle="modal" class="btn btn-primary" href="#modal-form">Editar Dados de Usuário</a>
                            </div>
                            <div id="modal-form" class="modal fade" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12"><h3 class="m-t-none m-b">Editar Usuário</h3>

                                <form role="form">
                                    <div class="form-group">
                                        <input value="{!! Auth::user()->name !!}" 
                                        class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input value="{!! Auth::user()->email !!}"
                                        class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" value="{!! Auth::user()->password !!}"
                                        class="form-control">
                                    </div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Editar</strong></button>
                                    </form>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
                    </div>
                </div>
            </div>
        </div>
  
@endsection

@section('scripts')

<!-- Chosen -->
<script src="{{ asset('js/plugins/chosen/chosen.jquery.js') }}"></script>

<!-- JSKnob -->
<script src="{{ asset('js/plugins/jsKnob/jquery.knob.js') }}"></script>

<!-- Input Mask-->
<script src="{{ asset('js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>

<!-- Data picker -->
<script src="{{ asset('js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

<!-- iCheck -->
<script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>

<!-- Image cropper -->
<script src="{{ asset('js/plugins/cropper/cropper.min.js') }}"></script>

<!-- Date range use moment.js same as full calendar plugin -->
<script src="{{ asset('js/plugins/fullcalendar/moment.min.js') }}"></script>

<!-- Date range picker -->
<script src="{{ asset('js/plugins/daterangepicker/daterangepicker.js') }}"></script>


<script src="{{ asset('js/trabalhador/image_croper.js') }}">
    

</script>

<script>
    $('#data_3 .input-group.date').datepicker({
            startView: 2,
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true
        });
</script>

@endsection



