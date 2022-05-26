<div class="modal fade closeModal " id="addSection" wire:ignore.self  data-backdrop="static">
    <div class="modal-dialog right-crud modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"> اضافة قسم جديد</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="store" method="post" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    @forelse ($addMore as $more)
                        <div class="form-row">
                            <div style="text-align: right" class="col">
                                <label for="">اسم القسم</label>
                                <input style="text-align: " type="text" wire:model="section_name.{{ $more }}" class="form-control" autocomplete="off">
                                @error('section_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-check form-switch" data-toggle="tooltip" data-placement="top" title="status">
                                <label class="form-check-label" for="flexSwitchCheckDefault" style="margin-top: 2.2em !important; "> تفعيل
                                    <input class="form-check-input" type="checkbox" wire:model="section_status.{{ $more }}" id="flexSwitchCheckDefault" >
                                    <span class="slider"></span>
                                </label>
                            </div>

                            
                            <div class="col-sm-1">
                                <button class="btn-success btn-sm" style="margin-top: 35px !important" wire:igore
                                    wire:click.prevent="AddMore">
                                    <i class="fa fa-plus"></i>
                                </button>
                                @if ($loop->index > 0)
                                    <button class="btn-danger btn-sm" wire:igore
                                        wire:click.prevent="Remove({{ $loop->index }})">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                @endif

                            </div>
                        </div>
                    @empty

                    @endforelse
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-block">
                            إنشاء قسم 
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