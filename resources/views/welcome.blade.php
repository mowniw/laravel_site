@if(session('alrd_LgIn'))
    <div class="alert alert-alrd_LgIn">
        {{ session('alrd_LgIn') }}
      <!--  <a href="{{ route('logout') }}"method="POST">Выйти</a>-->
    </div>
@endif
@extends('layouts.app')
<!--<a href="{{ url('/register') }}">Переход на главную страницу регистрации</a>
-->
<nav>
  <ul>
    <li><a href="{{ '/'}}">Home</a></li>
    <li><a href="{{url('/register') }}">Регистрация</a></li>
    <li><a href="{{ url('/login') }}">Вход</a></li>
  </ul>
</nav>

<!DOCTYPE html>
<html>
  <head>
    <title>Список зарегистрировавшихся пользователей</title>
  </head>
  <body>
    <h1>Список зарегистрировавшихся пользователей</h1>
    <table>
      <thead>
        <tr>
          <th>№№</th>
          <th>Имя Фамилия</th>
          <th>Название организации</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }} {{ $user->surname }}</td>
          <td>{{ $user->organization }}</td>
          <td>{{ $user->email }}</td>
        </tr>
        @endforeach
        
      </tbody>
     
    </table>
    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Редактировать профиль</a>
<br>
  </body>
 <!--<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>-->
</html>

