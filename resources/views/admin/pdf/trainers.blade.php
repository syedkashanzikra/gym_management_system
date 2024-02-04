{{-- 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <title>Table #6</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">Table #6</h2>
      

      <div class="table-responsive">

        <img class="rounded avatar-lg" src="{{ (!empty($trainer->trainer_image)) ? asset('upload/trainer_images/' . $trainer->trainer_image) : asset('upload/images/no_image.jpg') }}" alt="Trainer Image">
        <table class="table table-striped custom-table">
          <thead>
            <tr>
              
              <th scope="col">Order</th>
              <th scope="col">Name</th>
              <th scope="col">Occupation</th>
              <th scope="col">Contact</th>
              <th scope="col">Education</th>
              <th scope="col">Kashan</th>
              <th scope="col">Kashan2</th>
            </tr>
          </thead>
          <tbody>
            <tr scope="row">

              
                      
                      <td>
                        1392
                      </td>
                      <td><a href="#">James Yates</a></td>
                      <td>
                        Web Designer
                        <small class="d-block">Far far away, behind the word mountains</small>
                      </td>
                      <td>+63 983 0962 971</td>
                      <td>NY University</td>
                      <td><a href="#" class="more">Details</a></td>
                      <td><img height="200" width="200" src="{{asset('upload/no_image.jpg')}}" alt=""></td>
            
            </tr>

            <tr>
              
              <td>4616</td>
              <td><a href="#">Matthew Wasil</a></td>
              <td>
                Graphic Designer
                <small class="d-block">Far far away, behind the word mountains</small>
              </td>
              <td>+02 020 3994 929</td>
              <td>London College</td>
              <td><a href="#" class="more">Details</a></td>
            </tr>
            <tr>
              
              <td>9841</td>
              <td><a href="#">Sampson Murphy</a></td>
              <td>
                Mobile Dev
                <small class="d-block">Far far away, behind the word mountains</small>
              </td>
              <td>+01 352 1125 0192</td>
              <td>Senior High</td>
              <td><a href="#" class="more">Details</a></td>
            </tr>
            <tr>
              
              <td>9548</td>
              <td><a href="#">Gaspar Semenov</a></td>
              <td>
                Illustrator
                <small class="d-block">Far far away, behind the word mountains</small>
              </td>
              <td>+92 020 3994 929</td>
              <td>College</td>
              <td><a href="#" class="more">Details</a></td>
            </tr>

            <tr>
              
              <td>4616</td>
              <td><a href="#">Matthew Wasil</a></td>
              <td>
                Graphic Designer
                <small class="d-block">Far far away, behind the word mountains</small>
              </td>
              <td>+02 020 3994 929</td>
              <td>London College</td>
              <td><a href="#" class="more">Details</a></td>
            </tr>
            <tr>
              
              <td>9841</td>
              <td><a href="#">Sampson Murphy</a></td>
              <td>
                Mobile Dev
                <small class="d-block">Far far away, behind the word mountains</small>
              </td>
              <td>+01 352 1125 0192</td>
              <td>Senior High</td>
              <td><a href="#" class="more">Details</a></td>
            </tr>
            <tr>
              
              <td>9548</td>
              <td><a href="#">Gaspar Semenov</a></td>
              <td>
                Illustrator
                <small class="d-block">Far far away, behind the word mountains</small>
              </td>
              <td>+92 020 3994 929</td>
              <td>College</td>
              <td><a href="#" class="more">Details</a></td>
            </tr>
            
          </tbody>
        </table>
      </div>


    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trainer PDF</title>
</head>
<body>
    
   
        
    <div class="content">
    
        <div class="container">
          <h2 class="mb-5">Trainer Table</h2>
          
    
          <div class="table-responsive">
    
           
            <table class="table table-striped custom-table">
              <<thead>
                <tr>
                
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Age</th>
                    <th scope="col">Insta</th>
                    <th scope="col">Twt</th>
                    <th scope="col">FB</th>
                    <th scope="col">CNIC</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Image</th>
                   
                </tr>
            </thead>
              <tbody>
                @foreach($trainers as $trainer)

                <tr scope="row">
    <td>{{$trainer->id}}</td>
               
            <td>{{ $trainer->trainer_name }}</td>
            <td>
                {{ $trainer->trainer_email }}
                <small class="d-block">{{ $trainer->trainer_address }}</small>
            </td>
            <td>{{ $trainer->trainer_phone }}</td>
            <td>{{ $trainer->trainer_age }}</td>
            <td>
                <button class="btn btn-info">
                    <a href="{{ $trainer->trainer_instagram }}">Insta</a>
                </button>
            
            </td>
            <td>
                <button class="btn btn-info">
                    <a href="{{ $trainer->trainer_twitter }}">Twit</a>
                </button>


             </td>
            <td>
                <button class="btn btn-info">
                    <a href="{{ $trainer->trainer_facebook }}">Fb</a>
                </button>

         
            </td>
            <td>{{ $trainer->trainer_cnic }}</td>
            <td>{{ $trainer->trainer_birthdate }}</td>
                          
         <td><img height="100" width="100" src="{{ (!empty($trainer->trainer_image)) ? asset('upload/trainer_images/' . $trainer->trainer_image) : asset('upload/images/no_image.jpg') }}" alt="Trainer Image"></td>
                
                </tr>

    @endforeach
   


</body>
</html>