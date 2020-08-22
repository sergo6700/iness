@extends('admin.layouts.app')
@section('main')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header row">
                    <div class="col-6">
                        <h2 class="title">Client</h2>
                    </div>
                    <div class="col-6">
                        <button
                            type="submit"
                            class="btn btn-fill btn-primary float-right"
                            data-toggle="modal"
                            data-target="#clientCreateModal">+
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
                    <table id="client_table" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Client</th>
                            <th>Link</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($client as $row)
                            <tr id="{{$row->id}}">
                                <td>{{$row->id}}</td>
                                <td>{{$row->client}}</td>
                                <td>{{$row->link}}</td>
                                <td>
                                    <a
                                        href="javascript:void(0)"
                                        data-toggle="modal"
                                        data-target="#clientUpdateModal{{$row->id}}"
                                    >edit</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="deleteButton" data-id="{{$row->id}}">Delete</a>
                                </td>
                            </tr>
                            <div class="modal fade" id="clientUpdateModal{{$row->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update
                                                Client {{$row->name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('client.update', ['client' => $row->id])}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Name Surname</label>
                                                            <input type="text"
                                                                   class="form-control text-dark"
                                                                   required
                                                                   value="{{$row->client}}"
                                                                   placeholder="Enter Client Name and Surname"
                                                                   name="client">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 pr-md-1">
                                                        <label>Logo</label>
                                                        <input type="file"
                                                               class="form-control"
                                                               name="logo"
                                                        >
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Link</label>
                                                            <input type="text"
                                                                   class="form-control text-dark"
                                                                   required
                                                                   value="{{$row->link}}"
                                                                   placeholder="Example: https://example.com"
                                                                   name="link">
                                                        </div>
                                                    </div>
                                                </div>
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
                        Client Page
                    </p>
                </div>
                <div class="card-description">
                    In this page You can add, update or delete our awesome clients
                </div>
            </div>
        </div>
    </div>

    {{--    modal--}}
    <div class="modal fade" id="clientCreateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('client.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 pr-md-1">
                                <div class="form-group">
                                    <label>Name Surname</label>
                                    <input type="text"
                                           class="form-control text-dark"
                                           required
                                           placeholder="Enter Client Name and Surname"
                                           name="client">
                                </div>
                            </div>
                            <div class="col-md-12 pr-md-1">
                                <label>Logo</label>
                                <input type="file"
                                       class="form-control"
                                       required
                                       name="logo"
                                >
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="text"
                                           class="form-control text-dark"
                                           required
                                           placeholder="Exmaple: https://exmaple.com"
                                           name="link">
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
                                    url: "/dashboard/client/" + id,
                                    type: 'POST',
                                    data: {
                                        "id": id,
                                        "_method": 'DELETE',
                                    },
                                    success: function () {
                                        swalWithBootstrapButtons.fire(
                                            'Deleted!',
                                            'Our Client has been deleted:(',
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
                                'Our Clientf is safe :)',
                                'error'
                            )
                        }
                    })
                });
                $('#client_table').DataTable();
            });
        </script>
    @endpush
@endsection

