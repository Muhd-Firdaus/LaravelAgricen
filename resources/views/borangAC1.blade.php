@extends('layouts\layout')

@section('title', 'Borang AC1 - Banci Pertanian')

@section('content')
<div class="card">
    <div class="card-body pt-3">
        <!-- Bordered Tabs -->
        {{-- <ul class="nav nav-tabs nav-tabs-bordered"> --}}
        <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">

        <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#kegunaan-pejabat">kegunaan pejabat</button>
        </li>

        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
        </li>
        
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
        </li>

        </ul>
        <div class="tab-content pt-2">

        <div class="tab-pane fade show active kegunaan-pejabat" id="kegunaan-pejabat">
            
            <!-- kegunaan-pejabat -->
            <form action="/profile-update" method="POST">
                @csrf

                <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-1 col-form-label">a)</label>
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Kod Respon / Respond Code</label>
                    <label for="fullName" class="col-md-4 col-lg-1 col-form-label">R</label>
                    <label for="fullName" class="col-md-4 col-lg-1 col-form-label">11</label>
                    <div class="col-md-8 col-lg-6">
                        <input name="R" type="text" class="form-control" id="R" value="">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-1 col-form-label">b)</label>
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Negeri / State</label>
                    <label for="fullName" class="col-md-4 col-lg-1 col-form-label">NG</label>
                    <label for="fullName" class="col-md-4 col-lg-1 col-form-label">01</label>
                    <div class="col-md-8 col-lg-6">
                        <input name="NG" type="text" class="form-control" id="NG" value="">
                    </div>
                </div>

                <div class="text-center">
                </div>
            {{-- </form><!-- End Profile Edit Form --> --}}
        </div>

        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

            <!-- Profile Edit Form -->
                <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-8 col-lg-9">
                    <img src="assets/img/profile-img.jpg" alt="Profile">
                    <div class="pt-2">
                        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama / Name</label>
                    <div class="col-md-8 col-lg-9">
                    <input name="name" type="text" class="form-control" id="fullName" value="{{ auth()->user()->name }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">IC</label>
                    <div class="col-md-8 col-lg-9">
                    <input name="ic" type="text" class="form-control" id="ic" value="{{ auth()->user()->ic }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                    <input name="email" type="email" class="form-control" id="Email" value="{{ auth()->user()->email }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                    <div class="col-md-8 col-lg-9">
                    <input name="phone" type="text" class="form-control" id="Phone" value="{{ auth()->user()->phone }}">
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Save Changes</button>
                </div>
            </form><!-- End Profile Edit Form -->

        </div>

        <div class="tab-pane fade pt-3" id="profile-change-password">
            <!-- Change Password Form -->
            <form>

            <div class="row mb-3">
                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                <div class="col-md-8 col-lg-9">
                <input name="password" type="password" class="form-control" id="currentPassword">
                </div>
            </div>

            <div class="row mb-3">
                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                <div class="col-md-8 col-lg-9">
                <input name="newpassword" type="password" class="form-control" id="newPassword">
                </div>
            </div>

            <div class="row mb-3">
                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                <div class="col-md-8 col-lg-9">
                <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Change Password</button>
            </div>
            </form><!-- End Change Password Form -->

        </div>

        </div><!-- End Bordered Tabs -->

    </div>
    </div>
@endsection