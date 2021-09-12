@extends('layouts.user')

@section('head')
<title>Profile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection



@section('content')
<div class="container-fluid">

    <div class="content-wrapper">
        <div class="box_general padding_bottom pb-5">
            <div class="header_box version_2">
                <h1 class="h3 mb-2 text-gray-800">Profile details</h1>
            </div>
            <div class="row">
                <div class="col-md-8 add_top_40">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name='name' class="form-control" value='{{ Auth::user()->name }}' placeholder="Your name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" placeholder="Your last name">
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="text" class="form-control" placeholder="Your telephone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" value='{{ Auth::user()->email }}' placeholder="Your email">
                            </div>
                        </div>
                    </div>
                    <!-- /row-->

                    <!-- /row-->
                </div>
            </div>
    </div>
        <!-- /box_general-->
        <div class="row">

            <div class="col-md-6">
                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h4><i class="fa fa-lock"></i>Change password</h4>
                    </div>
                    <div class="form-group">
                        <label>Old password</label>
                        <input class="form-control" type="password">
                    </div>
                    <div class="form-group">
                        <label>New password</label>
                        <input class="form-control" type="password">
                    </div>
                    <div class="form-group">
                        <label>Confirm new password</label>
                        <input class="form-control" type="password">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h4><i class="fa fa-envelope"></i>Change email</h4>
                    </div>
                    <div class="form-group">
                        <label>Old email</label>
                        <input class="form-control" name="old_email" value="{{ Auth::user()->email }}" id="old_email" type="email">
                    </div>
                    <div class="form-group">
                        <label>New email</label>
                        <input class="form-control" name="email" id="new_email" type="email">
                    </div>
                    <div class="form-group">
                        <label>Confirm new email</label>
                        <input class="form-control" name="confirm_new_email" id="confirm_new_email" type="email">
                    </div>
                </div>
            </div>


        </div>

    </div>




</div>








@endsection

<style>
    .content-wrapper {
        min-height: calc(100vh - 62px);
        padding-top: 1rem;
    }
</style>
