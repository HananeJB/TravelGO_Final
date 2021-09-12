@extends('layouts.admin')

@section('content')

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cities</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('cities.create') }}"> Create New City</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Title</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($cities as $city)
        <tr>
            <td>{{ $city->id }}</td>
            <td><img src="{{ Storage::url($city->image) }}" height="75" width="75" alt="" /></td>
            <td>{{ $city->title }}</td>
        
            <td>
                <form action="{{ route('cities.destroy',$city->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('cities.edit',$city->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $cities->links() !!}

@endsection