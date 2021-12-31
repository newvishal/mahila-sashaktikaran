
// function RequiredValidator(Attribute, FieldName) {
//     if(!Attribute) {
//         alert(`Please Enter Your ${FieldName}`);
//         return false
//     }
//     return true;
// }
console.log("ok");

function validate(FormName) {
    var Name = document.getElementById("Name").value;
    var FatherName = document.getElementById("FatherName").value;
    var MobileNo = document.getElementById("MobileNo").value;
    var DOB = document.getElementById("DOB").value;
    var Education = document.getElementById("Education").value;
    var Address = document.getElementById("Address").value;
    var DistrictId = document.getElementById("DistrictId").value;
    var AssemblyId = document.getElementById("AssemblyId").value;

    if(!Name) {
        alert("Please Enter Your Name");
        return false;
    } else {
        if(! /^[a-zA-Z ]{2,30}$/.test(Name)) {
            alert("Name Not Valid")
            return false
        }
    }
    if(!FatherName) {
        alert("Please Enter Your Father Name");
        return false;
    } else {
        if(! /^[a-zA-Z ]{2,30}$/.test(FatherName)) {
            alert("Father Name Not Valid")
            return false
        }
    }
    if(!DOB) {
        alert("Please Enter Your DOB");
        return false;
    }
    if(!Education) {
        alert("Please Select Your Education");
        return false;
    }


    if(!MobileNo) {
        alert("Please Enter Your Mobile No");
        return false;
    } else {
        if(! /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/.test(MobileNo)) {
            alert("Mobile Number Not Valid")
            return false
        }
    }

    if(FormName == "laptop") {
        var NoOfFamilyMembers = document.getElementById("NoOfFamilyMembers").value;
        if(!NoOfFamilyMembers) {
            alert("Please Select Number Of Family Member");
            return false;
        }
    }
    
    if(!AssemblyId) {
        alert("Please Select Your Assembly");
        return false;
    }
    if(!DistrictId) {
        alert("Please Select Your District");
        return false;
    }

    if(!Address) {
        alert("Please Enter Your Address");
        return false;
    }
    
    return true
}


function ValidateVidyut() {
    var Name = document.getElementById("Name").value;
    var FatherName = document.getElementById("FatherName").value;
    var Age = document.getElementById("Age").value;
    var Education = document.getElementById("Education").value;
    var MobileNo = document.getElementById("MobileNo").value;
    var NoOfFamilyMembers = document.getElementById("NoOfFamilyMembers").value;
    var PresentBill = document.getElementById("PresentBill").value;

    if(!Name) {
        alert("Please Enter Your Name");
        return false;
    } else {
        if(! /^[a-zA-Z ]{2,30}$/.test(Name)) {
            alert("Name Not Valid")
            return false
        }
    }
    if(!FatherName) {
        alert("Please Enter Your Father Name");
        return false;
    } else {
        if(! /^[a-zA-Z ]{2,30}$/.test(FatherName)) {
            alert("Father Name Not Valid")
            return false
        }
    }
    if(!Age) {
        alert("Please Enter Your Age");
        return false;
    }
    if(!Education) {
        alert("Please Select Your Education");
        return false;
    }
    if(!MobileNo) {
        alert("Please Enter Your Mobile No");
        return false;
    } else {
        if(! /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/.test(MobileNo)) {
            alert("Mobile Number Not Valid")
            return false
        }
    }
    if(!NoOfFamilyMembers) {
        alert("Please Select Number Of Family Member");
        return false;
    }

    if(!PresentBill) {
        alert("Please Enter Your Present Bill Aprox");
        return false;
    } else {
        if(parseInt(PresentBill) < 0) {
            alert("Please Enter Valid Bill");
            return false;
        }
    }
    
    return true
}

$("select[name='DistrictId']").change(function () {
    var districtID = $(this).val();
    if(districtID) {
        $.ajax({
            url: "getConsitituencyName.php",
            dataType: 'Json',
            data: {'id':districtID},
            success: function(data) {
                $('select[name="AssemblyId"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="AssemblyId"]').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });
    }else{
        $('select[name="AssemblyId"]').empty();
    }
});

const dots = document.querySelectorAll(".dot-container button");
const images = document.querySelectorAll(".image-container img");
let i = 0; // current slide
let j = 4; // total slides
function next(){
    document.getElementById("content" + (i+1)).classList.remove("active");
    i = ( j + i + 1) % j;
    document.getElementById("content" + (i+1)).classList.add("active");
    indicator( i+ 1 );
}
function prev(){
    document.getElementById("content" + (i+1)).classList.remove("active");
    i = (j + i - 1) % j;
    document.getElementById("content" + (i+1)).classList.add("active");
    indicator(i+1);
}
function indicator(num){
    dots.forEach(function(dot){
        dot.style.background = "transparent";
    });
    var bgcolor = "linear-gradient(92.42deg,#ff0000 28.39%,#008000 105.23%)";
    document.querySelector(".dot-container button:nth-child(" + num + ")").style.background = bgcolor;
}
function dot(index){
    images.forEach(function(image){
        image.classList.remove("active");
        document.querySelector(".dot-container button:nth-child(" + index + ")").style.background = "transparent";
    });
    document.getElementById("content" + index).classList.add("active");
    i = index - 1;
    indicator(index);
}
setInterval(function () {next()}, 3000);

