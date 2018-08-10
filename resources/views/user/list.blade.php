@extends('layouts.master')

@section('title', 'User 管理介面')

@section('index')
  <h1>使用者管理介面</h1>
  <br>
  <a class="btn btn-default" onClick="$('.slide').slideToggle()">條件區 <span class="caret"></span></a>
  <div class="slide" style="display: none;">
    <form method="GET" action="{{route('user.list.view')}}">
      <br>
      欄位：<select type="text" name="_field">
        <option value="id">ID</option>
        <option value="name">姓名</option>
        <option value="username">使用者名稱</option>
        <option value="address">通訊地址</option>
        <option value="phone">聯絡電話</option>
        <option value="website">個人網頁</option>
        <option value="company">所屬公司</option>
      </select>
      <select type="text" name="order">
        <option value="ASC">由低到高</option>
        <option value="DESC">由高到低</option>
      </select><br>
      <span class="last">
        欄位：<select type="text" name="field[]">
          <option value="id">ID</option>
          <option value="name">姓名</option>
          <option value="username">使用者名稱</option>
          <option value="address">通訊地址</option>
          <option value="phone">聯絡電話</option>
          <option value="website">個人網頁</option>
          <option value="company">所屬公司</option>
        </select>
        <select type="text" name="exp[]">
          <option>></option>
          <option selected>=</option>
          <option><</option>
        </select>
        值：<input type="text" name="value[]">
      </span>
      <a class="btn btn-default" href="#" onclick="$('.last:last').after('<br>', $('.last:last').clone()); $('.last:last>input').val('')">新增條件</a><br>
      <br>
      <input type="submit" class="btn btn-default" value="篩選">
    </form>
  </div>
  <br><br>
  <table class="table table-bordered table-hover" style="text-align:center;">
    <thead>
      <form method="POST" action="{{route('user.create.api')}}">
        {!! csrf_field() !!}
        <tr>
          <td style="vertical-align:middle;">ID</td>
          <td><input type="submit" class="btn btn-default form-control" value="刪除"></td>
          <td style="vertical-align:middle;">姓名</td>
          <td style="vertical-align:middle;">使用者名稱</td>
          <td style="vertical-align:middle;">通訊地址</td>
          <td style="vertical-align:middle;">聯絡電話</td>
          <td style="vertical-align:middle;">個人網頁</td>
          <td style="vertical-align:middle;">所屬公司</td>
          <td style="vertical-align:middle;">更新</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <td style="vertical-align:middle;">{{$user->id}}</td>
            <td><input class="form-control" type="checkbox" name="id[]" value="{{$user->id}}"></td>
            <td style="vertical-align:middle;">{{$user->name}}</td>
            <td style="vertical-align:middle;">{{$user->username}}</td>
            <td style="vertical-align:middle;">{{$user->address}}</td>
            <td style="vertical-align:middle;">{{$user->phone}}</td>
            <td style="vertical-align:middle;">{{$user->website}}</td>
            <td style="vertical-align:middle;">{{$user->company}}</td>
            <td>
            <a class="btn btn-default form-control" href="{{route('user.update.view', $user->id)}}">修改</a></td>
          </tr>
        @endforeach
      </form>
      <form method="POST" action="{{route('user.create.api')}}">
        {!! csrf_field() !!}
        <tr>
          <td></td>
          <td></td>
          <td><input class="form-control" type="text" name="name"></td>
          <td><input class="form-control" type="text" name="username"></td>
          <td><input class="form-control" type="text" name="address"></td>
          <td><input class="form-control" type="text" name="phone"></td>
          <td><input class="form-control" type="text" name="website"></td>
          <td><input class="form-control" type="text" name="company"></td>
          <td><input type="submit" class="btn btn-default form-control" value="新增"></td>
        </tr>
      </form>
    </tbody>
  </table>

@endsection
