@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card" style="width:24rem;margin:auto;">
        <div class="card-body">
            <form action="{{route('store.plan')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="plan name">اسم الخطة:</label>
                    <input type="text" class="form-control" name="name" placeholder="ادخل اسم الخطة">
                </div>
                <div class="form-group">
                    <label for="cost">التكلفة:</label>
                    <input type="text" class="form-control" name="cost" placeholder="ادخل التكلفة">
                </div>
                <div class="form-group">
                    <label for="cost">وصف الخطة:</label>
                    <input type="text" class="form-control" name="description" placeholder="ادخل الوصف">
                </div>
                <button type="submit" class="btn btn-primary">انشاء</button>
            </form>
        </div>
    </div>
</div>
@endsection