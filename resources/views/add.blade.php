<html>
<head>
    <title>Challenge</title>
</head>
<body>
<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <label>image </label>
            <input type="file" name="image" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label>description </label>
            <textarea  name="description" class="form-control"></textarea>
        </div>
    </div>

    <div class="col-md-6">
        <button type="submit" class="btn btn-success">save</button>
    </div>
</form>
</body>
</html>
