@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form>

                                <h4 class="card-title">Edit Profile Page</h4>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input name="name" class="form-control" type="text" id="example-text-input"
                                            value="{{$editData->name}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">User Email</label>
                                    <div class="col-sm-10">
                                        <input name="email" class="form-control" type="email" id="example-text-input"
                                            value="{{$editData->email}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">User Name</label>
                                    <div class="col-sm-10">
                                        <input name="username" class="form-control" type="text" id="example-text-input"
                                            value="{{$editData->username}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                                    <div class="col-sm-10">
                                        <input id="image" name="profile_image" class="form-control" type="file"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="row mb-3">

                                    <div class="col-sm-10">
                                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                        <img id="showImage" class="rounded avatar-lg"
                                            src="{{asset('backend/assets/images/small/img-1.jpg')}}" alt="Card image cap">
                                    </div>
                                </div>
                                <input type="submit" value="Update Profile" class="btn btn-info waves-effect waves-light">
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#image').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);

                }
                reader.readAsDataURL(e.target.files['0']);

            });
        });

    </script>

@endsection