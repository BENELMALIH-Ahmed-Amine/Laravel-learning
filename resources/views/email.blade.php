@extends('layouts.index')

@section('content')
    <main class='w-full bg-gray-200 px-10 pt-5 pb-20 flex justify-center gap-3'>

        <article class='w-[40rem] py-3 bg-gray-500 shadow-xl p-0 grid place-content-center text-white'>
            <h2 class="text-3xl font-extrabold text-center mb-6">Send a message</h2>
            <form action="/store" method="POST" class="w-[380px] space-y-7" enctype="multipart/form-data">
                @csrf

                <div class='flex flex-col'>
                    <label class="text-2sm font-medium mb-2">Full Name:</label>
                    <input type="text" name="name" required
                        class="px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:border-transparent transition"
                        placeholder="Morad Jawhary" />
                </div>
                <div class='flex flex-col'>
                    <label class="text-2sm font-medium mb-2">Phone:</label>
                    <input type="tel" name="phone" required
                        class="px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:border-transparent transition"
                        placeholder="Morad.Jawhary@example.com" />
                </div>
                <div class='flex flex-col'>
                    <label class="text-2sm font-medium mb-2">Email Address:</label>
                    <input type="email" name="email" required
                        class="px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:border-transparent transition"
                        placeholder="Morad.Jawhary@example.com" />
                </div>
                <div class='flex flex-col'>
                    <label class="text-2sm font-medium mb-2">Message:</label>
                    <textarea type="password" name="message" required rows="5"
                        class="px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:border-transparent transition"
                        placeholder="Hi, &#10; ... &#10; &#10; &#10; Thanks."></textarea>
                </div>

                <div class='flex flex-col items-center'>
                    <h3 class="text-2sm font-medium mb-2">Importance:</h3>
                    <article class="pl-5 flex gap-7">
                        <div>
                            <input type="radio" name="importance" required
                                class="px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:border-transparent transition"
                                value="Height" />
                            <label for="">Height</label>
                        </div>

                        <div>
                            <input type="radio" name="importance" required
                                class="px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:border-transparent transition"
                                value="Medium" />
                            <label for="">Medium</label>
                        </div>

                        <div>
                            <input type="radio" name="importance" required
                                class="px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:border-transparent transition"
                                value="Low" />
                            <label for="">Low</label>
                        </div>
                        </section>
                </div>

                <div class="flex flex-col gap-3">
                    <label class="text-2sm font-medium mb-2 text-center" for="">Image</label>
                    <div>
                        <input type="file" name="image" accept="image/*"
                        class="w-[55%] pl-1.5 py-[2.5px] rounded-lg border border-gray-300 hover:bg-gray-300 hover:text-gray-700 active:bg-gray-100 transition"
                        placeholder="Upload an image">
                        <div><img src="" alt="Image visualisation"></div>
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-gray-600 hover:bg-gray-700 text-white font-semibold py-3 rounded-lg shadow-md transition-all duration-200">
                    Send
                </button>
            </form>
            </section>
    </main>
@endsection
