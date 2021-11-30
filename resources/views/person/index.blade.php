@extends('layouts.default')
<style>
  FormatLabel {
    display:flex;
    flex-direction:column;
  }

</style>

@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/thanks" method="post">
  @csrf
  <div class="FormatLabel">
    <label for="name">氏名</label>
    <br>
    <input type="text" name="name" id="name">
  </div>
  <div class="FormatLabel">
    <label for="email">メールアドレス</label>
    <br>
    <input type="email" name="email" id="email">
  </div>
  <button>送信する</button>
</form>
@endsection