<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Profile') }}
        </h2>
    </x-slot>

    
 


    
  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Services
        </h2>
      </div>
      <div class="service_container">

        @foreach ($services as $service)
        
        
        <div class="box">
          <img src="{{ (!empty($service->service_image)) ? url('upload/service_images/' . $service->service_image) : url('upload/no_image.jpg') }}" alt="Services">
          <h6 class="visible_heading">
            {{$service->service_name}}
          </h6>
          <div class="link_box">
            <a href="{{route('service.show', $service->id)}}">
              <img src="{{asset('usertemplate/images/link.png')}}" alt="Services">
            </a>
            <h6>
              {{$service->service_name}}
            </h6>
          </div>
        </div>


        @endforeach
       
      </div>
    </div>
  </section>

  <!-- end service section -->











     
</x-app-layout>
