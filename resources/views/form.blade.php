<form action="/submit-form" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter your name">
    <button type="submit">Submit</button>
</form>