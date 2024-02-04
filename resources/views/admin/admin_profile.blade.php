

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
            <center>
            <div class="col-lg-7">
                <div class="card">
                    <center>
                        <img class="rounded avatar-lg" 
                        src="{{ (!empty($adminData->profile_picture)) ? url('upload/admin_images/' . $adminData->profile_picture) : url('upload/images/no_image.jpg') }}" 
                        alt="Card image cap">
                </center>

                
                 <div class="card-body">
                         <h4 class="display-3">Name :{{$adminData->name}}</h4>
             <hr>
                         <h4 class="display-6">Email :{{$adminData->email}}</h4>
             <hr>
             <a href="{{route('edit.profile')}}"><button class="bn632-hover bn22">Edit</button></a>
                       
                    </div>
                </div>
            </div>
            </center>


        </div>

    </div>
</div>
@endsection


