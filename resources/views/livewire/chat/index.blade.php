<div
    class="fixed h-full flex bg-white lg:shddow-sm overflow-hidden inset-0 lg:top-16 lg:inset-x-2 m-auto lg:h-[90%] rounded-lg">

    <div class="relative w-full md:w-[320px] xl:w-[320px] overflow-y-auto shrink-0 h-full border">
        @include('livewire.chat.chat-list')
    </div>

    <div class="hidden md:grid w-full border-l h-full relative overflow-y-auto" style="contain:content">
        <div class="m-auto text-center justify-center flex flex-col gap-3">
            <h4 class="font-medium text-lg">test</h4>
        </div>
    </div>
</div>
