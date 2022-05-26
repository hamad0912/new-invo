<div class="modal fade closeModal " id="editSection" wire:ignore.self  data-backdrop="static">
    <div class="modal-dialog right-crud modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"> تعديل قسم </h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update({{ $section->id }})" method="post" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    
                        <div class="form-row">
                            <div style="text-align: right" class="col">
                                <label for="">اسم القسم</label>
                                <input style="text-align: " type="text" wire:model="section_name" class="form-control" autocomplete="off">
                                @error('section_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-check form-switch" data-toggle="tooltip" data-placement="top" title="status">
                                <label class="form-check-label" for="flexSwitchCheckDefault" style="margin-top: 2.2em !important; "> تفعيل
                                    <input class="form-check-input" type="checkbox" wire:model="section_status" id="flexSwitchCheckDefault" >
                                    <span class="slider"></span>
                                </label>
                            </div>

                            
                       
                        </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-block">
                            تعديل قسم 
                        </button>
                        <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">
                            إغلاق
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- <style>
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .switch::before {
        position: absolute;
        content: '';
        height: 26px;
        width: 26;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;

    }


    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 01px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px)
    }

    .slider.round {
        border-radius: 34px;
    }

    .slider.round::before {
        border-radius: 50%;
    }

</style> --}}