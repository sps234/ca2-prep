<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <h1> login </h1>
    <form action="/login" method="POST">
        @csrf
        <input name="name" type="text" placeholder="Name">
        <button> Submit </button>
    </form>
</div>
