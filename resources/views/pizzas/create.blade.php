@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a new pizza</h1>
    <form action="" method='POST'>
    @csrf
        <label for="name">Your name: </label>
        <input type="text" name="name" id="name">
        <label for="type">Choose Pizza type</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="base"></label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin and crispy">Thin and Crispy</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label for="">Extra Toppings</label><br>
            <input type="checkbox" name="toppings[]" id="toppings" value='mushrooms'>Mushroom<br>
            <input type="checkbox" name="toppings[]" id="toppings" value='peppers'>Peppers<br>
            <input type="checkbox" name="toppings[]" id="toppings" value='garlic'>Garlic<br>
            <input type="checkbox" name="toppings[]" id="toppings" value='olives'>Olives<br>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection