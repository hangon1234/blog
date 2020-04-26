@extends('layouts.master')
@section("title", "Administrator page")
@section("body")
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->message}}</td>
                <td><a href="{{url('/contact/delete/'.$contact->id)}}">Delete</a></td>
            </tr>

        @endforeach
    </tbody>
</table>
{{$contacts->links()}}
@endsection