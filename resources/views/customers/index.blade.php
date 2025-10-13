<div>
    <div>
        <a href="/customers/create">Create new customer</a>
        <hr>
    </div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    @foreach ($customers as $customer)
    <div>
        <h2><a href={{route('customers.show', $customer->id)}}>{{$customer->username}}</a></h2>
        <p>Email: {{$customer->email}}</p>
        <p>Phone: {{$customer->phone_number}}</p>
    </div>
    @endforeach
</div>
