@extends('admin.layouts.app')
@section('main')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header row">
                    <div class="col-6">
                        <h2 class="title">Feedback</h2>
                    </div>
                    <div class="col-6">
                        <button
                            type="submit"
                            class="btn btn-fill btn-primary float-right"
                            data-toggle="modal"
                            data-target="#feedbackCreateModal">+
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
                    <table id="feedback_table" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($feedback as $row)
                            <tr id="{{$row->id}}">
                                <td>{{$row->id}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->company}}</td>
                                <td>
                                    <a
                                        href="javascript:void(0)"
                                        data-toggle="modal"
                                        data-target="#feedbackUpdateModal{{$row->id}}"
                                    >edit</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="deleteButton" data-id="{{$row->id}}">Delete</a>
                                </td>
                            </tr>
                            <div class="modal fade" id="feedbackUpdateModal{{$row->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update
                                                Feedback {{$row->name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('feedback.update', ['feedback' => $row->id])}}"
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
                                                                   value="{{$row->name}}"
                                                                   placeholder="Enter Client Name and Surname"
                                                                   name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Profession</label>
                                                            <input type="text"
                                                                   class="form-control text-dark"
                                                                   required
                                                                   value="{{$row->company}}"
                                                                   placeholder="Enter Company Name"
                                                                   name="company">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Feedback</label>
                                                            <textarea
                                                                class="form-control"
                                                                required
                                                                value="{{$row->feedback}}"
                                                                placeholder="Enter feedback"
                                                                name="feedback"
                                                            >{{$row->feedback}}</textarea>
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
                        Feedback Page
                    </p>
                </div>
                <div class="card-description">
                    In this page You can create, update or delete feedback
                </div>
            </div>
        </div>
    </div>

    {{--    modal--}}
    <div class="modal fade" id="feedbackCreateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Feedback</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('feedback.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-5 pr-md-1">
                                <div class="form-group">
                                    <label>Name Surname</label>
                                    <input type="text"
                                           class="form-control text-dark"
                                           required
                                           placeholder="Enter Client Name and Surname"
                                           name="name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Profession</label>
                                    <input type="text"
                                           class="form-control text-dark"
                                           required
                                           placeholder="Enter Company Name"
                                           name="company">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Feedback</label>
                                    <textarea
                                        class="form-control"
                                        required
                                        placeholder="Enter feedback"
                                        name="feedback"
                                    ></textarea>
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
                                    url: "/dashboard/feedback/" + id,
                                    type: 'POST',
                                    data: {
                                        "id": id,
                                        "_method": 'DELETE',
                                    },
                                    success: function () {
                                        swalWithBootstrapButtons.fire(
                                            'Deleted!',
                                            'Our feedback has been deleted:(',
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
                                'Our feedback is safe :)',
                                'error'
                            )
                        }
                    })
                });
                $('#feedback_table').DataTable();
            });
        </script>
    @endpush
@endsection

