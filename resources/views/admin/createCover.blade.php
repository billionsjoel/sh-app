@extends('../layouts.dashboard')

@section('content')

<div class="container">
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
                    <label for="title">Author <span class="require">*</span></label>
                    <input type="text" class="form-control" name="author" />
                </div>
                <div class="form-group">
                    <label for="genre">Genre <span class="require">*</span></label>
                    <input type="text" class="form-control" name="genre" />
                </div>
                <div class="form-group">
                    <label for="image">Choose Book Image</label>
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
                        <td><span class="btn btn-sm bg-warning">Edit</span>
                            <span class="btn btn-sm bg-danger"> <a class="text-dark"
                                    href="{{ url('delete-cover/'.$cover->id) }}">
                                    delete</a></span>
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
</div>

@endsection