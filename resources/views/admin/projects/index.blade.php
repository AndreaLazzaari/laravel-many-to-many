@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12 p-2 mb-3 text-center">
            <h2>
                Tutti i progetti di, {{ Auth::user()->name }}!
            </h2>
        </div>
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Type</th>
                        <th scope="col">Date</th>
                        <th scope="col">Content</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $projects as $project )
                        <tr>
                            <th scope="row">
                                {{ $project->id }}
                            </th>
                            <td>
                                <a href="{{ route('admin.projects.show', $project) }}">
                                    {{ $project->title }}
                                </a>
                            </td>
                            <td>
                                {{ $project->author }}
                            </td>
                            <td>
                                {{ $project->type_id }}
                            </td>
                            <td>
                                {{ $project->date }}
                            </td>
                            <td>
                                <em>
                                    {{ substr($project->content, 0, 35) }}
                                </em>
                            </td>
                            <td>
                                <a href="{{ route('admin.projects.show', $project) }}">
                                    <button class="btn btn-sm btn-primary">
                                        View
                                    </button>
                                </a>
                                <a href="{{ route('admin.projects.edit', $project) }}">
                                    <button class="btn btn-sm btn-success">
                                        Edit
                                    </button>
                                </a>
                                <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-sm btn-warning" type="submit">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                There are no projects available
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 