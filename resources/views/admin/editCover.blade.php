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
        @forelse ($bookCovers as $bookCover)
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <h1 class="mt-4">Edit Book Cover</h1>

                    <form action="{{ url('edit-book-cover/' . $bookCover->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title <span class="require">*</span></label>
                            <input type="text" class="form-control" value="{{ $bookCover->title }}" name="title" />
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea rows="5" class="form-control" name="description" id="mytextarea">{{ $bookCover->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="title">Author <span class="require">*</span></label>
                            <input type="text" class="form-control" value="{{ $bookCover->author }}" name="author" />
                        </div>
                        <div class="form-group">
                            <label for="genre">Genre <span class="require">*</span></label>
                            <input type="text" class="form-control" value="{{ $bookCover->genre }}" name="genre" />
                        </div>
                        <div class="form-group">
                            <label for="design">Cover designed by <span class="require">*</span></label>
                            <input type="text" class="form-control" name="design" value="{{ $bookCover->design }}" />
                        </div>
                        <div class="form-group">
                            <label for="publisher">Publisher <span class="require">*</span></label>
                            <input type="text" class="form-control" name="publisher"
                                value="{{ $bookCover->publisher }}" />
                        </div>
                        <div class="form-group">
                            <label for="image"> <img src="{{ asset('images/bookcovers/' . $bookCover->image) }}"
                                    alt="{{ $bookCover->title }} Book Cover" width="100">
                            </label>
                            <input id="image" type="file" name="image">
                        </div>

                        <div class="form-group d-flex flex-row-reverse">
                            <button type="submit" class="btn btn-sm btn-primary ml-2">
                                Publish
                            </button>
                            <a class="btn btn-sm btn-danger" href="{{ url('/create-book-cover') }}">
                                Cancel
                            </a>
                        </div>

                    </form>
                </div>

            </div>
        @empty
            <div>
                <p>There are no book covers associated with this title.</p>
            </div>
        @endforelse
    </div>
@endsection
