<x-layout>
    <div class="flex flex-col w-full h-screen justify-center items-center">
        <div class="flex flex-col justify-center items-center w-1/4 h-[90vh] rounded-3xl border-4 -mt-10">
            <h5 class="justify-end mx-auto font-semibold">Enter your bill amount</h5>
            <form action="{{ route('confirmation') }}" method="POST" class="w-3/4">
                @csrf
                <input type="number" min="1" class="bg-[#fafafa] border w-full rounded p-1 mt-4">
                <h5 class="font mt-3">Cashback amount: Kes 0.00</h5>
                <div class="flex mx-auto w-full">
                    <button type="submit" class="mx-auto bg-[#16a34a] border text-white font-semibold w-3/4 p-1 mt-4 rounded hover:bg-[#22c55e] hover:transition-all">PAY</button>
                    <a href="/" class="mx-auto text-center bg-[#b91c1c] border text-white font-semibold w-3/4 p-1 mt-4 rounded hover:bg-[#dc2626] hover:transition-all">CANCEL</a>
                </div>
            </form>
            
            <div class="fixed bottom-20 mx-auto bg-black border text-white font-semibold w-40 p-0.5 mb-1 rounded hover:p-1 hover:mb-0.5 hover:transition-all"></div>
        </div>
        
    </div>
</x-layout>