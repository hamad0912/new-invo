<div class="tbale-responsive mt-2">
    <div class="btn-group flex-wrapper">
   
   @if (count($checked) > 1)
        <a href="#" class="btn btn-outline-danger btn-sm" wire:click.prevnet="confirmBulkDelete">
        ( {{ count($checked)  }}  حذف <b>الصفوف المحددة</b>  )
    </a>
   @endif
    </div>
</div>

<table class="table  text-left mt-3" width="100%">
    <thead>
        <tr>
            <th><input class="h-5 w-5" type="checkbox" wire:model="selectAll"></th>
            <th>اسم القسم</th>
            <th> الحالة</th>
            <th>الاجراءات</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($sections as $section)
             <tr class="">
                 <td><input value="{{$section->id  }}" wire:model="checked" class="h-5 w-5" type="checkbox"></td>
                <td>{{ $section->section_name }}</td>
                <td> <label for="" class="badge {{ $section->status == 1 ? 'badge bg-success' : 'badge bg-danger' }} }}">{{ $section->status == 1 ? 'مفعل' : 'غير مفعل' }}</label> </td>
                <td>
                    <div class="btn-group">
                        <a href="#editSection" data-toggle="modal" wire:click.prevent="editSection({{ $section->id }})" class="btn btn-outline-info btn-rounded"> <i class="fa fa-edit"></i></a>
                       @if (count($checked) < 2)
                        <a href="#" wire:click.prevent="ConfirmDelete({{ $section->id}}, '{{ $section->section_name }}')" class="btn btn-outline-danger btn-rounded"> <i class="fa fa-trash"></i></a>
                       @endif
                    </div>
                </td>
            </tr>
            @include('sections.edit')
        @empty
        
        @endforelse
      
    </tbody>

</table>