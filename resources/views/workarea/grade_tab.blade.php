@section('title')
    Receive Grades
@stop

<?php
$rubric = array("Content", "Organization", "Grammar", "Conclusion");
$marks = array(12, 34, 56, 23);
$arraylen = count($marks);
$total = 0;
for ($i = 0; $i < count($marks); $i += 1) {
    $total = $total + $marks[$i];
}
?>

<div class="col-md-6 col-sm-6 col-xs-12" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
     xmlns="http://www.w3.org/1999/html">
    <div class="x_panel">
        <div class="x_title">

            <h2>Assignment Marks
                <small></br></br>Final marks of the assignment according to the given rubric</br></small>
            </h2>

            <div class="clearfix"></div>
        </div>

        <div class="x_content">

            <table class="table table-striped">

                <thead>

                <tr>
                    <th>Description</th>
                    <th>Marks</th>
                </tr>

                </thead>

                <tbody>

                @for($x=0;$x<$arraylen;$x+=1)

                    <tr>
                        <td>{{$rubric[$x]}}</td>
                        <td>{{$marks[$x]}}</td>
                    </tr>

                @endfor

                </tbody>

            </table>

        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3" for="total">Total Marks</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="total">{{$total}}
                </label>
            </div>
        </div>
        </br>
        </br>
        </br>
        <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-primary">Save Draft</button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
        </div>

    </div>
</div>