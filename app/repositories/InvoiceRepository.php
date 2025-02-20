<?php

namespace App\Repositories;

use App\Models\Invoice;
use Illuminate\Pagination\LengthAwarePaginator;

class InvoiceRepository
{
    /**
     * Retrieve invoices filtered by status with pagination.
     *
     * @param string $status
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getInvoices(string $status = 'All', int $perPage = 10): LengthAwarePaginator
    {
        $query = Invoice::query();
        if ($status !== 'All') {
            $query->where('status', $status);
        }
        return $query->orderBy('created_at', 'desc')->paginate($perPage);
    }
}
