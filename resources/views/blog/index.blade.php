@extends('layouts/master')
@section('title', ' الرئيسية')

@section('content')
<div class="post">
{{-- Content is Added Here --}}


  <div class="post-image">
      <p>post image</p>
  </div>
  <div class="post-title">
      <p>post title</p>
  </div>
  <div class="post-details">
      <p class="post-info">
          <span><i class="fas fa-user"></i>postAuthor</span>

          <span><i class="fas fa-tags"></i>postCategory</span>
      </p>
      <p class="postContent">
          postContent
      </p>
      <a href="#"><button class="btn btn-custom">إقرأ المزيد</button></a>
  </div>



</div> <!-- End of Content -->
@endsection

