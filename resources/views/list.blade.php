@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h4 class="text-uppercase pt-2">List Signage</h4> 
                        </div>
                        <div class="col">
                            <a href="{{ url('add') }}" class="btn btn-primary mt-2 btn-shadow float-right">Buat Signage</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                <table class="table table-hover mt-3 table-striped" id="pegawai-table">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th>Created</th>
                            <th>Room</th>
                            <th>Event</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $a)
                        <tr>
                            <td>{{ $a->created_at }}</td>
                            <td class="text-center">{{ $a->meeting_room }}</td>
                            <td class="text-center">{{ $a->event_name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
@endsection