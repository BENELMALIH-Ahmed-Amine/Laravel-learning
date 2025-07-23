@extends('layouts.index')

@section('content')
    <form action="/candidate/store" method="post">
        
        @csrf

        <label for="">Name</label>
        <input class="border-2" type="text" name="Name" placeholder="Full Name" required>
        <br><br><br>

        <label for="">How old are you</label>
        <input class="border-2" type="number" name="Age" placeholder="Age" required>
        <br><br><br>

        <label for="">Email</label>
        <input class="border-2" type="email" name="Email" placeholder="xxxxxxx@example.com" required>
        <br><br><br>

        <label for="">Phone number</label>
        <input class="border-2" type="tel" name="Phone" placeholder="0X xxx xxx xx" required>
        <br><br><br>

        <form action="">
            <legend>School</legend>
            <input class="border-2" type="radio" id="Coding" name="School" required>
            <label for="Coding">Coding</label>

            <input class="border-2" type="radio" id="Media" name="School" required>
            <label for="Media">Media</label>
        </form>
        <br><br><br>

        <form action="">
            <legend>Sex</legend>
            <input class="border-2" type="radio" id="Male" name="Sex" required>
            <label for="Male">Male</label>

            <input class="border-2" type="radio" id="Female" name="Sex" required>
            <label for="Female">Female</label>
        </form>
        <br><br><br>

        <label for="">English Level</label>
        <input class="border-2" type="range" name="English_Level" required>
        <br><br><br>
        
        <select name="Campus" id="">
            <option selected ></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>
        <br><br><br>
        
        <label for="">Terms</label>
        <input class="border-2" type="checkbox" name="Terms" value="I agree to all terms and conditions" required>
        <br><br><br>
        
        <button class="px-5 py-3 bg-green-300" type="submit">Submit</button>
    </form>
@endsection
