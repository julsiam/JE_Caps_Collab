var editButton = document.getElementById('editButton');
if (editButton) {
    editButton.addEventListener('click', function () {
        var statusSelect = document.getElementById('status');
        statusSelect.disabled = !statusSelect.disabled;
    });
}
