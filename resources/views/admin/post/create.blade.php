@extends('admin.layouts.app')
@section('main')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Create Post</h5>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
                    <form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="template_name" value="{{$templateName->name}}">
                        <div class="row">
                            <div class="col-md-12 pr-md-1">
                                <div class="form-group">
                                    <select name="category_id" required class="form-control text-light" id="">
                                        <option value="">Choose Category</option>
                                        @foreach($category as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 pr-md-1">
                                <div class="form-group">
                                    <label>Project Title</label>
                                    <input type="text"
                                           class="form-control"
                                           required
                                           placeholder="Enter Project Title"
                                           name="project_title">
                                </div>
                            </div>
                            <div class="col-md-5 pr-md-1">
                                <label>Project File</label>
                                <input type="file"
                                       class="form-control"
                                       required
                                       name="project_image"
                                >
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Project description</label>
                                    <textarea
                                        class="form-control"
                                        required
                                        placeholder="Enter project descriptin"
                                        name="project_description"
                                    ></textarea>
                                </div>
                            </div>
                        @foreach($template as $field)
                                @if($field->type == 'text')
                                    <div class="col-md-5 pr-md-1">
                                        <div class="form-group">
                                            <label>{{ucfirst(str_replace('_', ' ',$field->name))}}</label>
                                            <input type="{{$field->type}}"
                                                   class="form-control"
                                                   required
                                                   placeholder="{{ucfirst(str_replace('_', ' ',$field->name))}}"
                                                   name="{{$field->name}}">
                                        </div>
                                    </div>
                                @endif
                                @if($field->type == 'textarea')
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>{{ucfirst(str_replace('_', ' ',$field->name))}}</label>
                                            <textarea
                                                class="form-control"
                                                required
                                                placeholder="{{ucfirst(str_replace('_', ' ',$field->name))}}"
                                                name="{{$field->name}}"
                                            ></textarea>
                                        </div>
                                    </div>
                                @endif
                                @if($field->type == 'file')
                                    <div class="col-md-5 pr-md-1">
                                        <label>{{ucfirst(str_replace('_', ' ',$field->name))}}</label>
                                        <input type="{{$field->type}}"
                                               class="form-control"
                                               required
                                               name="{{$field->name}}[]"
                                               multiple>
                                    </div>
                                @endif
                            @endforeach
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
                        Create Your post
                    </p>
                </div>
                <div class="card-description">
                    In this page You can create new post,
                    please select category,
                    in project image please upload only one image
                    link must be "https://example.com"
                </div>
            </div>
        </div>
    </div>
@endsection
