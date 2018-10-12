@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action={{route('post.submit')}} method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="post_name">name:</label>
                                <input type="text" name="name">
                            </div>
                            <div class="form-group row">
                                <label for="post_description">description:</label>
                                <input type="text" name="description">
                            </div>
                            <div class="form-group row">
                                <input type="submit" id="submit">
                            </div>
                        </form>

                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
