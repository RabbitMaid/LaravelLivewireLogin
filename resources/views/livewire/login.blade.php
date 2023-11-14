
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

        <div class="w-[400px] mx-auto p-8 bg-white shadow-md">

            <h1 class="mb-3 text-2xl text-center">Login</h1>

            <form wire:submit.prevent="auth">
                @csrf

                <input type="email" wire:model="email" placeholder="Email" class="min-w-full mb-3 p-2 border border-slate-600 mx-auto">

                @error('email')
                    <span class="text-red-800 inline-block mb-3">{{ $message }}</span>
                @enderror

                <input type="password" wire:model="password" placeholder="Password" class="min-w-full mb-3 p-2 border border-slate-600">

                @error('password')
                <span class="text-red-800 inline-block mb-3">{{ $message }}</span>
                @enderror

                <button type="submit" class="block w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</button>
            </form>


        </div>


    </div>
