@extends('../layouts.dashboard')

@section('content')

<div class="mt-4">
    <div class="row mb-4">
        <div class="col-sm-12">
            <div class="btn btn-primary float-right" onclick="print();"><span>
                    Print File <i class="fas fa-file-download"></i></span>
            </div>
            <div class="btn float-right mr-4 text-primary"><span>
                    Messages <span class="text-danger"> ( {{ $count }} ) </span> </span>
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
        <p class="mb-0"><a href="" class="btn btn-info btn-sm text-white mt-1">Forward <i
                    class="fas fa-forward"></i></a> <a href="" class="btn btn-info btn-sm text-white mt-1">Send Email
                <i class="fas fa-paper-plane"></i> </a>
            <a href="{{url('/delete-message/'.$message->id)}}" class="btn btn-danger btn-sm text-white mt-1 ml-2">&nbsp;
                Delete <i class="fas fa-trash-alt"></i>
                &nbsp;</a>
        </p>
    </div>
    @empty

    <div>No Data found in the Database</div>

    @endforelse
    </tbody>
    </table>
</div>
@endsection