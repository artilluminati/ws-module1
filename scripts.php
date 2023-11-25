<script>
    function hideReg(){
        document.getElementById('reg-form').classList.add('hidden');
        document.getElementById('log-form').classList.remove('hidden');
    }
    function hideLog(){
        document.getElementById('log-form').classList.add('hidden');
        document.getElementById('reg-form').classList.remove('hidden');
    }

    function openMenu(x) {
        x.classList.toggle("change");
        document.getElementById("nav1").classList.toggle("hidden-nav");
    }
</script>