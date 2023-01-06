@extends('layouts.default')
<style>
  div {
  text-align:center;
  }

  .top{
    color: white;
    border-color: black;
    background-color: black;
  }
</style>

@section('content')
<div class="content">
  <h1></h1>
  <div>
    <p>
    ご意見いただきありがとうございました。
    </p>
  </div>
  <div>
    <button class="top" onclick="location.href='/'">トップページへ</button>
  </div>
</div>
@endsection