function getClamId(id) {
    document.getElementById('feedback_id').value = id;
    var url = "http://localhost/iwt-insurance-management/views/feedback-management.php?id="+id+"#id=" + id;
    window.location.href = url;
}