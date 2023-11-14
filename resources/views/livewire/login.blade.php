
    <div class="container">
        <h1>Login</h1>

        <form wire:submit.prevent="login">
            @csrf

            <input type="email" wire:model="email" placeholder="Email" class="w-full mb-4">
            <input type="password" wire:model="password" placeholder="Password" class="w-full mb-4">

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</button>
        </form>
    </div>
