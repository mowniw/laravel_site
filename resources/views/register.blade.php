@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name" >
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password">

        <br>
        <label for="surname">Фамилия:</label>
        <input type="surname" name="surname" id="surname"size="15">

        <label for="gender">Gender:</label>
        <input type="gender" name="gender" id="gender"size="19">

        <label for="nationality">Nationality:</label>
        <input type="nationality" name="nationality" id="nationality"size="17">
        <br>
        <label for="organization">Организация:</label>
        <input type="organization" name="organization" id="organization"size="11">

        <label for="position">Должность:</label>
        <input type="position" name="position" id="position"size="15">

        <label for="dob">Date of Birth YY/MM/DD:</label>
        <input type="dob" name="dob" id="dob"size="15">
        <br>        <br>
        <button type="submit">Зарегистрироваться</button>
        
        <br>        <br>        <br>       
    </form>

     <a href="{{ url('/') }}">Переход на главную страницу</a>
     <div class="mt-4">
    <p>Уже зарегистрированы? <a href="{{ route('login') }}">Войти</a></p>
</div>

@endsection
