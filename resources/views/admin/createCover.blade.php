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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <h1 class="mt-4">Publish Book Cover</h1>

                <form action="/publish-book-cover" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title <span class="require">*</span></label>
                        <input type="text" class="form-control" name="title" />
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea rows="5" class="form-control" name="description" id="mytextarea"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre <span class="require">*</span></label>
                        <input type="text" class="form-control" name="genre" />
                    </div>
                    <div class="form-group">
                        <label for="design">Cover designed by <span class="require">*</span></label>
                        <input type="text" class="form-control" name="design" />
                    </div>
                    <div class="form-group">
                        <label for="publisher">Publisher <span class="require">*</span></label>
                        <input type="text" class="form-control" name="publisher" />
                    </div>
                    <div class="form-group">
                        <label for="title">Author <span class="require">*</span></label>
                        <input type="text" class="form-control" name="author" />
                    </div>
                    <div class="form-group">
                        <label for="image">Choose Book Image</label>
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
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($covers as $cover)
                        <tr>
                            <th scope="row">{{ $cover->id }}</th>
                            <td>{{ $cover->title }}</td>
                            <td>{{ $cover->author }}</td>
                            <td><span class="btn btn-sm bg-info"><a class="text-white"
                                        href="{{ url('view-edit-blog/' . $cover->id) }}"> Change Image <i
                                            class="fa fa-user"></i></a></span> <span class="btn btn-sm bg-warning"><a
                                        class="text-dark" href="{{ url('view-edit-book-cover/' . $cover->id) }}">
                                        Edit <i class="fa fa-pen"></i> </a></span>
                                <span class="btn btn-sm bg-danger"> <a class="text-white"
                                        href="{{ url('delete-cover/' . $cover->id) }}">
                                        delete <i class="fa fa-trash"></i> </a></span>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <th scope="row">#</th>
                            <td colspan="3" class="text-secondary">No records found !</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            {{ $covers->links() }}
        </div>
    </div>
@endsection
