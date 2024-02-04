



@extends('admin.admin_master')
@section('admin')

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('trainer_table/fonts/icomoon/style.css') }}">
<link rel="stylesheet" href="{{ asset('trainer_table/css/owl.carousel.min.css') }}">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('trainer_table/css/bootstrap.min.css') }}">
<!-- Style -->
<link rel="stylesheet" href="{{ asset('trainer_table/css/style.css') }}">
<style>

.deleteButton {
  width: 40px;
  height: 40px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 3px;
  background-color: transparent;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.2s;
  position: relative;
  overflow: hidden;
}
.deleteButton svg {
  width: 44%;
}
.deleteButton:hover {
  background-color: rgb(237, 56, 56);
  overflow: visible;
}
.bin path {
  transition: all 0.2s;
}
.deleteButton:hover .bin path {
  fill: #fff;
}
.deleteButton:active {
  transform: scale(0.98);
}
.tooltip {
  --tooltip-color: rgb(41, 41, 41);
  position: absolute;
  top: -40px;
  background-color: var(--tooltip-color);
  color: white;
  border-radius: 5px;
  font-size: 12px;
  padding: 8px 12px;
  font-weight: 600;
  box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.105);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: all 0.5s;
}
.tooltip::before {
  position: absolute;
  width: 10px;
  height: 10px;
  transform: rotate(45deg);
  content: "";
  background-color: var(--tooltip-color);
  bottom: -10%;
}
.deleteButton:hover .tooltip {
  opacity: 1;
}
.editBtn {
  width: 35px;
  height: 35px;
  border-radius: 20px;
  border: none;
  background-color: rgb(93, 93, 116);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.123);
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition: all 0.3s;
}
.editBtn::before {
  content: "";
  width: 200%;
  height: 200%;
  background-color: rgb(102, 102, 141);
  position: absolute;
  z-index: 1;
  transform: scale(0);
  transition: all 0.3s;
  border-radius: 50%;
  filter: blur(10px);
}
.editBtn:hover::before {
  transform: scale(1);
}
.editBtn:hover {
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.336);
}

.editBtn svg {
  height: 17px;
  fill: white;
  z-index: 3;
  transition: all 0.2s;
  transform-origin: bottom;
}
.editBtn:hover svg {
  transform: rotate(-15deg) translateX(5px);
}
.editBtn::after {
  content: "";
  width: 25px;
  height: 1.5px;
  position: absolute;
  bottom: 19px;
  left: -5px;
  background-color: white;
  border-radius: 2px;
  z-index: 2;
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.5s ease-out;
}
.editBtn:hover::after {
  transform: scaleX(1);
  left: 0px;
  transform-origin: right;
}


.buttonfb {
  width: 45px;
  height: 45px;
  background-color: #3b5998;
  border: none;
  border-radius: 50%;
  position: relative;
  z-index: 1;
  overflow: hidden;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.185),
 0px 3px 3px rgba(255, 255, 255, 0.178) inset,
 0px -3px 3px rgba(0, 0, 0, 0.281) inset;
  transition: all .3s;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  padding-bottom: 3px;
}

.buttonfb::before {
  background-color: transparent;
  content: "f";
  font-size: 1.6em;
  font-weight: 700;
  color: white;
  z-index: 5;
  transition: all .3s;
  font-family: Whitney, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
}

.buttonfb::after {
  content: "acebook";
  background-color: transparent;
  font-size: 0;
  opacity: 0;
  font-weight: 700;
  color: white;
  z-index: 5;
  transition: all .3s;
  transform: translateX(60px);
  font-family: Whitney, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
}

.buttonfb:hover {
  width: 160px;
  border-radius: 30px;
}

.buttonfb:hover::after {
  opacity: 1;
  font-size: 1.6em;
  transform: translateX(0px);
}

.buttonfb:hover .shine {
  transform: translate(-70px ,10px);
}

.twtbutton {
  background-color: #1DA1F2;
  border: none;
  border-radius: 50%;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.5);
  animation: sway 2s infinite alternate;
  width: 50px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  perspective: 500px;
  transition: transform 0.5s, box-shadow 0.5s;
}

.twtbutton:hover {
  transform: rotate(-360deg);
  box-shadow: 0 0 20px 0 rgba(0, 0, 255, 0.5);
}

@keyframes grow {
  0% {
    transform: scale(1);
  }

  100% {
    transform: scale(10);
  }
}

@keyframes glow {
  0% {
    text-shadow: gold 1px 1px 1px;
  }

  100% {
    text-shadow: gold 0 0 10px gold;
  }
}

.icon {
  filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.6));
  transition: transform 0.5s;
}

.icon:hover {
  transform: scale(1.5);
  filter: drop-shadow(1px 2px 4px rgba(0,0,0,0.9))
}

.icon.icons8-X {
  display: none;
}

.twtbutton:hover .icons8-Twitter-Filled {
  display: none;
}

.twtbutton:hover .icons8-X {
  display: block;
  position: relative;
  top: 3em;
  left: 3em;
  align: center;
}

.follow-text {
  color: white;
  position: relative;
  top: 3em;
  left: -4em;
  transition: transform 0.5s;
}

.follow-text:hover {
  transform: scale(1.2);
  color: rgba(31,81,255,100);
  filter: drop-shadow(2px 2px 4px rgba(31,81,255,2.0))
}

.Btn {
  border: none;
  border-radius: 50%;
  width: 45px;
  height: 45px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition-duration: .4s;
  cursor: pointer;
  position: relative;
  background: #f09433;
  background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
  background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
  background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
  overflow: hidden;
}

.svgIcon {
  transition-duration: .3s;
}

.svgIcon path {
  fill: white;
}

.text {
  position: absolute;
  color: rgb(255, 255, 255);
  width: 120px;
  font-weight: 600;
  opacity: 0;
  transition-duration: .4s;
}

.Btn:hover {
  width: 110px;
  transition-duration: .4s;
  border-radius: 30px;
}

.Btn:hover .text {
  opacity: 1;
  transition-duration: .4s;
}

.Btn:hover .svgIcon {
  opacity: 0;
  transition-duration: .3s;
}
</style>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                  
                    </div>
    <h1 class="mb-5 display-5 text-center">NEWSLETTER_TABLE</h1>
    <div class="table-responsive">
      <div class="col-sm-12 col-md-6 mb-2"><div class="dt-buttons btn-group flex-wrap">    
        <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button"><span><a class="text-white" href="{{url('/')}}">Newsletter Page</a></span></button>
         <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button"><span>Excel</span></button> 
         <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button"><span> 
          <a class="text-white" href="{{route('newsletter.pdf')}}">PDF</a></button></span> <div class="btn-group">
            <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="datatable-buttons" type="button" aria-haspopup="true" aria-expanded="false"><span>Column visibility</span></button></div> </div></div>
        <table class="table table-striped custom-table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">User_Name</th>
                    <th scope="col">User_Email</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
          
                @foreach($newsletters as $newsletter)
                <tr>
                    <td>{{ $newsletter->id }}</td>
                   
                    <td>
                        {{ $newsletter->Your_name }}
                    </td>
                    <td>{{ $newsletter->Your_email }}</td>
                   
                 
                    
                    <td>
                        <form action="{{ route('newsletter.destroy', $newsletter->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            {{-- <button  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')"> --}}
                                <button type="submit" class="deleteButton">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      fill="none"
                                      viewBox="0 0 50 59"
                                      class="bin"
                                    >
                                      <path
                                        fill="#B5BAC1"
                                        d="M0 7.5C0 5.01472 2.01472 3 4.5 3H45.5C47.9853 3 50 5.01472 50 7.5V7.5C50 8.32843 49.3284 9 48.5 9H1.5C0.671571 9 0 8.32843 0 7.5V7.5Z"
                                      ></path>
                                      <path
                                        fill="#B5BAC1"
                                        d="M17 3C17 1.34315 18.3431 0 20 0H29.3125C30.9694 0 32.3125 1.34315 32.3125 3V3H17V3Z"
                                      ></path>
                                      <path
                                        fill="#B5BAC1"
                                        d="M2.18565 18.0974C2.08466 15.821 3.903 13.9202 6.18172 13.9202H43.8189C46.0976 13.9202 47.916 15.821 47.815 18.0975L46.1699 55.1775C46.0751 57.3155 44.314 59.0002 42.1739 59.0002H7.8268C5.68661 59.0002 3.92559 57.3155 3.83073 55.1775L2.18565 18.0974ZM18.0003 49.5402C16.6196 49.5402 15.5003 48.4209 15.5003 47.0402V24.9602C15.5003 23.5795 16.6196 22.4602 18.0003 22.4602C19.381 22.4602 20.5003 23.5795 20.5003 24.9602V47.0402C20.5003 48.4209 19.381 49.5402 18.0003 49.5402ZM29.5003 47.0402C29.5003 48.4209 30.6196 49.5402 32.0003 49.5402C33.381 49.5402 34.5003 48.4209 34.5003 47.0402V24.9602C34.5003 23.5795 33.381 22.4602 32.0003 22.4602C30.6196 22.4602 29.5003 23.5795 29.5003 24.9602V47.0402Z"
                                        clip-rule="evenodd"
                                        fill-rule="evenodd"
                                      ></path>
                                      <path fill="#B5BAC1" d="M2 13H48L47.6742 21.28H2.32031L2 13Z"></path>
                                    </svg>
                                  
                                    <span class="tooltip">Delete</span>
                                  </button>
                                  
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

</div>
</div>
</div>
</div>


<script src="{{ asset('trainer_table/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('trainer_table/js/popper.min.js') }}"></script>
<script src="{{ asset('trainer_table/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('trainer_table/js/main.js') }}"></script>

@endsection
