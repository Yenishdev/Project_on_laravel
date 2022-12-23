@extends('loyouts.app')

@section('title-block')
    Contact
@endsection

@section('content')

<h1>Contact</h1>



<form action="{{ route('contact-form') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name: </label>
        <input type="text" name="name" placeholder="your name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email: </label>
        <input type="email" name="email" placeholder="your email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="subject">Subject: </label>
        <input type="text" name="subject" placeholder="your subject" id="subject" class="form-control">
    </div>
    <div class="form-group">
        <label for="message">Message: </label>
        <textarea name="message" id="message" class="form-control" placeholder="enter your message"></textarea>
    </div>
    <button class="btn btn-success my-2">Submit</button>
</form>

    @endsection