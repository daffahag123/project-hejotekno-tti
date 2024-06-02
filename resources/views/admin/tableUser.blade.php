@extends('layouts.master')

@section('title')
    Dashboard || Dashboard of Hejotekno
@endsection

@section('content')
<!-- Check if there's a success message -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@elseif(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">User Table</h4>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createUserModal">
                    Tambah User
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <tr>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Password</th>
                                <th>Google ID</th>
                                <th>Email</th>
                                <th>No. Telephone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
    <tr>
        <td>{{ $user->username ?? '-' }}</td>
        <td>{{ $user->name ?? '-' }}</td>
        <td>{{ $user->password ?? '-' }}</td>
        <td>{{ $user->google_id ?? '-' }}</td>
        <td>{{ $user->email ?? '-' }}</td>
        <td>{{ $user->no_telephone ?? '-' }}</td>
        <td>
            <!-- Button trigger modal for update -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updateUserModal{{ $user->id }}">
                Update
            </button>
            <!-- Button trigger modal for delete -->
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteUserModal{{ $user->id }}">
                Delete
            </button>
        </td>
    </tr>
@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Create User -->
<div class="modal fade" id="createUserModal" tabindex="-1" role="dialog" aria-labelledby="createUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="createUserModalLabel">Tambah Pengguna Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Tambahkan input fields yang sesuai untuk membuat user baru -->
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <!-- Tambahkan input fields lainnya sesuai kebutuhan -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal for update -->
@foreach ($users as $user)
<div class="modal fade" id="updateUserModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="updateUserModalLabel{{ $user->id }}" aria-hidden="true">
    <!-- Modal content -->
</div>
@endforeach

<!-- Modal for delete -->
@foreach ($users as $user)
<div class="modal fade" id="deleteUserModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel{{ $user->id }}" aria-hidden="true">
    <!-- Modal content -->
</div>
@endforeach

@endsection

@section('scripts')
<!-- Include Bootstrap JS if not already included -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
