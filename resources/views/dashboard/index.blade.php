@extends('layouts.master')

@section('title')
    Dashboard | Peer Review System
@stop

@section('custom-styles')

@stop

@section('content')

    <?php
    $courses = array("Human Computer Interaction", "Signals and System", "Intelligent Systems",
            "Programming languages","Introduction to Java","Object Oriented Programming",
            "Software Architecture and Design","Advanced Networking","Differential Equations",
            "Linear Algebra","Computer Security","Applied Statistics");
    $start = array('2nd January 2017', '2nd April 2017', '23rd December 2016',
            '2nd February 2017', '22nd March 2017', '1st January 2017',
            '31st December 2016', '4th April 2017', '30th November 2016',
            '13st January 2017', '31th March 2017', '28th February 2017');
    $end = array('2nd May 2017', '2nd August 2017', '23rd April 2017',
            '2nd June 2017', '22nd July 2017', '1st May 2017',
            '30th April 2017', '4th August 2017', '10th April 2017',
            '13st May 2017', '31th August 2017', '28th June 2017');
    $assignment=array(4,3,2,5,4,3,5,1,2,3,3,4);

    ?>

    <div class="main_container">

        @include('includes.sidebar')
        @include('includes.top-navigation')

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>My Courses</h3>
                    </div>

                    {{--<div class="title_right">--}}
                        {{--<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">--}}
                            {{--<div class="input-group">--}}
                                {{--<input type="text" class="form-control" placeholder="Search for a course...">--}}
                                {{--<span class="input-group-btn">--}}
                      {{--<button class="btn btn-default" type="button">Go!</button>--}}
                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            {{--<div class="x_title">--}}
                                {{--<h2>Plain Page</h2>--}}
                                {{--<ul class="nav navbar-right panel_toolbox">--}}
                                    {{--<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="dropdown">--}}
                                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>--}}
                                        {{--<ul class="dropdown-menu" role="menu">--}}
                                            {{--<li><a href="#">Settings 1</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="#">Settings 2</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li><a class="close-link"><i class="fa fa-close"></i></a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                            <div class="x_content">
                                @for($i=0;$i<4;$i++)
                                <div class="row">

                                    <div class="col-md-12">

                                        <!-- price element -->
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="pricing">
                                                <div class="title" style="height: 80px;">
                                                    <h2>{{$courses[$i*3]}}</h2>
                                                </div>
                                                <div class="x_content">
                                                    <div class="">
                                                        <div class="pricing_features" style="min-height: 0px;">
                                                            <ul class="list-unstyled text-left">
                                                                <li><i class="fa fa-circle-o text-danger"></i> Starts on <strong>{{$start[$i*3]}}</strong></li>
                                                                <li><i class="fa fa-circle-o text-danger"></i> Ends on <strong>{{$end[$i*3]}}</strong></li>
                                                                <li><i class="fa fa-circle-o text-danger"></i> <strong>{{$assignment[$i*3]}} </strong> Assignments Available</li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="pricing_footer">

                                                        <a href="{{route('course',[$i*3])}}" class="btn btn-success btn-block" role="submit">Enroll <span> now!</span></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- price element -->
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="pricing ui-ribbon-container">
                                                <div class="ui-ribbon-wrapper">
                                                    <div class="ui-ribbon">
                                                        New
                                                    </div>
                                                </div>
                                                <div class="title" style="height: 80px;">
                                                    <h2>{{$courses[$i*3+1]}}</h2>
                                                </div>
                                                <div class="x_content">
                                                    <div class="">
                                                        <div class="pricing_features" style="min-height: 0px;">
                                                            <ul class="list-unstyled text-left">

                                                                <li><i class="fa fa-circle-o text-danger"></i> Starts on <strong> {{$start[$i*3+1]}}</strong></li>
                                                                <li><i class="fa fa-circle-o text-danger"></i> Ends on <strong>{{$end[$i*3+1]}}</strong></li>
                                                                <li><i class="fa fa-circle-o text-danger"></i> <strong>{{$assignment[$i*3+1]}} </strong> Assignments Available</li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="pricing_footer">
                                                        <a href="{{route('course',[$i*3+1])}}" class="btn btn-primary  btn-block" role="button">Enroll <span> now!</span></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- price element -->
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="pricing">
                                                <div class="title" style="height: 80px;">
                                                    <h2>{{$courses[$i*3+2]}}</h2>
                                                </div>
                                                <div class="x_content">
                                                    <div class="">
                                                        <div class="pricing_features" style="min-height: 0px;">
                                                            <ul class="list-unstyled text-left">
                                                                <li><i class="fa fa-circle-o text-danger"></i> Starts on <strong>{{$start[$i*3+2]}}</strong></li>
                                                                <li><i class="fa fa-circle-o text-danger"></i> Ends on <strong>{{$end[$i*3+2]}}</strong></li>
                                                                <li><i class="fa fa-circle-o text-danger"></i> <strong>{{$assignment[$i*3+2]}} </strong> Assignments Available</li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="pricing_footer">
                                                        <a href="{{route('course',[$i*3+2])}}" class="btn btn-success btn-block" role="button">Enroll <span> now!</span></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                    </div>
                                </div>
                                <br>
                                    <hr>
                                    <br>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        @include('includes.footer')

    </div>

@stop