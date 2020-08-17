@extends('admin.layouts.app')
@section('main')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header row">
                    <div class="col-6">
                        <h2 class="title">Categories</h2>
                    </div>
                    <div class="col-6">
                        <button
                            type="submit"
                            class="btn btn-fill btn-primary float-right"
                            data-toggle="modal"
                            data-target="#categoryCreateModal">+
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
                    <table id="category_table" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $row)
                            <tr id="{{$row->id}}">
                                <td>{{$row->id}}</td>
                                <td>{{$row->name}}</td>
                                <td>
                                    <a
                                        href="javascript:void(0)"
                                        data-toggle="modal"
                                        data-target="#categoryCreateModal{{$row->id}}"
                                    >edit</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="deleteButton" data-id="{{$row->id}}">Delete</a>
                                </td>
                            </tr>
                            <div class="modal fade" id="categoryCreateModal{{$row->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update
                                                Category {{$row->name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('category.update', ['category' => $row->id])}}"
                                              method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="modal-body">
                                                <input type="text" name="name" class="form-control text-dark"
                                                       id="inlineFormInputGroup" placeholder="Enter Name">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </tbody>
                    </table>
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
                        Category Page
                    </p>
                </div>
                <div class="card-description">
                    In this page You can create, update or delete category
                </div>
            </div>
        </div>
    </div>

    {{--    modal--}}
    <div class="modal fade" id="categoryCreateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create New Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('category.store')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="text" name="name" class="form-control text-dark" id="inlineFormInputGroup"
                               placeholder="Enter Name">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--    end modal--}}

    @push('scripts')
        <script>
            $(document).ready(function () {
                $(document).on('click', '.deleteButton', function (e) {
                    e.preventDefault();
                    var id = $(this).data('id');
                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: 'btn btn-success',
                            cancelButton: 'btn btn-danger'
                        },
                        buttonsStyling: false
                    })

                    swalWithBootstrapButtons.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'No, cancel!',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.value) {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax(
                                {
                                    url: "/dashboard/category/" + id,
                                    type: 'POST',
                                        data: {
                                        "id": id,
                                        "_method": 'DELETE',
                                    },
                                    success: function () {
                                        swalWithBootstrapButtons.fire(
                                            'Deleted!',
                                            'Your file has been deleted.',
                                            'success'
                                        )
                                        $('#' + id).remove()
                                    }
                                });

                        } else if (
                            /* Read more about handling dismissals below */
                            result.dismiss === Swal.DismissReason.cancel
                        ) {
                            swalWithBootstrapButtons.fire(
                                'Cancelled',
                                'Category is safe :)',
                                'error'
                            )
                        }
                    })
                });
                $('#category_table').DataTable();
            });
        </script>
    @endpush
@endsection

