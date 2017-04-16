{{--@extends('layouts.master')--}}

{{--@section('title')--}}
{{--Assignment--}}
{{--@stop--}}

{{--@section('custom-include')--}}
<!-- iCheck -->
<link href="gentelella-theme/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<!-- bootstrap-wysiwyg -->
<link href="gentelella-theme/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
<!-- Select2 -->
<link href="gentelella-theme/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
<!-- Switchery -->
<link href="gentelella-theme/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
<!-- starrr -->
<link href="gentelella-theme/vendors/starrr/dist/starrr.css" rel="stylesheet">
<!-- bootstrap-daterangepicker -->
<link href="gentelella-theme/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<!-- Dropzone.js -->
<link href="gentelella-theme/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">


{{--@endsection--}}
{{--@section('content')--}}
{{--<div class="main_container">--}}
{{--@include('includes.sidebar')--}}
{{--@include('includes.top-navigation')--}}
<div class="left_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="col-md-12">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab_content1" id="assignment-tab"
                                                                      role="tab" data-toggle="tab"
                                                                      aria-expanded="false">Assignment</a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="review-tab"
                                                                data-toggle="tab"
                                                                aria-expanded="false">Review</a>
                            </li>

                            <li role="presentation" class=""><a href="#tab_content4" role="tab"
                                                                id="review-tab3" data-toggle="tab"
                                                                aria-expanded="true">Rate</a>
                            </li>

                            <li role="presentation" class=""><a href="#tab_content3" role="tab"
                                                                id="review-tab2" data-toggle="tab"
                                                                aria-expanded="true">Receive Grades</a>
                            </li>
                        </ul>

                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1"
                                 aria-labelledby="assignment-tab">
                                @include('workarea.assignment_tab')

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content2"
                                 aria-labelledby="review-tab">
                                @include('workarea.review_tab')
                            </div>
                            <div role="tabpanel" class="tab-pane fade " id="tab_content3"
                                 aria-labelledby="grade-tab">
                                @include('workarea.grade_tab')
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content4"
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
{{--</div>--}}
{{--@include('includes.footer')--}}
{{--@section('custom-footer-include')--}}

<!-- bootstrap-wysiwyg -->
<script src="gentelella-theme/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="gentelella-theme/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="gentelella-theme/vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="gentelella-theme/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="gentelella-theme/vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="gentelella-theme/vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="gentelella-theme/vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="gentelella-theme/vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="gentelella-theme/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="gentelella-theme/vendors/starrr/dist/starrr.js"></script>
<!-- Dropzone.js -->
<script src="gentelella-theme/vendors/dropzone/dist/min/dropzone.min.js"></script>

{{--@endsection--}}
{{--@stop--}}