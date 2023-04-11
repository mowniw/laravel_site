@extends('layouts.app')
    
@section('title', 'Редактирование профиля')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@section('content')
<nav>
  <ul>
    <li><a href="{{ '/'}}">Home</a></li>
    <li><a href="{{url('/register') }}">Регистрация</a></li>
    <li><a href="{{ url('/login') }}">Вход</a></li>
  </ul>
</nav><nav>
<form action="{{ route('profile.update') }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
    </div>
    <div class="form-group">
        <label for="surname">Фамилия</label>
        <input type="text" class="form-control" id="surname" name="surname" value="{{ $user->surname }}" required>
    </div>
    <div class="form-group">
        <label for="gender">Пол</label>
        <select class="form-control" id="gender" name="gender" required>
            <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Мужской</option>
            <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Женский</option>
        </select>
    </div>
    <div class="form-group">
        <label for="nationality">Национальность</label>
        <input type="text" class="form-control" id="nationality" name="nationality" value="{{ $user->nationality }}" required>
    </div>
    <div class="form-group">
        <label for="organization">Название организации</label>
        <input type="text" class="form-control" id="organization" name="organization" value="{{ $user->organization }}" required>
    </div>
    <div class="form-group">
        <label for="position">Должность</label>
        <input type="text" class="form-control" id="position" name="position" value="{{ $user->position }}" required>
    </div>
    <div class="form-group">
        <label for="dob">Дата рождения</label>
        <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ $user->birthdate }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>

@endsection
