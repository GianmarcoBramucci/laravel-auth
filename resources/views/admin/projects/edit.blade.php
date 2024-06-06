@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="mb-3">
            <form action="{{ route('admin.projects.update',$project->slug) }}" method="POST">
               @csrf     
               @method('PUT')
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{$project->title}}">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">content</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3">{{$project->content}}</textarea>
              </div>
              <button type="submit">invia</button>    
            </form>
    </section>
@endsection
