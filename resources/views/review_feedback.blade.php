@extends('layouts.master')

@section('title')
    Review Feedback
@stop

@section('content')
    <div class="main_container">
        @include('includes.sidebar')
        @include('includes.top-navigation')

        <div class="right_col" role="main">
            <div class="row">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Review Feedback</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for a course...">
                                <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>


                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!--Tab panel-->
                    <div class="x_panel">
                        <div class="x_content">
                            <div class role="tabpanel" data-example-id="togglable-tabs">
                                <ul id = "myTab" class = "nav nav-tabs bar-tabs" role="tablist">
                                    <!--Tab panel for 1st reviewer-->
                                    <li role="presentation" class="active in">
                                        <a href="#tab_content1" id="first-reviewer-tab" role="tab" data-toggle="tab">
                                            1st Reviewer
                                        </a>
                                    </li>
                                    <!--Tab panel for 2nd reviewer-->
                                    <li role="presentation">
                                        <a href="#tab_content2" id="second-reviewer-tab" role="tab" data-toggle="tab">
                                            2nd Reviewer
                                        </a>
                                    </li>
                                    <!--Tab panel for 3rd reviewer-->
                                    <li role="presentation">
                                        <a href="#tab_content3" id="third-reviewer-tab" role="tab" data-toggle="tab">
                                            3rd Reviewer
                                        </a>
                                    </li>
                                </ul>
                                <!--Tab content panels-->
                                <div id="myTabContent" class="tab-content">
                                    <!--Tab content for 1st reviewer-->
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="first-reviewer-tab">
                                        <div class="x_panel">
                                            <!--Assignment feedbacks-->
                                            <div class="x_content">
                                                <div class="bs-example" data-example-id="simple-jumbotron">
                                                    <div class="jumbotron">
                                                        <h3>Feedback for assignments</h3>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="pricing">
                                                                        <div class="title" style="height: 80px; padding-top: 50px">
                                                                            <h2>Assignment 1</h2>
                                                                        </div>
                                                                        <div class="x_content">
                                                                            <div class="">
                                                                                <div class="pricing_features" style="min-height: 0px;">
                                                                                    <ul class="list-unstyled text-left">
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Good work</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="pricing">
                                                                        <div class="title" style="height: 80px; padding-top: 50px">
                                                                            <h2>Assignment 1</h2>
                                                                        </div>
                                                                        <div class="x_content">
                                                                            <div class="">
                                                                                <div class="pricing_features" style="min-height: 0px;">
                                                                                    <ul class="list-unstyled text-left">
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Good work</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="pricing">
                                                                        <div class="title" style="height: 80px; padding-top: 50px">
                                                                            <h2>Assignment 1</h2>
                                                                        </div>
                                                                        <div class="x_content">
                                                                            <div class="">
                                                                                <div class="pricing_features" style="min-height: 0px;">
                                                                                    <ul class="list-unstyled text-left">
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Good work</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="pricing">
                                                                        <div class="title" style="height: 80px; padding-top: 50px">
                                                                            <h2>Assignment 1</h2>
                                                                        </div>
                                                                        <div class="x_content">
                                                                            <div class="">
                                                                                <div class="pricing_features" style="min-height: 0px;">
                                                                                    <ul class="list-unstyled text-left">
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Good work</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>
                                                                                    </ul>
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
                                        </div>
                                        <!--Feedback review-->
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <div>
                                                    <h2>Review this feedback</h2>
                                                    <i class="fa fa-star" title="very poor"></i>
                                                    <i class="fa fa-star" title="poor"></i>
                                                    <i class="fa fa-star-o" title="neutral"></i>
                                                    <i class="fa fa-star-o" title="good"></i>
                                                    <i class="fa fa-star-o" title="very good"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Concern message box-->
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <div class="jumbotron">
                                                    <p>If you have any concern of these review, please feel free to communicate.</p>
                                                    <div>
                                                        <textarea id="message" autocomplete="off" class="form-control" data-parsley-trigger="keyup">
                                                        </textarea>
                                                    </div>
                                                    <br>
                                                    <button class="btn btn-primary">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Tab content for 2nd reviewer-->
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="second-reviewer-tab">
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <div class="bs-example" data-example-id="simple-jumbotron">
                                                    <div class="jumbotron">
                                                        <h3>Feedback for assignments</h3>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="pricing">
                                                                        <div class="title" style="height: 80px; padding-top: 50px">
                                                                            <h2>Assignment 1</h2>
                                                                        </div>
                                                                        <div class="x_content">
                                                                            <div class="">
                                                                                <div class="pricing_features" style="min-height: 0px;">
                                                                                    <ul class="list-unstyled text-left">
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Good work</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="pricing">
                                                                        <div class="title" style="height: 80px; padding-top: 50px">
                                                                            <h2>Assignment 1</h2>
                                                                        </div>
                                                                        <div class="x_content">
                                                                            <div class="">
                                                                                <div class="pricing_features" style="min-height: 0px;">
                                                                                    <ul class="list-unstyled text-left">
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Good work</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="pricing">
                                                                        <div class="title" style="height: 80px; padding-top: 50px">
                                                                            <h2>Assignment 1</h2>
                                                                        </div>
                                                                        <div class="x_content">
                                                                            <div class="">
                                                                                <div class="pricing_features" style="min-height: 0px;">
                                                                                    <ul class="list-unstyled text-left">
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Good work</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="pricing">
                                                                        <div class="title" style="height: 80px; padding-top: 50px">
                                                                            <h2>Assignment 1</h2>
                                                                        </div>
                                                                        <div class="x_content">
                                                                            <div class="">
                                                                                <div class="pricing_features" style="min-height: 0px;">
                                                                                    <ul class="list-unstyled text-left">
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Good work</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>
                                                                                    </ul>
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
                                        </div>
                                        <!--Feedback review-->
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <div>
                                                    <h2>Review this feedback</h2>
                                                    <i class="fa fa-star" title="very poor"></i>
                                                    <i class="fa fa-star" title="poor"></i>
                                                    <i class="fa fa-star-o" title="neutral"></i>
                                                    <i class="fa fa-star-o" title="good"></i>
                                                    <i class="fa fa-star-o" title="very good"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Concern message box-->
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <div class="jumbotron">
                                                    <p>If you have any concern of these review, please feel free to communicate.</p>
                                                    <div>
                                                        <textarea id="message" autocomplete="off" class="form-control" data-parsley-trigger="keyup">
                                                        </textarea>
                                                    </div>
                                                    <br>
                                                    <button class="btn btn-primary">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Tab content for 3rd reviewer-->
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="third-reviewer-tab">
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <div class="bs-example" data-example-id="simple-jumbotron">
                                                    <div class="jumbotron">
                                                        <h3>Feedback for assignments</h3>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="pricing">
                                                                        <div class="title" style="height: 80px; padding-top: 50px">
                                                                            <h2>Assignment 1</h2>
                                                                        </div>
                                                                        <div class="x_content">
                                                                            <div class="">
                                                                                <div class="pricing_features" style="min-height: 0px;">
                                                                                    <ul class="list-unstyled text-left">
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Good work</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="pricing">
                                                                        <div class="title" style="height: 80px; padding-top: 50px">
                                                                            <h2>Assignment 1</h2>
                                                                        </div>
                                                                        <div class="x_content">
                                                                            <div class="">
                                                                                <div class="pricing_features" style="min-height: 0px;">
                                                                                    <ul class="list-unstyled text-left">
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Good work</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="pricing">
                                                                        <div class="title" style="height: 80px; padding-top: 50px">
                                                                            <h2>Assignment 1</h2>
                                                                        </div>
                                                                        <div class="x_content">
                                                                            <div class="">
                                                                                <div class="pricing_features" style="min-height: 0px;">
                                                                                    <ul class="list-unstyled text-left">
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Good work</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="pricing">
                                                                        <div class="title" style="height: 80px; padding-top: 50px">
                                                                            <h2>Assignment 1</h2>
                                                                        </div>
                                                                        <div class="x_content">
                                                                            <div class="">
                                                                                <div class="pricing_features" style="min-height: 0px;">
                                                                                    <ul class="list-unstyled text-left">
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Good work</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>
                                                                                        <li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>
                                                                                    </ul>
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
                                        </div>
                                        <!--Feedback review-->
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <div>
                                                    <h2>Review this feedback</h2>
                                                    <i class="fa fa-star" title="very poor"></i>
                                                    <i class="fa fa-star" title="poor"></i>
                                                    <i class="fa fa-star-o" title="neutral"></i>
                                                    <i class="fa fa-star-o" title="good"></i>
                                                    <i class="fa fa-star-o" title="very good"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Concern message box-->
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <div class="jumbotron">
                                                    <p>If you have any concern of these review, please feel free to communicate.</p>
                                                    <div>
                                                        <textarea id="message" autocomplete="off" class="form-control" data-parsley-trigger="keyup">
                                                        </textarea>
                                                    </div>
                                                    <br>
                                                    <button class="btn btn-primary">Send</button>
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
            </div>
        </div>


        @include('includes.footer')
    </div>

@stop