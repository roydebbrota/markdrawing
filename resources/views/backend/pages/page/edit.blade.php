@extends('backend.layouts.master')

@section('view_button')
<a href="{{route('page.show', $page->slug)}}" target="_blank">View</a>
@endsection
@section('save_button')
    <a href="#" id="update_button">Update</a>
@endsection

@section('content')

<div class="row">

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    
    <div class="card">
        <h5 class="card-header">Edit Page</h5>
        <div class="card-body">
            @include('backend.layouts.error')
            <form action="{{ route('admin.page.update', $page->id) }}" method="post" enctype="multipart/form-data" id="form">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                        <label for="title" class="col-form-label">Title</label>
                        <input id="title" type="text" class="form-control" name="title" value="{{$page->title}}">
                        </div>

                        <div class="col">
                        <label for="title_bd" class="col-form-label">টাইটেল</label>
                        <input id="title_bd" type="text" class="form-control" name="title_bd" value="{{$page->title_bd}}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea id="summernote" class="form-control"  rows="3" name="content">{{$page->content}}</textarea>
                </div>

                <div class="form-group">
                    <label for="content_bd">Content ( বাংলা )</label>
                    <textarea class="form-control" id="content_bd" rows="3" name="content_bd">{{$page->content_bd}}</textarea>
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Update" id="submit">
                </div>

                
            </form>
        </div>

    </div>
</div>

@endsection

@section('script')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>

    <script>
      $('#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 300
      });

      $('#content_bd').summernote({
        placeholder: '',
        tabsize: 2,
        height: 300
      });
    </script>

    <script type="text/javascript">

        $("#update_button").click(function(){
        $("#submit").click(); 
        });

    </script>
@endsection