@extends('layouts.base')
@section('content')
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">ToDo作成</div>
        <div class="card-body">
          <!-- フォームの送信方法（method="post"）と送信先（action="{{ route('todo.store') }}"） -->
          <form method="post" action="{{ route('todo.store') }}">
            @csrf <!-- フォームを送信するとCSRF対策のトークンも一緒に送信される -->
            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">ToDo入力</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="content" value="">
              </div>
            </div>
            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">作成</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection