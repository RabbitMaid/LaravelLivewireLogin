
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

    <div class="w-[400px] mx-auto p-8 bg-white shadow-md">


        <p class="text-center">You are currently logged in</p>

        <form wire:submit.prevent='logout'>
            <button type="submit" class="text-center block bg-blue-600 text-white py-2 px-3 rounded-md w-full mt-5">Logout</button>
        </form>


    </div>


</div>
