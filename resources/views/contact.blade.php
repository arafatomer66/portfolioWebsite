
@extends('layouts.app')


@section('content')


<h1>Contacts </h1>

{!! Form::open(['url' => 'contact/submit']) !!}
    
    <div class="form-group">

    	{{ Form::label('name', 'Name') }}
    	{{ Form::text('username','' ,[ 'class' => 'form-control','placeholder'=> 'Enter Name']) }}  
    	
    </div>

    <div class="form-group">
    	
        {{ Form::label('email', 'Email') }}
    	{{ Form::text('email', '' , [ 'class' => 'form-control','placeholder'=> 'Enter Email'])}}
    	
    </div>
     <div class="form-group">
    	
        {{ Form::label('message', 'Message') }}
    	{{ Form::textarea('message', '' , [ 'class' => 'form-control','placeholder'=> 'Enter Message']) }}
    	
    </div>
    <div class="form-group">
    	
     
    	{{ Form::submit('Submit', ['class' => 'btn btn-primary'] ) }}
    	
    </div>


{!! Form::close() !!}


@endsection


@section('sidebar')
     
   

    <h4>You can contact with me anytime you want for help . Please meassge me !</h4>

@endsection





