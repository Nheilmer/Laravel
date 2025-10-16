<div>
    <div>
        <a href="/customers">Back to list</a>
        <hr>
        <a href={{ route('customers.edit', $customer->id) }}>Edit Customer</a>
        <hr>
        <form action={{ route('customers.destroy', $customer->id) }} method="POST" onsubmit="return confirm('Are you sure you want to delete this customer?')">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Customer</button>
        </form>
    </div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <h1>Customer Details</h1>
    <hr>
    <div>
        <h2>{{ $customer->username }}</h2>
        <p>Email: {{ $customer->email }}</p>
        <p>First Nane: {{ $customer->first_name }}</p>
        <p>Last Name: {{ $customer->last_name }}</p>
        <p>Date of Birth: {{ $customer->date_of_birth }}</p>
        <p>Address: {{ $customer->address }}</p>
        <p>Phone: {{ $customer->phone_number }}</p>
        <p>Created At: {{ $customer->created_at }}</p>
    </div>
</div>
