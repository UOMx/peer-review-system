@extends('layouts.master')

@section('title')
Review Feedback
@stop

@section('content')
<div class="main_container">
    @include('includes.sidebar')
    @include('includes.top-navigation')


    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Course Title</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for student...">
                                <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
            <?php
                //this data should get from the database
            $students=array();
            array_push($students,["Tom",58,4],["Lis",78,5],["Ann",67,3],["Marry",80,5],["Fred",91,4],["Bob",92,5]);
            $size=ceil(sizeof($students)/5);
            //$tab+=1;
            ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Plain Page</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="x_content">
                                    <div id="database-fixed-header_wrapper" class="dataTables_wrapper from-inline dt-bootstrap no-footer">


                                    @for($i=0;$i<$size;$i+=1)

                                        <?php
$j=$i;
                                            $slice=array_slice($students,$i*5,$i*5+4);
                                        ?>
                                        @if($tab==$i)
                                            <div role="tabpane{{$i}}" class="tab-pane fade active in" id="tab_content{{$i}}" aria-labelledby="block1-tab">
                                        @else
                                            <div role="tabpane{{$i}}" class="tab-pane fade" id="tab_content{{$i}}" aria-labelledby="block1-tab">
                                        @endif
                                                <div class="row">


                                                <div class="col-sm-12">
                                                    <table id="datatable-fixed-header" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable-fixed-header_info">
                                                        <thead>
                                                        <tr role="row">
                                                            <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 97.2px;">Student Name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 143.2px;">Grade</th>
                                                            <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 91.2px;">Feedback Rate</th>

                                                        </tr>
                                                        </thead>

                                                        <tbody>

                                                        @foreach($slice as $student)
                                                            <tr role="row" class="odd">
                                                                <td class="">{{$student[0]}}</td>
                                                                <td>{{$student[1]}}</td>
                                                                <td>{{$student[2]}}</td>

                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            </div>
                                    @endfor
                                        <div class="row">


                                            <div class="col-sm-7">
                                                <div class="dataTables_paginate paging_simple_numbers" id="datatable-fixed-header_paginate">

                                                    <ul class="pagination">
                                                        {{--@if($tab==1)--}}
                                                            {{--<li class="paginate_button previous disabled" id="datatable-fixed-header_previous">--}}
                                                                {{--<a href="#" aria-controls="datatable-fixed-header" data-dt-idx="0" tabindex="0">Previous</a>--}}
                                                            {{--</li>--}}
                                                        {{--@else--}}
                                                            {{--<li class="paginate_button previous" id="datatable-fixed-header_previous">--}}
                                                                {{--<a href="#" aria-controls="datatable-fixed-header" data-dt-idx="0" tabindex="0">Previous</a>--}}
                                                            {{--</li>--}}
                                                        {{--@endif--}}
                                                        @for($i=0;$i<$size;$i+=1)
                                                            @if($tab==$i+1)
                                                                <li class="paginate_button active">
                                                                    <a href="#tab_content{{$i}}" aria-controls="datatable-fixed-header" data-dt-idx="{{$i+1}}" tabindex="0">{{$i+1}}</a>
                                                                </li>
                                                            @else
                                                                <li class="paginate_button">
                                                                    <a href="#tab_content{{$i}}" aria-controls="datatable-fixed-header" data-dt-idx="{{$i+1}}" tabindex="0">{{$i+1}}</a>
                                                                </li>

                                                            @endif
                                                        @endfor
                                                        {{--@if($tab==$size)--}}
                                                            {{--<li class="paginate_button next disabled" id="datatable-fixed-header_next">--}}
                                                                {{--<a href="#" aria-controls="datatable-fixed-header" data-dt-idx="7" tabindex="0">Next</a>--}}
                                                            {{--</li>--}}
                                                        {{--@else--}}
                                                            {{--<li class="paginate_button next" id="datatable-fixed-header_next">--}}
                                                                {{--<a href="#" aria-controls="datatable-fixed-header" data-dt-idx="7" tabindex="0">Next</a>--}}
                                                            {{--</li>--}}
                                                        {{--@endif--}}
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
    </div>

    @include('includes.footer')
</div>

@stop