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
                    @if($users->isEmpty())
                        <div class="alert alert-info">Tidak ada pengguna yang tersedia.</div>
                    @else
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>No. Telephone</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->username ?? '-' }}</td>
                                    <td>{{ $user->name ?? '-' }}</td>
                                    <td>{{ $user->email ?? '-' }}</td>
                                    <td>{{ $user->no_telephone ?? '-' }}</td>
                                    <td>{{ $user->alamat ?? '-' }}</td>
                                    <td>
                                        <!-- Button trigger modal for update -->
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updateUserModal{{ $user->id_customer }}">
                                            Update
                                        </button>
                                        <!-- Button trigger modal for delete -->
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteUserModal{{ $user->id_customer }}">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Create User -->
<div class="modal fade" id="createUserModal" tabindex="-1" role="dialog" aria-labelledby="createUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="createUserModalLabel">Tambah Pengguna Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Input fields -->
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telephone">No. Telephone</label>
                        <input type="text" class="form-control" id="no_telephone" name="no_telephone" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
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
<div class="modal fade" id="updateUserModal{{ $user->id_customer }}" tabindex="-1" role="dialog" aria-labelledby="updateUserModalLabel{{ $user->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('user.update', $user->id_customer) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="updateUserModalLabel{{ $user->id_customer }}">Update Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Input fields -->
                    <div class="form-group">
                        <label for="username{{ $user->id_customer }}">Username</label>
                        <input type="text" class="form-control" id="username{{ $user->id_customer }}" name="username" value="{{ $user->username }}" required>
                    </div>
                    <div class="form-group">
                        <label for="name{{ $user->id_customer }}">Name</label>
                        <input type="text" class="form-control" id="name{{ $user->id_customer }}" name="name" value="{{ $user->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email{{ $user->id_customer }}">Email</label>
                        <input type="email" class="form-control" id="email{{ $user->id_customer }}" name="email" value="{{ $user->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telephone{{ $user->id_customer }}">No. Telephone</label>
                        <input type="text" class="form-control" id="no_telephone{{ $user->id_customer }}" name="no_telephone" value="{{ $user->no_telephone }}" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat{{ $user->id_customer }}">Alamat</label>
                        <input type="text" class="form-control" id="alamat{{ $user->id_customer }}" name="alamat" value="{{ $user->alamat }}" required>
                    </div>
                    <div class="form-group">
                        <label for="password{{ $user->id_customer }}">Password (Kosongkan jika tidak ingin mengubah)</label>
                        <input type="password" class="form-control" id="password{{ $user->id_customer }}" name="password">
                    </div>
                    <div class="form-group" id="password_confirmation_div{{ $user->id_customer }}" style="display:none;">
                        <label for="password_confirmation{{ $user->id_customer }}">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation{{ $user->id_customer }}" name="password_confirmation">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<!-- Modal for delete -->
@foreach ($users as $user)
<div class="modal fade" id="deleteUserModal{{ $user->id_customer }}" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel{{ $user->id_customer }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('user.delete', $user->id_customer) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteUserModalLabel{{ $user->id_customer }}">Hapus Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus pengguna ini?</p>
                    <p><strong>Username: </strong>{{ $user->username }}</p>
                    <p><strong>Email: </strong>{{ $user->email }}</p>
                    <div class="form-group">
                        <label for="adminEmail{{ $user->id_customer }}">Email Admin</label>
                        <input type="email" class="form-control" id="adminEmail{{ $user->id_customer }}" name="adminEmail" required>
                    </div>
                    <div class="form-group">
                        <label for="adminPassword{{ $user->id_customer }}">Password Admin</label>
                        <input type="password" class="form-control" id="adminPassword{{ $user->id_customer }}" name="adminPassword" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        @foreach($users as $user)
            $('#password{{ $user->id_customer }}').on('input', function() {
                if ($(this).val().length > 0) {
                    $('#password_confirmation_div{{ $user->id_customer }}').show();
                } else {
                    $('#password_confirmation_div{{ $user->id_customer }}').hide();
                    $('#password_confirmation{{ $user->id_customer }}').val('');
                }
            });
        @endforeach
    });
</script>
@endsection
