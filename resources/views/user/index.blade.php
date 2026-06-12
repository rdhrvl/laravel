@extends('layouts.app')
@section('title', 'User')
@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $title ?? '' }}</h3>
        </div>
        <div class="card-body">
            <div class="mb-3" align="right">
                <a href="{{ route('user.create') }}" class="btn btn-primary">Create New User</a>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        <tr>
                            <td>{{ $index += 1 }}</td>
                            <td>{{ $user->name ?? '' }}</td>
                            <td>{{ $user->email ?? '' }}</td>
                            <td>
                                @forelse ($user->roles as $role)
                                    <span class="badge bg-primary">{{ $role->name }}</span>
                                @empty
                                    <span class="badge bg-primary">-</span>
                                @endforelse
                            </td>
                            <td>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary icon">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger"
                                    data-confirm-delete="true"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
