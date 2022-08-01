@extends('layouts.app')

@section('template_title')
    Modifying {{$user->name}} info
@endsection

@section('template_linked_css')
    <style type="text/css">
        .btn-save,
        .pw-change-container {
            display: none;
        }
    </style>

    <link href="{{ asset('css/select2.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components\switchery\css\switchery.min.css')}}">

@endsection

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Users</h4>
                        <span>Modify User</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{url('/home')}}"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{url('/users')}}">Users</a></li>
                        <li class="breadcrumb-item"><a href="#!">Edit User</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

    <!-- Page-body start -->
    <div class="page-body">
        <div class="card">
            <div class="card-header">
                <h5>Editing {{$user->name}} Details</h5>
                <div class="card-header-right">
                    <a href="{{ route('users') }}" class="btn btn-round btn-light float-right" >
                        <i class="feather icon-chevrons-left" aria-hidden="true"></i>
                        Back to Users
                    </a>

                </div>
            </div>
            <div class="card-block">
                {!! Form::open(array('route' => ['users.update', $user->id], 'method' => 'PUT', 'role' => 'form', 'class' => 'needs-validation')) !!}

                {!! csrf_field() !!}

                <div class="form-group has-feedback row {{ $errors->has('name') ? ' has-error ' : '' }}">
                    {!! Form::label('name', trans('forms.create_user_label_username'), array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            {!! Form::text('name', $user->name, array('id' => 'name', 'class' => 'form-control', 'placeholder' => 'e.g. vguyo')) !!}

                        </div>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback row {{ $errors->has('paynumber') ? ' has-error ' : '' }}">
                    {!! Form::label('paynumber', 'Paynumber', array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            {!! Form::text('paynumber', $user->paynumber, array('id' => 'paynumber', 'class' => 'form-control', 'placeholder' => 'e.g. 25')) !!}

                        </div>
                        @if ($errors->has('paynumber'))
                            <span class="help-block">
                                <strong>{{ $errors->first('paynumber') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback row {{ $errors->has('first_name') ? ' has-error ' : '' }}">
                    {!! Form::label('first_name', trans('forms.create_user_label_firstname'), array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            {!! Form::text('first_name', $user->first_name, array('id' => 'first_name', 'class' => 'form-control', 'placeholder' => 'e.g. Vincent')) !!}

                        </div>
                        @if ($errors->has('first_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback row {{ $errors->has('last_name') ? ' has-error ' : '' }}">
                    {!! Form::label('last_name', trans('forms.create_user_label_lastname'), array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            {!! Form::text('last_name', $user->last_name, array('id' => 'last_name', 'class' => 'form-control', 'placeholder' => 'e.g. Guyo')) !!}

                        </div>
                        @if ($errors->has('last_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback row {{ $errors->has('email') ? ' has-error ' : '' }}">
                    {!! Form::label('email', trans('forms.create_user_label_email'), array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            {!! Form::text('email', $user->email, array('id' => 'email', 'class' => 'form-control', 'placeholder' => 'e.g. vguyo@whelson.co.zw')) !!}
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback row {{ $errors->has('location') ? ' has-error ' : '' }}">
                    {!! Form::label('location', 'Location', array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            <select class="form-control" name="location" id="location">
                                <option value="{{$user->location}}">{{$user->location}}</option>
                                <option value="Harare">Harare</option>
                                <option value="Beira">Beira</option>
                                <option value="Beitbridge">Beitbridge</option>
                                <option value="Chirundu">Chirundu</option>
                                <option value="DRC">DRC</option>
                                <option value="Forbes">Forbes</option>
                                <option value="Victoria Falls">Victoria Falls</option>
                                <option value="Zambia">Zambia</option>
                            </select>
                        </div>
                        @if ($errors->has('location'))
                            <span class="help-block">
                                <strong>{{ $errors->first('location') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback row {{ $errors->has('ip_address') ? ' has-error ' : '' }}">
                    {!! Form::label('ip_address', 'IP Address', array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            {!! Form::text('ip_address', $user->ip_address, array('id' => 'ip_address', 'class' => 'form-control', 'placeholder' => 'e.g. 192.168.1.23. Use 0.0.0.0 for DHCP users')) !!}

                        </div>
                        <span class="help-block" id="validate_ip"></span>
                        @if ($errors->has('ip_address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ip_address') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback row {{ $errors->has('department') ? ' has-error ' : '' }}">
                    {!! Form::label('department', 'Department', array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            <select class="form-control" name="department" id="department">
                                <option value="{{$user->department}}">{{$user->department}}</option>
                                @if ($departments)
                                    @foreach($departments as $department)
                                        <option value='{{ $department->department }}'>{{ $department->department }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        @if ($errors->has('department'))
                            <span class="help-block">
                                <strong>{{ $errors->first('department') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback row {{ $errors->has('position') ? ' has-error ' : '' }}">
                    {!! Form::label('position', 'Position', array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            <select class="form-control" name="position" id="position">
                                <option value="{{$user->position}}">{{$user->position}}</option>
                            </select>
                        </div>
                        @if ($errors->has('position'))
                            <span class="help-block">
                                <strong>{{ $errors->first('position') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback row {{ $errors->has('mobile') ? ' has-error ' : '' }}">
                    {!! Form::label('mobile', 'Mobile Number', array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            {!! Form::text('mobile', $user->mobile, array('id' => 'mobile', 'class' => 'form-control', 'placeholder' => 'e.g. 0773418009')) !!}
                        </div>
                        @if ($errors->has('mobile'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobile') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col-sm-12 col-xl-4 m-b-30">
                    <h4 class="sub-title">Is this user Eligible for Backup?</h4>
                    No&nbsp;<input type="checkbox" class="js-single" id="backable" name="backable" value="@if($user->backable == true )1 @else 0 @endif" @if($user->backable == true ) checked="checked" @endif>&nbsp;Yes
                </div>

                <div class="form-group has-feedback row {{ $errors->has('role') ? ' has-error ' : '' }}">

                    {!! Form::label('role', trans('forms.create_user_label_role'), array('class' => 'col-md-3 control-label')); !!}

                    <div class="col-md-9">
                        <div class="input-group">
                            <select class="form-control" name="role" id="role">
                                <option value="">{{ trans('forms.create_user_ph_role') }}</option>
                                @if ($roles)
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}" {{ $currentRole->id == $role->id ? 'selected="selected"' : '' }}>{{ $role->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        @if ($errors->has('role'))
                            <span class="help-block">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="pw-change-container">
                    <div class="form-group has-feedback row {{ $errors->has('password') ? ' has-error ' : '' }}">

                        {!! Form::label('password', trans('forms.create_user_label_password'), array('class' => 'col-md-3 control-label')); !!}

                        <div class="col-md-9">
                            <div class="input-group">
                                {!! Form::password('password', array('id' => 'password', 'class' => 'form-control ', 'placeholder' => trans('forms.create_user_ph_password'))) !!}
                                <div class="input-group-append">
                                    <label class="input-group-text" for="password">
                                        <i class="fa fa-fw {{ trans('forms.create_user_icon_password') }}" aria-hidden="true"></i>
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group has-feedback row {{ $errors->has('password_confirmation') ? ' has-error ' : '' }}">

                        {!! Form::label('password_confirmation', trans('forms.create_user_label_pw_confirmation'), array('class' => 'col-md-3 control-label')); !!}

                        <div class="col-md-9">
                            <div class="input-group">
                                {!! Form::password('password_confirmation', array('id' => 'password_confirmation', 'class' => 'form-control', 'placeholder' => trans('forms.create_user_ph_pw_confirmation'))) !!}
                                <div class="input-group-append">
                                    <label class="input-group-text" for="password_confirmation">
                                        <i class="fa fa-fw {{ trans('forms.create_user_icon_pw_confirmation') }}" aria-hidden="true"></i>
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 mb-2">
                        <a href="#" class="btn btn-outline-secondary btn-round btn-change-pw mt-3" title="{{ trans('forms.change-pw')}} ">
                            <i class="feather icon-lock" aria-hidden="true"></i>
                            <span></span> {!! trans('forms.change-pw') !!}
                        </a>
                    </div>
                    <div class="col-12 col-sm-6">
                        {!! Form::button(trans('forms.save-changes'), array('class' => 'btn btn-success btn-round margin-bottom-1 mt-3 mb-2','type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmSave', 'data-title' => trans('modals.edit_user__modal_text_confirm_title'), 'data-message' => trans('modals.edit_user__modal_text_confirm_message'))) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


    @include('modals.modal-save')
    @include('modals.modal-delete')

@endsection

@section('footer_scripts')

    @include('scripts.delete-modal-script')
    @include('scripts.save-modal-script')
    @include('scripts.check-changed')
    <script src="{{ asset('js/select2.min.js')}}"></script>

    <script type="text/javascript">
        $("#role").select2({
            placeholder: 'Please select a Job Title.',
            allowClear:true,
        });
    </script>

    <script type="text/javascript">
        $("#position").select2({
            placeholder: 'Please select a Job Title.',
            allowClear:true,
        });
    </script>

    <script type="text/javascript">
        $('#department').select2({
            placeholder: 'Please select a department.',
            allowClear:true,
        }).change(function(){
            var department = $(this).val();
            var _token = $("input[name='_token']").val();
            if(department){
                $.ajax({
                    type:"get",
                    url:'{{url('/getTitles')}}/'+department,
                    _token: _token ,
                    success:function(res) {
                        if(res) {
                            $("#position").empty();
                            $.each(res,function(key, value){
                                $("#position").append('<option value="'+value+'">'+value+'</option>');
                            });
                        }
                    }

                });
            }
        });

    </script>

    <script>
        var pattern = /\b(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/;
        x = 46;
        $('#ip_address').keypress(function (e) {
            if (e.which != 8 && e.which != 0 && e.which != x && (e.which < 48 || e.which > 57)) {
                console.log(e.which);
                return false;
            }
        }).keyup(function () {
            var this1 = $(this);
            if (!pattern.test(this1.val())) {
                $('#validate_ip').text('Not a valid IP address');
                while (this1.val().indexOf("..") !== -1) {
                    this1.val(this1.val().replace('..', '.'));
                }
                x = 46;
            } else {
                x = 0;
                var lastChar = this1.val().substr(this1.val().length - 1);
                if (lastChar == '.') {
                    this1.val(this1.val().slice(0, -1));
                }
                var ip = this1.val().split('.');
                if (ip.length == 4) {
                    $('#validate_ip').text('Valid IP');
                }
            }
        });
    </script>

    <!-- Switch component js -->
    <script type="text/javascript" src="{{asset('bower_components\switchery\js\switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets\pages\advance-elements\swithces.js')}}"></script>


@endsection
