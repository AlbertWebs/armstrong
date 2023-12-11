<form method="POST" action={{route('smsAPIV2')}}>
    @csrf
    <input type="submit" value="Send API">
</form>
