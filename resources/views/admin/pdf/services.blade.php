<table class="table table-striped custom-table">
    <thead>
        <tr>
          
            <th scope="col">Service_Name</th>
            <th scope="col">1st Package-(Bronze)</th>
          
            <th scope="col">2nd Package-(Gold)</th>
          
            <th scope="col">3rd Package-(Diamond)</th>
          
            <th scope="col">4th Package-(Platinum)</th>
          
            <th scope="col">|Trainer </th>
            <th scope="col">|Service_Image</th>
            <th scope="col">|Trainer_Image</th>
          
        </tr>
    </thead>
    <tbody>
  
        @foreach($services as $service)
        <tr>
            
            <td><a>{{ $service->service_name }}</a></td>
            <td>
                {{ $service->service_first_package }}
                <small class="d-block">{{ $service->service_first_package_description }}</small>
               
                {{-- <small class="d-block">{{ $trainer->trainer_address }}</small> --}}
            </td>
           
            <td>
                {{ $service->service_second_package }}

                <small  class="d-block">{{ $service->service_second_package_description }}</small>

            </td>
            
            <td>
                {{ $service->service_third_package }}
                <small class="d-block">{{ $service->service_third_package_description }}</small>

            </td>
           
            <td>
                {{ $service->service_fourth_package }}
                <small class="d-block">{{ $service->service_fourth_package_description }}</small>  

            </td>
            
            
           
           
          
            <td>
                {{$service->service_trainer}}
       

            </td>
            
        
            <td>
                <img  height="100" width="100"  src="{{ (!empty($service->service_image)) ? asset('upload/service_images/' . $service->service_image) : asset('upload/no_image.jpg') }}" alt="Services Image">
            </td>

            
            <td>
              <img height="100" width="100" src="{{ (!empty($service->service_trainer_image)) ? asset('upload/service_images/trainer_images/' . $service->service_trainer_image) : asset('upload/no_image.jpg') }}" alt="Service_Trainer_Image">

          </td>
         
          
        </tr>
        @endforeach
    </tbody>
</table>