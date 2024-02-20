@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>
                {{ $project->title }}
            </h2>
        </div>
        <div class="col-12">
            <h2 scope="row">
                {{ $project->id }}
            </h2>

            <p>
                {{ $project->author }}
            </p>
            <p>
                {{ $project->type }}
            </p>
            <p>
                {{ $project->date }}
            </p>
            <div class="p-5">
                <p>
                    <em>
                        {{ $project->request}}
                    </em>
                </p>
            </div>
                <button class="btn btn-sm btn-success">
                    Edit
                </button>
                <button class="btn btn-sm btn-warning">
                    Delete
                </button>
            </p>
        </tr>
        </div>
    </div>
</div>
@endsection