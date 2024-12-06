<script>
    document.addEventListener('DOMContentLoaded', function () {
        const elements = document.querySelectorAll('a[href*="tel"]');
        elements.forEach(function (element) {
            element.removeEventListener("click", handleClick);
            element.addEventListener("click", handleClick, {once: true});
        });
        function handleClick(e) {
            e.preventDefault();
            console.log(this.href.split(':')[1])
            console.log(window.location.href)
            axios.post('{{ url('/cta-records') }}', {
                mobile: this.href.split(':')[1],
                url: window.location.href
            }).then(() => {
                window.location.href = this.getAttribute('href');
            });
        }
    });
</script>
