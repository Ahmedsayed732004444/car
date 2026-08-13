<script>
    @if (session()->has('success'))
        swalToast({
            title: "{{ session('success') }}"
        });
    @endif
    @if (session()->has('error'))
        swalToast({
            title: "{{ session('error') }}",
            icon: "error"
        });
    @endif
</script>
