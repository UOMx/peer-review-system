
<div class="container" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active" ><a href="#student_tab_content1" id="assignment-tab"
                                            role="tab" data-toggle="tab"
                                            aria-expanded="false">Student 1</a>
        </li>
        <li role="presentation" class=""><a href="#student_tab_content2" role="tab" id="review-tab"
                                            data-toggle="tab"
                                            aria-expanded="false">Student 2</a>
        </li>

        <li role="presentation" class=""><a href="#student_tab_content3" role="tab"
                                                  id="review-tab3" data-toggle="tab"
                                                  aria-expanded="true">Student 3</a>
        </li>


    </ul>

    <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane fade" id="student_tab_content1"
             aria-labelledby="assignment-tab">
            <form class="form-horizontal form-label-left">
                <div class="x_title">
                    <h3>Review Assignment : First Student</h3>

                </div>
                <div class="x_panel">
                    <div class="x_content">
                        <div class="x_title">
                            <h4>Assignment</h4>
                        </div>

                    </div>
                </div>
                <div class="x_panel">
                    <div class="x_content">
                        <div class="x_title">
                            <h4>Answer</h4>
                        </div>

                        <div class="bs-example" data-example-id="simple-jumbotron">



                                <div class="container">

                                    <div class="form-group">

                                        <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                                            <div class="btn-group">
                                                <a class="btn btn-app">
                                                    <i class="fa fa-save"></i> Save
                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b
                                                            class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                </ul>
                                            </div>

                                            <div class="btn-group">
                                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i
                                                            class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
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
                                                <a class="btn" data-edit="strikethrough" title="Strikethrough"><i
                                                            class="fa fa-strikethrough"></i></a>
                                                <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                            </div>

                                            <div class="btn-group">
                                                <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                                <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                                <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i
                                                            class="fa fa-dedent"></i></a>
                                                <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                                            </div>

                                            <div class="btn-group">
                                                <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i
                                                            class="fa fa-align-left"></i></a>
                                                <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i
                                                            class="fa fa-align-center"></i></a>
                                                <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i
                                                            class="fa fa-align-right"></i></a>
                                                <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i
                                                            class="fa fa-align-justify"></i></a>
                                            </div>

                                            <div class="btn-group">
                                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i
                                                            class="fa fa-link"></i></a>
                                                <div class="dropdown-menu input-append">
                                                    <input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
                                                    <button class="btn" type="button">Add</button>
                                                </div>
                                                <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                                            </div>

                                            <div class="btn-group">
                                                <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i
                                                            class="fa fa-picture-o"></i></a>
                                                <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage"/>
                                            </div>

                                            <div class="btn-group">
                                                <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                                <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                            </div>
                                        </div>

                                        <div id="editor-one" class="editor-wrapper"></div>

                                        <textarea name="descr" id="descr" style="display:none;"></textarea>

                                        {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                                            {{--<input type="text" id="author" required="required" class="form-control col-md-7 col-xs-12">--}}
                                        {{--</div>--}}
                                    </div>
                                </div>



                        </div>
                    </div>
                </div>
                <div class="x_panel">
                    <div class="x_content">
                        <div class="x_title">
                            <h4>Details : Reviewer</h4>
                        </div>
                      <div class="bs-example" data-example-id="simple-jumbotron">
                        {{--<div class="jumbotron">--}}


                                <div class="container">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="author">Authour
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="author" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Who are you?
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea type="text" id="description" name="description" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                                            {{--<input type="text" id="description" name="description" required="required" class="form-control col-md-7 col-xs-12">--}}
                                        </div>
                                    </div>
                                </div>



                            {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                                        {{--<div class="pricing">--}}
                                            {{--<div class="title" style="height: 80px; padding-top: 50px">--}}
                                                {{--<h2>Assignment 1</h2>--}}
                                            {{--</div>--}}
                                            {{--<div class="x_content">--}}
                                                {{--<div class="">--}}
                                                    {{--<div class="pricing_features" style="min-height: 0px;">--}}
                                                        {{--<ul class="list-unstyled text-left">--}}
                                                            {{--<li><i class="fa fa-circle-o text-danger"></i> Good work</li>--}}
                                                            {{--<li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>--}}
                                                            {{--<li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                                        {{--<div class="pricing">--}}
                                            {{--<div class="title" style="height: 80px; padding-top: 50px">--}}
                                                {{--<h2>Assignment 1</h2>--}}
                                            {{--</div>--}}
                                            {{--<div class="x_content">--}}
                                                {{--<div class="">--}}
                                                    {{--<div class="pricing_features" style="min-height: 0px;">--}}
                                                        {{--<ul class="list-unstyled text-left">--}}
                                                            {{--<li><i class="fa fa-circle-o text-danger"></i> Good work</li>--}}
                                                            {{--<li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>--}}
                                                            {{--<li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                                        {{--<div class="pricing">--}}
                                            {{--<div class="title" style="height: 80px; padding-top: 50px">--}}
                                                {{--<h2>Assignment 1</h2>--}}
                                            {{--</div>--}}
                                            {{--<div class="x_content">--}}
                                                {{--<div class="">--}}
                                                    {{--<div class="pricing_features" style="min-height: 0px;">--}}
                                                        {{--<ul class="list-unstyled text-left">--}}
                                                            {{--<li><i class="fa fa-circle-o text-danger"></i> Good work</li>--}}
                                                            {{--<li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>--}}
                                                            {{--<li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                                        {{--<div class="pricing">--}}
                                            {{--<div class="title" style="height: 80px; padding-top: 50px">--}}
                                                {{--<h2>Assignment 1</h2>--}}
                                            {{--</div>--}}
                                            {{--<div class="x_content">--}}
                                                {{--<div class="">--}}
                                                    {{--<div class="pricing_features" style="min-height: 0px;">--}}
                                                        {{--<ul class="list-unstyled text-left">--}}
                                                            {{--<li><i class="fa fa-circle-o text-danger"></i> Good work</li>--}}
                                                            {{--<li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>--}}
                                                            {{--<li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>



                <div class="x_panel">
                    <div class="x_content">
                        <div class="x_title">
                            <h4>Your Ideas</h4>
                        </div>
                        <div class="bs-example" data-example-id="simple-jumbotron">

                                <div class="container">

                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="form-group">

                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text-area-1">Why do you like this work?
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea type="text" id="text-area-1" name="text-area-1" required="required" class="form-control col-md-7 col-xs-12"></textarea>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="text-area-2" class="control-label col-md-3 col-sm-3 col-xs-12">What problems you see?
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea type="text" id="text-area-2" name="text-area-2" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text-area-3">Why didn't you understand?
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea type="text" id="text-area-3" name="text-area-3" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text-area-4">How can this be improved?
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea type="text" id="text-area-4" name="text-area-4" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                        </div>
                    </div>
                </div>
                <div class="x_panel">
                    <div class="x_content">
                        <div class="x_title">
                            <h4>Grade Answer</h4>
                        </div>
                        <div class="bs-example" data-example-id="simple-jumbotron">



                                <div class="container">

                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Criteria</th>
                                            <th>Excellent</th>
                                            <th>Very good</th>
                                            <th>Good</th>
                                            <th>Fair</th>
                                            <th>Weak</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">gjhggj kjhhkhjk</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">gggkjg ggk</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>@fat</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">gggk gjkgkg hkjhkjhk jkjhkhk bkkk jj</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>@twitter</td>
                                            <td>@twitter</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>



            </form>

            <!--Concern message box-->
            {{--<div class="x_panel">--}}
                {{--<div class="x_content">--}}
                    {{--<div class="jumbotron">--}}
                        {{--<p>If you have any concern of these review, please feel free to communicate.</p>--}}
                        {{--<div>--}}
                            {{--<textarea id="message" autocomplete="off" class="form-control" data-parsley-trigger="keyup">--}}
                                                        {{--</textarea>--}}
                        {{--</div>--}}
                        {{--<br>--}}
                        {{--<button class="btn btn-primary">Send</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>
        <div role="tabpanel" class="tab-pane fade active in" id="student_tab_content2"
             aria-labelledby="review-tab">

            <form class="form-horizontal form-label-left">
                <div class="x_title">
                    <h3>Review Assignment : Second Student</h3>

                </div>
                <div class="x_panel">
                    <div class="x_content">
                        <div class="x_title">
                            <h4>Assignment</h4>
                        </div>

                    </div>
                </div>
                <div class="x_panel">
                    <div class="x_content">
                        <div class="x_title">
                            <h4>Answer</h4>
                        </div>

                        <div class="bs-example" data-example-id="simple-jumbotron">



                            <div class="container">

                                <div class="form-group">

                                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                                        <div class="btn-group">
                                            <a class="btn btn-app">
                                                <i class="fa fa-save"></i> Save
                                            </a>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b
                                                        class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                            </ul>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i
                                                        class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
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
                                            <a class="btn" data-edit="strikethrough" title="Strikethrough"><i
                                                        class="fa fa-strikethrough"></i></a>
                                            <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                            <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                            <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i
                                                        class="fa fa-dedent"></i></a>
                                            <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i
                                                        class="fa fa-align-left"></i></a>
                                            <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i
                                                        class="fa fa-align-center"></i></a>
                                            <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i
                                                        class="fa fa-align-right"></i></a>
                                            <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i
                                                        class="fa fa-align-justify"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i
                                                        class="fa fa-link"></i></a>
                                            <div class="dropdown-menu input-append">
                                                <input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
                                                <button class="btn" type="button">Add</button>
                                            </div>
                                            <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i
                                                        class="fa fa-picture-o"></i></a>
                                            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage"/>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                            <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                        </div>
                                    </div>

                                    <div id="editor-one" class="editor-wrapper"></div>

                                    <textarea name="descr" id="descr" style="display:none;"></textarea>

                                    {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                                    {{--<input type="text" id="author" required="required" class="form-control col-md-7 col-xs-12">--}}
                                    {{--</div>--}}
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="x_panel">
                    <div class="x_content">
                        <div class="x_title">
                            <h4>Details : Reviewer</h4>
                        </div>
                        <div class="bs-example" data-example-id="simple-jumbotron">
                            {{--<div class="jumbotron">--}}


                            <div class="container">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="author">Authour
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="author" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Who are you?
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="description" name="description" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                                        {{--<input type="text" id="description" name="description" required="required" class="form-control col-md-7 col-xs-12">--}}
                                    </div>
                                </div>
                            </div>



                            {{--<div class="row">--}}
                            {{--<div class="col-md-12">--}}
                            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="pricing">--}}
                            {{--<div class="title" style="height: 80px; padding-top: 50px">--}}
                            {{--<h2>Assignment 1</h2>--}}
                            {{--</div>--}}
                            {{--<div class="x_content">--}}
                            {{--<div class="">--}}
                            {{--<div class="pricing_features" style="min-height: 0px;">--}}
                            {{--<ul class="list-unstyled text-left">--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Good work</li>--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="pricing">--}}
                            {{--<div class="title" style="height: 80px; padding-top: 50px">--}}
                            {{--<h2>Assignment 1</h2>--}}
                            {{--</div>--}}
                            {{--<div class="x_content">--}}
                            {{--<div class="">--}}
                            {{--<div class="pricing_features" style="min-height: 0px;">--}}
                            {{--<ul class="list-unstyled text-left">--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Good work</li>--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                            {{--<div class="col-md-12">--}}
                            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="pricing">--}}
                            {{--<div class="title" style="height: 80px; padding-top: 50px">--}}
                            {{--<h2>Assignment 1</h2>--}}
                            {{--</div>--}}
                            {{--<div class="x_content">--}}
                            {{--<div class="">--}}
                            {{--<div class="pricing_features" style="min-height: 0px;">--}}
                            {{--<ul class="list-unstyled text-left">--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Good work</li>--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="pricing">--}}
                            {{--<div class="title" style="height: 80px; padding-top: 50px">--}}
                            {{--<h2>Assignment 1</h2>--}}
                            {{--</div>--}}
                            {{--<div class="x_content">--}}
                            {{--<div class="">--}}
                            {{--<div class="pricing_features" style="min-height: 0px;">--}}
                            {{--<ul class="list-unstyled text-left">--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Good work</li>--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>



                <div class="x_panel">
                    <div class="x_content">
                        <div class="x_title">
                            <h4>Your Ideas</h4>
                        </div>
                        <div class="bs-example" data-example-id="simple-jumbotron">

                            <div class="container">

                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="form-group">

                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text-area-1">Why do you like this work?
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea type="text" id="text-area-1" name="text-area-1" required="required" class="form-control col-md-7 col-xs-12"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="text-area-2" class="control-label col-md-3 col-sm-3 col-xs-12">What problems you see?
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea type="text" id="text-area-2" name="text-area-2" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text-area-3">Why didn't you understand?
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea type="text" id="text-area-3" name="text-area-3" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text-area-4">How can this be improved?
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea type="text" id="text-area-4" name="text-area-4" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="x_panel">
                    <div class="x_content">
                        <div class="x_title">
                            <h4>Grade Answer</h4>
                        </div>
                        <div class="bs-example" data-example-id="simple-jumbotron">



                            <div class="container">

                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Criteria</th>
                                        <th>Excellent</th>
                                        <th>Very good</th>
                                        <th>Good</th>
                                        <th>Fair</th>
                                        <th>Weak</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">gjhggj kjhhkhjk</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">gggkjg ggk</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">gggk gjkgkg hkjhkjhk jkjhkhk bkkk jj</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>



            </form>

        </div>
        <div role="tabpanel" class="tab-pane fade" id="student_tab_content3"
             aria-labelledby="grade-tab">

            <form class="form-horizontal form-label-left">
                <div class="x_title">
                    <h3>Review Assignment : Third Student</h3>

                </div>
                <div class="x_panel">
                    <div class="x_content">
                        <div class="x_title">
                            <h4>Assignment</h4>
                        </div>

                    </div>
                </div>
                <div class="x_panel">
                    <div class="x_content">
                        <div class="x_title">
                            <h4>Answer</h4>
                        </div>

                        <div class="bs-example" data-example-id="simple-jumbotron">



                            <div class="container">

                                <div class="form-group">

                                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                                        <div class="btn-group">
                                            <a class="btn btn-app">
                                                <i class="fa fa-save"></i> Save
                                            </a>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b
                                                        class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                            </ul>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i
                                                        class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
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
                                            <a class="btn" data-edit="strikethrough" title="Strikethrough"><i
                                                        class="fa fa-strikethrough"></i></a>
                                            <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                            <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                            <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i
                                                        class="fa fa-dedent"></i></a>
                                            <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i
                                                        class="fa fa-align-left"></i></a>
                                            <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i
                                                        class="fa fa-align-center"></i></a>
                                            <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i
                                                        class="fa fa-align-right"></i></a>
                                            <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i
                                                        class="fa fa-align-justify"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i
                                                        class="fa fa-link"></i></a>
                                            <div class="dropdown-menu input-append">
                                                <input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
                                                <button class="btn" type="button">Add</button>
                                            </div>
                                            <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i
                                                        class="fa fa-picture-o"></i></a>
                                            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage"/>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                            <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                        </div>
                                    </div>

                                    <div id="editor-one" class="editor-wrapper"></div>

                                    <textarea name="descr" id="descr" style="display:none;"></textarea>

                                    {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                                    {{--<input type="text" id="author" required="required" class="form-control col-md-7 col-xs-12">--}}
                                    {{--</div>--}}
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="x_panel">
                    <div class="x_content">
                        <div class="x_title">
                            <h4>Details : Reviewer</h4>
                        </div>
                        <div class="bs-example" data-example-id="simple-jumbotron">
                            {{--<div class="jumbotron">--}}


                            <div class="container">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="author">Authour
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="author" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Who are you?
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="description" name="description" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                                        {{--<input type="text" id="description" name="description" required="required" class="form-control col-md-7 col-xs-12">--}}
                                    </div>
                                </div>
                            </div>



                            {{--<div class="row">--}}
                            {{--<div class="col-md-12">--}}
                            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="pricing">--}}
                            {{--<div class="title" style="height: 80px; padding-top: 50px">--}}
                            {{--<h2>Assignment 1</h2>--}}
                            {{--</div>--}}
                            {{--<div class="x_content">--}}
                            {{--<div class="">--}}
                            {{--<div class="pricing_features" style="min-height: 0px;">--}}
                            {{--<ul class="list-unstyled text-left">--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Good work</li>--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="pricing">--}}
                            {{--<div class="title" style="height: 80px; padding-top: 50px">--}}
                            {{--<h2>Assignment 1</h2>--}}
                            {{--</div>--}}
                            {{--<div class="x_content">--}}
                            {{--<div class="">--}}
                            {{--<div class="pricing_features" style="min-height: 0px;">--}}
                            {{--<ul class="list-unstyled text-left">--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Good work</li>--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                            {{--<div class="col-md-12">--}}
                            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="pricing">--}}
                            {{--<div class="title" style="height: 80px; padding-top: 50px">--}}
                            {{--<h2>Assignment 1</h2>--}}
                            {{--</div>--}}
                            {{--<div class="x_content">--}}
                            {{--<div class="">--}}
                            {{--<div class="pricing_features" style="min-height: 0px;">--}}
                            {{--<ul class="list-unstyled text-left">--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Good work</li>--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="pricing">--}}
                            {{--<div class="title" style="height: 80px; padding-top: 50px">--}}
                            {{--<h2>Assignment 1</h2>--}}
                            {{--</div>--}}
                            {{--<div class="x_content">--}}
                            {{--<div class="">--}}
                            {{--<div class="pricing_features" style="min-height: 0px;">--}}
                            {{--<ul class="list-unstyled text-left">--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Good work</li>--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Could write more for contrasting</li>--}}
                            {{--<li><i class="fa fa-circle-o text-danger"></i> Love the conclusion</li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>



                <div class="x_panel">
                    <div class="x_content">
                        <div class="x_title">
                            <h4>Your Ideas</h4>
                        </div>
                        <div class="bs-example" data-example-id="simple-jumbotron">

                            <div class="container">

                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="form-group">

                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text-area-1">Why do you like this work?
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea type="text" id="text-area-1" name="text-area-1" required="required" class="form-control col-md-7 col-xs-12"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="text-area-2" class="control-label col-md-3 col-sm-3 col-xs-12">What problems you see?
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea type="text" id="text-area-2" name="text-area-2" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text-area-3">Why didn't you understand?
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea type="text" id="text-area-3" name="text-area-3" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text-area-4">How can this be improved?
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea type="text" id="text-area-4" name="text-area-4" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="x_panel">
                    <div class="x_content">
                        <div class="x_title">
                            <h4>Grade Answer</h4>
                        </div>
                        <div class="bs-example" data-example-id="simple-jumbotron">



                            <div class="container">

                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Criteria</th>
                                        <th>Excellent</th>
                                        <th>Very good</th>
                                        <th>Good</th>
                                        <th>Fair</th>
                                        <th>Weak</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">gjhggj kjhhkhjk</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">gggkjg ggk</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">gggk gjkgkg hkjhkjhk jkjhkhk bkkk jj</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>



            </form>

        </div>

    </div>
</div>
