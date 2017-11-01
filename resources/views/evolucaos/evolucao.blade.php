@extends('layouts.app')

@section('css')
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    @stop
    
@section('barra')
<h2>Projecto</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Projecto</a>
                        </li>
                        <li class="active">
                            <strong>Evolução</strong>
                        </li>
                    </ol>
@endsection

@section('content')

        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Histórico (Evolução do projecto)</h5>
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

                    <div class="ibox-content inspinia-timeline">

                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i>
                                    6:00 am
                                    <br/>
                                    <small class="text-navy">2 hour ago</small>
                                </div>
                                <div class="col-xs-7 content no-top-border">
                                    <p class="m-b-xs"><strong>Meeting</strong></p>

                                    <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products. Below please find the current status of the
                                        sale.</p>

                                    <p><span data-diameter="40" class="updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,4,7,3,2,9,8,7,4,5,1,2,9,5,4,7,2,7,7,3,5,2</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-file-text"></i>
                                    7:00 am
                                    <br/>
                                    <small class="text-navy">3 hour ago</small>
                                </div>
                                <div class="col-xs-7 content">
                                    <p class="m-b-xs"><strong>Send documents to Mike</strong></p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-coffee"></i>
                                    8:00 am
                                    <br/>
                                </div>
                                <div class="col-xs-7 content">
                                    <p class="m-b-xs"><strong>Coffee Break</strong></p>
                                    <p>
                                     Go to shop and find some products.
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-phone"></i>
                                    11:00 am
                                    <br/>
                                    <small class="text-navy">21 hour ago</small>
                                </div>
                                <div class="col-xs-7 content">
                                    <p class="m-b-xs"><strong>Phone with Jeronimo</strong></p>
                                    <p>
                                    Lorem Ipsum has been the industry's standard dummy text ever since.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-user-md"></i>
                                    09:00 pm
                                    <br/>
                                    <small>21 hour ago</small>
                                </div>
                                <div class="col-xs-7 content">
                                    <p class="m-b-xs"><strong>Go to the doctor dr Smith</strong></p>
                                    <p>
                                        Find some issue and go to doctor.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-user-md"></i>
                                    11:10 pm
                                </div>
                                <div class="col-xs-7 content">
                                    <p class="m-b-xs"><strong>Chat with Sandra</strong></p>
                                    <p>
                                        Lorem Ipsum has been the industry's standard dummy text ever since.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-comments"></i>
                                    12:50 pm
                                    <br/>
                                    <small class="text-navy">48 hour ago</small>
                                </div>
                                <div class="col-xs-7 content">
                                    <p class="m-b-xs"><strong>Chat with Monica and Sandra</strong></p>
                                    <p>
                                        Web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-phone"></i>
                                    08:50 pm
                                    <br/>
                                    <small class="text-navy">68 hour ago</small>
                                </div>
                                <div class="col-xs-7 content">
                                    <p class="m-b-xs"><strong>Phone to James</strong></p>
                                    <p>
                                        Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-file-text"></i>
                                    7:00 am
                                    <br/>
                                    <small class="text-navy">3 hour ago</small>
                                </div>
                                <div class="col-xs-7 content">
                                    <p class="m-b-xs"><strong>Send documents to Mike</strong></p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
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


    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Peity -->
    <script src="js/demo/peity-demo.js"></script>

@endsection
