@extends('backend.backend_layout')

@section('head')
    <title>TravelGo - Admin dashboard</title>
    <meta name="description" content="">
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Activities</li>
            </ol>
            <div class="box_general">
                <div class="header_box">
                    <h2 class="d-inline-block">Activities</h2>
                    <div class="filter">
                        <select name="orderby" class="selectbox">
                            <option value="Any time">Any time</option>
                            <option value="Latest">Latest</option>
                            <option value="Oldest">Oldest</option>
                        </select>
                    </div>
                </div>
                <div class="list_general">
                    <ul>
                        @foreach ($activities as $activity)
                        <li>
                            <figure><img src="img/item_1.jpg" alt=""></figure>
                            <small>Hotel</small>
                            <h4>{{ $activity->title }}</h4>
                            <p>{{ $activity->description1 }}</p>
                            <form action="{{ route('activities.destroy',$activity->id) }}" method="POST">
                            <p><a href="{{ route('activities.show',$activity->id) }}" class="btn_1 gray"><i class="fa fa-fw fa-eye"></i> View item</a></p>
                            <p><a href="{{ route('activities.edit',$activity->id) }}" class="btn_1 gray"><i class="fa fa-fw fa-eye"></i> Edit item</a></p>
                            <ul class="buttons">
                                @csrf
                                @method('DELETE')
                                <li> <button type="submit" class="btn_1 gray delete wishlist_close">Delete</button></li>

                            </ul>
                            </form>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- /box_general-->
            <nav aria-label="...">
                <ul class="pagination pagination-sm add_bottom_30">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <!-- /pagination-->
        </div>
        <!-- /container-fluid-->
    </div>
@endsection
