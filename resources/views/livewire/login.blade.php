
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

        <h1 class="mb-3 text-2xl">Login</h1>

        <form wire:submit.prevent="login">
            @csrf

            <input type="email" wire:model="email" placeholder="Email" class="w-full mb-4 p-2 border border-slate-600">


            <input type="password" wire:model="password" placeholder="Password" class="w-full mb-4 p-2 border border-slate-600">

            <button type="submit" class="block w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</button>
        </form>


    </div>
