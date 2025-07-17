@extends('layouts.index')

@section('content')
<div class="h-10 w-full bg-amber-600"></div>
    <table>
        <thead class=" bg-amber-500 ">
            <h1>Products Table</h1>
        </thead>

        <tbody class="">
            <tr>
                <th>name</th>
                <th>price</th>
                <th>description</th>
            </tr>

            @foreach ($AllProducts as $Product)
                <tr>
                    <td>{{ $Product->name }}</td>
                    <td>{{ $Product->price }}</td>
                    <td>{{ $Product->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection