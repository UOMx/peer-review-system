
@extends('layouts.master')
@section('title')
    Dashboard | Peer Review System
@stop

@section('custom-include')


@stop

@section('content')

      <div class="main_container">
        @include('includes.sidebar')
        @include('includes.top-navigation')


        <!-- top navigation -->

        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Assignment</h3>
              </div>


            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create Assignment <small>- CS3032</small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <p>Create your assignment here.</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">Step 1<br>
                                <small>General details</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">Step 2<br>
                                <small>Description</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">Step 3<br>
                                <small>Rubric</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">Step 4<br>
                                <small>Grade</small>
                            </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                        <form class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Assignment Title <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="title" required class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="period">Assignment Period <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                             <div class="container">

                                <div class="input-prepend input-group">
                                  <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar "></i></span>
                                  <input type="text" name="reservation-time" id="reservation-time" class="form-control" required />
                                </div>

                              </div>
                            </div>


                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Extended Date <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="container">

                                    <div class="input-prepend input-group">
                                        <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar "></i></span>
                                       <input type="text" class="form-control" id="single_cal2">
                                    </div>

                                </div>
                            </div>
                          </div>
                        </form>

                      </div>
                      <div id="step-2">
                        <h2 class="StepTitle">Description</h2>
                       <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <!-- <h2>Text areas<small>Sessions</small></h2> -->
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                  <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                  </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <div id="alerts"></div>
                              <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                                <div class="btn-group">
                                  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                  <ul class="dropdown-menu">
                                  </ul>
                                </div>

                                <div class="btn-group">
                                  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                  <ul class="dropdown-menu">
                                    <li>
                                      <a data-edit="fontSize 5">
                                        <p style="font-size:17px">Huge</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a data-edit="fontSize 3">
                                        <p style="font-size:14px">Normal</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a data-edit="fontSize 1">
                                        <p style="font-size:11px">Small</p>
                                      </a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="btn-group">
                                  <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                  <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                  <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                  <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                </div>

                                <div class="btn-group">
                                  <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                  <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                  <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                  <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                                </div>

                                <div class="btn-group">
                                  <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                  <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                  <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                  <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                                </div>

                                <div class="btn-group">
                                  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                                  <div class="dropdown-menu input-append">
                                    <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                    <button class="btn" type="button">Add</button>
                                  </div>
                                  <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                                </div>

                                <div class="btn-group">
                                  <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                  <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                </div>

                                <div class="btn-group">
                                  <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                  <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                </div>
                              </div>

                              <div id="editor-one" class="editor-wrapper"></div>

                              <textarea name="descr" id="descr" style="display:none;"></textarea>

                        </div>
                        </div>
                        </div>
                      </div>
                    <div id="step-3">
                        <h2 class="StepTitle">Add Rubric</h2>
                            <div class="container  col-md-3">
                                <div class="row">
                                  <div class="container">
                                    <div class="row clearfix">
                                <div class="col-md-12 column">
                                  <table class="table table-bordered table-hover" id="tab_logic">
                                    <thead>
                                      <tr >
                                        <th class="text-center">
                                          #
                                        </th>
                                        <th class="text-center col-md-9">
                                          Rubric
                                        </th>
                                        <th class="text-center col-md-3">
                                          Mark Allocation
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr id='addr0'>
                                        <td>
                                        1
                                        </td>
                                        <td>
                                        <input type="text" name='rubric'  placeholder='Rubric name' class="form-control"/>
                                        </td>
                                        <td>
                                        <input type="text" name='mark' placeholder='Mark' class="form-control"/>
                                        </td>
                                      </tr>
                                                <tr id='addr1'></tr>
                                    </tbody>
                                  </table>
                                </div>
                                </div>
                                    <a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
                                  </div>
                                </div>
                            </div>
                          <script type="text/javascript">
                              $(document).ready(function(){

                                var i=1;
                                $("#add_row").click(function(){
                                    $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='rubric"+i+"' type='text' placeholder='Rubric name' class='form-control input-md'  /> </td><td><input  name='mark"+i+"' type='text' placeholder='Mark'  class='form-control input-md'></td>");
                                    $("#wizard"). smartWizard("fixHeight");
                                    $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
                                    i++;
                                });
                                $("#delete_row").click(function(){

                                  if(i>1){
                                    $("#addr"+(i-1)).html('');
                                    i--;
                                    }
                                    $("#wizard"). smartWizard("fixHeight");
                                });

                              });
                          </script>
                      </div>
                      <div id="step-4">
                        <!-- <h2 class="StepTitle">Grade Method</h2> -->
                        <form class="form-horizontal form-label-left">

                         <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Grade to pass <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="grade_to_pass" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                        </form>

                      </div>

                    </div>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('includes.footer')
        <!-- /footer content -->
      </div>


    <!-- FastClick -->
    <script src="gentelella-theme/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="gentelella-theme/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="gentelella-theme/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="gentelella-theme/build/js/custom.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="gentelella-theme/vendors/moment/min/moment.min.js"></script>
    <script src="gentelella-theme/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
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


 @stop
