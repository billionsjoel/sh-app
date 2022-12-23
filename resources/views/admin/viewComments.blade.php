@extends('../layouts.dashboard')

@section('content')
    <div class="mt-4">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="btn btn-primary float-right" onclick="print();"><span>
                        Print File <i class="fas fa-file-download"></i></span>
                </div>
                <div class="btn float-right mr-4 text-primary"><span>
                        Comments count <span class="text-danger"> ( {{ $count }} ) </span> </span>
                </div>
            </div>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Comment Id</th>
                    <th scope="col">Blog Id</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comments as $comment)
                    <tr>
                        <th scope="row">{{ $comment->id }}</th>
                        <td>{{ $comment->bid }}</td>
                        <td>{{ $comment->comment }}</td>
                        <td><a href="{{ url('/delete-comment/' . $comment->id) }}"
                                class="btn btn-danger btn-sm text-white mt-1 ml-2">&nbsp;
                                Delete <i class="fas fa-trash-alt"></i>
                                &nbsp;</a></td>
                    @empty
                        <td rowspan="4">No Comments found in the Database</td>
                @endforelse
                </tr>

            </tbody>
        </table>

        </tbody>
        </table>
    </div>
@endsection
