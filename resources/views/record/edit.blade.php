@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-7">
                <h5>Student Name: {{$record->student->name}}</h5>
                <h6>Home Address: {{$record->student->home_address}}</h6>
            </div>
            <div class="col-5">
                <form action="/record/update/{{$record->id}}" method="POST" id="edit_record_form">
                    @csrf
                    <div class="form-group">
                        <label for="">Status:</label>
                        <select name="status_id" class="form-control" id="status_id">
                            @foreach($statuses as $status)
                        <option value="{{$status->id}}" {{$record->status_id == $status->id? "selected" : ""}}>{{$status->status}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">case_title</label>
                    <input type="text" value="{{$record->case_title}}" name="case_title" class="form-control" id="case_title">
                    </div>
                    <div class="form-group">
                        <label for="">Grade</label>
                        <select name="grade_year" id="grade_year" class="py-2 px-2  form-control">
                            <option value="Grade 7" class="form-control"  {{$record->grade_year == "Grade 7" ? "selected" : ""}}>Grade 7</option>
                            <option value="Grade 8" class="form-control" {{$record->grade_year == "Grade 8" ? "selected" : ""}}>Grade 8</option>
                            <option value="Grade 9" class="form-control" {{$record->grade_year == "Grade 9" ? "selected" : ""}}>Grade 9</option>
                            <option value="Grade 10" class="form-control" {{$record->grade_year == "Grade 10" ? "selected" : ""}}>Grade 10</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Complainant</label>
                        <input type="text" class="form-control" value="{{$record->complainant}}" name="complainant" id="complainant">
                    </div>
                    <div class="form-group">
                        <label for="">Complain</label>
                        <textarea value=""  class="form-control" name="complain" id="complain">{{$record->complain}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Penalty</label>
                        <input type="text" class="form-control" value="{{$record->penalty}}" name="penalty" id="penalty">
                    </div>
                    <div class="form-group">
                        <label for="">Adviser</label>
                        <select id="adviser_id" name="adviser_id" id="adviser_id" class="form-control">
                            @foreach($advisers as $adviser)
                                <option value="{{$adviser->id}}" class="py-2 px-2" {{$record->adviser_id == $adviser->id ? "selected" : ""}}>{{$adviser->teacher_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        
                        <input type="hidden" value="{{$record->student_id}}" name="student_id" id="student_id">
                    
                        <input type="hidden" value="{{$record->user_id}}" name="user_id" id="user_id">
                        
                        <input type="hidden" value="{{$record->id}}" name="record_id" id="record_id">
                        <input type="hidden" value="{{Auth::user()->id}}" name="updated_by" id="updated_by">
                    </div>
                    <div class=" form-group mt-4">
                        <button class="btn btn-danger form-control btn-alert" type="submit">
                            <i class="fas fa-2x fa-save"></i>
                            Save
                        </button>
                        <a href="{{ url()->previous() }}" class="btn btn-primary form-control mt-2">Back</a>
                    </div>   
                </form>
            </div>
        </div>
    </div>
@endsection