@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="mb-3">
            <form action="{{ route('admin.projects.store') }}" method="POST">
               @csrf     
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">content</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="submit">invia</button>    
            </form>
    </section>
@endsection
