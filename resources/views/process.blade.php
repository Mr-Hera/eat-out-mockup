<x-layout>
    <div class="flex flex-col w-full h-screen justify-center items-center">
        <div class="flex flex-col justify-center items-center w-1/4 h-[90vh] rounded-3xl border-4 -mt-10">
            <div class="flex flex-col mx-auto mb-20 w-3/4 p-8">
                <h5 class="mx-auto text-lg font-semibold">WEBSIMBA LIMITED</h5>
                <h5 class="mx-auto text-lg font-semibold">
                    TILL NUMBER
                    <span class="text-lg font-normal">8356426</span>
                </h5>
                <h5 class="mx-auto text-lg font-semibold">
                    KSH. 1.00
                    <span class="font-light">FEE: KSH. 0.00</span>
                </h5>
            </div>
            <form action="{{ route('success') }}" method="POST" class="w-3/4">
                @csrf
                <h5 class="mx-auto text-center text-lg font-semibold">
                    ENTER MPESA PIN:
                </h5>
                <input type="password" min="1" class="bg-[#fafafa] border w-full text-center rounded p-1 mt-4">
                <div class="flex mx-auto w-full">
                    <button type="submit" class="mx-auto bg-[#16a34a] border text-white font-semibold w-full p-1 mt-10 rounded hover:bg-[#22c55e] hover:transition-all">ACCEPT</button>
                </div>
            </form>
            
            <div class="fixed bottom-20 mx-auto bg-black border text-white font-semibold w-40 p-0.5 mb-1 rounded hover:p-1 hover:mb-0.5 hover:transition-all"></div>
        </div>
        
    </div>
</x-layout>