<html>

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
    <script>
        function preview_images() {
            var total_file = document.getElementById("images").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_preview').append("<div class='col-md-3' style='margin: 5px'><img class='img-responsive img-thumbnail' src='" + URL.createObjectURL(event.target.files[i]) + "'></div>");
            }
        }
    </script>
</head>

<body>
    <div class="container" style="margin-top: 60px">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                
                <input type="text" name="name" class="form-control" required="required">
                

                <div class="col-md-6">
                    <input type="file" class="form-control" id="images" name="image[]" onchange="preview_images();" multiple/>
                </div>
                <div class="col-md-6">
                    <input type="submit" class="btn btn-primary" name='submit_image' value="Upload Multiple Image" />
                </div>
            </form>
        </div>
        <div class="row" id="image_preview" style="margin-top: 10px"></div>
    </div>

    <!-- <script>
        $('#add_more').click(function() {
            "use strict";
            $(this).before($("<div/>", {
                id: 'filediv'
            }).fadeIn('slow').append(
                $("<input/>", {
                    name: 'file[]',
                    type: 'file',
                    id: 'file',
                    multiple: 'multiple',
                    accept: 'image/*'
                })
            ));
        });

        $('#upload').click(function(e) {
            "use strict";
            e.preventDefault();

            if (window.filesToUpload.length === 0 || typeof window.filesToUpload === "undefined") {
                alert("No files are selected.");
                return false;
            }

            // Now, upload the files below...
            // https://developer.mozilla.org/en-US/docs/Using_files_from_web_applications#Handling_the_upload_process_for_a_file.2C_asynchronously
        });

        deletePreview = function(ele, i) {
            "use strict";
            try {
                $(ele).parent().remove();
                window.filesToUpload.splice(i, 1);
            } catch (e) {
                console.log(e.message);
            }
        }

        $("#file").on('change', function() {
            "use strict";

            // create an empty array for the files to reside.
            window.filesToUpload = [];

            if (this.files.length >= 1) {
                $("[id^=previewImg]").remove();
                $.each(this.files, function(i, img) {
                    var reader = new FileReader(),
                        newElement = $("<div id='previewImg" + i + "' class='previewBox'><img /></div>"),
                        deleteBtn = $("<span class='delete' onClick='deletePreview(this, " + i + ")'>X</span>").prependTo(newElement),
                        preview = newElement.find("img");

                    reader.onloadend = function() {
                        preview.attr("src", reader.result);
                        preview.attr("alt", img.name);
                    };

                    try {
                        window.filesToUpload.push(document.getElementById("file").files[i]);
                    } catch (e) {
                        console.log(e.message);
                    }

                    if (img) {
                        reader.readAsDataURL(img);
                    } else {
                        preview.src = "";
                    }

                    newElement.appendTo("#filediv");
                });
            }
        });
    </script> -->

</body>

</html>