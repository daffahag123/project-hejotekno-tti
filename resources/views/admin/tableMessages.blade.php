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
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

@section('scripts')
<!-- Include Bootstrap JS if not already included -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
