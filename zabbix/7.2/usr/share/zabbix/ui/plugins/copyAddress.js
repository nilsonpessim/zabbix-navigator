(function () {
    $(function () {
        const modal = new bootstrap.Modal(document.getElementById('copyIP'));
        modal.show();

        $('#copyAddress').on('click', function () {
            const ip = $('#ipAddress').val();

            if (navigator.clipboard) {
                navigator.clipboard.writeText(ip).then(function () {
                    showAlert(ip);
                }).catch(function () {
                    fallbackCopy(ip);
                });
            } else {
                fallbackCopy(ip);
            }
        });

        function fallbackCopy(ip) {
            const input = document.getElementById('ipAddress');
            input.select();
            document.execCommand('copy');
            showAlert(ip);
        }

        function showAlert(ip) {
            $('#textAlert').html(`
                <div class="alert alert-success alert-dismissible fade show text-center mt-2" role="alert">
                    <i class="fa-solid fa-check"></i> O IP <strong>${ip}</strong> foi copiado.
                </div>
            `);
            setTimeout(() => {
                window.location.replace("zabbix.php?action=map.view");
            }, 3000);
        }
    });
})();