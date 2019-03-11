@extends('layouts.app')

@section('content')
    <main class="cover-access" role="main">
        <h4>Let's Get Back in Touch</h4>
        {!! Form::open(['action' => 'NewsletterController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::text('full_name', '', ['class'=> 'mv-input', 'placeholder' => 'Name'])}}
            </div>
            <div class="form-group">
                {{Form::email('email', '', ['class'=> 'mv-input', 'placeholder' => 'Email'])}}
            </div>
            <div class="form-group">
                {{Form::text('phone_number', '', ['class'=> 'mv-input', 'placeholder' => 'Phone Number'])}}
            </div>
            <p class="mv-bn">
                {{Form::button('Get Private Access', ['type' => 'submit', 'class' => "btn-rounded"])}}
            </p>
        {!! Form::close() !!} 
    </main>
@endsection