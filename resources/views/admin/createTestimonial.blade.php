@extends('../layouts.dashboard')

@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1 class="mt-4">Publish New Testimonial</h1>

            <form action="/create-testimonial" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="description">Testimony</label>
                    <textarea rows="5" class="form-control" name="description" id="mytextarea"></textarea>
                </div>
                <div class="form-group">
                    <label for="title">Testifier's name <span class="require">*</span></label>
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
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Testimony</th>
                        <th scope="col">Author</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($testimonials as $testimony)
                    <tr>
                        <th scope="row">{{ $testimony->id }}</th>
                        <td>{{ $testimony->text }}</td>
                        <td>{{ $testimony->author }}</td>
                        <td><span class="btn btn-sm bg-warning">Edit</span>
                            <span class="btn btn-sm bg-danger"> <a class="text-dark"
                                    href="{{ url('delete-cover/'.$testimony->id) }}">
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
            {{ $testimonials->links() }}
        </div>
    </div>
</div>

@endsection