@extends('layouts.index')

@section('content')
    <main class="w-full p-10">
        <div class="w-full py-2.5 flex justify-center bg-purple-600">
            <form action="/showEmails/select/" method="POST">
                @csrf

                <select name="" class="w-fit font-black text-xl">
                    <option class="bg-red-400" selected {{ $lable = 'Height' }} value="Height">Height</option>
                    <option class="bg-red-400" {{ $lable = 'Medium' }} value="Medium">Medium</option>
                    <option class="bg-red-300" {{ $lable = 'Low' }} value="Low">Low</option>
                </select>
            </form>
        </div>

        <section class="w-full p-5 bg-orange-400 flex flex-wrap gap-10">
            @foreach ($emails as $email)
                <article
                    class="w-80 bg-black pb-3.5 text-white flex flex-col items-center divide-y-1 divide-amber-500 hover:bg-stone-900 relative group">
                    <div class="m-3"><img src="{{ asset('storage/' . $email->image) }}" alt="the image"></div>
                    <section class="w-[80%] flex flex-col items-center divide-y-1 divide-amber-500">
                        <div class="w-[80%] px-5 py-3 flex flex-col items-center gap-3">
                            <h4 class="underline">Name:</h4>
                            <p>{{ $email->name }}</p>
                        </div>

                        <div class="w-[80%] px-5 py-3 flex flex-col items-center gap-3">
                            <h4 class="underline">Phone:</h4>
                            <p>{{ $email->phone }}</p>
                        </div>

                        <div class="w-[80%] px-5 py-3 flex flex-col items-center gap-3">
                            <h4 class="underline">Email:</h4>
                            <p>{{ $email->email }}</p>
                        </div>
                    </section>

                    <section class="w-[80%] px- py-3 flex flex-col items-center gap-3">
                        <h4 class="underline">Message:</h4>
                        <p class="h-[150px] overflow-scroll">{{ $email->message }}</p>
                    </section>
                    <form action="/showEmails/destroy/{{ $email->id }}" method="POST" class="hidden absolute -top-10 group-hover:top-2 group-hover:flex">
                        @csrf
                        @method('DELETE')
                    
                        <button type="submit" class="bg-red-500 py-2 px-3 hover:bg-red-600">Delete message</button>
                    </form>
                </article>
            @endforeach
        </section>
    </main>
@endsection
