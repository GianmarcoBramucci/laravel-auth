@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>i miei progetti</h1>
        <ul>
            @foreach ($projects as $project)
            <li>
                <h2>{{$project->title}}</h2>
                <h3>{{$project->slug}}</h3>
                <p>{{$project->content}}</p>
                <a href="{{ route('admin.projects.show',$project->slug) }}"><i class="fa-solid fa-eye"></i></a>
            </li>
            @endforeach
        </ul>
    </section>
@endsection
