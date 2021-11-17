<div>
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('error') }}
        </div>
    @endif

    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>BirthDate</th>
                <th>Gender</th>
                <th>Contact_No</th>
                <th>Address</th>
                <th>Email</th>
                <th>File_Path</th>
                <th>Action</th>
            </tr> 
            @foreach($studentsList as $student)
            <tr>  
                <td>{{ ++$i }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->birthdate }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->contact_no }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->file }}</td>
                <td class="border px-4 py-2">
                    <button wire:click="show({{ $student->id }})" class="btn btn-primary btn-sm">show</button>
                    <button wire:click="edit({{ $student->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $student->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </thead>                  
    </table>
</div>  


                
            
    

   
                