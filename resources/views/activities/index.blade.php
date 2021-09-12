@extends ('layouts.admin')


@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Activities</h1>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Activities</h6>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>

                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($activities as $activity)

                        <tr>
                            <td>{{ $activity->title }}</td>
                            <td>{{ $activity->category }}</td>

                            <td>
                                <form action="{{ route('activities.destroy',$activity->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('activities.show',$activity->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('activities.edit',$activity->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>

                        </tr>

                        @endforeach



                    </tbody>
                </table>
                {!! $activities->links() !!}
            </div>
        </div>
    </div>

</div>

<div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('activities.create') }}"> Create New Activity</a>
        </div>
    </div>
</div>

@endsection