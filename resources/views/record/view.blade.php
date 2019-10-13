@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div>
                <h1>Case Status: {{$record->status->status}}</h1>
                </div>
                <div>
                <h4 class="mr-auto">Student Name: {{$record->student->name}}</h4>
                <h5 class="mr-auto">Home Address: {{$record->student->home_address}}</h5>
                </div>
            </div>
            <div class="col-6">
                <form action="">
                    <div class="form-group">
                    <label for="">Case Title</label>
                    <input type="text" class="form-control" value="{{$record->case_title}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Grade Year</label>
                        <input type="text" class="form-control" value="{{$record->grade_year}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Complainant</label>
                        <input type="text" class="form-control" value="{{$record->complainant}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Complains</label>
                        <textarea value=""  class="form-control" readonly>{{$record->complain}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Penalty</label>
                        <input type="text" class="form-control" value="{{$record->penalty}}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Adviser</label>
                      <input type="text" class="form-control" value="{{$record->adviser->teacher_name}}" readonly>
                  </div>
                    <div class="form-group">
                        <label for="">Date Created</label>
                        <input type="text" class="form-control" value="{{$record->created_at}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Date Updated</label>
                        <input type="text" class="form-control" value="{{$record->updated_at}}" readonly>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection