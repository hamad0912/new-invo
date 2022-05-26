<?php

namespace App\Http\Livewire;
use App\Models\Category as CategoryModel;
use Livewire\Component;
use App\Models\Section;
class CategoryComponent extends Component
{

   public $addMore = [1];
    public $count = 0;
    public $selectAll = false, $checked = [];
    public $selectAllSection = false;
    public $sections;
    public $cate_id;
    public $sec_id; 
    // Category properties 
    public  $category_name, $category_discount, $description, $section_id, $category_status;
    public function mount()
    {
        $this->sections = Section::with('categories')->get();
    }
    public function isChecked($category_id)
    {
        return  $this->checked && $this->selectAll ?
            in_array($category_id, $this->checked) :
            in_array($category_id, $this->checked);
    }
    public function updatedSelectAll($value_in_array)
    {
        $value_in_array ? $this->checked = CategoryModel::pluck('id')
            : $this->checked  = [];
        dd($this->checked);
    }
    public function updatedSelectAllSection($value_in_array)
    {
        $value_in_array ? $this->checked = CategoryModel::where('section_id', $value_in_array)->pluck('id')
            : $this->checked  = [];
            dd($this->checked);
    }
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
    public function store()
    {
       foreach ($this->section_id as $key => $value) {
            CategoryModel::Create([
                'cate_name' => Str::title($this->category_name[$key]),
                'discount' => $this-> category_discount[$key] ?? 0,
                'section_id' => $value,
                'description' => Str::ucfirst($this->description[$key]) ?? Null,
                'status' => $this->category_status[$key] ?? 0,
            ]);
       }
        $this->FormReset();
        $this->SwalMessageDialog('Category Created Successfully!');
    }
    public function editCategory($category_id)
    {
       $category = CategoryModel::find($category_id);
       $this->category_name  = $category->cate_name;
       $this->category_discount  = $category->discount;
       $this->category_status  = $category->status;
        $this->description  = $category->description;
        $this->section_id  = $category->section_id;
        $this->cate_id = $category_id;
    }
    public function update()
    {
        // dd($this->cate_id);
        CategoryModel::updateOrCreate(['id' => $this->cate_id],
         [
            'cate_name' => Str::title($this->category_name),
            'discount' => $this->category_discount ?? 0,
            'section_id' => $this->section_id,
            'description' => Str::ucfirst($this->description) ?? Null,
            'status' => $this->category_status ?? 0,
        ]);
        $this->FormReset();
        $this->SwalMessageDialog('Category Updated Successfully!');
    }
    public function FormReset()
    {
        $this->category_name = '';
        $this->category_status = '';
        $this->category_discount = '';
        $this->description = '';
        $this->section_id = '';
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
        return view('livewire.category-component', ['categories' => CategoryModel::all()]);
    }
}
