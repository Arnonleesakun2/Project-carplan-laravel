{{-- SectorTable --}}
<div class="p-6 bg-white rounded-xl border space-y-4 shadow-lg">
    <div class="flex justify-between items-center">
        <h3 class="text-xl font-bold uppercase tracking-wide text-gray-800">ภูมิภาค</h3>
        <button onclick="my_sector.showModal()"
            class="bg-gray-800 text-white hover:bg-gray-700 px-4 py-2 rounded-md transition">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>
    <div class="overflow-x-auto no-scrollbar  max-h-[200px]">
        <table class="w-full text-center border-separate border-spacing-y-2" id="tablesector">
            <thead class="bg-gray-100 text-gray-700 sticky top-0 z-10">
                <tr>
                    <th class="px-4 py-3 rounded-l-[7px]">ภาค</th>
                    <th class="px-4 py-3 rounded-r-[7px]">ลบ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sectors as $sector)
                    <tr class="bg-white hover:bg-gray-50 text-gray-800 border-b">
                        <th class="px-4 py-1 rounded-l-[7px] border-l-[1px]">{{ $sector->name }}</th>
                        <th class="px-4 py-1 rounded-r-[7px] border-r-[1px]">
                            <a href="" id="sectordelete" data-id="{{ $sector->id }}">
                                <i class="fa-solid fa-trash hover:scale-125 duration-700"></i>
                            </a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>