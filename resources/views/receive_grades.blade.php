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
                <div class = "col-md-12 col-sm-12 col-xs-12">
                    <div class = "x_panel">
                        <div class="col-md-12">

                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class=""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Assignment</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Review</a>
                                    </li>
                                    <li role="presentation" class="active"><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="true">Receive Grades</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content1" aria-labelledby="home-tab">
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                                            synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                            booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content3" aria-labelledby="profile-tab">
                                        {{--<p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui--}}
                                            {{--photo booth letterpress, commodo enim craft beer mlkshk </p>--}}
                                        <table class="table table-striped jambo_table bulk_action">
                                            <thead>
                                            <tr class="headings">

                                                <th class="column-title">Description </th>
                                                <th class="column-title">Marks </th>

                                                <th class="bulk-actions" colspan="7">
                                                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr class="even pointer">

                                                <td class=" ">Content</td>
                                                <td class=" ">23</td>

                                            </tr>
                                            <tr class="odd pointer">

                                                <td class=" ">Organization</td>
                                                <td class=" ">25</td>

                                            </tr>
                                            <tr class="even pointer">

                                                <td class=" ">Relativity</td>
                                                <td class=" ">20</td>

                                            </tr>


                                            <tr class="odd pointer">

                                                <td class=" ">Total</td>
                                                <td class=" ">68</td>

                                            </tr>



                                            </tbody>
                                        </table>                                    </div>
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