@extends('../layouts.dashboard')

@section('content')

<div class="mt-4">
    <div class="row mb-2">
        <div class="col-sm-12">
            <div class="btn btn-primary float-right" onclick="print();"><span>
                    Print File <i class="fas fa-file-download"></i></span>
            </div>
        </div>
    </div>

    @forelse ($messages as $message)
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">{{$message->name}}</h4>
        <p>{{$message->message}}</p>
        <hr>
        <p class="mb-0">{{$message->email}}</p>
        <p class="mb-0">{{$message->phone}}</p>
        <p class="mb-0">{{$message->created_at}}</p>
        <p class="mb-0"><a href="" class="btn btn-danger btn-sm text-white mt-1">Delete</a></p>
    </div>
    @empty

    <div>No Data found in the Database</div>

    @endforelse
    </tbody>
    </table>
</div>
@endsection