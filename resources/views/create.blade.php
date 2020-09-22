@extends('layouts.master')

@section('content')
    <section class="col-md-6 mx-auto mb-3">

        <form method="post" action="{{route('store')}}">
            @csrf
            <div class="form-group">
                <label>Task Name</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                <div>@error('name') <span class="error text-danger small">{{ $message }}</span> @enderror</div>
            </div>
            <div class="form-group">
                <label>Project</label>
                <select name="project_id" class="form-control {{ $errors->has('project_id') ? ' is-invalid' : '' }}">
                    @foreach($projects as $project)
                        <option value="{{$project->id}}">{{ $project->name }}</option>
                    @endforeach
                </select>
                <div>@error('project_id') <span class="error text-danger small">{{ $message }}</span> @enderror</div>
            </div>
            <div class="form-group">
                <label>Priority</label>
                <select class="form-control {{ $errors->has('priority') ? ' is-invalid' : '' }}" name="priority" id="">
                    <option value="1">High</option>
                    <option value="2">Medium</option>
                    <option value="3">Low</option>
                </select>
                <div>@error('priority') <span class="error text-danger small">{{ $message }}</span> @enderror</div>
            </div>
            <div class="form-group text-right mt-5">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </section>
@endsection