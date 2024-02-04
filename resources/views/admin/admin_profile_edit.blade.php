@extends('admin.admin_master')
@section('admin')

<style>

.bn632-hover {
  width: 160px;
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  cursor: pointer;
  margin: 20px;
  height: 55px;
  text-align:center;
  border: none;
  background-size: 300% 100%;
  border-radius: 50px;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.bn632-hover:hover {
  background-position: 100% 0;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.bn632-hover:focus {
  outline: none;
}

.bn632-hover.bn22 {
  background-image: linear-gradient(
    to right,
    #0ba360,
    #3cba92,
    #30dd8a,
    #2bb673
  );
  box-shadow: 0 4px 15px 0 rgba(23, 168, 108, 0.75);
}
</style>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{route('store.profile')}}">
                            @csrf

                            <h4 class="card-title">Edit Profile</h4>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">User Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="edit_name" type="text" value="{{$editData->name}}" id="example-text-input">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">User Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="edit_email" type="text" value="{{$editData->email}}" id="example-text-input">
                                </div>
                            </div>

                            {{-- For Image --}}
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">User Profile Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="profile_image" type="file" id="user-image-input">
                                </div>
                            </div>
                            <!-- end row -->

                            {{-- Uploaded Pic --}}
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <center>
                                        <img class="rounded avatar-lg" 
                                        src="{{ (!empty($editData->profile_picture)) ? url('upload/admin_images/' . $editData->profile_picture) : url('upload/no_image.jpg') }}" 
                                        alt="Card image cap">
                                    </center>
                                </div>
                            </div>

                            <a href=""><button class="bn632-hover bn22">Update</button></a>

                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Listen for file input changes
        $('input[name="profile_image"]').on('change', function () {
            // Get the selected file
            var file = this.files[0];

            if (file) {
                // Create a FileReader object to read the file
                var reader = new FileReader();

                // Set a callback function to run when the file is loaded
                reader.onload = function (e) {
                    // Update the image source with the data URL
                    $('#image-preview').attr('src', e.target.result);
                };

                // Read the file as a data URL
                reader.readAsDataURL(file);
            }
        });
    });
</script>
@endsection
