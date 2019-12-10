@extends('layouts.master')

@section('content')

<div class="container">
    <div class="page-header">
        <h4 class="page-title">Lists of Contacts</h4>
    </div>
    <a href="{{ route('contacts.index') }}" class="btn btn-danger">Back</a>
    <div class="row">
        <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header justify-content-between">
                <div class="card-title">Contacts</div>
            </div>

            <div class="content-wrapper">
                    <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><h5>Firstname</h5></label>
                                                <div class="col-sm-10">
                                                    <input type="text" readonly class="form-control" value="{{ $contact->fname }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><h5>Lastname</h5></label>
                                                <div class="col-sm-10">
                                                    <input type="text" readonly class="form-control" value="{{ $contact->lname }}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><h5>Email</h5></label>
                                                <div class="col-sm-10">
                                                    <input type="text" readonly class="form-control" value="{{ $contact->email }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><h5>Phone number</h5></label>
                                                <div class="col-sm-10">
                                                    <input type="text" readonly class="form-control" value="{{ $contact->phone }}">
                                                </div>
                                            </div>
                                            <div class="pt-3">
                                                <a href="{{ route('contacts.edit', $contact->id) }}"class="btn btn-secondary btn-rounded" style="float:right"> Edit </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection