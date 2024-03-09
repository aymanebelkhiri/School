@extends('admin.header')
<br>
<br>
<br>
<br>
<br>
<br>
@section('title','ContactAdmin')
@section('adminContent')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($contact))
                        @foreach ($contact as $message)
                            <tr>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->subject }}</td>
                                <td>{{ $message->message }}</td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
