
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
                              <input type="text" id="title"  name="title" required class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="period">Assignment Period <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                             <div class="container">

                                <div class="input-prepend input-group">
                                  <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar "></i></span>
                                  <input type="text" name="publish_date" id="publish_date" class="form-control" required />
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
                                       <input type="text" class="form-control" id="deadline" name="deadline">
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
                        <h2 class="StepTitle">Create Rubric</h2>
                            <div class="container  col-md-3">
                                <div class="row">
                                  <div class="container">
                                    <div class="row clearfix">
                                <div class="col-md-12 column" id="rubric">
                                  <table class="table table-bordered table-hover" id="tab_logic">
                                    <thead>
                                      <tr >
                                        <th>

                                        </th>
                                        <th class="text-center col-md-9">
                                          Criteria 1
                                        </th>
                                        <th class="text-center col-md-3">
                                          Mark Allocation
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody id="addbody0">
                                      <tr>
                                        <td>

                                        </td>
                                        <td>
                                        <input type="text" name='rubric'  placeholder='Description of the criteria 1' class="form-control"/>
                                        </td>
                                        <td>
                                        {{--<input type="text" name='mark' placeholder='Mark' class="form-control"/>--}}
                                        </td>

                                      </tr>
                                      <tr>
                                          <td>Excellent</td>
                                          <td>
                                              <input type="text" name='excellent1'  placeholder='Detail of excellent' class="form-control"/>
                                          </td>
                                          <td>
                                              <input type="text" name='exmark1' placeholder='Marks for excellent' class="form-control"/>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Very good</td>
                                          <td>
                                              <input type="text" name='veryg1'  placeholder='Detail of Very good detail' class="form-control"/>
                                          </td>
                                          <td>
                                              <input type="text" name='vmark1' placeholder='Marks for very good' class="form-control"/>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Good</td>
                                          <td>
                                              <input type="text" name='good1'  placeholder='Detail of good' class="form-control"/>
                                          </td>
                                          <td>
                                              <input type="text" name='gmark1' placeholder='Marks for good' class="form-control"/>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Fair</td>
                                          <td>
                                              <input type="text" name='fair1'  placeholder='Detail of fair' class="form-control"/>
                                          </td>
                                          <td>
                                              <input type="text" name='fmark1' placeholder='Marks for fair' class="form-control"/>
                                          </td>
                                      </tr>
                                      <tr >
                                          <td>Weak</td>
                                          <td>
                                              <input type="text" name='weak1'  placeholder='Detail of Weak' class="form-control"/>
                                          </td>
                                          <td>
                                              <input type="text" name='wmark1' placeholder='Marks for weak' class="form-control"/>
                                          </td>
                                      </tr>

                                    </tbody>
                                  </table>
                                <table class="table table-bordered table-hover" id="tab_logic1">
                                    <thead>
                                    <tr id="head_1">

                                    </tr>
                                    </thead>
                                    <tbody id="addbody1" >


                                    </tbody>
                                </table>
                                </div>
                                </div>
                                    <a id="add_row" class="btn btn-default pull-left">Add New Criteria</a><a id='delete_row' class="pull-right btn btn-default">Delete criteria</a>
                                  </div>
                                </div>
                            </div>
                          <script type="text/javascript">
                              $(document).ready(function(){

                                var i=1;
                                $("#add_row").click(function(){
                                    if(i<5) {
                                        $('#head_' + i).html("<th></th><th class='text-center col-md-9'>Criteria " + (i + 1) + "</th><th class='text-center col-md-3'>Mark Allocation</th>");
                                        $('#addbody' + i).html("<tr><td></td><td><input name='rubric" + i + "' type='text' placeholder='Description of the criteria " + (i + 1) + "' class='form-control input-md'  /> </td><td></td></th>" +
                                                "<tr><td>Excellent</td><td><input type='text' name='excellent" + (i + 1) + "'  placeholder='Detail of excellent' class='form-control'/></td><td><input type='text' name='exmark" + (i + 1) + "' placeholder='Marks for excellent' class='form-control'/></td></tr>" +
                                                "<tr><td>Very Good</td><td><input type='text' name='verygood" + (i + 1) + "'  placeholder='Detail of very good' class='form-control'/></td><td><input type='text' name='vgmark" + (i + 1) + "' placeholder='Marks for very good' class='form-control'/></td></tr>" +
                                                "<tr><td>Good</td><td><input type='text' name='good" + (i + 1) + "'  placeholder='Detail of good' class='form-control'/></td><td><input type='text' name='gmark" + (i + 1) + "' placeholder='Marks for good' class='form-control'/></td></tr>" +
                                                "<tr><td>Fair</td><td><input type='text' name='fair" + (i + 1) + "'  placeholder='Detail of fair' class='form-control'/></td><td><input type='text' name='fmark" + (i + 1) + "' placeholder='Marks for fair' class='form-control'/></td></tr>" +
                                                "<tr><td>Weak</td><td><input type='text' name='weak" + (i + 1) + "'  placeholder='Detail of weak' class='form-control'/></td><td><input type='text' name='wxmark" + (i + 1) + "' placeholder='Marks for weak' class='form-control'/></td></tr>");


                                        $("#wizard").smartWizard("fixHeight");
//
                                        $('#rubric').append('<table class="table table-bordered table-hover" id="tab_logic' + (i + 1) + '">' +

                                                '<thead><tr id="head_' + (i + 1) + '"></tr></thead><tbody id="addbody' + (i + 1) + '" ></tbody></table>');


                                        i++;
                                    }
                                });
                                $("#delete_row").click(function(){

                                  if(i>1){
                                    $("#tab_logic"+(i-1)).html(null);

                                    i--;
                                      $('#rubric').append('<br><table class="table table-bordered table-hover" id="tab_logic' + (i) + '">' +

                                              '<thead><tr id="head_' + (i) + '"></tr></thead><tbody id="addbody' + (i) + '" ></tbody></table>');

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

    <script src="{{URL::asset('gentelella-theme/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{URL::asset('gentelella-theme/vendors/nprogress/nprogress.js')}}"></script>
    <!-- jQuery Smart Wizard -->
    <script src="{{URL::asset('gentelella-theme/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src=" {{URL::asset('gentelella-theme/build/js/custom.min.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{URL::asset('gentelella-theme/vendors/moment/min/moment.min.js')}}"></script>
    <script src=" {{URL::asset('gentelella-theme/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src=" {{URL::asset('gentelella-theme/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
    <script src="{{URL::asset('gentelella-theme/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
    <script src="{{URL::asset('gentelella-theme/vendors/google-code-prettify/src/prettify.js')}}"></script>
    <!-- jQuery Tags Input -->
    <script src="{{URL::asset('gentelella-theme/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
    <!-- Switchery -->
    <script src="{{URL::asset('gentelella-theme/vendors/switchery/dist/switchery.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{URL::asset('gentelella-theme/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <!-- Parsley -->
    <script src=" {{URL::asset('gentelella-theme/vendors/parsleyjs/dist/parsley.min.js')}}"></script>
    <!-- Autosize -->
    <script src=" {{URL::asset('gentelella-theme/vendors/autosize/dist/autosize.min.js')}}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{URL::asset('gentelella-theme/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
    <!-- starrr -->
    <script src="{{URL::asset('gentelella-theme/vendors/starrr/dist/starrr.js')}}"></script>


 @stop
