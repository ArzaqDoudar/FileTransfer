@extends('index')
@section('main')
    <!-- Sign up form -->
{{-- 
    <div class="col-3"></div>
    <div class="card p-3 col-6" style=""> --}}
      <form action="{{ route('addFile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <a href="" class="text-black text-decoration-none"><h3 class="card-title">Uplod Files</h3></a>
        <img src="{{ asset('/images/uplodeImage.svg') }}" id="imageFile" class="card-img-top p-3" alt="image File">
        {{-- <input type="image" src="{{ asset('/images/uplodeImage.svg') }}" class="card-img-top p-3"/> --}}
        <input type="file" name="hiddenFile" id="hiddenFile" hidden>
        <span id="spnFilePath"></span>

        <div class="card-body">
          <input type="email" name="from" id="" class="w-100 p-2" placeholder="From" data-bs-toggle="tooltip" data-bs-placement="right" title="Enter your Email" required>
          <input type="email" name="to" id="" class="w-100 p-2" placeholder="to" data-bs-toggle="tooltip" data-bs-placement="right" title="Enter Email" required>
          <input type="text" name="title" id="" class="w-100 p-2" placeholder="Title">
          <textarea  name="message" id="message" rows="1" class="message w-100 p-2"  placeholder="Message"></textarea>
          <div class="w-100 mx-0 my-2 row justify-content-center">
              <button type="submit" class="btn bg-primary shadow p-2"><h5 class="m-0"><i class="bi bi-cloud-arrow-up-fill"></i> Upload</h5></button>
          </div>
        </div>
      </form>
        
      {{-- </div> --}}
@endsection