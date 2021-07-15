@extends('../layouts.dashboard')

@section('scripts')
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
   });
</script>
@endsection

@section('content')

<div class="container">
    @forelse($blogs as $blog)
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1 class="mt-4">Edit Article</h1>

            <form action="{{ url('/edit-blog/'.$blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title <span class="require">*</span></label>
                    <input type="text" class="form-control" name="title" value="{{ $blog->title }}" />
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea rows="5" class="form-control" name="body" id="mytextarea">{{ $blog->body }}</textarea>
                </div>
                <div class="form-group">
                    <label for="category">category</label>
                    <select class="form-select form-select-sm form-control" name="category"
                        aria-label=".form-select-sm example">
                        <option selected>{{ $blog->category }}</option>
                        <option value="Editing" name="editing">Editing
                        </option>
                        <option value="Authoring" name="authoring">Authoring</option>
                        <option value="Publishing" name="publishing">Publishing</option>
                        <option value="Others" name="others">Others</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Author <span class="require">*</span></label>
                    <input type="text" class="form-control" name="author" value="{{ $blog->author }}" />
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
    @empty
    <p>Unfortunately, there are no blogs associated with this title, id or
        category.</p>
    @endforelse
</div>

@endsection