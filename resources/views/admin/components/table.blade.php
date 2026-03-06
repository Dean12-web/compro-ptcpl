<div class="bg-white dark:bg-slate-900 rounded-xl border border-primary/10 shadow-sm">
    <div class="hidden md:block overflow-x-auto">

        <table class="w-full text-left">

            <thead class="bg-slate-50 dark:bg-white/5 border-b border-primary/10">

                <tr>

                    @foreach($columns as $column)

                        <th @click="changeSort('{{ $column['key'] }}')"
                            class="px-6 py-4 text-xs font-bold text-slate-500 uppercase cursor-pointer">
                            <div class="flex items-center gap-1">
                                {{ $column['label'] }}

                                <span x-show="sort === '{{ $column['key'] }}'">
                                    <span x-show="direction === 'asc'">↑</span>
                                    <span x-show="direction === 'desc'">↓</span>
                                </span>
                            </div>
                        </th>

                    @endforeach

                </tr>

            </thead>


            <tbody class="divide-y divide-primary/5">

                <template x-for="row in rows" :key="row.id">
                    <tr class="hover:bg-primary/5">
                        @foreach ($columns as $column)
                            <td class="px-6 py-4 text-sm text-slate-700 dark:text-slate-300">
                                <span x-html="row['{{ $column['key'] }}']"></span>
                            </td>
                        @endforeach
                    </tr>
                </template>
                <tr x-show="rows.length === 0">
                    <td colspan="{{ count($columns) }}" class="px-6 py-6 text-center text-slate-400">
                        No data found.
                    </td>
                </tr>

            </tbody>

        </table>

    </div>


    {{-- MOBILE VIEW --}}
    <div class="md:hidden divide-y divide-primary/10">

        <template x-for="row in rows" :key="row.id">
            <div class="p-5 flex flex-col gap-3">
                @foreach ($columns as $column)
                    <div class="flex justify-between text-sm">
                        <span class="text-slate-500">
                            {{ $column['label'] }}
                        </span>
                        <span class="text-slate-700 dark:text-slate-300" x-html="row['{{ $column['key'] }}']">
                        </span>
                    </div>
                @endforeach
            </div>
        </template>

    </div>

</div>