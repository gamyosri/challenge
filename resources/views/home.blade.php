<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<body>

<div class="d-flex flex-row"></div>
@foreach($articles ?? '' as $article)
    <div onclick="showModal({{$article}})">
        <img class="w-25" src= {{"storage/image_thumbnails/".$article->image}}>
    </div>
    @endforeach
    </div>
</body>

<div id="myModal" class="modal fade " role="dialog" hidden>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title"></h4>
            </div>

            <div class="modal-body row " id="modal-body">
                <div class="col-md-6 ">
                    <img class=" modal-image w-100" src="">
                </div>
                <div class="col-md-6 modal-description"></div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button " class="btn btn-danger" data-dismiss="modal" >delete</button>
            </div>
        </div>

    </div>
</div>


</html>

<script type="application/javascript">
    function showModal(article) {
        $('.modal-title').text(article.id);
        $('.modal-image').attr('src', 'storage/image_thumbnails/' + article.image);
        $('.modal-description').text(article.description);
        $('#myModal').removeAttr('hidden').modal('show');

        $(".btn-danger").click(function(){
            var link = "delete/" + article.id;
            window.location.href = link;
            }
        );
    }
</script>
