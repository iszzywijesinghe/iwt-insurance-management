function getVehicleId(id) {
    document.getElementById('vId').value = id;
    var url = "http://localhost/iwt-insurance-management/views/vehicle-services.php?id="+id+"#id=" + id;
    window.location.href = url;
}