<div class = "right-col" role = "main" style = "min-height: 100%">
    <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="page-title">
                <div class="title_left">
                    <h1>Assignment</h1>
                </div>


            </div>
            <div class="col-md-12 col-sm-12 col-xs-12" role="main">
                <div class="x_panel">

                    <div class="x_content">
                        <iframe id="assignment" title="PDF in an i-Frame" src="pdf/Toc_2017_Assignment.pdf#page=1&zoom=100"  scrolling="auto" height="400px" width="850px" ></iframe>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Grading rubric</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

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
                                <th scope="row">Criteria one - Content of the answer (Allocates 20 marks)</th>
                                <td>Clearly explain the facts with 5 point (20 marks)</td>
                                <td>Mentioned all 5 and describe only 4 points (15 marks)</td>
                                <td>Mentioned at least 3 points with description (10 marks)</td>
                                <td>Mentioned at least 2 points (5 marks)</td>
                                <td>Did not contain any appropriate point n the answer (0 marks)</td>
                            </tr>
                            <tr>
                                <th scope="row">Criteria two - Language and Grammar  (Allocates 10 marks)</th>
                                <td>No grammatical mistakes and used proper language in answering (10 marks)</td>
                                <td>Grammatical mistakes are less than 3 (8 marks)</td>
                                <td>Grammar and the language is moderately good (5 marks)</td>
                                <td>Plenty of grammar mistakes (3 marks)</td>
                                <td>Grammar and the language of answer are very fair(0 marks)</td>
                            </tr>
                            <tr>
                                <th scope="row">Criteria three - Organization of the answer (Allocates 5 marks)</th>
                                <td>Well organized in Introduction, body and the conclusion (5 marks)</td>
                                <td>Content is not well organized into subtopics (4 marks)</td>
                                <td>Organization is moderately good (2 marks)</td>
                                <td>Organization is poor (1 marks)</td>
                                <td>Organization is very fair (0 marks)</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            {{--<form>--}}
            <div class="page-title">
                <div class="title_left">
                    <h1>Answer </h1>
                </div>


            </div>
            <div class="col-md-12 col-sm-12 col-xs-12" role="main">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Upload your answer in pdf format</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p>
                        <form action="#" method="post" class="dropzone">



                        </form>
                        <br />
                        <br />
                        <br />
                        <br />
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Write your answer here

                        </h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div id="alerts"></div>
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

                        <br/>




                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>
</div>
{{--</form>--}}
<div class="x_panel">
