@extends('admin.layouts.app')
@section('main')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Create Team Member</h5>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
                    <form method="POST" action="{{route('team.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-5 pr-md-1">
                                <div class="form-group">
                                    <label>Name Surname</label>
                                    <input type="text"
                                           class="form-control"
                                           required
                                           placeholder="Enter Member Name and Surname"
                                           name="name">
                                </div>
                            </div>
                            <div class="col-md-5 pr-md-1">
                                <label>Image</label>
                                <input type="file"
                                       class="form-control"
                                       required
                                       name="image"
                                >
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Profession</label>
                                    <input type="text"
                                           class="form-control"
                                           required
                                           placeholder="Enter member profession"
                                           name="profession">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-primary ">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>

                    <p class="description">
                        Add New Member
                    </p>
                </div>
                <div class="card-description">
                    In this page You can add new member our awesome team!
                </div>
            </div>
        </div>
    </div>
@endsection
