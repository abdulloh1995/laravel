@extends('layouts.app')
@section('title-block')
    Contacts
@endsection
@section('content')
<h1>Contacts</h1>
<form action="{{ route('contact-form') }}" method="POST">
    @csrf
<div class="form-group my-3">
    <label for="name">Enter your name</label>
    <input class="form-control" type="text" name="name" placeholder="Enter your name" id="name">
</div>

<div class="form-group my-3">
    <label for="email">Enter your email</label>
    <input class="form-control" type="text" name="email" placeholder="Enter your email" id="email">
</div>

<div class="form-group my-3">
    <label for="comment">Comment</label>
    <input class="form-control" type="text" name="comment" placeholder="Enter your Comment" id="comment">
</div>

<div class="form-group my-3">
    <label for="message">Message</label>
    <textarea class="form-control" name="message" id="message" placeholder="Enter message"></textarea>
</div>

<button class="btn btn-success" type="submit">Submit</button>
</form>
@endsection