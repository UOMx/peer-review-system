@extends('layouts.master')

@section('title')
    Receive Grades
@stop

@section('content')
    <div class="main_container">
        @include('includes.sidebar')
        @include('includes.top-navigation')
        <div class="right_col" role="main">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="col-md-12">

                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class=""><a href="#tab_content1" id="assignment-tab"
                                                                        role="tab" data-toggle="tab"
                                                                        aria-expanded="false">Assignment</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="review-tab"
                                                                        data-toggle="tab"
                                                                        aria-expanded="false">Review</a>
                                    </li>

                                    <li role="presentation" class="active"><a href="#tab_content4" role="tab"
                                                                              id="review-tab3" data-toggle="tab"
                                                                              aria-expanded="true">Rate</a>
                                    </li>

                                    <li role="presentation" class="active"><a href="#tab_content3" role="tab"
                                                                              id="review-tab2" data-toggle="tab"
                                                                              aria-expanded="true">Receive Grades</a>
                                    </li>
                                </ul>

                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content1"
                                         aria-labelledby="assignment-tab">
                                        @include('workarea.assignment_tab')

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2"
                                         aria-labelledby="review-tab">
                                        @include('workarea.review_tab')
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content3"
                                         aria-labelledby="grade-tab">
                                        @include('workarea.grade_tab')
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content4"
                                         aria-labelledby="rate-tab">
                                        @include('workarea.rate_tab')
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
@stop