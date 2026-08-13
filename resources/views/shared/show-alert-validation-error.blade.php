<script>
    @if ($errors->any())
        $('.alert-danger-top #top-message').find("ul").empty();
        @foreach ($errors->all() as $error)
            $('.alert-danger-top #top-message').find("ul").append('<li>' + '{{ $error }}' + '</li>');
        @endforeach
        $('.alert-danger-top #top-message').css('display', 'block');
    @endif
</script>
