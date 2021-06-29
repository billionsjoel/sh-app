@extends('../layouts.dashboard')

@section('content')

<div class="mt-4">
    <div class="row mb-2">
        <div class="col-sm-12">
            <div class="btn btn-primary float-right"><span>
                    Print File <i class="fas fa-file-download"></i></span>
            </div>
        </div>
    </div>

    <table id="example" class="display nowrap table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($subscriptions as $subscription)
            <tr>
                <td>{{$subscription->id}}</td>
                <td>{{$subscription->email}}</td>

                <td>{{$subscription->created_at}}</td>
                <td><a href="" class="btn btn-danger btn-sm text-white">Delete</a></td>
            </tr>
            @empty
            <tr>
                <td>No Data found in the Database</td>
            </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection