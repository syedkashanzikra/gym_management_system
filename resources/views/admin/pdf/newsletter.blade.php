<table class="table table-striped custom-table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">User_Name</th>
            <th scope="col">User_Email</th>
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
           
         
            
         
        </tr>
        @endforeach
    </tbody>
</table>