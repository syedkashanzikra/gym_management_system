<table class="table table-striped custom-table">
    <thead>
        <tr>
            <th scope="col">Blog_Id</th>
            <th scope="col">Blogger_name</th>
            <th scope="col">Blog Headline</th>
            <th scope="col">Blog Picture</th>
            <th scope="col"> Blog Full Description</th>
            <th scope="col">Blog Category</th>
            <th scope="col">Blog Hashtags</th>
            <th scope="col">Blog Created</th>
            <th scope="col">Blog Updated</th>
            

        </tr>
    </thead>
    <tbody>
  
        @foreach($blogs as $blog)
        <tr>
            <td>{{ $blog->id }}</td>
            <td><a>{{ $blog->Blogger_name }}</a></td>
            <td>
                {{ $blog->Blog_headline }}
                {{-- <small class="d-block">{{ $trainer->trainer_address }}</small> --}}
            </td>
            
            
                <td>
                    <img height="100" width="100" class="rounded avatar-lg" src="{{ (!empty($blog->Blog_headline_picture)) ? asset('upload/blogs_images/' . $blog->Blog_headline_picture) : asset('upload/images/no_image.jpg') }}" alt="Blogs Image">
                </td>
           
            <td>
                <small class="d-block">{{ $blog->Blog_full_description }}</small>
                  
            </td>
            
            <td>
               {{ $blog->Blog_category}} 
               
            </td>
            <td>
                {{ $blog->Blog_hashtags}} 
            </td>
            <td>
              {{ $blog->created_at}} 
          </td>
          <td>
            {{ $blog->updated_at}} 
        </td>
        
            
            
        
           
            
            
        </tr>
        @endforeach
    </tbody>
</table>