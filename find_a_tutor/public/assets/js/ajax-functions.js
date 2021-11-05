function getElem(id) {
    return document.getElementById(id);
}

// function filter_dashboard_course() {
//     var action = "{{ url('/tutor/dashboard') }}";
//     var request = new XMLHttpRequest();
//     var csrftoken = document.querySelector('meta[name="csrf-token"]').content;
//     request.open("POST", action);
// request.setRequestHeader('X-CSRF-TOKEN', csrftoken);

//     var course_id = getElem('selected_course');
//     // Retrieving form data
//     var formData = new FormData();
//     formData.set("course_id", course_id);
//     request.send(formData);
//     request.onreadystatechange = function() {
//         if (this.readyState === 4 && this.status === 200) {
//             // var response = this.responseText;
//             var response = JSON.parse(this.responseText);
//             console.log("response: " + response.success);
//         }
//     };
// }

// function save_dashboard_schedule() {

// }

function filter_dashboard_course() {
    var request = new XMLHttpRequest();
    request.open("POST", "route('get_schedule')");
    request.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);

    var course_id = getElem('selected_course').value;
    var formData = new FormData();
    formData.set("course_id", course_id);
    request.send(formData);
    request.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            var response = this.responseText;
            var response = JSON.parse(this.responseText);
            console.log("response: " + response.success);
        }
    };
}