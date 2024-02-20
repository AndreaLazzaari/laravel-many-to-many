@extends('layouts.admin')

@section('title', 'Creating a new project')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            @include('partials.errors')

            <form action="{{ route('admin.projects.update', $project)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 input-group">
                    <label for="title" class="input-group-text">Title:</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $project->title)}}">
                </div>

                <div class="mb-3 input-group">
                    <label for="author" class="input-group-text">Author:</label>
                    <input class="form-control" type="text" name="author" id="author" value="{{ old('author', $project->author)}}">
                </div>

                <div class="mb-3 input-group">
                    <label for="type" class="input-group-text">Type:</label>
                    <input class="form-control" type="text" name="type" id="type" value="{{ old('type', $project->type)}}">
                </div>

                <div class="mb-3 input-group">
                    <label for="date" class="input-group-text">Date:</label>
                    <input class="form-control" type="date" name="date" id="date" value="{{ old('date', $project->date)}}">
                </div>

                <div class="mb-3 input-group">
                    <label for="request" class="input-group-text">project request:</label>
                    <textarea class="form-control"  name="request" id="request" cols="30" rows="10">{{ old('request', $project->request)  }}</textarea>
                </div>
                <div class="mb-3 input-group">
                    <button type="submit" class="btn btn-xl btn-primary">
                        Update project
                    </button>
                    <button type="reset" class="btn btn-xl btn-warning">
                        Reset all fields
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection