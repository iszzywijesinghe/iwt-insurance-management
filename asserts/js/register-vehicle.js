function getClamId(id) {
    document.getElementById('clamId').value = id;
    var url = "http://localhost/iwt-insurance-management/views/register-service.php?id="+id+"#id=" + id;
    window.location.href = url;
}