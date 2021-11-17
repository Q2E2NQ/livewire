<form wire:submit.prevent="submit" enctype="multipart/form-data">
    <input type="hidden" wire:model="student_id">
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

    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>

    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>

</form>