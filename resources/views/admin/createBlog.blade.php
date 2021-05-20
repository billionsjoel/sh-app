@extends('../layouts.dashboard')

@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1 class="mt-4">Create Article</h1>

            <form action="/publish" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title <span class="require">*</span></label>
                    <input type="text" class="form-control" name="title" />
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea rows="5" class="form-control" name="body" id="mytextarea"></textarea>
                </div>
                <div class="form-group">
                    <label for="category">category</label>
                    <select class="form-select form-select-sm form-control" name="category"
                        aria-label=".form-select-sm example">
                        <option selected>Select category</option>
                        <option value="1" name="editing">Editing</option>
                        <option value="2" name="authoring">Authoring</option>
                        <option value="3" name="publishing">Publishing</option>
                        <option value="4" name="others">Others</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Author <span class="require">*</span></label>
                    <input type="text" class="form-control" name="author" />
                </div>

                <div class="form-group">
                    <label for="image">Choose Image</label>
                    <input id="image" type="file" name="image">
                </div>

                <div class="form-group d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-sm btn-primary ml-2">
                        Publish
                    </button>
                    <button class="btn btn-sm btn-danger">
                        Cancel
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>

@endsection