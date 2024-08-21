@extends('admin.main')


@section('content')
    <form action="" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label for="menu">Name</label>
                <input type="text" name="name" class="form-control"  placeholder="Enter category name">
            </div>

{{--            <div class="form-group">--}}
{{--                <label>Category</label>--}}
{{--                <select class="form-control" name="parent_id">--}}
{{--                    <option value="0"> Parent Directory</option>--}}
{{--                    @foreach($menus as $menu)--}}
{{--                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}

            <div class="form-group">
                <label>Description </label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Category </label>
                <textarea name="category" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Publish At </label>
                <textarea name="publish_at" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Content </label>
                <textarea name="content" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>Image</label>
                <input type="hidden" name="image" class="form-control"/>
                <button class="btn btn-primary mt-2" type="button" id="upload_widget">Upload Image</button>
            </div>

            <div class="form-group">
                <label>amount </label>
                <textarea name="amount" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>price </label>
                <textarea name="price" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>Status</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="status" checked="">
                    <label for="active" class="custom-control-label">Yes</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="status" >
                    <label for="no_active" class="custom-control-label">No</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create Category</button>
        </div>
        @csrf
    </form>

    <button id="upload_widget" class="cloudinary-button">Upload files</button>
    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
    <script type="text/javascript">
        var myWidget = cloudinary.createUploadWidget({
                cloudName: 'dficfkyug',
                uploadPreset: 'hellopreset'}, function (error, result) {
                if (!error && result && result.event === "success") {
                    //console.log('Done! Here is the image info: ', result.info.url);
                    console.log('Done! Here is the image info: ', result.info.secure_url);
                }
            }
        )

        document.getElementById("upload_widget").addEventListener("click", function(){
            myWidget.open();
        }, false);
    </script>


@endsection


