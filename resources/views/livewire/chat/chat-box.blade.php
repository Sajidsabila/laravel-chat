<div class="w-full overflow-hidden">
    <div class="border-b flex flex-col overflow-y-scroll grow h-full">
        <header class="w-full sticky inset-x-0 flex pb-[5px] pt-[5px] top-0 bg-white border-b">
            <div class="flex w-full items-center px-2 lg:px-4 gap-2 md:gap-5">
                <a href="" class="shrink-0 lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                    </svg>

                </a>

                <div class="shrink-0">
                    <x-avatar class="h-9 w-9 lg:w-11 lg:h-11" />
                </div>

                <h6 class="font-bold truncate">{{ $selectedConversation->name }}</h6>
            </div>


        </header>
        <main
            class="flex flex-col gap-3 p-2.5 overflow-y-auto flex-grow overscroll-contain overflow-x-hidden w-full my-auto">
            <div @class(['max-w-[85%] gap-2 md:max-w-[78%] flex w-auto relative mt-2'])>
                {{-- avatar --}}
                <div @class(['shrink-0'])>
                    <x-avatar />
                </div>
                {{-- message body --}}
                <div @class([
                    'flex flex-wrap text-[15px] rounded-xl p-2.5 flex flex-col text-black bg-[#f6f6f8fb]',
                    'rounded-bl-none border border-gray-200/20' => false,
                    'rounded-br-none bg-blue-500/80 text-white' => true,
                ])>
                    <p
                        class="whitespace-normal text-white truncate tex-sm md:text-base tracking-wide lg:tracking-normal">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit illo incidunt quo debitis
                        obcaecati natus nostrum rem consequatur, magni reprehenderit quam nihil quia dolorum iste
                        reiciendis itaque culpa illum? Voluptatem?
                    </p>
                    <div class="ml-auto flex gap-2">
                        <p @class(['text-xs', 'text-gray-500' => false, 'text-white' => true])>5 am</p>
                        {{-- status --}}
                        <div>
                            {{-- dibaca --}}
                            <span @class(['text-gray-500'])>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z" />
                                </svg>
                            </span>
                            {{-- <span @class(['text-gray-500'])>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                            </svg>
                        </span> --}}
                        </div>
                    </div>
                </div>

        </main>

        <footer class="shrink-0 z-10 bg-white inset-x-0">
            <div class="p-2 border-t">
                <form method="POST" autocapitalize="off">
                    @csrf
                    <input type="hidden" autocomplete="false" style="display: none">
                    <div class="grid grid-cols-12">
                        <input type="text"autocomplete="off" autofocus placeholder="tulis pesan...." maxlength="1700"
                            class="col-span-10 bg-gray-100 border-0 outline-0 focus:border-0 focus:ring-0 hover:ring-0 rounded-lg focus:outline-none">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                            type="submit">Kirim</button>
                    </div>
                </form>
                @error('body')
                    <p>{{ $message }}</p>
                @enderror

            </div>
        </footer>
    </div>
</div>
