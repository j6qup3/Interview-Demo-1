@extends('layouts.master')

@section('title', 'User 管理介面')

@section('index')
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<form method="POST" action="{{route('user.update.api', $data->id)}}">
  <h1>資料表 User - 修改</h1>
  <button type="submit" class="btn btn-default">儲存</button>
  <button type="reset" class="btn btn-default">重設</button>
  <a href="{{route('user.list.view')}}" class="btn btn-default">取消</a>
  {!! csrf_field() !!}<br>
  <br><br>
  <table class="table table-bordered table-hover" style="text-align:center;">
    <thead>
      <tr>
        <td>ID</td>
        <td>姓名</td>
        <td>使用者名稱</td>
        <td>通訊地址</td>
        <td>聯絡電話</td>
        <td>個人網頁</td>
        <td>所屬公司</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$data->id}}</td>
        <td><input type="text" name="name" value="{{$data->name}}"></td>
        <td><input type="text" name="username" value="{{$data->username}}"></td>
        <td><input type="text" name="address" value="{{$data->address}}"></td>
        <td><input type="text" name="phone" value="{{$data->phone}}"></td>
        <td><input type="text" name="website" value="{{$data->website}}"></td>
        <td><input type="text" name="company" value="{{$data->company}}"></td>
      </tr>
    </tbody>
  </table>
</form>

@endsection
