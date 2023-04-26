@extends('layouts/master')
@section('title', 'إضافة تصنيف')
@section('content')

<form action="{{route('cats.store')}}" method="POST">
  @csrf
  <div class="form-group">
      <label for="category">تصنيف جديد</label>
      <input type="text" id='category' name="name" placeholder="اكتب اسم التصنيف" class="form-control">
  </div>
  <button type="submit" class="btn-custom" name="add">إضافة</button>
</form>

@endsection