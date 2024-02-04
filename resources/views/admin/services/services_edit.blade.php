



 

@extends('admin.admin_master')
@section('admin')

<style>
    .btn-17,
.btn-17 *,
.btn-17 :after,
.btn-17 :before,
.btn-17:after,
.btn-17:before {
  border: 0 solid;
  box-sizing: border-box;
}

.btn-17 {
  -webkit-tap-highlight-color: transparent;
  -webkit-appearance: button;
  background-color: #000;
  background-image: none;
  color: #fff;
  cursor: pointer;
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,
    Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif,
    Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
  font-size: 100%;
  font-weight: 900;
  line-height: 1.5;
  margin: 0;
  -webkit-mask-image: -webkit-radial-gradient(#000, #fff);
  padding: 0;
  text-transform: uppercase;
}

.btn-17:disabled {
  cursor: default;
}

.btn-17:-moz-focusring {
  outline: auto;
}

.btn-17 svg {
  display: block;
  vertical-align: middle;
}

.btn-17 [hidden] {
  display: none;
}

.btn-17 {
  border-radius: 99rem;
  border-width: 2px;
  padding: 0.8rem 3rem;
  z-index: 0;
}

.btn-17,
.btn-17 .text-container {
  overflow: hidden;
  position: relative;
}

.btn-17 .text-container {
  display: block;
  mix-blend-mode: difference;
}

.btn-17 .text {
  display: block;
  position: relative;
}

.btn-17:hover .text {
  -webkit-animation: move-up-alternate 0.3s forwards;
  animation: move-up-alternate 0.3s forwards;
}

@-webkit-keyframes move-up-alternate {
  0% {
    transform: translateY(0);
  }

  50% {
    transform: translateY(80%);
  }

  51% {
    transform: translateY(-80%);
  }

  to {
    transform: translateY(0);
  }
}

@keyframes move-up-alternate {
  0% {
    transform: translateY(0);
  }

  50% {
    transform: translateY(80%);
  }

  51% {
    transform: translateY(-80%);
  }

  to {
    transform: translateY(0);
  }
}

.btn-17:after,
.btn-17:before {
  --skew: 0.2;
  background: #fff;
  content: "";
  display: block;
  height: 102%;
  left: calc(-50% - 50% * var(--skew));
  pointer-events: none;
  position: absolute;
  top: -104%;
  transform: skew(calc(150deg * var(--skew))) translateY(var(--progress, 0));
  transition: transform 0.2s ease;
  width: 100%;
}

.btn-17:after {
  --progress: 0%;
  left: calc(50% + 50% * var(--skew));
  top: 102%;
  z-index: -1;
}

.btn-17:hover:before {
  --progress: 100%;
}

.btn-17:hover:after {
  --progress: -102%;
}

</style>


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                      <form method="POST" enctype="multipart/form-data" action="{{ route('service.update', ['id' => $service->id]) }}">
                          @csrf

                            <h4 class="card-title display-3">Service Edit Form</h4>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Service Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{$service->service_name}}" name="update_service_name" type="text"  id="example-text-input" required>
                                </div>
                            </div>

                            
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Service 1st Package-(Bronze)</label>
                                <div class="col-sm-10">
                                    <input class="form-control" min="50" value="{{$service->service_first_package}}" name="update_service_firstpackage" type="number"  id="example-text-input" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Service 1st Description</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{$service->service_first_package_description}}" name="update_service_firstpackage_description" type="text"  id="example-text-input" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Service 2nd Package-(Gold)</label>
                                <div class="col-sm-10">
                                    <input class="form-control" min="50" value="{{$service->service_second_package}}" name="update_service_secondpackage" type="number"  id="example-text-input" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Service 2nd Description</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{$service->service_second_package_description}}" name="update_service_secondpackage_description" type="text"  id="example-text-input" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Service 3rd Package-(Diamond)</label>
                                <div class="col-sm-10">
                                    <input class="form-control" min="50" value="{{$service->service_third_package}}" name="update_service_thirdpackage" type="number"  id="example-text-input" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Service 3rd Description</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{$service->service_third_package_description}}" name="update_service_thirdpackage_description" type="text"  id="example-text-input" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Service 4th Package-(Platinum)</label>
                                <div class="col-sm-10">
                                    <input class="form-control" min="50" value="{{$service->service_fourth_package}}" name="update_service_fourthpackage" type="number"  id="example-text-input" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Service 4th Description</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{$service->service_fourth_package_description}}" name="update_service_fourthpackage_description" type="text"  id="example-text-input" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Service Link</label>
                                <div class="col-sm-10">
                                    <input value="{{$service->service_link}}" class="form-control" name="update_service_link" type="url" id="example-text-input" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Select The Trainer</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="update_service_trainer" required>
                                        <option selected="">Open to select Trainers</option>
                                        @foreach($trainers as $id => $trainerName)
                                        <option value="{{  $trainerName }}">{{ $trainerName }}</option>
                                    @endforeach
                                        </select>
                                </div>
                            </div>
                           
                            
                            {{-- For Image --}}
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Trainer Profile Image</label>
                                <div class="col-sm-10">
                                  <input class="form-control" name="trainer_update_image" type="file" id="user-image-input">

                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                              <label for="example-text-input" class="col-sm-2 col-form-label">Trainer Image
                                <small class="d-block">Picture Should Be High in Quality</small>
                              </label>
                              <div class="col-sm-10">
                                  <input class="form-control" name="update_service_trainer_image" type="file" id="user-image-input" required>
                              </div>
                          </div>
                      
                       <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <center>
                                        <img class="rounded avatar-lg" 
                                        src="{{ (!empty($service->service_image)) ? url('upload/service_images/' . $service->service_image) : url('upload/no_image.jpg') }}" 
                                        alt="Services Image">
                                    </center>
                                </div>
                            </div>
              <div class="button text-center">
                <button type="submit" class="btn-17">
                    <span class="text-container">
                      <span class="text">Update Trainer</span>
                    </span>
                  </button>

              </div>
                                                  

                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>
{{-- For Cnic method --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <script>
      function isValidUrl(url)
{
     return url.match(/^(ht|f)tps?:\/\/[a-z0-9-\.]+\.[a-z]{2,4}\/?([^\s<>\#%"\,\{\}\\|\\\^\[\]`]+)?$/);
}
  
     </script>
@endsection