@extends('auth')


@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">

					<div class="panel-heading">Register</div>
					<div class="panel-body">

						<form class="form-horizontal" role="form" method="POST" action="/auth/register">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Username</label>
                                        {!! Form::text('username', null, ['class' => 'form-control']) !!}
                                        {!! $errors->first('username', '<span class="text-danger">:message</span>') !!}

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Type</label>
                                            {!! Form::select('type', ['admin' => 'admin', 'user' => 'user'], null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        {!! Form::password('password', ['class' => 'form-control']) !!}
                                        {!! $errors->first('password', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password</label>
                                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                                        {!! $errors->first('password_confirmation', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
                                        {!! $errors->first('firstname', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
                                        {!! $errors->first('lastname', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                        {!! $errors->first('email', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                                        {!! $errors->first('phone', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                            </div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary">Register</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>

@stop
