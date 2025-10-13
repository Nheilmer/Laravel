<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    @foreach ($customers as $customer)
    <div>
        <h2>{{$customer->username}}</h2>
        <p>Email: {{$customer->email}}</p>
        <p>Phone: {{$customer->phone_number}}</p>
    </div>
    @endforeach
</div>
