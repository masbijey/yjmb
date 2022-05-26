@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h4 class="text-uppercase pt-2">Buat Signage</h4> 
                                </div>
                                <div class="col">
                                </div>
                            </div>
                        </div>
                
                        <div class="card-body">
                            <form class="" action="{{ route('store') }}" method="POST">
                                @csrf <!-- {{ csrf_field() }} -->

                                <div class="row mb-3">
                                    <label for="event_name" class="col-md-4 col-form-label text-md-end">Nama Event :</label>
                                    <div class="col-md-6">
                                        <input id="event_name" type="text" class="form-control" name="event_name" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="event_name" class="col-md-4 col-form-label text-md-end">Meeting Room :</label>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="meeting_room" id="exampleRadios1" value="pu" required>
                                            <label class="form-check-label" for="exampleRadios1">
                                            Power Up
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="meeting_room" id="exampleRadios2" value="gu" required>
                                            <label class="form-check-label" for="exampleRadios2">
                                            Gear Up
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="meeting_room" id="exampleRadios3" value="lu" required>
                                            <label class="form-check-label" for="exampleRadios3">
                                            Light Up
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
                                <a href="{{ url('') }}" class="btn btn-sm btn-secondary">Batal</a>

                            </form>
                        </div>
@endsection