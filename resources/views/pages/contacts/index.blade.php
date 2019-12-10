@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header">
        <h4 class="page-title">Lists of Contacts</h4>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header justify-content-between">
                <div class="card-title">Data Tables</div>
                <a href="{{ route('contacts.create') }}" style="float:right" class="btn btn-outline-primary"><i class="fa fa-plus mr-2"></i>Add Brand</a>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th class="wd-15p">ID</th>
                                <th class="wd-15p">First Name</th>
                                <th class="wd-15p">Last Name</th>
                                <th class="wd-20p">Email</th>
                                <th class="wd-20p">Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->fname }}</td>
                                    <td>{{ $contact->lname }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown">
                                                <i class="fa fa-spin fa-cogs mr-2"></i>Actions
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('contacts.show', $contact->id) }}">View</a>
                                                <a class="dropdown-item" href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
                                                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you you want to delete this item?');" class="dropdown-item">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- table-wrapper -->
        </div>
        <!-- section-wrapper -->

        </div>
    </div>
</div>
@endsection

@push('additionalCSS')
<link href="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
@endpush

@push('additionalJS')
<script src="{{ asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>

<script>
    $(function(e) {
        $('#example').DataTable();
    } );
</script>
@endpush