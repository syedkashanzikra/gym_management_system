<table class="table table-striped custom-table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Contact_Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone_Number</th>
            <th scope="col">Message</th>
            
        </tr>
    </thead>
    <tbody>
  
        @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->id }}</td>
           
            <td>
                {{ $contact->Name }}
            </td>
            <td>{{ $contact->Email }}</td>
            <td>{{ $contact->PhoneNumber }}</td>
            <td>{{ $contact->Message }}</td>
           
         
            
         
        </tr>
        @endforeach
    </tbody>
</table>