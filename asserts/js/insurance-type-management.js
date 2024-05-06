function getInsuranceTypeId(id) {
    console.log("hello world")
    document.getElementById('typeId').value = id;
    var url = "http://localhost/iwt-insurance-management/views/insurance-type-management.php?id="+id+"#id=" + id;
    window.location.href = url;
}
