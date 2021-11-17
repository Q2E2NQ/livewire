<form wire:submit.prevent="submit" enctype="multipart/form-data">
    <div class="form-group mb-3">
        <label for="Name">Name:</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model="name">
    </div>

    <div class="form-group mb-3">
        <label for="birthdate">BirthDate:</label>
        <input type="text" class="form-control" wire:model="birthdate" placeholder="Enter BirthDate"></textarea>
    </div>

    <div class="form-group mb-3">
        <label for="gender">Gender:</label>
        <input type="text" class="form-control" wire:model="gender" placeholder="Enter Gender">
    </div>

    <div class="form-group mb-3"> 
        <label for="contact_no">Contact_No:</label>
        <input type="text" class="form-control" wire:model="contact_no" placeholder="Enter Contact">
    </div>

    <div class="form-group mb-3">
        <label for="address">Address:</label>
        <input type="text" class="form-control"  wire:model="address" placeholder="Enter Address">
    </div>

    <div class="form-group mb-3">
        <label for="email">Email:</label>
        <input type="text" class="form-control" wire:model="email" placeholder="Enter Email">
    </div>

    <div class="form-group mb-3">
        <label for="file">File:</label>
        <input type="file" class="form-control" wire:model="file" placeholder="Choose file">
    </div>

    <div class=" add-input">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="course">Course:</label>
                    <input type="text" class="form-control"  wire:model="course.0" placeholder="Enter course">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="college">College:</label>
                    <input type="text" class="form-control"  wire:model="college.0" placeholder="Enter college">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="university">University:</label>
                    <input type="text" class="form-control"  wire:model="university.0" placeholder="Enter university">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="year_of_passing">Year_of_Passing:</label>
                    <input type="text" class="form-control"  wire:model="year_of_passing.0" placeholder="Enter year_of_passing">
                </div>
            </div> 
            
            <div class="col-md-2">
                <button class="btn btn-primary btn-sm" wire:click.prevent="add({{$i}})"> Add </button>
            </div>        
        </div>
    </div>

        @foreach($inputs as $key => $value)
            <div class=" add-input">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="year_of_passing">Course:</label>
                            <input type="text" class="form-control" wire:model="course.{{ $value }}" placeholder="Enter course">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="year_of_passing">College:</label>
                            <input type="text" class="form-control" wire:model="college.{{ $value }}" placeholder="Enter college">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="year_of_passing">University:</label>
                            <input type="text" class="form-control" wire:model="university.{{ $value }}" placeholder="Enter university">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="year_of_passing">Year_of_Passing:</label>
                            <input type="text" class="form-control" wire:model="year_of_passing.{{ $value }}" placeholder="Enter year_of_passing">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">remove</button>
                    </div>
                </div>
            </div>
        @endforeach
    
    <div class="d-grid gap-2">
        <button wire:click.prevent="store()" class="btn btn-success btn-block">Save</button>
    </div>
</form>

