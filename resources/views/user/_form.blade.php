{!! Form::open([ 'url' => route('user.store'), 'class' => 'form-inline join' ]) !!}
	@include('errors._summary')
	<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
		{!! Form::email('email', null, [ 'class' => 'form-control', 'placeholder' => 'Enter your email...' ]) !!}
	</div>
	{!! Form::submit('Step inside!', [ 'class' => 'btn btn-bluesmart' ]) !!}
{!! Form::close() !!}

