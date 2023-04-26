@extends('layouts/master')
@section('title', 'إضافة مقال')
@section('content')


    <div class="col-md-10" id="main-area">
        <button class="custom-btn">مقال جديد</button>
        <div class="add-category">

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">عنوان المقال</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category">التصنيف</label>
                    <select name="category" class="form-control">
                    </select>
                </div>
                {{-- <div class="form-group">
                        <label for="image">صورة المقال</label>
                        <input type="file" id="image" class="form-control" name="postImage">
                    </div> --}}
                <div class="form-group">
                    <label for="content">نص المقال</label>
                    <textarea cols="30" rows="10" class="form-control" name="content"></textarea>
                </div>
                <button class="btn-custom mb-4" name="add">نشر المقالة</button>
            </form>
        </div>
    </div>



@endsection
