<div class="p-6 bg-white shadow-md rounded-lg h-full w-full flex flex-col gap-2">
    <!-- Top Bar -->
    <div class="flex items-center justify-between bg-white p-4 rounded-lg">
        <!-- Search Bar -->
        <div class="flex items-center w-full max-w-md rounded-lg px-3 py-2 gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
            <input type="text" wire:model="search" placeholder="Search..."
                   class="w-full outline-none bg-transparent focus:outline-none focus:ring-0" />
        </div>

        <!-- Icons Section -->
        <div class="flex items-center gap-4">
            <!-- Feedback Icon -->
            <button class="rounded-full hover:bg-gray-200">
                <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M8 10h.01M12 10h.01M16 10h.01M9 16h6m2 4H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2z" />
                </svg>
            </button>

            <!-- Notification Bell Icon -->
            <button class="rounded-full hover:bg-gray-200 relative">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="gray" class="w-5 h-5">
                    <path fill-rule="evenodd"
                          d="M5.25 9a6.75 6.75 0 0 1 13.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 0 1-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 1 1-7.48 0 24.585 24.585 0 0 1-4.831-1.244.75.75 0 0 1-.298-1.205A8.217 8.217 0 0 0 5.25 9.75V9Zm4.502 8.9a2.25 2.25 0 1 0 4.496 0 25.057 25.057 0 0 1-4.496 0Z"
                          clip-rule="evenodd" />
                </svg>
            </button>

            <!-- Questions Icon -->
            <button class="rounded-full hover:bg-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="gray" class="w-5 h-5">
                    <path fill-rule="evenodd"
                          d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                          clip-rule="evenodd" />
                </svg>
            </button>

            <!-- Profile Icon -->
            <button class="rounded-full hover:bg-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="gray" class="w-5 h-5">
                    <path fill-rule="evenodd"
                          d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                          clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>

    <hr class="border-t border-gray-300 w-full">

    <!-- Header Section -->
    <div class="flex justify-between items-center mt-6">
        <h2 class="text-2xl font-semibold text-gray-800">Invoices</h2>
        <div class="flex gap-2">
            <button class="px-4 py-1 border rounded-md text-gray-700 flex items-center gap-2 shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd"
                          d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836Z"
                          clip-rule="evenodd" />
                </svg>
                Filter
            </button>

            <button class="px-4 py-1 border rounded-md text-gray-700 flex items-center gap-2 shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd"
                          d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z"
                          clip-rule="evenodd" />
                </svg>
                Export
            </button>

            <button class="px-4 py-1 text-white bg-main rounded-md flex items-center gap-2 shadow-md bg-blue-600">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Create Invoice
                <div class="rounded-sm px-2 bg-light">
                    <p class="text-xs">N</p>
                </div>
            </button>
        </div>
    </div>

    <div class="container mx-auto p-4">
        @if (session()->has('error'))
            <div class="mb-4 p-2 bg-red-200 text-red-800 rounded">
                {{ session('error') }}
            </div>
        @endif

        <!-- Tabs with Filtering -->
        <div class="mb-4">
            <ul class="flex space-x-4 border-b">
                @foreach(['All', 'Draft', 'Outstanding', 'Paid'] as $tab)
                    <li>
                        <button wire:click="setActiveTab('{{ $tab }}')"
                                class="px-4 py-2 border-b-2 font-medium transition-colors duration-200
                            {{ $activeTab === $tab ? 'border-blue-600 text-blue-600' : 'border-transparent text-gray-600 hover:text-blue-600' }}">
                            {{ $tab }}
                        </button>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Invoice Table -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Invoice Number</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created Date</th>
                    <th class="px-6 py-3 text-right"><span class="sr-only">Options</span></th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @forelse($invoices as $invoice)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            ${{ number_format($invoice->amount, 2) }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $invoice->invoice_number }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $invoice->customer_email }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                @if($invoice->status === 'Paid')
                                    bg-green-100 text-green-800
                                @elseif($invoice->status === 'Draft')
                                    bg-yellow-100 text-yellow-800
                                @else
                                    bg-red-100 text-red-800
                                @endif">
                                {{ $invoice->status }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $invoice->created_at->format('M d, Y') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <!-- Dropdown using Alpine.js -->
                            <div class="relative" x-data="{ open: false }">
                                <button @click="open = !open" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                                    Options
                                </button>
                                <div x-show="open" @click.away="open = false"
                                     class="absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-md shadow-lg z-10 align-middle">
                                    <p class="block px-4 py-2 text-sm text-gray-500">ACTIONS</p>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Download PDF</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Duplicate Invoice</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Delete Draft</a>
                                    <div class="py-1 flex flex-col gap-2" role="none">
                                        <p class="block px-4 py-2 text-sm text-gray-500">CONNECTIONS</p>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View Customer</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-gray-500">No invoices found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="p-4">
                {{ $invoices->links() }}
            </div>
        </div>
    </div>
</div>
