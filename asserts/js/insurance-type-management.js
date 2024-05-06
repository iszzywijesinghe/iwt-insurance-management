function getInsuranceTypeId(id) {
    document.getElementById('ins_id').value = id;
    var url = "http://localhost/iwt-insurance-management/views/insurance-type-management.php?id="+id+"#id=" + id;
    window.location.href = url;
}
