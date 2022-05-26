<?php

namespace App\Http\Livewire;

use App\Models\Section as SectionModel;
use Livewire\Component;

class Section extends Component
{
    public $addMore = [1];
    public $count = 0;
    public $section_name, $section_status, $edit_id;
    public $checked = [], $selectAll = false;
    
    // Add More
    public function AddMore()
    {
        $countable = $this->count++;
        if ($countable < 4) {
            $this->addMore[] = count($this->addMore) + 1;
        }
    }
    // Remove More 
    public function Remove($index)
    {
        $this->count--;
        unset($this->addMore[$index]);
    }
    protected $listeners = ['RecordDeleted'];
    public function store()
    {
        foreach ($this->section_name as $key => $section) {
            SectionModel::create([
                'section_name' => $this->section_name[$key],
                'status' => $this->section_status[$key] ?? 0 // if the satus is empty 0 else 1
            ]);
        }
        $this->FormReset();
        $this->SwalMessageDialog('تم انشاء القسم بنجاح');
    }
    public function editSection($section_id)
    {
        $this->edit_id = $section_id;
        $section = SectionModel::findOrFail($section_id);
        $this->section_name = $section->section_name;
        $this->section_status = $section->status;
    }
    public function update($section_id)
    {
        SectionModel::updateOrCreate(['id' => $this->edit_id],  [
            'section_name' => $this->section_name,
            'status' => $this->section_status ?? 0 // if the satus is empty 0 else 1
        ]);
        $this->FormReset();
        $this->SwalMessageDialog('تم تعديل القسم');
    }
    public function isChecked($section_id)
    {
        return  $this->checked && $this->selectAll ?
            in_array($section_id, $this->checked) :
            in_array($section_id, $this->checked);
    }
    public function updatedSelectAll($value_in_array)
    {
        $value_in_array ? $this->checked = SectionModel::pluck('id')
            : $this->checked  = [];
    }
    public function confirmBulkDelete()
    {
        $this->dispatchBrowserEvent('Swal:DeletedRecord', [
            'title' =>  "هل انت متاكد من حدف الكل",
            'id' => $this->checked
        ]);
    }
    // Delete Dialog show
    public function ConfirmDelete($section_id, $section_name)
    {
        // dd($section_id);
        $this->dispatchBrowserEvent('Swal:DeletedRecord', [
            'title' =>  "هل انت متاكد من حذف <span class='text-danger'> $section_name </span>",
            'id' => $section_id
        ]);
    }
    // Delete Section
    public function RecordDeleted($section_id)
    {
        if ($this->checked) {
            SectionModel::whereIn('id', $this->checked)->delete();
            $this->checked = [];
            $this->selectAll = false;
        } else {
            $section = SectionModel::find($section_id); // Single Delete
            $section->delete();
        }
    }
    public function FormReset()
    {
        $this->section_name = '';
        $this->section_status = '';
        $this->addMore = [1];
        $this->dispatchBrowserEvent('closeModel');
    }
    public function SwalMessageDialog($message)
    {
        $this->dispatchBrowserEvent(
            'MSGSuccessfull',
            [
                'title' => $message,
            ]
        );
    }
    public function render()
    {
        return view('livewire.section', ['sections' => SectionModel::all()]);
    }
}