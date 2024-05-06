function getCustomerid(id) {
    document.getElementById('cus_id').value = id;
    var url = "http://localhost/iwt-insurance-management/views/customer-management.php?id="+id+"#id=" + id;
    window.location.href = url;
}