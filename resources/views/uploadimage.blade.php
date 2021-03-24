<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Image Upload</title>
    <style>
        img {
        border-radius: 2px;
        padding: 3px;
        width:200px; 
        height:100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Image Upload Using Intervention</h2>
        @if(Session::has('msg'))
            <div class="alert alert-success">
                {{ Session::get('msg')}}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{URL::to('upload-image')}}" method="post" enctype="multipart/form-data">
        {{csrf_field() }}
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" id=" ">
            </div>

            <div class="form-group">
                <label for="">Image</label>
                <input type="file" multiple class="form-control" name="filename[]" id="imgInp">
                <!-- <img width= " 200px"id="blah" src="#" alt="your image" /> -->
            </div>

            <div class="form-group">
                <label for="alttext">AltText</label>
                <input type="text" class="form-control" name="alttext" id=" ">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </form>

        <hr>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2>Uploaded Images</h2>
                </div>

                <div class="card-body">
                    @if($images)
                        @foreach($images as $i)
                            <img src="{{ asset('images/'. $i->filename)}}" alt="">
                            <!-- {{ $i->filename}} -->
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#imgInp').on('change', function() {
        imagesPreview(this, 'div.blah');
    });
});
    </script>
</body>
</html>