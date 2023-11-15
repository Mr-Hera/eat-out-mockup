<x-layout>
    <div class="flex flex-col w-full h-screen justify-center items-center">
        <div class="flex flex-col justify-center items-center w-1/4 h-[90vh] rounded-3xl border-4 -mt-10">
            <div class="flex flex-col mx-auto mb-8 w-3/4 p-8 bg-[rgb(250,250,250)] shadow-xl">
                <h5 class="mx-auto font-semibold">BUY GOODS</h5>
                <hr class="mt-14 mb-14"/>
                <div class="my-1">
                    <h5 class="flex justify-start font-semibold">BUSINESS NAME</h5>
                    <p>WEBSIMBA LIMITED</p>
                </div>
                <div class="my-1">
                    <h5 class="font-semibold">TILL NUMBER</h5>
                    <p>8356426</p>
                </div>
                <div class="my-1">
                    <h5 class="font-semibold">AMOUNT</h5>
                    <p>KSH. {{ $amount }}</p>
                    <p class="text-xs">FEE: KSH. 0.00</p>
                </div>
            </div>
            <form action="{{ route('stk') }}" method="POST" class="w-3/4">
                @csrf
                <input type="number" min="1" max="500,000" name="amount" class="bg-[#fafafa] border w-full rounded p-1 mt-4" value="{{ number_format($amount) }}" hidden />
                <div class="flex mx-auto w-full">
                    <button type="submit" class="mx-auto bg-[#16a34a] border text-white font-semibold w-full p-1 mt-4 rounded hover:bg-[#22c55e] hover:transition-all">MAKE PAYMENT</button>
                </div>
            </form>
            
            <div class="fixed bottom-20 mx-auto bg-black border text-white font-semibold w-40 p-0.5 mb-1 rounded hover:p-1 hover:mb-0.5 hover:transition-all"></div>
        </div>
        
    </div>
</x-layout>