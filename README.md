# Invoice Task

This repository contains a invoice dashboard built with **Laravel**, **Livewire**, **Tailwind CSS**, and **Alpine.js**. 

---

## Table of Contents
1. [Overview](#overview)  
2. [Key Features](#key-features)  
3. [Prerequisites](#prerequisites)  
4. [Installation & Setup](#installation--setup)  
5. [Project Structure](#project-structure)  
6. [Technical Details](#technical-details)  
7. [Usage](#usage)  
8. [Further Enhancements](#further-enhancements)  
9. [License](#license)

---

## Overview

This project replicates a test task of the **Invoice Dashboard**, featuring:

- A **search bar** and top navigation icons (Feedback, Notifications, Help, Profile).  
- **Filter**, **Export**, and **Create Invoice** buttons.  
- **Tabs** for dynamic filtering: All, Draft, Outstanding, Paid.  
- A **table** displaying invoices, with each row showing invoice details (amount, number, email, status, date).  
- An **Alpine.js** dropdown menu for actions.  
- **Pagination** for managing large datasets.  
- **Live search** functionality to filter invoices by invoice number or customer email.


---

## Key Features

1. **Repository Pattern**  
   - All data access logic resides in `InvoiceRepository` for cleaner, testable code.

2. **Clean Architecture**  
   - A dedicated Livewire component, `InvoiceDashboard`, manages UI state.  
   - A well-defined `Invoice` model handles database records.  

3. **SOLID Principles**  
   - **Single Responsibility**: Each class has one job (e.g., the repository queries data, the component handles UI, etc.).  
   - **Dependency Injection**: The repository is injected into the component, promoting flexibility and testability.  

4. **Type Hinting & Error Handling**  
   - Methods and properties are type hinted to catch errors early.  
   - Exceptions are caught in the Livewire component to gracefully handle failures.  

5. **Pagination & Search**  
   - Large datasets are paginated.  
   - Users can filter results via search input or status tabs.  

6. **Tailwind & Alpine**  
   - **Tailwind CSS** for a pixel-perfect UI matching the Stripe design.  
   - **Alpine.js** for toggling dropdown menus without heavy JavaScript frameworks.  

---

## Prerequisites

- **PHP** ^8.0  
- **Composer** ^2.0  
- **Node.js** ^14 (or newer) & **NPM** (for Tailwind compilation)  
- **MySQL** / **PostgreSQL** / **SQLite** / any supported DB  
- **Laravel** ^9 or ^10

---

## Installation & Setup

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/faisal-aali/invoice-task.git
   cd invoice-task
   ```

2. **Install PHP Dependencies:**

   ```bash
   composer install
   ```

3. **Install Frontend Dependencies:**

   ```bash
   npm install
   npm run dev
   ```
   This compiles **Tailwind CSS** so the design displays correctly.

4. **Environment Configuration:**

    - Copy `.env.example` to `.env`.
    - Update database credentials in your `.env` file:
      ```
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=invoice_task
      DB_USERNAME=root
      DB_PASSWORD=secret
      ```

5. **Run Migrations & Seeders:**

   ```bash
   php artisan migrate
   php artisan db:seed
   ```
   This creates the `invoices` table and populates it with sample data.

6. **Serve the Application:**

   ```bash
   php artisan serve
   ```
   By default, your app is now available at [http://127.0.0.1:8000](http://127.0.0.1:8000).

---

## Project Structure

A high-level overview of the files relevant to this dashboard:

```
app/
 ├─ Http/
 │   └─ Livewire/
 │       └─ InvoiceDashboard.php    # Livewire component controlling UI & state
 ├─ Models/
 │   └─ Invoice.php                 # Eloquent model for invoices
 └─ Repositories/
     └─ InvoiceRepository.php       # Data access layer for invoice records

resources/
 ├─ views/
 │   ├─ components/
 │   |   ├─ layouts/
 │   │      └─ app.blade.php           # Main layout with Tailwind, Livewire, Alpine
 │   └─ livewire/
 │       └─ invoice-dashboard.blade.php  # Replicates the Stripe-like UI

routes/
 └─ web.php                         # Defines route to render the InvoiceDashboard
```

---

## Technical Details

### 1. Repository Pattern

Instead of placing queries in the component, the `InvoiceRepository` handles all data retrieval. It offers a `getInvoices()` method that accepts a status filter, search term, and pagination limit. This pattern follows **SOLID** by keeping data logic separate from the Livewire component.

### 2. Livewire Component

`InvoiceDashboard` orchestrates the UI:

- **Properties**: `$activeTab` (All, Draft, etc.) and `$search` for the search input.
- **Methods**:
    - `mount()` & `hydrate()` to inject/re-inject the repository.
    - `setActiveTab()` to update the tab state.
    - `render()` to pass filtered data to the Blade view.

### 3. Blade Templates & Tailwind

- **`app.blade.php`**: A layout that includes the compiled Tailwind CSS, Livewire scripts/styles, and Alpine.js.
- **`invoice-dashboard.blade.php`**: Implements the design—top bar, search input, tabs, table, and dropdown.

### 4. Error Handling & Type Hinting

- The component catches exceptions and shows an error message via a **session flash**.
- **Nullable** typed properties (`?InvoiceRepository`) are used to avoid Livewire serialization conflicts.

### 5. Pagination & Search

- **Pagination**: Implemented via `WithPagination`.
- **Search**: Filters the `invoice_number` or `customer_email` fields using a `where()` clause in the repository.

---

## Usage

1. **Navigate to the Home Page**  
   Once the server is running, go to [http://127.0.0.1:8000](http://127.0.0.1:8000).

2. **Try the Search**
    - Type a partial invoice number or email into the search bar to see filtered results in real time.

3. **Switch Tabs**
    - Click **Draft**, **Outstanding**, **Paid**, or **All** to filter the invoices by status.

4. **Check the Dropdown**
    - Click the **Options** button in any table row to open the Alpine.js dropdown.

5. **Pagination**
    - If you have more than 10 invoices (you can do it by running seeders twice), you’ll see pagination links at the bottom.

---

## Further Enhancements

- **Advanced Filtering**: Add date ranges or status combinations.
- **Role-Based Access Control**: Restrict certain actions (e.g., deletion) to admins.
- **Invoicing Logic**: Generate and download PDF invoices.
- **Validation**: Enforce rules when creating or editing invoices.
- **Testing**: Add unit and feature tests for the repository and Livewire component.

---

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---
