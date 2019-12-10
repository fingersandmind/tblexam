@extends('layouts.master')

@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h4 class="page-title">Forms</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('contacts.index') }}">Contacts</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update Contact</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ route('contacts.update', $contact->id) }}" method="POST" class="card">
                    @csrf
                    @method('PUT')
                    <div class="card-header">
                        <h3 class="card-title">Update Contact</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Enter Firstname</label>
                                    <input type="text" name="fname" class="form-control @error('fname') is-invalid @enderror" name="example-text-input" 
                                    placeholder="Firstname" value="{{ old('fname') ?? $contact->fname }}">
                                    @error('fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Enter Lastname</label>
                                    <input type="text" name="lname" class="form-control @error('lname') is-invalid @enderror" name="example-text-input" 
                                    placeholder="Lastname" value="{{ old('lname') ?? $contact->lname }}">
                                    @error('lname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Enter Email</label>
                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" name="example-text-input" 
                                    placeholder="Email Address" value="{{ old('email') ?? $contact->email }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Enter Phone number</label>
                                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" name="example-text-input" 
                                    placeholder="Phone numer" value="{{ old('phone') ?? $contact->phone }}">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="flex">
                            <a href="{{ route('contacts.index') }}" class="btn btn-link">Cancel</a>
                            <button type="submit" name="action" value="save" class="btn btn-primary ml-auto">Update</button>
                            <button type="submit" name="action" value="continue" class="btn btn-info ml-auto">Update & Continue</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection