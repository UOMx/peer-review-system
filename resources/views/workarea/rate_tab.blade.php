

<style>
    .table {
        width: 20%; /* Try setting this to 400px or something */
        display: table;
        /*border: 1px solid #444444;*/
    }
    .row{
        display: table-row;
    }
    .star {
        display: table-cell;

    }



</style>

<div class = "right-col" role = "main" style = "min-height: 100%">
    <div class = "col-md-12 col-sm-12 col-xs-12">
        <div class = "col-md-9 col-sm-9 col-xs-12">
            <div class = "x_panel">
                <div class = table>
                    <div class = "row">
                        <div class = "star" id = "star1"><image src="{{ URL::to('/') }}/images/rsz_starempty.jpg"></image></div>
                        <div class = "star" id = "star2"><image src="{{ URL::to('/') }}/images/rsz_starempty.jpg"></image></div>
                        <div class = "star" id = "star3"><image src="{{ URL::to('/') }}/images/rsz_starempty.jpg"></image></div>
                        <div class = "star" id = "star4"><image src="{{ URL::to('/') }}/images/rsz_starempty.jpg"></image></div>
                        <div class = "star" id = "star5"><image src="{{ URL::to('/') }}/images/rsz_starempty.jpg"></image></div>

                    </div>

                </div>
        </div>


        </div>
        <div class = "col-md-3 col-sm-3 col-xs-12">
            <section class = "panel">
                <div class="product_price">
                    <h1 class="price" align="center"> </h1>
                    <span class="price-tax">Assigned Rating</span>
                    <br>
                </div>
            </section>

        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-6">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>

</div>



<script>

    var stars = document.querySelectorAll('.star');
    var isNotIn = true;
    var rating = 0;
    document.querySelector('.price').innerHTML = rating;
    stars.forEach(function(star){
        star.addEventListener('click', rate);
        star.addEventListener('click', unRate);
    });




    function rate(event){
        if (isNotIn && event.target.getAttribute('src') == "{{ URL::to('/') }}/images/rsz_starempty.jpg" && (event.target.parentElement.previousElementSibling == null || event.target.parentElement.previousElementSibling.firstElementChild.getAttribute('src') == "{{ URL::to('/') }}/images/rsz_starfull.jpg")){
            event.target.parentElement.innerHTML = "<img src=\"{{ URL::to('/') }}/images/rsz_starfull.jpg\"/>";
            rating++;
            document.querySelector('.price').innerHTML = rating;
            isNotIn = false;
        }
        else{
            isNotIn = true;
        }

    }

    function unRate(event){

        if (isNotIn && event.target.getAttribute('src') == "{{ URL::to('/') }}/images/rsz_starfull.jpg" && (event.target.parentElement.nextElementSibling == null || event.target.parentElement.nextElementSibling.firstElementChild.getAttribute('src') == "{{ URL::to('/') }}/images/rsz_starempty.jpg")){
            event.target.parentElement.innerHTML = "<img src=\"{{ URL::to('/') }}/images/rsz_starempty.jpg\"/>";
            rating--;
            document.querySelector('.price').innerHTML = rating;
        }
        isNotIn = true;

    }
</script>
