function myFunction(){
    var a = document.getElementById("destination").value;
    var total = 70 * a;

    document.getElementById("total").innerHTML ="BDT " + total.toFixed(2)+"৳" ;
}

function user_check(){
    document.getElementById("y_name").innerHTML="Your Name"
    document.getElementById("driving_license").innerHTML = "";
    document.getElementById("input_address").type = "hidden";
    document.getElementById("ambulance_number").innerHTML = "";
    document.getElementById("input_ambulance").type = "hidden";
}

function hospital_check(){
    document.getElementById("y_name").innerHTML="Hospital"
    document.getElementById("driving_license").innerHTML = "";
    document.getElementById("input_address").type = "hidden";
    document.getElementById("ambulance_number").innerHTML = "";
    document.getElementById("input_ambulance").type = "hidden";
}

function driver_check(){
    document.getElementById("y_name").innerHTML="Hospital";
    document.getElementById("driving_license").innerHTML = "Address";
    document.getElementById("input_address").type = "Address";
    document.getElementById("ambulance_number").innerHTML = "Ambulance Number";
    document.getElementById("input_ambulance").type = "text";

}