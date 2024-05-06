function getClamId(id) {
    document.getElementById('claim_id').value = id;
    var url = "http://localhost/iwt-insurance-management/views/request-claim.php?id="+id+"#id=" + id;
    window.location.href = url;
}