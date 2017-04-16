@extends('layouts.master')

@section('title')
    Course
@stop

@section('custom-styles')

@stop

@section('content')

    <?php
    $courses = array("Human Computer Interaction", "Signals and System", "Intelligent Systems",
        "Programming languages", "Introduction to Java", "Object Oriented Programming",
        "Software Architecture and Design", "Advanced Networking", "Differential Equations",
        "Linear Algebra", "Computer Security", "Applied Statistics");
    $start = array('2nd January 2017', '2nd April 2017', '23rd December 2016',
        '2nd February 2017', '22nd March 2017', '1st January 2017',
        '31st December 2016', '4th April 2017', '30th November 2016',
        '13st January 2017', '31th March 2017', '28th February 2017');
    $end = array('2nd May 2017', '2nd August 2017', '23rd April 2017',
        '2nd June 2017', '22nd July 2017', '1st May 2017',
        '30th April 2017', '4th August 2017', '10th April 2017',
        '13st May 2017', '31th August 2017', '28th June 2017');
    $assignment = array(4, 3, 2, 5, 4, 3, 5, 1, 2, 3, 3, 4);

    ?>

    <div class="main_container">

        @include('includes.sidebar')
        @include('includes.top-navigation')
        <div class="right_col">
            <div class="x_panel">
                <div class="x_title">
                    <h1>{{$courses[$id]}}</h1>


                    <div class="clearfix"></div>
                </div>

                <div class="x_content col-sm-offset-1">
                    <h4>Starts at <strong> {{$start[$id]}}</strong></h4>
                    <h4>Ends at <strong> {{$end[$id]}}</strong></h4>
                </div>

            </div>
            <div class="x_panel">

                <div class="x_content">
                    <div class="col-xs-2">
                        <!-- required for floating -->
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-left">
                            <li class="active"><a href="#ass1" data-toggle="tab">Assignment 1</a>
                            </li>
                            @if($assignment[$id]>1)

                                @for($x=1;$x<$assignment[$id];$x++)

                                    <li><a href="#ass{{$x}}" data-toggle="tab">Assignment {{$x+1}}</a>
                                    </li>
                                @endfor
                            @endif


                        </ul>
                    </div>

                    <div class="col-xs-10">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="ass1">
                                <form class="form-horizontal form-label-left">


                                    @include('submit_assignment')


                                </form>


                            </div>
                            @if($assignment[$id]>1)

                                @for($y=1;$y<$assignment[$y];$y++)
                                    <div class="tab-pane" id="ass{{$y}}">
                                        <form class="form-horizontal form-label-left">


                                            @include('submit_assignment')


                                        </form>
                                    </div>
                                @endfor

                            @endif

                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>

            </div>

        </div>

        <p></p>
        @include('includes.footer')

    </div>

@stop