



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
    <h1 class="mb-5 display-3 text-center">MEMBER_TABLE</h1>
    <div class="table-responsive">
        <table class="table table-striped custom-table">
          
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Age</th>
                    <th scope="col">Instagram</th>
                    <th scope="col">Twitter</th>
                    <th scope="col">Facebook</th>
                    <th scope="col">CNIC</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
          
                @foreach($members as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td><a>{{ $member->member_name }}</a></td>
                    <td>
                        {{ $member->member_email }}
                        <small class="d-block">{{ $member->member_address }}</small>
                    </td>
                    <td>{{ $member->member_phone }}</td>
                    <td>{{ $member->member_age }}</td>
                    <td>
                    <a href="{{ $member->member_instagram }}">
                      <button class="Btn">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512" class="svgIcon"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                        <span class="text">Instagram</span>
                      </button>
                    </a>
                    </td>
                    <td>
                      
<button class="twtbutton">
  <a href="{{ $member->member_twitter }}" class="no-link-style">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50" style="null" class="icon icons8-Twitter-Filled">
      <path d="M49.5,10.9c-1.8,0.8-3.7,1.3-5.7,1.5c2.1-1.3,3.7-3.4,4.5-5.9c-2,1.2-4.2,2.1-6.6,2.6c-1.9-2-4.6-3.2-7.6-3.2c-5.8,0-10.5,4.7-10.5,10.5c0,0.8,0.1,1.6,0.4,2.3C11,18,6.3,15.2,3.4,11.5C2.5,13.1,2,14.9,2,16.7c0,3.6,1.8,6.8,4.6,8.6c-1.7,0-3.3-0.5-4.7-1.3v0.1c0,5,3.5,9.2,8.2,10.2c-0.9,0.2-1.8,0.3-2.7,0.3c-0.7,0-1.4,0-2-0.1c1.4,4.3,5.4,7.4,10.2,7.5c-3.7,2.9-8.3,4.6-13.3,4.6c-0.9,0-1.8,0-2.7-0.1c4.8,3.1,10.5,4.9,16.7,4.9c20,0,30.9-16.6,30.9-30.9c0-0.5,0-1.1,0-1.6C46.8,14.6,48.3,12.9,49.5,10.9z" fill="#ffffff"></path>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="125" height="125" viewBox="0 0 50 50" style="null" class="icon icons8-X">
      <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" fill="#ffffff"></path>
    </svg>
  </a>
</button>
<br>
                     </td>
                    <td>
                  <a href="{{$member->member_facebook}}">
                    <button class="buttonfb">
                    </button>
                  </a>

                    </td>
                    <td>{{ $member->member_cnic }}</td>
                    <td>{{ $member->member_birthdate }}</td>
                    <td>
                        <img class="rounded avatar-lg" src="{{ (!empty($member->member_image)) ? asset('upload/member_images/' . $member->member_image) : asset('upload/no_image.jpg') }}" alt="Member Image">
                    </td>
                    <td>
                        <a href="{{ route('member.edit', $member->id) }}">
                            <button class="editBtn">
                                <svg height="1em" viewBox="0 0 512 512">
                                  <path
                                    d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"
                                  ></path>
                                </svg>
                              </button>
                              
                        </a>
                       
                    </td>
                    <td>
                        <form action="{{ route('member.destroy', $member->id) }}" method="POST" style="display: inline;">
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

