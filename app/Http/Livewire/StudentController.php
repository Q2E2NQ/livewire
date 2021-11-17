<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Log;

use App\Models\Student;
use App\Models\Education;
use Livewire\Component;
use Livewire\WithFileUploads;

class StudentController extends Component
{
    use WithFileUploads;

    public $name, $birthdate, $gender, $contact_no, $address, $email, $file, $course, $college, $university, $year_of_passing;
    public $studentsList;
    public $inputs = [];
    public $i = 1;
    public $updateMode = false;

    public function render()
    {
        $this->studentsList = Student::all();
        return view('livewire.student-controller');
    }
     
    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    private function resetInputFields(){
        $this->name = '';
        $this->birthdate = '';
        $this->gender = '';
        $this->contact_no = '';
        $this->address = '';
        $this->email = '';
        $this->file = '';
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function store()
    { 
        $validatedData = $this->validate([
            'name' => 'required', 
            'birthdate' => 'required',
            'gender' => 'required',
            'contact_no' => 'required',
            'address' => 'required',
            'email' => 'required',
            'file' => 'required',
        ]);
        $validatedData['file'] = $this->file->store('files', 'public');
        
        $student = Student::create($validatedData);
           
        foreach ($this->inputs as $key => $value)
        {
            //dd($value);
            //Log::error('Trying to access array offset on value of type int');
            Education::create([
                'student_id' => $student->id,
                'course' => $this->course[$value],
                'college' => $this->college[$value],
                'university' => $this->university[$value],
                'year_of_passing' => $this->year_of_passing[$value],

            ]);
        }        
                $this->inputs = [];       

        session()->flash('message', 'Information successfully submitted.');
        return redirect()->to('student');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $this->student_id = $id;
        $this->name = $student->name;
        $this->birthdate = $student->birthdate;
        $this->gender = $student->gender;
        $this->contact_no = $student->contact_no;
        $this->address = $student->address;
        $this->email = $student->email;
        $this->file = $student->file;

        $this->updateMode = true;
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'contact_no' => 'required',
            'address' => 'required',
            'email' => 'required',
            'file' => 'required',
        ]);
         
        $student = Student::find($this->student_id);
        $student->update([
            'name' => $this->name,
            'birthdate' => $this->birthdate,
            'gender' => $this->gender,
            'contact_no' => $this->contact_no,
            'address' => $this->address,
            'email' => $this->email,
            'file' => $this->file,
        ]);
         
        $this->updateMode = false;

        session()->flash('message', 'Student Updated Successfully.');
    }

    public function show()
    {
        //dd($value);
        //Log::error('Property [name] does not exist on this collection instance.');
        return view('livewire.show');
    } 

    public function delete($id)
    {
        Student::find($id)->delete();
        session()->flash('message', 'Student Deleted Successfully.');
    }
}



