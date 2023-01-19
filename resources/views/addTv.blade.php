<form action="store" method="post">
    @csrf
    <p>
        <label for="">Név</label>
        <input type="text" name="name">
    </p>
    <p>
        <label for="">Méret</label>
        <input type="text" name="size">
    </p>
    <p>
        <label for="">Típus</label>
        <input type="text" name="type">
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>