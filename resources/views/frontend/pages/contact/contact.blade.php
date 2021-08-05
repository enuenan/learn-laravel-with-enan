<form action="{{ route('form') }}" method="post">
    {{ csrf_field() }}
    <label for="name">Name</label>
    <input type="text" name="name"> <br>
    <label for="name">Email</label>
    <input type="email" name="email"> <br>
    <label for="name">Comment</label>
    <input type="text" name="comment"> <br>
    <button type="submit">Submit</button>
</form>
